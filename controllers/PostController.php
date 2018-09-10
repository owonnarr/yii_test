<?php
/**
 * Created by PhpStorm.
 * User: owonnarr
 * Date: 10.09.18
 * Time: 11:07
 */

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class PostController extends Controller
{
    public function actionIndex()
    {
        $hello = 'Это первый текст';
        $names = [
          'Ivanov',
          'Helga',
          'Wats Up',
          'Trader',
        ];

        return $this->render('index', [
            'hello' => $hello,
            'names' => $names,
        ]);

    }

    public function actionList()
    {
        return $this->render('list');
    }

}