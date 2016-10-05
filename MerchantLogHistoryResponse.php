<?php

namespace BizlyLabs\Wex;

class MerchantLogHistoryResponse
{

    /**
     * @var MerchantLogResponseCodeEnum $ResponseCode
     * @access public
     */
    public $ResponseCode = null;

    /**
     * @var MerchantLogHistory[] $History
     * @access public
     */
    public $History = null;

    /**
     * @var string $Description
     * @access public
     */
    public $Description = null;

    /**
     * @param MerchantLogResponseCodeEnum $ResponseCode
     * @param MerchantLogHistory[] $History
     * @param string $Description
     * @access public
     */
    public function __construct($ResponseCode, $History, $Description)
    {
      $this->ResponseCode = $ResponseCode;
      $this->History = $History;
      $this->Description = $Description;
    }

}
