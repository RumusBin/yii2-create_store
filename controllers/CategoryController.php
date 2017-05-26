<?php


namespace app\controllers;

use app\models\Product;
use app\models\Category;
use yii\data\Pagination;
use Yii;

class CategoryController extends AppController
{
    public function actionIndex(){
        $hits = Product::find()->where(['hit' => '1'])->limit('6')->all();
        //debug($hits);
        $this->setMeta('My site on Yii2 E-Shopper!');
       return $this->render('index', compact('hits'));
    }
    public function actionView($id){
        //$id = Yii::$app->request->get('id');
        
        $category = Category::findOne($id);
        
        if(empty($category)){
        throw new \yii\web\HttpException(404, 'Данная категория более не доступна на сайте. Мы уверенны, в списке других категорий Вы сможете подобрать подобные товары!');}
        

       // $products = Product::find()->where(['category_id'=>$id])->all();
        
        $query = Product::find()->where(['category_id'=>$id]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize'=>3, 'forcePageParam'=>false, 'pageSizeParam'=>false]);


        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        $category = Category::findOne($id);
        $this->setMeta('My-E-Shopper | '.$category->name, $category->keywords, $category->description);
        return $this->render('view', compact('products', 'pages', 'category'));
    }
    public function actionSearch(){
        $q = trim(Yii::$app->request->get('q'));
        if(!$q)
            return $this->render('search');
        
        $query = Product::find()->where(['like', 'name', $q]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize'=>3, 'forcePageParam'=>false, 'pageSizeParam'=>false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('search', compact('products', 'pages', 'q'));
        
    }

}