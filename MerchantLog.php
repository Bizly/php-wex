<?php

namespace BizlyLabs\Wex;

class MerchantLog
{

    /**
     * @var string $MerchantLogUniqueId
     * @access public
     */
    public $MerchantLogUniqueId = null;

    /**
     * @var string $MerchantCode
     * @access public
     */
    public $MerchantCode = null;

    /**
     * @var string $Note
     * @access public
     */
    public $Note = null;

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
     * @var MerchantLogStatusEnum $Status
     * @access public
     */
    public $Status = null;

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
     * @var ReconciliationTypeEnum $ReconciliationStatus
     * @access public
     */
    public $ReconciliationStatus = null;

    /**
     * @var Invoice[] $Invoices
     * @access public
     */
    public $Invoices = null;

    /**
     * @var UserDefinedField[] $UserDefinedFields
     * @access public
     */
    public $UserDefinedFields = null;

    /**
     * @var CardInfo $Card
     * @access public
     */
    public $Card = null;

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
     * @param string $MerchantLogUniqueId
     * @param string $MerchantCode
     * @param string $Note
     * @param float $TotalPaymentAmount
     * @param string $CustomerCode
     * @param MerchantLogStatusEnum $Status
     * @param dateTime $CreateDate
     * @param dateTime $LastUpdatedDate
     * @param ReconciliationTypeEnum $ReconciliationStatus
     * @param Invoice[] $Invoices
     * @param UserDefinedField[] $UserDefinedFields
     * @param CardInfo $Card
     * @param string $MccCode
     * @param string $DeliveryAddress
     * @access public
     */
    public function __construct($MerchantLogUniqueId, $MerchantCode, $Note, $TotalPaymentAmount, $CustomerCode, $Status, $CreateDate, $LastUpdatedDate, $ReconciliationStatus, $Invoices, $UserDefinedFields, $Card, $MccCode, $DeliveryAddress)
    {
      $this->MerchantLogUniqueId = $MerchantLogUniqueId;
      $this->MerchantCode = $MerchantCode;
      $this->Note = $Note;
      $this->TotalPaymentAmount = $TotalPaymentAmount;
      $this->CustomerCode = $CustomerCode;
      $this->Status = $Status;
      $this->CreateDate = $CreateDate;
      $this->LastUpdatedDate = $LastUpdatedDate;
      $this->ReconciliationStatus = $ReconciliationStatus;
      $this->Invoices = $Invoices;
      $this->UserDefinedFields = $UserDefinedFields;
      $this->Card = $Card;
      $this->MccCode = $MccCode;
      $this->DeliveryAddress = $DeliveryAddress;
    }

}
