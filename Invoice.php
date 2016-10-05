<?php

namespace BizlyLabsWex;

class Invoice
{

    /**
     * @var string $InvoiceNumber
     * @access public
     */
    public $InvoiceNumber = null;

    /**
     * @var dateTime $InvoiceDate
     * @access public
     */
    public $InvoiceDate = null;

    /**
     * @var float $InvoiceAmount
     * @access public
     */
    public $InvoiceAmount = null;

    /**
     * @var string $Description
     * @access public
     */
    public $Description = null;

    /**
     * @var float $TaxAmount
     * @access public
     */
    public $TaxAmount = null;

    /**
     * @var float $DiscountAmount
     * @access public
     */
    public $DiscountAmount = null;

    /**
     * @var UserDefinedField[] $UserDefinedFields
     * @access public
     */
    public $UserDefinedFields = null;

    /**
     * @var string $ReferenceNumber
     * @access public
     */
    public $ReferenceNumber = null;

    /**
     * @var string $PaymentCode
     * @access public
     */
    public $PaymentCode = null;

    /**
     * @var dateTime $PaymentDate
     * @access public
     */
    public $PaymentDate = null;

    /**
     * @var string $FreeFormText
     * @access public
     */
    public $FreeFormText = null;

    /**
     * @var float $FreightAmount
     * @access public
     */
    public $FreightAmount = null;

    /**
     * @var LineItem[] $LineItems
     * @access public
     */
    public $LineItems = null;

    /**
     * @param string $InvoiceNumber
     * @param dateTime $InvoiceDate
     * @param float $InvoiceAmount
     * @param string $Description
     * @param UserDefinedField[] $UserDefinedFields
     * @param string $ReferenceNumber
     * @param string $PaymentCode
     * @param string $FreeFormText
     * @param LineItem[] $LineItems
     * @access public
     */
    public function __construct($InvoiceNumber, $InvoiceDate, $InvoiceAmount, $Description, $UserDefinedFields, $ReferenceNumber, $PaymentCode, $FreeFormText, $LineItems)
    {
      $this->InvoiceNumber = $InvoiceNumber;
      $this->InvoiceDate = $InvoiceDate;
      $this->InvoiceAmount = $InvoiceAmount;
      $this->Description = $Description;
      $this->UserDefinedFields = $UserDefinedFields;
      $this->ReferenceNumber = $ReferenceNumber;
      $this->PaymentCode = $PaymentCode;
      $this->FreeFormText = $FreeFormText;
      $this->LineItems = $LineItems;
    }

}
