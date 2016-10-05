<?php

namespace BizlyLabsWex;

class LineItem
{

    /**
     * @var float $ItemAmount
     * @access public
     */
    public $ItemAmount = null;

    /**
     * @var string $Description
     * @access public
     */
    public $Description = null;

    /**
     * @var int $Quantity
     * @access public
     */
    public $Quantity = null;

    /**
     * @var string $UnitOfMeasure
     * @access public
     */
    public $UnitOfMeasure = null;

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
     * @var string $ProductCode
     * @access public
     */
    public $ProductCode = null;

    /**
     * @var String[] $FinancialCodes
     * @access public
     */
    public $FinancialCodes = null;

    /**
     * @var UserDefinedField[] $UserDefinedFields
     * @access public
     */
    public $UserDefinedFields = null;

    /**
     * @param float $ItemAmount
     * @param string $Description
     * @param string $UnitOfMeasure
     * @param string $ProductCode
     * @param String[] $FinancialCodes
     * @param UserDefinedField[] $UserDefinedFields
     * @access public
     */
    public function __construct($ItemAmount, $Description, $UnitOfMeasure, $ProductCode, $FinancialCodes, $UserDefinedFields)
    {
      $this->ItemAmount = $ItemAmount;
      $this->Description = $Description;
      $this->UnitOfMeasure = $UnitOfMeasure;
      $this->ProductCode = $ProductCode;
      $this->FinancialCodes = $FinancialCodes;
      $this->UserDefinedFields = $UserDefinedFields;
    }

}
