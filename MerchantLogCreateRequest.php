<?php

namespace BizlyLabs/Wex;

class MerchantLogCreateRequest
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
     * @var string $MerchantCode
     * @access public
     */
    public $MerchantCode = null;

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
     * @var string $AlternateMerchantCode
     * @access public
     */
    public $AlternateMerchantCode = null;

    /**
     * @var string $BillingCurrency
     * @access public
     */
    public $BillingCurrency = null;

    /**
     * @var string $LocalCurrency
     * @access public
     */
    public $LocalCurrency = null;

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
     * @var string $BackupCardNumber
     * @access public
     */
    public $BackupCardNumber = null;

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
     * @var string $Country
     * @access public
     */
    public $Country = null;

    /**
     * @var string $PoolName
     * @access public
     */
    public $PoolName = null;

    /**
     * @var PaymentScheduleItem[] $PaymentSchedule
     * @access public
     */
    public $PaymentSchedule = null;

    /**
     * @var MerchantPaymentTypeEnum $PaymentMethod
     * @access public
     */
    public $PaymentMethod = null;

    /**
     * @var ElectronicFundsTransferInfo $AchOrWirePaymentInfo
     * @access public
     */
    public $AchOrWirePaymentInfo = null;

    /**
     * @var CheckInfo $CheckPaymentInfo
     * @access public
     */
    public $CheckPaymentInfo = null;

    /**
     * @var string $RemitTemplate
     * @access public
     */
    public $RemitTemplate = null;

    /**
     * @var string $CustomerAccountNo
     * @access public
     */
    public $CustomerAccountNo = null;

    /**
     * @param string $BankNumber
     * @param string $CompanyNumber
     * @param string $MerchantCode
     * @param float $TotalPaymentAmount
     * @param string $CustomerCode
     * @param Invoice[] $Invoices
     * @param string $Note
     * @param UserDefinedField[] $UserDefinedFields
     * @param FinancialCode[] $FinancialCodes
     * @param string $MccCode
     * @param string $DeliveryAddress
     * @param string $AlternateMerchantCode
     * @param string $BillingCurrency
     * @param string $LocalCurrency
     * @param string $BackupCardNumber
     * @param string $MccGroupProfileName
     * @param string $Country
     * @param string $PoolName
     * @param PaymentScheduleItem[] $PaymentSchedule
     * @param ElectronicFundsTransferInfo $AchOrWirePaymentInfo
     * @param CheckInfo $CheckPaymentInfo
     * @param string $RemitTemplate
     * @param string $CustomerAccountNo
     * @access public
     */
    public function __construct($BankNumber, $CompanyNumber, $MerchantCode, $TotalPaymentAmount, $CustomerCode, $Invoices, $Note, $UserDefinedFields, $FinancialCodes, $MccCode, $DeliveryAddress, $AlternateMerchantCode, $BillingCurrency, $LocalCurrency, $BackupCardNumber, $MccGroupProfileName, $Country, $PoolName, $PaymentSchedule, $AchOrWirePaymentInfo, $CheckPaymentInfo, $RemitTemplate, $CustomerAccountNo)
    {
      $this->BankNumber = $BankNumber;
      $this->CompanyNumber = $CompanyNumber;
      $this->MerchantCode = $MerchantCode;
      $this->TotalPaymentAmount = $TotalPaymentAmount;
      $this->CustomerCode = $CustomerCode;
      $this->Invoices = $Invoices;
      $this->Note = $Note;
      $this->UserDefinedFields = $UserDefinedFields;
      $this->FinancialCodes = $FinancialCodes;
      $this->MccCode = $MccCode;
      $this->DeliveryAddress = $DeliveryAddress;
      $this->AlternateMerchantCode = $AlternateMerchantCode;
      $this->BillingCurrency = $BillingCurrency;
      $this->LocalCurrency = $LocalCurrency;
      $this->BackupCardNumber = $BackupCardNumber;
      $this->MccGroupProfileName = $MccGroupProfileName;
      $this->Country = $Country;
      $this->PoolName = $PoolName;
      $this->PaymentSchedule = $PaymentSchedule;
      $this->AchOrWirePaymentInfo = $AchOrWirePaymentInfo;
      $this->CheckPaymentInfo = $CheckPaymentInfo;
      $this->RemitTemplate = $RemitTemplate;
      $this->CustomerAccountNo = $CustomerAccountNo;
    }

}
