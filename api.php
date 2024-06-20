<?php

namespace Tqdev\PhpCrudApi;

use Tqdev\PhpCrudApi\Api;
use Tqdev\PhpCrudApi\Config\Config;
use Tqdev\PhpCrudApi\RequestFactory;
use Tqdev\PhpCrudApi\ResponseUtils;

require 'api.include.php';

$config = new Config([
     'driver' => 'pgsql',
     'address' => 'xxxxx.com',
     'port' => '5432',
     'username' => 'xxxx',
     'password' => 'xxxx',
     'database' => 'postgres',
     'debug' => true,
     'dbAuth.usersTable' => 'users',
    'dbAuth.usernameColumn'=> 'name',
    'dbAuth.passwordColumn' => 'password',
    'dbAuth.returnedColumns' => 'id,name,password',
    'dbAuth.registerUser' => '1',
    'dbAuth.passwordLength' => '4',
     'middlewares'=>'dbAuth'
]);
$request = RequestFactory::fromGlobals();
$api = new Api($config);
$response = $api->handle($request);
ResponseUtils::output($response);

//file_put_contents('request.log',RequestUtils::toString($request)."===\n",FILE_APPEND);
//file_put_contents('request.log',ResponseUtils::toString($response)."===\n",FILE_APPEND);
