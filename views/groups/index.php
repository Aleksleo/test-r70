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

use yii\widgets\LinkPager;

$this->title = 'Группы';
?>

<div class="site-index">
    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2 class="">Группы</h2>

                <table class="table">
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