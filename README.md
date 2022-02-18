<h1 align="center"> 河马付 </h1>

<p align="center"> 河马付代理商 SDK</p>


## 安装

```shell
$ composer require stone009/hmpay-agent -vvv
```

## 配置
在使用本扩展前，你需要先联系杉德支付开通河马付代理商。

## 使用

```php
use Stone009\HmpayAgent\Agent;

$config = [
    'app_id' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxx',
    'private_key' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxx',
    ...
];
$agent = new Agent($config);

//代理商进件商户
$params = [
    'merchant_type' => 'GENERAL_MERCHANT',
    ...
];
$response = $agent->merchant->postData('merchant.create', $params);
```


## 参考
- [河马付接入指南](https://sand.yuque.com/docs/share/f5840d84-08a3-409d-8ab9-854d30562660)

## License

MIT