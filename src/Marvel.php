<?php
/**
 * Created by PhpStorm.
 * User: Ralph
 * Date: 2019/3/28
 * Time: 17:40
 */

namespace Ralph;

use GuzzleHttp\Client;

class Marvel{

    /**
     * The configuration.
     *
     * @var $config
     */
    protected $publicKey;
    protected $privateKey;
    protected $timestamp;
    protected $hash;
    protected $client;

    /**
     * MarvelApi constructor.
     *
     * @param array        $config
     */
    public function __construct(array $config)
    {
        $this->publicKey  = $config['publicKey'];
        $this->privateKey = $config['privateKey'];
        $this->timestamp = time();
        $this->hash = md5($this->timestamp . $this->privateKey .  $this->publicKey);

        $this->client = new Client([
            'base_uri' => 'https://gateway.marvel.com/v1/public/'
        ]);
    }

    public function test()
    {
        return "ok";
    }

    public function query($uri, $options = null)
    {
        $options['apikey']    = $this->publicKey;
        $options['ts']        = $this->timestamp;
        $options['hash']      = $this->hash;

        if(isset($options['uri'])) {
            $uri = '/' . $options['uri'];
        }

        $data = $this->client->get($uri, [
            'query' => $options
        ]);
        return json_decode($data->getBody()->getContents(), true);
    }

    /*
     * 使用可选过滤器获取漫画人物列表。请参阅下面的各个参数说明。
     *
     * */
    public function characters(array $options = [])
    {
        $characters = $this->query('characters', $options);
        return $characters->data->results;
    }

    public function comics(array $options = [])
    {
        $comics = $this->query('comics', $options);
        return $comics->data->results;
    }

    public function creators(array $options = [])
    {
        $creators = $this->query('creators', $options);
        return $creators->data->results;
    }

    public function events(array $options = [])
    {
        $events = $this->query('events', $options);
        return $events->data->results;
    }

    public function series(array $options = [])
    {
        $series = $this->query('series', $options);
        return $series->data->results;
    }

    public function stories(array $options = [])
    {
        $stories = $this->query('stories', $options);
        return $stories->data->results;
    }

}
