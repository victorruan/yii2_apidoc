<?php
namespace Route\controllers;
use Route\models\Route;
use yii\web\Controller;

class ApiController extends Controller {
    public function actionIndex()
    {
        \Yii::$app->response->format = 'html';

        $model = new Route();
        $model->ignore = $this->module->ignore;
        $show_model = $this->module->show_modules;
        $routes =  $model->getRoutes($show_model);
//        unset($routes['/*']);
//        foreach ($routes as $key =>  &$route) {
//            if(preg_match('#^/route|backend|gii|yii2images|debug/#',$key,$m)){
//                unset($routes[$key]);
//            }
//        }
//        var_dump($routes);exit;
        $routes = array_reverse($routes);
        return $this->renderPartial('index',[
            'routes'=>$routes
        ]);
    }
}