<?php

class FinancialCode
{

    /**
     * @var string $CodeName
     * @access public
     */
    public $CodeName = null;

    /**
     * @var string $ValueAsString
     * @access public
     */
    public $ValueAsString = null;

    /**
     * @param string $CodeName
     * @param string $ValueAsString
     * @access public
     */
    public function __construct($CodeName, $ValueAsString)
    {
      $this->CodeName = $CodeName;
      $this->ValueAsString = $ValueAsString;
    }

}
