<?php

namespace BizlyLabsWex;

class DisputeTransactionResponse
{

    /**
     * @var DisputeTransactionResponseCodeEnum $ResponseCode
     * @access public
     */
    public $ResponseCode = null;

    /**
     * @var string $Description
     * @access public
     */
    public $Description = null;

    /**
     * @param DisputeTransactionResponseCodeEnum $ResponseCode
     * @param string $Description
     * @access public
     */
    public function __construct($ResponseCode, $Description)
    {
      $this->ResponseCode = $ResponseCode;
      $this->Description = $Description;
    }

}
