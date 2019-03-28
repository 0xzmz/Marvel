<?php
/**
 * Created by PhpStorm.
 * User: Ralph
 * Date: 2019/3/28
 * Time: 17:40
 */

namespace Ralph\Marvel;

class Marvel{

    /**
     * The configuration.
     *
     * @var $config
     */
    protected $config;

    /**
     * MarvelApi constructor.
     *
     * @param array        $config
     */
    public function __construct(array $config)
    {
        $this->config = $config;
    }


    public function test()
    {
        return "ok";
    }

}
