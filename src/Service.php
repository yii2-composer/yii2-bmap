<?php
/**
 * Created by PhpStorm.
 * User: liyifei
 * Date: 2018/10/26
 * Time: 上午11:20
 */

namespace liyifei\bmap;


use yii\base\Component;
use yii\base\NotSupportedException;
use yii;

class Service extends Component
{
    public $ak;

    public $classMap = [
        'geocoder' => 'liyifei\bmap\driver\Geocoder'
    ];

    public function driver($api, $extra = [])
    {
        if (!$api || !isset($this->classMap[$api])) {
            throw new NotSupportedException();
        }

        $config = [
            'ak' => $this->ak,
        ];

        if ($extra) {
            $config = array_merge($config, $extra);
        }

        $config['class'] = $this->classMap[$api];

        return Yii::createObject($config);
    }
}