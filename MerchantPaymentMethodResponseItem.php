<?php

namespace BizlyLabsWex;

class MerchantPaymentMethodResponseItem
{

    /**
     * @var MerchantPaymentTypeEnum $PaymentMethod
     * @access public
     */
    public $PaymentMethod = null;

    /**
     * @var boolean $IsDefault
     * @access public
     */
    public $IsDefault = null;

    /**
     * @var NotificationMethodEnum $NotificationMethod
     * @access public
     */
    public $NotificationMethod = null;

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
     * @var string $AchFileDetailRecordFormat
     * @access public
     */
    public $AchFileDetailRecordFormat = null;

    /**
     * @var string $RemitTemplate
     * @access public
     */
    public $RemitTemplate = null;

    /**
     * @var boolean $SystemManagedCreditLimit
     * @access public
     */
    public $SystemManagedCreditLimit = null;

    /**
     * @var string $BillingCurrency
     * @access public
     */
    public $BillingCurrency = null;

    /**
     * @var boolean $UseSingleUseAccounts
     * @access public
     */
    public $UseSingleUseAccounts = null;

    /**
     * @var string $SingleUseAccountViewPIN
     * @access public
     */
    public $SingleUseAccountViewPIN = null;

    /**
     * @var MerchantTriState $SingleUseAccountViewPINRequired
     * @access public
     */
    public $SingleUseAccountViewPINRequired = null;

    /**
     * @var string $MccCode
     * @access public
     */
    public $MccCode = null;

    /**
     * @var string $PoolSource
     * @access public
     */
    public $PoolSource = null;

    /**
     * @var boolean $OneCard
     * @access public
     */
    public $OneCard = null;

    /**
     * @var boolean $IsExactMatch
     * @access public
     */
    public $IsExactMatch = null;

    /**
     * @var string $CardNumber
     * @access public
     */
    public $CardNumber = null;

    /**
     * @var string $PaymentGatewayId
     * @access public
     */
    public $PaymentGatewayId = null;

    /**
     * @var string $EncircleMerchantCode
     * @access public
     */
    public $EncircleMerchantCode = null;

    /**
     * @var PaymentGatewayEnrollment $EnrollmentData
     * @access public
     */
    public $EnrollmentData = null;

    /**
     * @var dateTime $CreateDate
     * @access public
     */
    public $CreateDate = null;

    /**
     * @var dateTime $LastUpdatedDate
     * @access public
     */
    public $LastUpdatedDate = null;

    /**
     * @param string $BankAccountNumber
     * @param string $BankRoutingNumber
     * @param string $AchFileDetailRecordFormat
     * @param string $RemitTemplate
     * @param string $BillingCurrency
     * @param string $SingleUseAccountViewPIN
     * @param string $MccCode
     * @param string $PoolSource
     * @param string $CardNumber
     * @param string $PaymentGatewayId
     * @param string $EncircleMerchantCode
     * @param PaymentGatewayEnrollment $EnrollmentData
     * @param dateTime $CreateDate
     * @param dateTime $LastUpdatedDate
     * @access public
     */
    public function __construct($BankAccountNumber, $BankRoutingNumber, $AchFileDetailRecordFormat, $RemitTemplate, $BillingCurrency, $SingleUseAccountViewPIN, $MccCode, $PoolSource, $CardNumber, $PaymentGatewayId, $EncircleMerchantCode, $EnrollmentData, $CreateDate, $LastUpdatedDate)
    {
      $this->BankAccountNumber = $BankAccountNumber;
      $this->BankRoutingNumber = $BankRoutingNumber;
      $this->AchFileDetailRecordFormat = $AchFileDetailRecordFormat;
      $this->RemitTemplate = $RemitTemplate;
      $this->BillingCurrency = $BillingCurrency;
      $this->SingleUseAccountViewPIN = $SingleUseAccountViewPIN;
      $this->MccCode = $MccCode;
      $this->PoolSource = $PoolSource;
      $this->CardNumber = $CardNumber;
      $this->PaymentGatewayId = $PaymentGatewayId;
      $this->EncircleMerchantCode = $EncircleMerchantCode;
      $this->EnrollmentData = $EnrollmentData;
      $this->CreateDate = $CreateDate;
      $this->LastUpdatedDate = $LastUpdatedDate;
    }

}
