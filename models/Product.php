<?php
/**
 * Created by PhpStorm.
 * User: rumus
 * Date: 03.04.17
 * Time: 15:53
 */

namespace app\models;
use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public static function tableName()
    {
        return 'product';
    }

    public function getCategory(){

        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}