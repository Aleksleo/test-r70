<?php
/**
 * Created by PhpStorm.
 * User: Aleksey
 * Date: 10/31/2018
 * Time: 00:13
 */

use yii\helpers\Html;

echo '<tr>';
    echo '<td>' . Html::encode("{$data->title}") . '</td>';
    echo '<td>';
    echo Html::a('Ред.', ['/groups/view/' . $data->id]) . ' ' . Html::a('Удал.', ['/groups/delete/' . $data->id]);
    echo '</td>';
echo '</tr>';
