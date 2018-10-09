
<?php
require "vendor/autoload.php"; //载入sdk的自动加载文件
define('SITE_URL', 'http://localhost/paypal'); //网站url自行定义  如果是本地是 localhost/后面的看你自己的代码位置pay.php的位置 写到文件夹的位置就可以
//创建支付对象实例
$paypal = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AXjgnHIlYc1KN3sqSYO23-p99aRMrfI4KvPePlfm92ooWpDp3tUY3GERc4yClCQKGX7gnrYTnVYB5q76',
        'EEbXItibov1b7gEPMnuZNO26mTt-JUfZ2YGMSTHX2akjcWDkZge0NdgVhZXLLfDpZwPKQcF0rV2S-PxT'
    )
);