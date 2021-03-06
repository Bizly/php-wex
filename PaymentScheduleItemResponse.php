<?php

namespace BizlyLabs\Wex;

class PaymentScheduleItemResponse
{

    /**
     * @var dateTime $ActiveFromDate
     * @access public
     */
    public $ActiveFromDate = null;

    /**
     * @var dateTime $ActiveToDate
     * @access public
     */
    public $ActiveToDate = null;

    /**
     * @var float $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @var float $CreditLimit
     * @access public
     */
    public $CreditLimit = null;

    /**
     * @var dateTime $ProcessedDate
     * @access public
     */
    public $ProcessedDate = null;

    /**
     * @param dateTime $ActiveFromDate
     * @param dateTime $ActiveToDate
     * @param float $Amount
     * @param float $CreditLimit
     * @access public
     */
    public function __construct($ActiveFromDate, $ActiveToDate, $Amount, $CreditLimit)
    {
      $this->ActiveFromDate = $ActiveFromDate;
      $this->ActiveToDate = $ActiveToDate;
      $this->Amount = $Amount;
      $this->CreditLimit = $CreditLimit;
    }

}
