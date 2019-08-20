<?php

namespace AliCloud\Core\Profile;

interface IClientProfile
{
    public function getSigner();
    
    public function getRegionId();
    
    public function getFormat();
    
    public function getCredential();

    public function isRamRoleArn();

    public function isEcsRamRole();
}
