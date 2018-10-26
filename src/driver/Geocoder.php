<?php
/**
 * Created by PhpStorm.
 * User: liyifei
 * Date: 2018/10/26
 * Time: 上午11:24
 */

namespace liyifei\bmap\driver;


use liyifei\bmap\core\Driver;
use liyifei\bmap\core\param\geocoder\DecodeQuery;
use liyifei\bmap\core\param\geocoder\ReverseQuery;
use yii\helpers\ArrayHelper;

class Geocoder extends Driver
{
    public $path = '/geocoder/v2/';

    public function reverse(ReverseQuery $query)
    {
        $data = $this->request($this->path, 'GET', ArrayHelper::toArray($query), null);
        return $data;
    }

    public function decode(DecodeQuery $query)
    {
        $data = $this->request($this->path, 'GET', ArrayHelper::toArray($query), null);
        return $data;
    }
}