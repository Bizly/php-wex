<?php

namespace BizlyLabs/Wex;

include_once('MerchantResponse.php');

class CreateMerchantResponseWithUniqueId extends MerchantResponse
{

    /**
     * @var string $MerchantUniqueId
     * @access public
     */
    public $MerchantUniqueId = null;

    /**
     * @param MerchantLogResponseCodeEnum $ResponseCode
     * @param string $Description
     * @param string $MerchantUniqueId
     * @access public
     */
    public function __construct($ResponseCode, $Description, $MerchantUniqueId)
    {
      parent::__construct($ResponseCode, $Description);
      $this->MerchantUniqueId = $MerchantUniqueId;
    }

}
