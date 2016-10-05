<?php

namespace BizlyLabs\Wex;

class MerchantRetrieveExtendedResponse
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
     * @var MerchantPaymentTypeEnum $DefaultPaymentMethod
     * @access public
     */
    public $DefaultPaymentMethod = null;

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
     * @var string $Country
     * @access public
     */
    public $Country = null;

    /**
     * @var string $Attention
     * @access public
     */
    public $Attention = null;

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
     * @var string $MccCode
     * @access public
     */
    public $MccCode = null;

    /**
     * @var string $CustomerAccountNo
     * @access public
     */
    public $CustomerAccountNo = null;

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
     * @var MerchantSettings $MerchantLevelSettingOverrides
     * @access public
     */
    public $MerchantLevelSettingOverrides = null;

    /**
     * @var MerchantPaymentMethodResponseItem[] $PaymentMethods
     * @access public
     */
    public $PaymentMethods = null;

    /**
     * @param MerchantLogResponseCodeEnum $ResponseCode
     * @param string $Description
     * @param string $MerchantCode
     * @param string $MerchantUniqueId
     * @param string $Name
     * @param string $Address
     * @param string $Address2
     * @param string $Address3
     * @param string $Address4
     * @param string $City
     * @param string $StateTerritory
     * @param string $Zip
     * @param string $Country
     * @param string $Attention
     * @param String[] $EmailAddresses
     * @param String[] $CcEmailAddresses
     * @param string $Phone
     * @param string $Fax
     * @param string $TaxPayerId
     * @param string $Note
     * @param string $MccCode
     * @param string $CustomerAccountNo
     * @param dateTime $CreateDate
     * @param dateTime $LastUpdatedDate
     * @param MerchantSettings $MerchantLevelSettingOverrides
     * @param MerchantPaymentMethodResponseItem[] $PaymentMethods
     * @access public
     */
    public function __construct($ResponseCode, $Description, $MerchantCode, $MerchantUniqueId, $Name, $Address, $Address2, $Address3, $Address4, $City, $StateTerritory, $Zip, $Country, $Attention, $EmailAddresses, $CcEmailAddresses, $Phone, $Fax, $TaxPayerId, $Note, $MccCode, $CustomerAccountNo, $CreateDate, $LastUpdatedDate, $MerchantLevelSettingOverrides, $PaymentMethods)
    {
      $this->ResponseCode = $ResponseCode;
      $this->Description = $Description;
      $this->MerchantCode = $MerchantCode;
      $this->MerchantUniqueId = $MerchantUniqueId;
      $this->Name = $Name;
      $this->Address = $Address;
      $this->Address2 = $Address2;
      $this->Address3 = $Address3;
      $this->Address4 = $Address4;
      $this->City = $City;
      $this->StateTerritory = $StateTerritory;
      $this->Zip = $Zip;
      $this->Country = $Country;
      $this->Attention = $Attention;
      $this->EmailAddresses = $EmailAddresses;
      $this->CcEmailAddresses = $CcEmailAddresses;
      $this->Phone = $Phone;
      $this->Fax = $Fax;
      $this->TaxPayerId = $TaxPayerId;
      $this->Note = $Note;
      $this->MccCode = $MccCode;
      $this->CustomerAccountNo = $CustomerAccountNo;
      $this->CreateDate = $CreateDate;
      $this->LastUpdatedDate = $LastUpdatedDate;
      $this->MerchantLevelSettingOverrides = $MerchantLevelSettingOverrides;
      $this->PaymentMethods = $PaymentMethods;
    }

}
