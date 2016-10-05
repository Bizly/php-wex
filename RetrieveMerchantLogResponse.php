<?php

namespace BizlyLabsWex;

class RetrieveMerchantLogResponse
{

    /**
     * @var MerchantLogRetrieveResponse $RetrieveMerchantLogResult
     * @access public
     */
    public $RetrieveMerchantLogResult = null;

    /**
     * @param MerchantLogRetrieveResponse $RetrieveMerchantLogResult
     * @access public
     */
    public function __construct($RetrieveMerchantLogResult)
    {
      $this->RetrieveMerchantLogResult = $RetrieveMerchantLogResult;
    }

}
