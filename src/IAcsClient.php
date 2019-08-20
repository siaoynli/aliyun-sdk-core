<?php

namespace AliCloud\Core;

/**
 * Interface IAcsClient
 * @package AliCloud\Core
 */
interface IAcsClient
{
    public function doAction(AcsRequest $requst);
}
