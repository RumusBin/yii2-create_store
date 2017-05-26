<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $name;
?>

<div class="container text-center">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="logo-404">
        <a href="<?= Url::home()?>"><?= Html::img('@web/images/home/logo.png', ['alt'=>'logo E-Shopper'])?></a>
    </div>
    <div class="content-404">

        <?= Html::img('@web/images/404/404.png', ['alt'=>'not found'])?>
        <h2><b>Очень жаль!</b> <?= nl2br(Html::encode($message)) ?></h2>

        <h3><a href="<?= Url::home()?>">Вернуться на главную страницу магазина</a></h3>
    </div>
</div>
