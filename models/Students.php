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
 * This is the model class for table "{{students}}".
 *
 * The followings are the available columns in table '{{students}}':
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $middlename
 * @property int $group_id
 */

class Students extends ActiveRecord
{

    public function attributes()
    {
        return [
            'id',
            'firstname',
            'lastname',
            'middlename',
            'group_id'
        ];
    }

    public function getGroups()
    {
        return $this->hasOne(Groups::class, ['id' => 'group_id']);
    }

    public function attributeLabels()
    {
        return [
            'firstname' => 'Имя',
            'lastname' => 'Фамилия',
            'middlename' => 'Отчество',
            'group_id' => 'Группа'
        ];
    }

    public function rules()
    {
        return [
            [['firstname', 'lastname', 'middlename', 'group_id'], 'required', 'message' => "Поле \"{attribute}\" не может быть пустым"],
        ];
    }

}