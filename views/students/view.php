<?php
/**
 * Created by PhpStorm.
 * User: Aleksey
 * Date: 10/31/2018
 * Time: 01:18
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \yii\helpers\ArrayHelper;

($model->isNewRecord) ? $this->title = 'Добавление студента' : $this->title = 'Редактирование студента';
?>

<div class="site-index">
    <div class="body-content">

        <div class="row">
            <div class="col-lg-5">
                <h2><?= Html::encode($this->title) ?></h2>
                <?php $form = ActiveForm::begin(); ?>
                <?= $form->field($model, 'lastname') ?>
                <?= $form->field($model, 'firstname') ?>
                <?= $form->field($model, 'middlename') ?>
                <?= $form->field($model, 'group_id')
                    ->dropDownList(ArrayHelper::map($groups, 'id', 'title')) ?>
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Отмена', ['/students/index'], ['class' => 'btn btn-default']) ?>
                <?php if(!$model->isNewRecord) { echo Html::a('Удалить', ['/students/delete/' . $model->id], ['class' => 'btn btn-danger']);} ?>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
