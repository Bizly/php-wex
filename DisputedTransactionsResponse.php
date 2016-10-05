<?php

class DisputedTransactionsResponse
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
     * @var DisputedTransaction[] $DisputedTransactions
     * @access public
     */
    public $DisputedTransactions = null;

    /**
     * @param MerchantLogResponseCodeEnum $ResponseCode
     * @param string $Description
     * @param DisputedTransaction[] $DisputedTransactions
     * @access public
     */
    public function __construct($ResponseCode, $Description, $DisputedTransactions)
    {
      $this->ResponseCode = $ResponseCode;
      $this->Description = $Description;
      $this->DisputedTransactions = $DisputedTransactions;
    }

}
