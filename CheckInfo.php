<?php

namespace BizlyLabsWex;

class CheckInfo
{

    /**
     * @var string $Payee
     * @access public
     */
    public $Payee = null;

    /**
     * @var string $Address
     * @access public
     */
    public $Address = null;

    /**
     * @var string $Address2
     * @access public
     */
    public $Address2 = null;

    /**
     * @var string $Address3
     * @access public
     */
    public $Address3 = null;

    /**
     * @var string $Address4
     * @access public
     */
    public $Address4 = null;

    /**
     * @var string $City
     * @access public
     */
    public $City = null;

    /**
     * @var string $StateTerritory
     * @access public
     */
    public $StateTerritory = null;

    /**
     * @var string $Zip
     * @access public
     */
    public $Zip = null;

    /**
     * @var string $Country
     * @access public
     */
    public $Country = null;

    /**
     * @var string $Attention
     * @access public
     */
    public $Attention = null;

    /**
     * @param string $Payee
     * @param string $Address
     * @param string $Address2
     * @param string $Address3
     * @param string $Address4
     * @param string $City
     * @param string $StateTerritory
     * @param string $Zip
     * @param string $Country
     * @param string $Attention
     * @access public
     */
    public function __construct($Payee, $Address, $Address2, $Address3, $Address4, $City, $StateTerritory, $Zip, $Country, $Attention)
    {
      $this->Payee = $Payee;
      $this->Address = $Address;
      $this->Address2 = $Address2;
      $this->Address3 = $Address3;
      $this->Address4 = $Address4;
      $this->City = $City;
      $this->StateTerritory = $StateTerritory;
      $this->Zip = $Zip;
      $this->Country = $Country;
      $this->Attention = $Attention;
    }

}
