<?php

namespace BizlyLabsWex;

class UpdateMerchantLogResponse
{

    /**
     * @var MerchantLogUpdateResponse $UpdateMerchantLogResult
     * @access public
     */
    public $UpdateMerchantLogResult = null;

    /**
     * @param MerchantLogUpdateResponse $UpdateMerchantLogResult
     * @access public
     */
    public function __construct($UpdateMerchantLogResult)
    {
      $this->UpdateMerchantLogResult = $UpdateMerchantLogResult;
    }

}
