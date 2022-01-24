<?php


/*$db = new PDO('mysql:host=localhost;dbname=test', 'root', 'root123456');

try {

    foreach ($db->query('select * from test') as $row) {

        print_r($row);

    }

    $db = null; //关闭数据库

} catch (PDOException $e) {

    echo $e->getMessage();

}*/


//实例化redis对象
$redis = new redis();
//连接redis,第一个参数是redis服务的IP127.0.0.1是自己的,6379是端口号
$redis->connect('127.0.0.1', 6379);
echo $redis->get('name');
