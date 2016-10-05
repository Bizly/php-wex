<?php

namespace BizlyLabs/Wex;

class MerchantRetrieveResponse
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
     * @var string $MerchantCode
     * @access public
     */
    public $MerchantCode = null;

    /**
     * @var string $MerchantUniqueId
     * @access public
     */
    public $MerchantUniqueId = null;

    /**
     * @var string $Name
     * @access public
     */
    public $Name = null;

    /**
     * @var MerchantStatusEnum $Status
     * @access public
     */
    public $Status = null;

    /**
     * @var MerchantPaymentTypeEnum $PaymentMethod
     * @access public
     */
    public $PaymentMethod = null;

    /**
     * @var NotificationMethodEnum $NotificationMethod
     * @access public
     */
    public $NotificationMethod = null;

    /**
     * @var string $Address
     * @access public
     */
    public $Address = null;

    /**
     * @var string $City
     * @access public
     */
    public $City = null;

    /**
     * @var string $StateTerritory
     * @access public
     */
    public $StateTerritory = null;

    /**
     * @var string $Zip
     * @access public
     */
    public $Zip = null;

    /**
     * @var string $Country
     * @access public
     */
    public $Country = null;

    /**
     * @var String[] $EmailAddresses
     * @access public
     */
    public $EmailAddresses = null;

    /**
     * @var String[] $CcEmailAddresses
     * @access public
     */
    public $CcEmailAddresses = null;

    /**
     * @var string $Phone
     * @access public
     */
    public $Phone = null;

    /**
     * @var string $Fax
     * @access public
     */
    public $Fax = null;

    /**
     * @var string $TaxPayerId
     * @access public
     */
    public $TaxPayerId = null;

    /**
     * @var string $CardNumber
     * @access public
     */
    public $CardNumber = null;

    /**
     * @var boolean $SystemManagedCreditLimit
     * @access public
     */
    public $SystemManagedCreditLimit = null;

    /**
     * @var boolean $UseSingleUseAccounts
     * @access public
     */
    public $UseSingleUseAccounts = null;

    /**
     * @var string $RemitTemplate
     * @access public
     */
    public $RemitTemplate = null;

    /**
     * @var string $BillingCurrency
     * @access public
     */
    public $BillingCurrency = null;

    /**
     * @var string $Note
     * @access public
     */
    public $Note = null;

    /**
     * @var string $MccCode
     * @access public
     */
    public $MccCode = null;

    /**
     * @var string $SingleUseAccountViewPIN
     * @access public
     */
    public $SingleUseAccountViewPIN = null;

    /**
     * @var boolean $OneCard
     * @access public
     */
    public $OneCard = null;

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
     * @var string $PaymentGatewayId
     * @access public
     */
    public $PaymentGatewayId = null;

    /**
     * @var boolean $IsExactMatch
     * @access public
     */
    public $IsExactMatch = null;

    /**
     * @var string $PoolSource
     * @access public
     */
    public $PoolSource = null;

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
     * @var PaymentGatewayEnrollment $EnrollmentData
     * @access public
     */
    public $EnrollmentData = null;

    /**
     * @var MerchantSettings $MerchantLevelSettingOverrides
     * @access public
     */
    public $MerchantLevelSettingOverrides = null;

    /**
     * @param MerchantLogResponseCodeEnum $ResponseCode
     * @param string $Description
     * @param string $MerchantCode
     * @param string $MerchantUniqueId
     * @param string $Name
     * @param string $Address
     * @param string $City
     * @param string $StateTerritory
     * @param string $Zip
     * @param string $Country
     * @param String[] $EmailAddresses
     * @param String[] $CcEmailAddresses
     * @param string $Phone
     * @param string $Fax
     * @param string $TaxPayerId
     * @param string $CardNumber
     * @param string $RemitTemplate
     * @param string $BillingCurrency
     * @param string $Note
     * @param string $MccCode
     * @param string $SingleUseAccountViewPIN
     * @param string $ACHAccountNumber
     * @param string $ACHRoutingNumber
     * @param string $PaymentGatewayId
     * @param string $PoolSource
     * @param dateTime $CreateDate
     * @param dateTime $LastUpdatedDate
     * @param PaymentGatewayEnrollment $EnrollmentData
     * @param MerchantSettings $MerchantLevelSettingOverrides
     * @access public
     */
    public function __construct($ResponseCode, $Description, $MerchantCode, $MerchantUniqueId, $Name, $Address, $City, $StateTerritory, $Zip, $Country, $EmailAddresses, $CcEmailAddresses, $Phone, $Fax, $TaxPayerId, $CardNumber, $RemitTemplate, $BillingCurrency, $Note, $MccCode, $SingleUseAccountViewPIN, $ACHAccountNumber, $ACHRoutingNumber, $PaymentGatewayId, $PoolSource, $CreateDate, $LastUpdatedDate, $EnrollmentData, $MerchantLevelSettingOverrides)
    {
      $this->ResponseCode = $ResponseCode;
      $this->Description = $Description;
      $this->MerchantCode = $MerchantCode;
      $this->MerchantUniqueId = $MerchantUniqueId;
      $this->Name = $Name;
      $this->Address = $Address;
      $this->City = $City;
      $this->StateTerritory = $StateTerritory;
      $this->Zip = $Zip;
      $this->Country = $Country;
      $this->EmailAddresses = $EmailAddresses;
      $this->CcEmailAddresses = $CcEmailAddresses;
      $this->Phone = $Phone;
      $this->Fax = $Fax;
      $this->TaxPayerId = $TaxPayerId;
      $this->CardNumber = $CardNumber;
      $this->RemitTemplate = $RemitTemplate;
      $this->BillingCurrency = $BillingCurrency;
      $this->Note = $Note;
      $this->MccCode = $MccCode;
      $this->SingleUseAccountViewPIN = $SingleUseAccountViewPIN;
      $this->ACHAccountNumber = $ACHAccountNumber;
      $this->ACHRoutingNumber = $ACHRoutingNumber;
      $this->PaymentGatewayId = $PaymentGatewayId;
      $this->PoolSource = $PoolSource;
      $this->CreateDate = $CreateDate;
      $this->LastUpdatedDate = $LastUpdatedDate;
      $this->EnrollmentData = $EnrollmentData;
      $this->MerchantLevelSettingOverrides = $MerchantLevelSettingOverrides;
    }

}
