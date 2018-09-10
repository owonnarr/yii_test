<?php
/**
 * Created by PhpStorm.
 * User: owonnarr
 * Date: 10.09.18
 * Time: 11:15
 */
use yii\helpers\Html;

$this->title = 'Post Page';
$this->params['breadcrumbs'][] = $this->title;

?>


<div class="site-about">
    <h1><?= Html::encode($hello) ?></h1>

    <p>
        Привет, моя страница!!!
    </p>

    <ul class="list-group">
        <?php foreach ($names as $name): ?>
        <li class="list-group-item"><?= Html::encode($name) ?></li>
        <?php endforeach ?>
    </ul>

    <code><?= __FILE__ ?></code>
</div>

