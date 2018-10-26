<?php
/**
 * Created by PhpStorm.
 * User: liyifei
 * Date: 2018/10/26
 * Time: 上午11:53
 */

require 'common.php';

$driver = $sdk->driver('geocoder', []);

print_r($driver->reverse(new \liyifei\bmap\core\param\geocoder\ReverseQuery([
    'location' => '35.658651,139.745415',
])));