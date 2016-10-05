<?php

namespace BizlyLabs\Wex;

class CancelMerchantLogResponse
{

    /**
     * @var MerchantLogCancelResponse $CancelMerchantLogResult
     * @access public
     */
    public $CancelMerchantLogResult = null;

    /**
     * @param MerchantLogCancelResponse $CancelMerchantLogResult
     * @access public
     */
    public function __construct($CancelMerchantLogResult)
    {
      $this->CancelMerchantLogResult = $CancelMerchantLogResult;
    }

}
