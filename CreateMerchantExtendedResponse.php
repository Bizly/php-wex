<?php

namespace BizlyLabs\Wex;

class CreateMerchantExtendedResponse
{

    /**
     * @var CreateMerchantResponseWithUniqueId $CreateMerchantExtendedResult
     * @access public
     */
    public $CreateMerchantExtendedResult = null;

    /**
     * @param CreateMerchantResponseWithUniqueId $CreateMerchantExtendedResult
     * @access public
     */
    public function __construct($CreateMerchantExtendedResult)
    {
      $this->CreateMerchantExtendedResult = $CreateMerchantExtendedResult;
    }

}
