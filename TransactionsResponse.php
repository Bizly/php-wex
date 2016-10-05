<?php

namespace BizlyLabs/Wex;

class TransactionsResponse
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
     * @var Transaction[] $Transactions
     * @access public
     */
    public $Transactions = null;

    /**
     * @param MerchantLogResponseCodeEnum $ResponseCode
     * @param string $Description
     * @param Transaction[] $Transactions
     * @access public
     */
    public function __construct($ResponseCode, $Description, $Transactions)
    {
      $this->ResponseCode = $ResponseCode;
      $this->Description = $Description;
      $this->Transactions = $Transactions;
    }

}
