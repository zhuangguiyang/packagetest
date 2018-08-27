<?php
namespace Aex\Packagetest;

use Illuminate\Session\SessionManager;
use Illuminate\Config\Repository;

class Packagetest
{
    /**
     * @var SessionManager
     */
    protected $session;
    /**
     * @var Repository
     */
    protected $config;
    /**
     * Packagetest constructor.
     * @param SessionManager $session
     * @param Repository $config
     */
    public function __construct(SessionManager $session, Repository $config)
    {
        $this->session = $session;
        $this->config = $config;
    }
    /**
     * @param string $msg
     * @return string
     */
    public function test_rtn($msg = ''){
        $config_arr = $this->config->get('packagetest.options.xuehao');
        return $msg.' <strong>from your custom develop package!,原来这里的东西，都是可以自己写的</strong>'.$config_arr;
    }
}