<?php
/**
 * Created by PhpStorm.
 * User: rumus
 * Date: 12.04.17
 * Time: 12:31
 */

namespace app\controllers;
use yii\web\Controller;


class AppController extends Controller
{
    public function setMeta($title = null, $keywords = null, $description = null)
    {
        $this->view->title = $title;
        $this->view->registerMetaTag(['name'=>'keywords', 'content'=>"$keywords"]);
        $this->view->registerMetaTag(['name'=>'description', 'content'=>"$description"]);

    }
}