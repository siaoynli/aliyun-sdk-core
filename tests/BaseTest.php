<?php

use PHPUnit\Framework\TestCase;
use AliCloud\Core\DefaultAcsClient;
use AliCloud\Core\Profile\DefaultProfile;

class BaseTest extends TestCase
{
    public $client = null;

    public function setUp()
    {
        $path = substr(dirname(__FILE__), 0, strripos(dirname(__FILE__), DIRECTORY_SEPARATOR)) . DIRECTORY_SEPARATOR;
        include_once $path . 'Config.php';
        include_once 'Ecs/Rquest/DescribeRegionsRequest.php';
        include_once 'BatchCompute/ListImagesRequest.php';

        $iClientProfile = DefaultProfile::getProfile("cn-hangzhou", "AccessKey", "AccessSecret");
        $this->client = new DefaultAcsClient($iClientProfile);
    }

    public function getProperty($propertyKey)
    {
        $accessKey = "";
        $accessSecret = "";
        $iClientProfile = DefaultProfile::getProfile("cn-hangzhou", "AccessKey", "AccessSecret");
    }
}
