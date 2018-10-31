<?php
/**
 * Created by PhpStorm.
 * User: Aleksey
 * Date: 10/30/2018
 * Time: 23:35
 */


/**
 * @var $this \app\controllers\GroupsController
 */

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Группы';
?>

<div class="site-index">
    <div class="body-content">

        <div class="row">
            <div class="col-lg-10">
                <h2><?= Html::encode($this->title) ?>
                    <small> :: <?= Html::a('Студенты', ['/students']) ?></small>
                </h2>
                <div class="col-lg-1 col-lg-offset-10">
                    <?= Html::a('Добавить группу', ['/groups/create'], ['class' => 'btn btn-primary']) ?>
                </div>
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2">Группа</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($groups as $g) {
                        echo $this->render('_item', array('data' => $g));
                    }?>
                    </tbody>
                </table>
                <?= LinkPager::widget(['pagination' => $pagination]) ?>
            </div>
        </div>
    </div>
</div>