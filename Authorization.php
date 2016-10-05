<?php

namespace BizlyLabsWex;

class Authorization
{

    /**
     * @var dateTime $AuthorizationDateTime
     * @access public
     */
    public $AuthorizationDateTime = null;

    /**
     * @var float $Amount
     * @access public
     */
    public $Amount = null;

    /**
     * @var string $MerchantName
     * @access public
     */
    public $MerchantName = null;

    /**
     * @var string $MerchantClass
     * @access public
     */
    public $MerchantClass = null;

    /**
     * @var string $MerchantCity
     * @access public
     */
    public $MerchantCity = null;

    /**
     * @var string $MerchantState
     * @access public
     */
    public $MerchantState = null;

    /**
     * @var string $MerchantZipCode
     * @access public
     */
    public $MerchantZipCode = null;

    /**
     * @var string $MerchantCounty
     * @access public
     */
    public $MerchantCounty = null;

    /**
     * @var string $ResponseCode
     * @access public
     */
    public $ResponseCode = null;

    /**
     * @var string $ResponseCodeDescription
     * @access public
     */
    public $ResponseCodeDescription = null;

    /**
     * @var string $ApprovalCode
     * @access public
     */
    public $ApprovalCode = null;

    /**
     * @var string $DeclineReason1
     * @access public
     */
    public $DeclineReason1 = null;

    /**
     * @var string $DeclineReason2
     * @access public
     */
    public $DeclineReason2 = null;

    /**
     * @var string $Status
     * @access public
     */
    public $Status = null;

    /**
     * @var string $MessageType
     * @access public
     */
    public $MessageType = null;

    /**
     * @var string $CountryCode
     * @access public
     */
    public $CountryCode = null;

    /**
     * @var string $MessageTypeDescription
     * @access public
     */
    public $MessageTypeDescription = null;

    /**
     * @param dateTime $AuthorizationDateTime
     * @param float $Amount
     * @param string $MerchantName
     * @param string $MerchantClass
     * @param string $MerchantCity
     * @param string $MerchantState
     * @param string $MerchantZipCode
     * @param string $MerchantCounty
     * @param string $ResponseCode
     * @param string $ResponseCodeDescription
     * @param string $ApprovalCode
     * @param string $DeclineReason1
     * @param string $DeclineReason2
     * @param string $Status
     * @param string $MessageType
     * @param string $CountryCode
     * @param string $MessageTypeDescription
     * @access public
     */
    public function __construct($AuthorizationDateTime, $Amount, $MerchantName, $MerchantClass, $MerchantCity, $MerchantState, $MerchantZipCode, $MerchantCounty, $ResponseCode, $ResponseCodeDescription, $ApprovalCode, $DeclineReason1, $DeclineReason2, $Status, $MessageType, $CountryCode, $MessageTypeDescription)
    {
      $this->AuthorizationDateTime = $AuthorizationDateTime;
      $this->Amount = $Amount;
      $this->MerchantName = $MerchantName;
      $this->MerchantClass = $MerchantClass;
      $this->MerchantCity = $MerchantCity;
      $this->MerchantState = $MerchantState;
      $this->MerchantZipCode = $MerchantZipCode;
      $this->MerchantCounty = $MerchantCounty;
      $this->ResponseCode = $ResponseCode;
      $this->ResponseCodeDescription = $ResponseCodeDescription;
      $this->ApprovalCode = $ApprovalCode;
      $this->DeclineReason1 = $DeclineReason1;
      $this->DeclineReason2 = $DeclineReason2;
      $this->Status = $Status;
      $this->MessageType = $MessageType;
      $this->CountryCode = $CountryCode;
      $this->MessageTypeDescription = $MessageTypeDescription;
    }

}
