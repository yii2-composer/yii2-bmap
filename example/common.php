<?php
/**
 * Created by PhpStorm.
 * User: liyifei
 * Date: 2018/10/26
 * Time: 上午11:49
 */

require '../vendor/autoload.php';

require_once(dirname(__FILE__) . '/../vendor/yiisoft/yii2/Yii.php');
@(Yii::$app->charset = 'UTF-8');

$sdk = new \liyifei\bmap\Service([
    'ak' => '415167759dc5861ddbbd14154f760c7e',
]);