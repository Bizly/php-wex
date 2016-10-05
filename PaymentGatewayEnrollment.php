<?php

class PaymentGatewayEnrollment
{

    /**
     * @var string $FirstName
     * @access public
     */
    public $FirstName = null;

    /**
     * @var string $LastName
     * @access public
     */
    public $LastName = null;

    /**
     * @var string $MCC
     * @access public
     */
    public $MCC = null;

    /**
     * @var string $DBA
     * @access public
     */
    public $DBA = null;

    /**
     * @var PaymentGatewayProcessingBank $ProcessingBank
     * @access public
     */
    public $ProcessingBank = null;

    /**
     * @var string $MerchantNumber
     * @access public
     */
    public $MerchantNumber = null;

    /**
     * @var string $BankIdNumber
     * @access public
     */
    public $BankIdNumber = null;

    /**
     * @var string $ChainCode
     * @access public
     */
    public $ChainCode = null;

    /**
     * @var string $StoreNumber
     * @access public
     */
    public $StoreNumber = null;

    /**
     * @var string $TerminalNumber
     * @access public
     */
    public $TerminalNumber = null;

    /**
     * @var string $TerminalIdentificationNumber
     * @access public
     */
    public $TerminalIdentificationNumber = null;

    /**
     * @var string $CityCode
     * @access public
     */
    public $CityCode = null;

    /**
     * @var string $MerchantLocationNumber
     * @access public
     */
    public $MerchantLocationNumber = null;

    /**
     * @var string $AgentNumber
     * @access public
     */
    public $AgentNumber = null;

    /**
     * @param string $FirstName
     * @param string $LastName
     * @param string $MCC
     * @param string $DBA
     * @param PaymentGatewayProcessingBank $ProcessingBank
     * @param string $MerchantNumber
     * @param string $BankIdNumber
     * @param string $ChainCode
     * @param string $StoreNumber
     * @param string $TerminalNumber
     * @param string $TerminalIdentificationNumber
     * @param string $CityCode
     * @param string $MerchantLocationNumber
     * @param string $AgentNumber
     * @access public
     */
    public function __construct($FirstName, $LastName, $MCC, $DBA, $ProcessingBank, $MerchantNumber, $BankIdNumber, $ChainCode, $StoreNumber, $TerminalNumber, $TerminalIdentificationNumber, $CityCode, $MerchantLocationNumber, $AgentNumber)
    {
      $this->FirstName = $FirstName;
      $this->LastName = $LastName;
      $this->MCC = $MCC;
      $this->DBA = $DBA;
      $this->ProcessingBank = $ProcessingBank;
      $this->MerchantNumber = $MerchantNumber;
      $this->BankIdNumber = $BankIdNumber;
      $this->ChainCode = $ChainCode;
      $this->StoreNumber = $StoreNumber;
      $this->TerminalNumber = $TerminalNumber;
      $this->TerminalIdentificationNumber = $TerminalIdentificationNumber;
      $this->CityCode = $CityCode;
      $this->MerchantLocationNumber = $MerchantLocationNumber;
      $this->AgentNumber = $AgentNumber;
    }

}
