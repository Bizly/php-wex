<?php

namespace BizlyLabs\Wex;

class MerchantLogUpdateResponse
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
     * @param MerchantLogResponseCodeEnum $ResponseCode
     * @param string $Description
     * @access public
     */
    public function __construct($ResponseCode, $Description)
    {
      $this->ResponseCode = $ResponseCode;
      $this->Description = $Description;
    }

}
