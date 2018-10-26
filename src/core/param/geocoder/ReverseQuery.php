<?php
/**
 * Created by PhpStorm.
 * User: liyifei
 * Date: 2018/10/26
 * Time: 上午11:32
 */

namespace liyifei\bmap\core\param\geocoder;


use yii\base\BaseObject;

class ReverseQuery extends BaseObject
{
    public $location;

    public $coordtype = 'bd09ll';

    public $ret_coordtype = 'bd09ll';

    public $pois = 0;

    public $radius = 1000;

    public $output = 'json';

    public $callback = '';

    public $language = 'zh-CN';
}