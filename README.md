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