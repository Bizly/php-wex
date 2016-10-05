<?php

namespace BizlyLabs/Wex;

class MerchantLogQueryRequest
{

    /**
     * @var string $BankNumber
     * @access public
     */
    public $BankNumber = null;

    /**
     * @var string $CompanyNumber
     * @access public
     */
    public $CompanyNumber = null;

    /**
     * @var int $MaxReturned
     * @access public
     */
    public $MaxReturned = null;

    /**
     * @var string $AccountNo
     * @access public
     */
    public $AccountNo = null;

    /**
     * @var string $Status
     * @access public
     */
    public $Status = null;

    /**
     * @var string $DeliveryStatus
     * @access public
     */
    public $DeliveryStatus = null;

    /**
     * @var dateTime $CreateDate
     * @access public
     */
    public $CreateDate = null;

    /**
     * @var dateTime $CreateDate2
     * @access public
     */
    public $CreateDate2 = null;

    /**
     * @var float $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @var float $Amount2
     * @access public
     */
    public $Amount2 = null;

    /**
     * @var string $BillingCurrency
     * @access public
     */
    public $BillingCurrency = null;

    /**
     * @var string $CreatedByLastName
     * @access public
     */
    public $CreatedByLastName = null;

    /**
     * @var UserDefinedField[] $UserDefinedFields
     * @access public
     */
    public $UserDefinedFields = null;

    /**
     * @var string $MerchantCode
     * @access public
     */
    public $MerchantCode = null;

    /**
     * @var string $CustomerCode
     * @access public
     */
    public $CustomerCode = null;

    /**
     * @var int $ExpiringNoDays
     * @access public
     */
    public $ExpiringNoDays = null;

    /**
     * @var int $ExpiringNoDays2
     * @access public
     */
    public $ExpiringNoDays2 = null;

    /**
     * @var boolean $HasTransaction
     * @access public
     */
    public $HasTransaction = null;

    /**
     * @var string $LastOperation
     * @access public
     */
    public $LastOperation = null;

    /**
     * @var dateTime $LastStatusChangeDate
     * @access public
     */
    public $LastStatusChangeDate = null;

    /**
     * @var dateTime $LastStatusChangeDate2
     * @access public
     */
    public $LastStatusChangeDate2 = null;

    /**
     * @var string $MerchantName
     * @access public
     */
    public $MerchantName = null;

    /**
     * @var string $PaymentMethod
     * @access public
     */
    public $PaymentMethod = null;

    /**
     * @var string $Source
     * @access public
     */
    public $Source = null;

    /**
     * @param string $BankNumber
     * @param string $CompanyNumber
     * @param string $AccountNo
     * @param string $Status
     * @param string $DeliveryStatus
     * @param string $BillingCurrency
     * @param string $CreatedByLastName
     * @param UserDefinedField[] $UserDefinedFields
     * @param string $MerchantCode
     * @param string $CustomerCode
     * @param string $LastOperation
     * @param string $MerchantName
     * @param string $PaymentMethod
     * @param string $Source
     * @access public
     */
    public function __construct($BankNumber, $CompanyNumber, $AccountNo, $Status, $DeliveryStatus, $BillingCurrency, $CreatedByLastName, $UserDefinedFields, $MerchantCode, $CustomerCode, $LastOperation, $MerchantName, $PaymentMethod, $Source)
    {
      $this->BankNumber = $BankNumber;
      $this->CompanyNumber = $CompanyNumber;
      $this->AccountNo = $AccountNo;
      $this->Status = $Status;
      $this->DeliveryStatus = $DeliveryStatus;
      $this->BillingCurrency = $BillingCurrency;
      $this->CreatedByLastName = $CreatedByLastName;
      $this->UserDefinedFields = $UserDefinedFields;
      $this->MerchantCode = $MerchantCode;
      $this->CustomerCode = $CustomerCode;
      $this->LastOperation = $LastOperation;
      $this->MerchantName = $MerchantName;
      $this->PaymentMethod = $PaymentMethod;
      $this->Source = $Source;
    }

}
