<?php

namespace BizlyLabsWex;

class BackupCardResponse
{

    /**
     * @var string $OrderID
     * @access public
     */
    public $OrderID = null;

    /**
     * @var BackupCardInternational[] $BackupCards
     * @access public
     */
    public $BackupCards = null;

    /**
     * @var BackupCardResponseCode $ResponseCode
     * @access public
     */
    public $ResponseCode = null;

    /**
     * @var string $Description
     * @access public
     */
    public $Description = null;

    /**
     * @param string $OrderID
     * @param BackupCardInternational[] $BackupCards
     * @param BackupCardResponseCode $ResponseCode
     * @param string $Description
     * @access public
     */
    public function __construct($OrderID, $BackupCards, $ResponseCode, $Description)
    {
      $this->OrderID = $OrderID;
      $this->BackupCards = $BackupCards;
      $this->ResponseCode = $ResponseCode;
      $this->Description = $Description;
    }

}
