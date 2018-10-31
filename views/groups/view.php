<?php
/**
 * Created by PhpStorm.
 * User: Aleksey
 * Date: 10/31/2018
 * Time: 01:18
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

($model->isNewRecord) ? $this->title = 'Создание группы' : $this->title = 'Изменение группы';
?>

<div class="site-index">
    <div class="body-content">

        <div class="row">
            <div class="col-lg-5">
                <h2><?= Html::encode($this->title) ?></h2>
                <?php $form = ActiveForm::begin(); ?>
                <?= $form->field($model, 'title') ?>
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Отмена', ['/groups/index'], ['class' => 'btn btn-default']) ?>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
