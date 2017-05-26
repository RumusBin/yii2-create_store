<?php
/**
 * Created by PhpStorm.
 * User: rumus
 * Date: 26.05.17
 * Time: 15:38
 */

namespace app\models;
use yii\db\ActiveRecord;


class Cart extends ActiveRecord
{
    public function addToCart($product, $qty = 1)
    {
        echo 'Worked';
    }
}