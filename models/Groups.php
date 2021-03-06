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
 * @property int $id
 * @property string $title
 */

class Groups extends ActiveRecord
{

    public function attributes()
    {
        return [
            'id',
            'title'
        ];
    }

    public function getStudents()
    {
        return $this->hasMany(Students::class, ['group_id' => 'id']);
    }

    public function attributeLabels()
    {
        return [
            'title' => 'Номер группы'
        ];
    }

    public function beforeDelete()
    {
        Students::updateAll(['group_id' => ''], 'group_id = :id', [':id' => $this->id]);

        return parent::beforeDelete();
    }

    public function rules()
    {
        return [
            ['title', 'required', 'message' => 'Номер группы не может быть пустым'],
            ['title', 'unique', 'message' => "Номер группы \"{value}\" уже существует"],
        ];
    }

}