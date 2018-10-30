<?php
/**
 * Created by PhpStorm.
 * User: Aleksey
 * Date: 10/31/2018
 * Time: 00:05
 */

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{groups}}".
 *
 * The followings are the available columns in table '{{groups}}':
 * @property string $title
 */

class Groups extends ActiveRecord
{

    public function rules()
    {
        return [
            ['title', 'required', 'message' => 'Номер группы не может быть пустым'],
            ['title', 'unique'],
            ['title', 'length', 'max' => 10],
        ];
    }

}