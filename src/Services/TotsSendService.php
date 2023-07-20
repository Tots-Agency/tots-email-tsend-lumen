<?php

namespace Tots\EmailTSend\Services;

use Tots\Email\Services\TotsEmailService;

class TotsSendService implements TotsEmailService
{
    public $config = [];

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function send($email, $template, $params = [])
    {
        echo 'send-email';
        exit();
    }
}
