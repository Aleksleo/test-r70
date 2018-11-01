<?php
/**
 * Created by PhpStorm.
 * User: Aleksey
 * Date: 10/30/2018
 * Time: 23:35
 */


/**
 * @var $this \app\controllers\StudentsController
 */

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Студенты';
?>

<div class="site-index">
    <div class="body-content">

        <div class="row">
            <div class="col-lg-10">
                <h2>
                <small><?= Html::a('Группы', ['/groups']) ?> :: </small>
                <?= Html::encode($this->title) ?>
                </h2>
                <div class="col-lg-1 col-lg-offset-10">
                    <?= Html::a('Добавить студента', ['/students/create'], ['class' => 'btn btn-primary']) ?>
                </div>
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th scope="col" colspan="1">ФИО</th>
                            <th scope="col" colspan="2">Группа</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($students as $s) {
                        echo $this->render('_item', array('data' => $s));
                    }?>
                    </tbody>
                </table>
                <?= LinkPager::widget(['pagination' => $pagination]) ?>
            </div>
        </div>
    </div>
</div>