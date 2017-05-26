<?php
/**
 * Created by PhpStorm.
 * User: rumus
 * Date: 21.04.17
 * Time: 13:26
 */

namespace app\controllers;
use app\models\Product;
use app\models\Category;
use Yii;


class ProductController extends AppController
{
    public function actionView($id){
       //$id = Yii::$app->request->get('id');
       
        $product = Product::findOne($id);
        if(empty($product))
            throw new \yii\web\HttpException(404, 'Данный товар более не доступен. Мы уверенны, Вы сможете подобрать другие подобные товары из ассортимента нашего магазина!');
        //debug($product);

        return $this->render('view', compact('product'));
    }
}