<?php

namespace BizlyLabs\Wex;

class CreateMerchantLogResponse
{

    /**
     * @var MerchantLogCreateResponse $CreateMerchantLogResult
     * @access public
     */
    public $CreateMerchantLogResult = null;

    /**
     * @param MerchantLogCreateResponse $CreateMerchantLogResult
     * @access public
     */
    public function __construct($CreateMerchantLogResult)
    {
      $this->CreateMerchantLogResult = $CreateMerchantLogResult;
    }

}
