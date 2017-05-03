<?php

namespace Route;

class Module extends \yii\base\Module
{

    public $ignore = [];
    public $show_modules = null;
    public $controllerNamespace = 'Route\controllers';

    public function init()
    {
        parent::init();
    }
}
