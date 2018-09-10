<?php
/**
 * Created by PhpStorm.
 * User: owonnarr
 * Date: 10.09.18
 * Time: 10:43
 */
use yii\helpers\Html;

$this->title = 'My Page';
$this->params['breadcrumbs'][] = $this->title;

?>


<div class="site-about">
<h1><?= Html::encode($this->title) ?></h1>

<p>
   Привет, моя страница!!!
</p>

<code><?= __FILE__ ?></code>
</div>

