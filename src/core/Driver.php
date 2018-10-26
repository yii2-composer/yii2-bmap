<?php
/**
 * Created by PhpStorm.
 * User: liyifei
 * Date: 2018/10/26
 * Time: 上午11:23
 */

namespace liyifei\bmap\core;


use yii\base\Component;
use yii\httpclient\Client;

class Driver extends Component
{
    public $ak;

    public $url = 'http://api.map.baidu.com';

    public function init()
    {
        parent::init();
    }

    public function request($path, $method, $query, $data)
    {
        $url = $this->url . $path;

        $query = array_merge([
            'ak' => $this->ak
        ], $query);

        if ($query) {
            $url .= '?' . http_build_query($query);
        }

        $client = new Client();

        $request = $client->createRequest();
        $request->setMethod($method);
        $request->setUrl($url);
        if ($data && $method == 'POST') {
            $request->setData($data);
        }

        $response = $request->send();

        if (!$response->isOk) {
            throw new BMapException($response->content);
        }

        $content = $response->content;
        $data = json_decode($content, true);
        if ($data['status'] != 0) {
            throw new BMapException($data['message']);
        }

        return $data['result'];
    }
}