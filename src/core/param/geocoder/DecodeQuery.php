<?php
/**
 * Created by PhpStorm.
 * User: liyifei
 * Date: 2018/10/26
 * Time: 下午3:19
 */

namespace liyifei\bmap\core\param\geocoder;


use yii\base\BaseObject;

class DecodeQuery extends BaseObject
{

    public $address;

    public $city;

    public $ret_coordtype;

    public $output = 'json';

    public $callback = '';

}