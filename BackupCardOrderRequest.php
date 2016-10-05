<?php

namespace BizlyLabs\Wex;

class BackupCardOrderRequest
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
     * @var string $OrderID
     * @access public
     */
    public $OrderID = null;

    /**
     * @var BackupCardOrderBlock[] $OrderBlocks
     * @access public
     */
    public $OrderBlocks = null;

    /**
     * @param string $BankNumber
     * @param string $CompanyNumber
     * @param string $OrderID
     * @param BackupCardOrderBlock[] $OrderBlocks
     * @access public
     */
    public function __construct($BankNumber, $CompanyNumber, $OrderID, $OrderBlocks)
    {
      $this->BankNumber = $BankNumber;
      $this->CompanyNumber = $CompanyNumber;
      $this->OrderID = $OrderID;
      $this->OrderBlocks = $OrderBlocks;
    }

}
