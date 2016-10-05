<?php

namespace BizlyLabs\Wex;

class UserDefinedField
{

    /**
     * @var string $FieldName
     * @access public
     */
    public $FieldName = null;

    /**
     * @var string $ValueAsString
     * @access public
     */
    public $ValueAsString = null;

    /**
     * @param string $FieldName
     * @param string $ValueAsString
     * @access public
     */
    public function __construct($FieldName, $ValueAsString)
    {
      $this->FieldName = $FieldName;
      $this->ValueAsString = $ValueAsString;
    }

}
