<?php

namespace BizlyLabs\Wex;

class UpdateMerchantResponse
{

    /**
     * @var MerchantResponse $UpdateMerchantResult
     * @access public
     */
    public $UpdateMerchantResult = null;

    /**
     * @param MerchantResponse $UpdateMerchantResult
     * @access public
     */
    public function __construct($UpdateMerchantResult)
    {
      $this->UpdateMerchantResult = $UpdateMerchantResult;
    }

}
