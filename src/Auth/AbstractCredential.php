<?php

namespace AliCloud\Core\Auth;

abstract class AbstractCredential
{
    abstract public function getAccessKeyId();
    abstract public function getAccessSecret();
    abstract public function getSecurityToken();
}