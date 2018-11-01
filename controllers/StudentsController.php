<?php
/**
 * Created by PhpStorm.
 * User: Aleksey
 * Date: 10/30/2018
 * Time: 23:32
 */

namespace app\controllers;

use app\models\Groups;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;
use app\models\Students;
use yii\web\NotFoundHttpException;

class StudentsController extends Controller
{
    /**
     * Displays page with student, related to groups
     *
     * @return string
     */
    public function actionIndex()
    {
        $query = Students::find()->with('groups');

        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count()
        ]);

        $students = $query->joinWith('groups')
            ->orderBy('tbl_groups.title')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'students' => $students,
            'pagination' => $pagination
        ]);
    }

    public function actionView($id)
    {
        $model = Students::find()->with('groups')->where(['id' => $id])->one();
        $groups = Groups::find()->all();

        if($model === null) {
            throw new NotFoundHttpException;
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['students/index']);
        } else {
            return $this->render('view', [
                'model' => $model,
                'groups' => $groups
            ]);
        }
    }

    public function actionCreate()
    {
        $model = new Students();
        $groups = Groups::find()->all();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['students/index']);
        } else {
            return $this->render('view', [
                'model' => $model,
                'groups' => $groups
            ]);
        }
    }

    public function actionDelete($id)
    {
        $model = Students::findOne($id);

        if($model === null) {
            throw new NotFoundHttpException;
        }

        if ($model->delete()) {
            return $this->redirect(['students/index']);
        }
    }

}