<?php

class CreateMerchantResponse
{

    /**
     * @var MerchantResponse $CreateMerchantResult
     * @access public
     */
    public $CreateMerchantResult = null;

    /**
     * @param MerchantResponse $CreateMerchantResult
     * @access public
     */
    public function __construct($CreateMerchantResult)
    {
      $this->CreateMerchantResult = $CreateMerchantResult;
    }

}
