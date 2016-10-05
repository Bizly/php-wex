<?php

namespace BizlyLabs/Wex;

class CardInfo
{

    /**
     * @var string $CardNumber
     * @access public
     */
    public $CardNumber = null;

    /**
     * @var string $CardSecurityCode
     * @access public
     */
    public $CardSecurityCode = null;

    /**
     * @var dateTime $ExpirationDate
     * @access public
     */
    public $ExpirationDate = null;

    /**
     * @var string $EmailPIN
     * @access public
     */
    public $EmailPIN = null;

    /**
     * @param string $CardNumber
     * @param string $CardSecurityCode
     * @param dateTime $ExpirationDate
     * @param string $EmailPIN
     * @access public
     */
    public function __construct($CardNumber, $CardSecurityCode, $ExpirationDate, $EmailPIN)
    {
      $this->CardNumber = $CardNumber;
      $this->CardSecurityCode = $CardSecurityCode;
      $this->ExpirationDate = $ExpirationDate;
      $this->EmailPIN = $EmailPIN;
    }

}
