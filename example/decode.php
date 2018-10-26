<?php
/**
 * Created by PhpStorm.
 * User: liyifei
 * Date: 2018/10/26
 * Time: 下午3:22
 */

require_once 'common.php';

$driver = $sdk->driver('geocoder', []);

print_r($driver->decode(new \liyifei\bmap\core\param\geocoder\DecodeQuery([
    'address' => '江苏省常州市太湖东路9-1号',
])));