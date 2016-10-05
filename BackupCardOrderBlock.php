<?php

namespace BizlyLabsWex;

class BackupCardOrderBlock
{

    /**
     * @var int $Quantity
     * @access public
     */
    public $Quantity = null;

    /**
     * @var float $CreditLimit
     * @access public
     */
    public $CreditLimit = null;

    /**
     * @var string $BillingCurrency
     * @access public
     */
    public $BillingCurrency = null;

    /**
     * @param int $Quantity
     * @param float $CreditLimit
     * @param string $BillingCurrency
     * @access public
     */
    public function __construct($Quantity, $CreditLimit, $BillingCurrency)
    {
      $this->Quantity = $Quantity;
      $this->CreditLimit = $CreditLimit;
      $this->BillingCurrency = $BillingCurrency;
    }

}
