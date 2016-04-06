<?php
namespace backend\controllers;

use Yii;
// use yii\filters\AccessControl;
use yii\web\Controller;
// use common\models\LoginForm;
// use yii\filters\VerbFilter;

/**
 * article controller
 * @author sun <7795346@qq.com>
 */
class ArticleController extends Controller
{
    public $layout = 'body';
    /**
     * article controller
     * @return string
     */
    public function actionIndex()
    {
        
        return $this->render('index');
    }
    
    public function actionCategory(){
        return $this->render('category');
    }
    
}
