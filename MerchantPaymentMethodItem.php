<?php

class MerchantPaymentMethodItem
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
     * @var string $ACHAccountNumber
     * @access public
     */
    public $ACHAccountNumber = null;

    /**
     * @var string $ACHRoutingNumber
     * @access public
     */
    public $ACHRoutingNumber = null;

    /**
     * @var string $RemitTemplate
     * @access public
     */
    public $RemitTemplate = null;

    /**
     * @var string $AchFileDetailRecordFormat
     * @access public
     */
    public $AchFileDetailRecordFormat = null;

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
     * @var boolean $DeletePaymentMethod
     * @access public
     */
    public $DeletePaymentMethod = null;

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
     * @var PaymentGatewayEnrollment $EnrollmentData
     * @access public
     */
    public $EnrollmentData = null;

    /**
     * @var boolean $ExactAuthOverride
     * @access public
     */
    public $ExactAuthOverride = null;

    /**
     * @var float $ExactAuthOverrideThreshold
     * @access public
     */
    public $ExactAuthOverrideThreshold = null;

    /**
     * @var string $CardProgram
     * @access public
     */
    public $CardProgram = null;

    /**
     * @param string $ACHAccountNumber
     * @param string $ACHRoutingNumber
     * @param string $RemitTemplate
     * @param string $AchFileDetailRecordFormat
     * @param string $BillingCurrency
     * @param string $SingleUseAccountViewPIN
     * @param string $MccCode
     * @param string $PoolSource
     * @param string $CardNumber
     * @param string $PaymentGatewayId
     * @param PaymentGatewayEnrollment $EnrollmentData
     * @param string $CardProgram
     * @access public
     */
    public function __construct($ACHAccountNumber, $ACHRoutingNumber, $RemitTemplate, $AchFileDetailRecordFormat, $BillingCurrency, $SingleUseAccountViewPIN, $MccCode, $PoolSource, $CardNumber, $PaymentGatewayId, $EnrollmentData, $CardProgram)
    {
      $this->ACHAccountNumber = $ACHAccountNumber;
      $this->ACHRoutingNumber = $ACHRoutingNumber;
      $this->RemitTemplate = $RemitTemplate;
      $this->AchFileDetailRecordFormat = $AchFileDetailRecordFormat;
      $this->BillingCurrency = $BillingCurrency;
      $this->SingleUseAccountViewPIN = $SingleUseAccountViewPIN;
      $this->MccCode = $MccCode;
      $this->PoolSource = $PoolSource;
      $this->CardNumber = $CardNumber;
      $this->PaymentGatewayId = $PaymentGatewayId;
      $this->EnrollmentData = $EnrollmentData;
      $this->CardProgram = $CardProgram;
    }

}
