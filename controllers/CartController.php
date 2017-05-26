<?php
/**
 * Created by PhpStorm.
 * User: rumus
 * Date: 26.05.17
 * Time: 15:24
 */

namespace app\controllers;


use app\models\Cart;
use yii\helpers\Url;
use yii\web\Controller;
use app\models\Product;
use Yii;
use yii\web\Request;

class CartController extends Controller
{
    public function actionAdd(){
        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);
        if(empty($product)) return false;
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->addToCart($product);
    }
}