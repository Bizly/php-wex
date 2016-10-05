<?php

namespace BizlyLabs/Wex;

class MerchantLogHistory
{

    /**
     * @var string $MerchantLogUniqueId
     * @access public
     */
    public $MerchantLogUniqueId = null;

    /**
     * @var dateTime $ChangeDate
     * @access public
     */
    public $ChangeDate = null;

    /**
     * @var MerchantLogStatusEnum $Status
     * @access public
     */
    public $Status = null;

    /**
     * @var float $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @var string $MerchantCode
     * @access public
     */
    public $MerchantCode = null;

    /**
     * @var string $MerchantName
     * @access public
     */
    public $MerchantName = null;

    /**
     * @var string $AccountNo
     * @access public
     */
    public $AccountNo = null;

    /**
     * @var string $PaymentMethod
     * @access public
     */
    public $PaymentMethod = null;

    /**
     * @var string $OperationName
     * @access public
     */
    public $OperationName = null;

    /**
     * @var string $LastUpdatedApplication
     * @access public
     */
    public $LastUpdatedApplication = null;

    /**
     * @var string $MccCode
     * @access public
     */
    public $MccCode = null;

    /**
     * @var string $DeliveryAddress
     * @access public
     */
    public $DeliveryAddress = null;

    /**
     * @var DeliveryMethodEnum $DeliveryMethod
     * @access public
     */
    public $DeliveryMethod = null;

    /**
     * @var boolean $IsAccountViewEnabled
     * @access public
     */
    public $IsAccountViewEnabled = null;

    /**
     * @var string $AccountViewPIN
     * @access public
     */
    public $AccountViewPIN = null;

    /**
     * @var int $AccountViewPINFails
     * @access public
     */
    public $AccountViewPINFails = null;

    /**
     * @var string $ActiveFromDate
     * @access public
     */
    public $ActiveFromDate = null;

    /**
     * @var string $ActiveToDate
     * @access public
     */
    public $ActiveToDate = null;

    /**
     * @var boolean $ResendNotification
     * @access public
     */
    public $ResendNotification = null;

    /**
     * @var string $Currency
     * @access public
     */
    public $Currency = null;

    /**
     * @var dateTime $ExpirationDate
     * @access public
     */
    public $ExpirationDate = null;

    /**
     * @var dateTime $ExpirationReminderDate
     * @access public
     */
    public $ExpirationReminderDate = null;

    /**
     * @var boolean $HasTransaction
     * @access public
     */
    public $HasTransaction = null;

    /**
     * @var UserDefinedField[] $UserDefinedFields
     * @access public
     */
    public $UserDefinedFields = null;

    /**
     * @param string $MerchantLogUniqueId
     * @param dateTime $ChangeDate
     * @param MerchantLogStatusEnum $Status
     * @param float $Amount
     * @param string $MerchantCode
     * @param string $MerchantName
     * @param string $AccountNo
     * @param string $PaymentMethod
     * @param string $OperationName
     * @param string $LastUpdatedApplication
     * @param string $MccCode
     * @param string $DeliveryAddress
     * @param boolean $IsAccountViewEnabled
     * @param string $AccountViewPIN
     * @param int $AccountViewPINFails
     * @param string $ActiveFromDate
     * @param string $ActiveToDate
     * @param boolean $ResendNotification
     * @param string $Currency
     * @param boolean $HasTransaction
     * @param UserDefinedField[] $UserDefinedFields
     * @access public
     */
    public function __construct($MerchantLogUniqueId, $ChangeDate, $Status, $Amount, $MerchantCode, $MerchantName, $AccountNo, $PaymentMethod, $OperationName, $LastUpdatedApplication, $MccCode, $DeliveryAddress, $IsAccountViewEnabled, $AccountViewPIN, $AccountViewPINFails, $ActiveFromDate, $ActiveToDate, $ResendNotification, $Currency, $HasTransaction, $UserDefinedFields)
    {
      $this->MerchantLogUniqueId = $MerchantLogUniqueId;
      $this->ChangeDate = $ChangeDate;
      $this->Status = $Status;
      $this->Amount = $Amount;
      $this->MerchantCode = $MerchantCode;
      $this->MerchantName = $MerchantName;
      $this->AccountNo = $AccountNo;
      $this->PaymentMethod = $PaymentMethod;
      $this->OperationName = $OperationName;
      $this->LastUpdatedApplication = $LastUpdatedApplication;
      $this->MccCode = $MccCode;
      $this->DeliveryAddress = $DeliveryAddress;
      $this->IsAccountViewEnabled = $IsAccountViewEnabled;
      $this->AccountViewPIN = $AccountViewPIN;
      $this->AccountViewPINFails = $AccountViewPINFails;
      $this->ActiveFromDate = $ActiveFromDate;
      $this->ActiveToDate = $ActiveToDate;
      $this->ResendNotification = $ResendNotification;
      $this->Currency = $Currency;
      $this->HasTransaction = $HasTransaction;
      $this->UserDefinedFields = $UserDefinedFields;
    }

}
