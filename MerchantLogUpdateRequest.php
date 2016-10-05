<?php

namespace BizlyLabs\Wex;

class MerchantLogUpdateRequest
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
     * @var string $MerchantLogUniqueID
     * @access public
     */
    public $MerchantLogUniqueID = null;

    /**
     * @var float $TotalPaymentAmount
     * @access public
     */
    public $TotalPaymentAmount = null;

    /**
     * @var string $CustomerCode
     * @access public
     */
    public $CustomerCode = null;

    /**
     * @var Invoice[] $Invoices
     * @access public
     */
    public $Invoices = null;

    /**
     * @var string $Note
     * @access public
     */
    public $Note = null;

    /**
     * @var UserDefinedField[] $UserDefinedFields
     * @access public
     */
    public $UserDefinedFields = null;

    /**
     * @var FinancialCode[] $FinancialCodes
     * @access public
     */
    public $FinancialCodes = null;

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
     * @var string $MccCode
     * @access public
     */
    public $MccCode = null;

    /**
     * @var DeliveryMethodEnum $DeliveryMethod
     * @access public
     */
    public $DeliveryMethod = null;

    /**
     * @var string $DeliveryAddress
     * @access public
     */
    public $DeliveryAddress = null;

    /**
     * @var float $CreditLimit
     * @access public
     */
    public $CreditLimit = null;

    /**
     * @var float $MinAmount
     * @access public
     */
    public $MinAmount = null;

    /**
     * @var string $MccGroupProfileName
     * @access public
     */
    public $MccGroupProfileName = null;

    /**
     * @var int $AuthHoldDays
     * @access public
     */
    public $AuthHoldDays = null;

    /**
     * @var boolean $IsExactMatch
     * @access public
     */
    public $IsExactMatch = null;

    /**
     * @var PaymentScheduleItem[] $PaymentSchedule
     * @access public
     */
    public $PaymentSchedule = null;

    /**
     * @param string $BankNumber
     * @param string $CompanyNumber
     * @param string $MerchantLogUniqueID
     * @param string $CustomerCode
     * @param Invoice[] $Invoices
     * @param string $Note
     * @param UserDefinedField[] $UserDefinedFields
     * @param FinancialCode[] $FinancialCodes
     * @param string $MccCode
     * @param string $DeliveryAddress
     * @param string $MccGroupProfileName
     * @param PaymentScheduleItem[] $PaymentSchedule
     * @access public
     */
    public function __construct($BankNumber, $CompanyNumber, $MerchantLogUniqueID, $CustomerCode, $Invoices, $Note, $UserDefinedFields, $FinancialCodes, $MccCode, $DeliveryAddress, $MccGroupProfileName, $PaymentSchedule)
    {
      $this->BankNumber = $BankNumber;
      $this->CompanyNumber = $CompanyNumber;
      $this->MerchantLogUniqueID = $MerchantLogUniqueID;
      $this->CustomerCode = $CustomerCode;
      $this->Invoices = $Invoices;
      $this->Note = $Note;
      $this->UserDefinedFields = $UserDefinedFields;
      $this->FinancialCodes = $FinancialCodes;
      $this->MccCode = $MccCode;
      $this->DeliveryAddress = $DeliveryAddress;
      $this->MccGroupProfileName = $MccGroupProfileName;
      $this->PaymentSchedule = $PaymentSchedule;
    }

}
