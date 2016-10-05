<?php

namespace BizlyLabs\Wex;

class MerchantLogRetrieveResponse
{

    /**
     * @var MerchantLogResponseCodeEnum $ResponseCode
     * @access public
     */
    public $ResponseCode = null;

    /**
     * @var string $Description
     * @access public
     */
    public $Description = null;

    /**
     * @var MerchantLog $MerchantLog
     * @access public
     */
    public $MerchantLog = null;

    /**
     * @param MerchantLogResponseCodeEnum $ResponseCode
     * @param string $Description
     * @param MerchantLog $MerchantLog
     * @access public
     */
    public function __construct($ResponseCode, $Description, $MerchantLog)
    {
      $this->ResponseCode = $ResponseCode;
      $this->Description = $Description;
      $this->MerchantLog = $MerchantLog;
    }

}
