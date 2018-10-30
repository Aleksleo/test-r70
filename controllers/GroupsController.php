<?php
/**
 * Created by PhpStorm.
 * User: Aleksey
 * Date: 10/30/2018
 * Time: 23:32
 */

namespace app\controllers;

use Yii;
use yii\data\Pagination;
use yii\web\Controller;
use app\models\Groups;
use yii\web\NotFoundHttpException;

class GroupsController extends Controller
{
    /**
     * Displays page with groups, it also uses as home page
     *
     * @return string
     */
    public function actionIndex()
    {
        $query = Groups::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count()
        ]);

        $groups = $query->orderBy('title')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'groups' => $groups,
            'pagination' => $pagination
        ]);
    }

    public function actionView($id)
    {
        $model = Groups::findOne($id);

        if($model === null) {
            throw new NotFoundHttpException;
        }

        return $this->render('view', [
            'model' => $model
        ]);
    }

    public function actionCreate()
    {
        $model = new Groups;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model
            ]);
        }
    }

}