<?php

namespace BizlyLabsWex;

class QueryMerchantLogsResponse
{

    /**
     * @var MerchantLogQueryResponse $QueryMerchantLogsResult
     * @access public
     */
    public $QueryMerchantLogsResult = null;

    /**
     * @param MerchantLogQueryResponse $QueryMerchantLogsResult
     * @access public
     */
    public function __construct($QueryMerchantLogsResult)
    {
      $this->QueryMerchantLogsResult = $QueryMerchantLogsResult;
    }

}
