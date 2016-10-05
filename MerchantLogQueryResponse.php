<?php

class MerchantLogQueryResponse
{

    /**
     * @var MerchantLogResponseCodeEnum $ResponseCode
     * @access public
     */
    public $ResponseCode = null;

    /**
     * @var String[] $MerchantLogUniqueIds
     * @access public
     */
    public $MerchantLogUniqueIds = null;

    /**
     * @var string $Description
     * @access public
     */
    public $Description = null;

    /**
     * @param MerchantLogResponseCodeEnum $ResponseCode
     * @param String[] $MerchantLogUniqueIds
     * @param string $Description
     * @access public
     */
    public function __construct($ResponseCode, $MerchantLogUniqueIds, $Description)
    {
      $this->ResponseCode = $ResponseCode;
      $this->MerchantLogUniqueIds = $MerchantLogUniqueIds;
      $this->Description = $Description;
    }

}
