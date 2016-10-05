<?php

namespace BizlyLabsWex;

class DisputedAccountActivityRequest
{

    /**
     * @var string $AccountNumber
     * @access public
     */
    public $AccountNumber = null;

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
     * @var boolean $OpenDisputesOnly
     * @access public
     */
    public $OpenDisputesOnly = null;

    /**
     * @var dateTime $CreatedDate
     * @access public
     */
    public $CreatedDate = null;

    /**
     * @var dateTime $CreatedDate2
     * @access public
     */
    public $CreatedDate2 = null;

    /**
     * @param string $AccountNumber
     * @param string $BankNumber
     * @param string $CompanyNumber
     * @access public
     */
    public function __construct($AccountNumber, $BankNumber, $CompanyNumber)
    {
      $this->AccountNumber = $AccountNumber;
      $this->BankNumber = $BankNumber;
      $this->CompanyNumber = $CompanyNumber;
    }

}
