# yii2_apidoc
用配置生成接口文档



```php
'modules' => [
        'route'=>[
            'class'=>'Route\Module',
            'ignore'=>['api'],
        ],
    ]
```

```php
'modules' => [
        'route'=>[
            'class'=>'Route\Module',
            'ignore'=>['api'],
            'show_modules'=>'api'
        ],
    ]
```
```php
 /**
     * api文档接口怎么生成？
     * @param string $version api版本
     * @param string $sign 签名
     * @param string $page 用于分页 最小是1
     * @desc 这个是描述哦
     * @method POST
     * @return string msg 消息解释
     * @return int code 0表示正确
     */
    public function actionIndex(){
    }

```

open http://path/to/route/api