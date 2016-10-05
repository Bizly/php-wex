<?php

namespace BizlyLabs/Wex;

class MerchantLogCreateResponse
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
     * @var string $MerchantLogUniqueId
     * @access public
     */
    public $MerchantLogUniqueId = null;

    /**
     * @var CardInfo $Card
     * @access public
     */
    public $Card = null;

    /**
     * @param MerchantLogResponseCodeEnum $ResponseCode
     * @param string $Description
     * @param string $MerchantLogUniqueId
     * @param CardInfo $Card
     * @access public
     */
    public function __construct($ResponseCode, $Description, $MerchantLogUniqueId, $Card)
    {
      $this->ResponseCode = $ResponseCode;
      $this->Description = $Description;
      $this->MerchantLogUniqueId = $MerchantLogUniqueId;
      $this->Card = $Card;
    }

}
