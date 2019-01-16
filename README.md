# 百度 AI 开放平台 php-sdk
> 支持 composer

## 要求
requirements
* composer
* php >= 7.1
* ext-json >= 1.0

## 安装
install
```bash
$ composer require qbhy/baidu-aip:dev-master
```

## 使用
usage

```php
require 'vendor/autoload.php';

$config = [
    'debug'      => true,
    'app_id'     => 'your app id',
    'api_key'    => 'your api key',
    'secret_key' => 'your secret key',
];

$aip = new \Qbhy\BaiduAIP\BaiduAIP($config);

var_dump(json_encode($aip->image_censor->antiSpam('测试')));
```

[qbhy/baidu-aip](https://github.com/qbhy/baidu-aip-sdk)  
96qbhy@gmail.com
