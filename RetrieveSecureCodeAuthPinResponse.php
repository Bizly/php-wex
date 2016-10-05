<?php

namespace BizlyLabsWex;

class RetrieveSecureCodeAuthPinResponse
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
     * @var string $AuthPin
     * @access public
     */
    public $AuthPin = null;

    /**
     * @param MerchantLogResponseCodeEnum $ResponseCode
     * @param string $Description
     * @param string $AuthPin
     * @access public
     */
    public function __construct($ResponseCode, $Description, $AuthPin)
    {
      $this->ResponseCode = $ResponseCode;
      $this->Description = $Description;
      $this->AuthPin = $AuthPin;
    }

}
