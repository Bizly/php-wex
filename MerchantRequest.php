<?php

namespace BizlyLabs\Wex;

include_once('MerchantPaymentMethodItem.php');

class MerchantRequest extends MerchantPaymentMethodItem
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
     * @var string $CustomerAccountNo
     * @access public
     */
    public $CustomerAccountNo = null;

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
     * @var string $Address
     * @access public
     */
    public $Address = null;

    /**
     * @var string $Address2
     * @access public
     */
    public $Address2 = null;

    /**
     * @var string $Address3
     * @access public
     */
    public $Address3 = null;

    /**
     * @var string $Address4
     * @access public
     */
    public $Address4 = null;

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
     * @var string $Attention
     * @access public
     */
    public $Attention = null;

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
     * @var string $Note
     * @access public
     */
    public $Note = null;

    /**
     * @var MerchantSettings $MerchantLevelSettingOverrides
     * @access public
     */
    public $MerchantLevelSettingOverrides = null;

    /**
     * @var MerchantPaymentMethodItem[] $MerchantPaymentMethods
     * @access public
     */
    public $MerchantPaymentMethods = null;

    /**
     * @var boolean $OverwriteDefaultPaymentMethod
     * @access public
     */
    public $OverwriteDefaultPaymentMethod = null;

    /**
     * @var string $MerchantUniqueId
     * @access public
     */
    public $MerchantUniqueId = null;

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
     * @param string $BankNumber
     * @param string $CompanyNumber
     * @param string $MerchantCode
     * @param string $CustomerAccountNo
     * @param string $Name
     * @param string $Address
     * @param string $Address2
     * @param string $Address3
     * @param string $Address4
     * @param string $City
     * @param string $StateTerritory
     * @param string $Zip
     * @param string $Attention
     * @param string $Country
     * @param String[] $EmailAddresses
     * @param String[] $CcEmailAddresses
     * @param string $Phone
     * @param string $Fax
     * @param string $TaxPayerId
     * @param string $Note
     * @param MerchantSettings $MerchantLevelSettingOverrides
     * @param MerchantPaymentMethodItem[] $MerchantPaymentMethods
     * @param string $MerchantUniqueId
     * @access public
     */
    public function __construct($ACHAccountNumber, $ACHRoutingNumber, $RemitTemplate, $AchFileDetailRecordFormat, $BillingCurrency, $SingleUseAccountViewPIN, $MccCode, $PoolSource, $CardNumber, $PaymentGatewayId, $EnrollmentData, $CardProgram, $BankNumber, $CompanyNumber, $MerchantCode, $CustomerAccountNo, $Name, $Address, $Address2, $Address3, $Address4, $City, $StateTerritory, $Zip, $Attention, $Country, $EmailAddresses, $CcEmailAddresses, $Phone, $Fax, $TaxPayerId, $Note, $MerchantLevelSettingOverrides, $MerchantPaymentMethods, $MerchantUniqueId, $UseSingleUseAccounts)
    {
        parent::__construct($ACHAccountNumber, $ACHRoutingNumber, $RemitTemplate, $AchFileDetailRecordFormat, $BillingCurrency, $SingleUseAccountViewPIN, $MccCode, $PoolSource, $CardNumber, $PaymentGatewayId, $EnrollmentData, $CardProgram, $UseSingleUseAccounts);
        $this->BankNumber = $BankNumber;
        $this->CompanyNumber = $CompanyNumber;
        $this->MerchantCode = $MerchantCode;
        $this->CustomerAccountNo = $CustomerAccountNo;
        $this->Name = $Name;
        $this->Address = $Address;
        $this->Address2 = $Address2;
        $this->Address3 = $Address3;
        $this->Address4 = $Address4;
        $this->City = $City;
        $this->StateTerritory = $StateTerritory;
        $this->Zip = $Zip;
        $this->Attention = $Attention;
        $this->Country = $Country;
        $this->EmailAddresses = $EmailAddresses;
        $this->CcEmailAddresses = $CcEmailAddresses;
        $this->Phone = $Phone;
        $this->Fax = $Fax;
        $this->TaxPayerId = $TaxPayerId;
        $this->Note = $Note;
        $this->MerchantLevelSettingOverrides = $MerchantLevelSettingOverrides;
        $this->MerchantPaymentMethods = $MerchantPaymentMethods;
        $this->MerchantUniqueId = $MerchantUniqueId;
    }

}
