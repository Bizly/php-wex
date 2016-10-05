<?php

class BackupCardInternational
{

    /**
     * @var string $CardNumber
     * @access public
     */
    public $CardNumber = null;

    /**
     * @var string $CVC2
     * @access public
     */
    public $CVC2 = null;

    /**
     * @var dateTime $ExpirationDate
     * @access public
     */
    public $ExpirationDate = null;

    /**
     * @var float $CreditLimit
     * @access public
     */
    public $CreditLimit = null;

    /**
     * @var string $ImagePdfAsBase64String
     * @access public
     */
    public $ImagePdfAsBase64String = null;

    /**
     * @var string $NameLine1
     * @access public
     */
    public $NameLine1 = null;

    /**
     * @var string $NameLine2
     * @access public
     */
    public $NameLine2 = null;

    /**
     * @var dateTime $CreateDate
     * @access public
     */
    public $CreateDate = null;

    /**
     * @var string $BillingCurrency
     * @access public
     */
    public $BillingCurrency = null;

    /**
     * @param string $CardNumber
     * @param string $CVC2
     * @param dateTime $ExpirationDate
     * @param float $CreditLimit
     * @param string $ImagePdfAsBase64String
     * @param string $NameLine1
     * @param string $NameLine2
     * @param dateTime $CreateDate
     * @param string $BillingCurrency
     * @access public
     */
    public function __construct($CardNumber, $CVC2, $ExpirationDate, $CreditLimit, $ImagePdfAsBase64String, $NameLine1, $NameLine2, $CreateDate, $BillingCurrency)
    {
      $this->CardNumber = $CardNumber;
      $this->CVC2 = $CVC2;
      $this->ExpirationDate = $ExpirationDate;
      $this->CreditLimit = $CreditLimit;
      $this->ImagePdfAsBase64String = $ImagePdfAsBase64String;
      $this->NameLine1 = $NameLine1;
      $this->NameLine2 = $NameLine2;
      $this->CreateDate = $CreateDate;
      $this->BillingCurrency = $BillingCurrency;
    }

}
