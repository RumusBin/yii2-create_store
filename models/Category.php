<?php
/**
 * Created by PhpStorm.
 * User: rumus
 * Date: 03.04.17
 * Time: 15:46
 */

namespace app\models;
use yii\db\ActiveRecord;


class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'category';
    }

    public function getProduct(){

        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }
}