<?php

namespace BizlyLabsWex;

class ElectronicFundsTransferInfo
{

    /**
     * @var string $BankAccountNumber
     * @access public
     */
    public $BankAccountNumber = null;

    /**
     * @var string $BankRoutingNumber
     * @access public
     */
    public $BankRoutingNumber = null;

    /**
     * @var AchCreditFormatEnum $AchCreditFormat
     * @access public
     */
    public $AchCreditFormat = null;

    /**
     * @param string $BankAccountNumber
     * @param string $BankRoutingNumber
     * @param AchCreditFormatEnum $AchCreditFormat
     * @access public
     */
    public function __construct($BankAccountNumber, $BankRoutingNumber, $AchCreditFormat)
    {
      $this->BankAccountNumber = $BankAccountNumber;
      $this->BankRoutingNumber = $BankRoutingNumber;
      $this->AchCreditFormat = $AchCreditFormat;
    }

}
