<?php

namespace Stone\HmpayAgent;

use Hanson\Foundation\Foundation;

class Agent extends Foundation
{
    public $merchant;

    public function __construct($config)
    {
        parent::__construct($config);
        $this->merchant = new Merchant($config['app_id'], $config['private_key']);
    }

    public function __call($name, $arguments)
    {
        return $this->merchant->{$name}(...$arguments);
    }
}