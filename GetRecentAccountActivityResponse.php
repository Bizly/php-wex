<?php

namespace BizlyLabs/Wex;

class GetRecentAccountActivityResponse
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
     * @var float $AvailableBalance
     * @access public
     */
    public $AvailableBalance = null;

    /**
     * @var Authorization[] $Authorizations
     * @access public
     */
    public $Authorizations = null;

    /**
     * @param MerchantLogResponseCodeEnum $ResponseCode
     * @param string $Description
     * @param float $AvailableBalance
     * @param Authorization[] $Authorizations
     * @access public
     */
    public function __construct($ResponseCode, $Description, $AvailableBalance, $Authorizations)
    {
      $this->ResponseCode = $ResponseCode;
      $this->Description = $Description;
      $this->AvailableBalance = $AvailableBalance;
      $this->Authorizations = $Authorizations;
    }

}
