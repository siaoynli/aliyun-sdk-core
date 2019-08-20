<?php

namespace AliCloud\Core\Regions;

class ProductDomain
{
    private $productName;
    private $domainName;

    public function __construct($product, $domain)
    {
        $this->productName = $product;
        $this->domainName = $domain;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    public function getDomainName()
    {
        return $this->domainName;
    }

    public function setDomainName($domainName)
    {
        $this->domainName = $domainName;
    }
}