<?php


namespace Applab\Ooreedo\Soap\Responses;


use Applab\Ooreedo\Soap\Models\SendSmsResult;
use RuntimeException;

class SendSMSResponse {
    public $SendSmsResult;

    public function __get($name) {
        return $this->SendSmsResult->{$name};
    }
}
