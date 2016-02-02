<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

/**
 * Site controller
 */
class ArticleController extends Controller
{
    /**
     * article controller
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    
}
