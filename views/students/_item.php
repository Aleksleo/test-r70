<?php
/**
 * Created by PhpStorm.
 * User: Aleksey
 * Date: 10/31/2018
 * Time: 00:13
 */

use yii\helpers\Html;

echo '<tr>';
    echo '<td>' . Html::encode("{$data->lastname}") . ' ' . Html::encode("{$data->firstname}") . ' ' . Html::encode("{$data->middlename}") . '</td>';
    echo '<td>' . Html::encode("{$data->groups->title}") . '</td>';
    echo '<td>';
    echo Html::a('Ред.', ['/students/view/' . $data->id]) . ' ' . Html::a('Удал.', ['/students/delete/' . $data->id]);
    echo '</td>';
echo '</tr>';
