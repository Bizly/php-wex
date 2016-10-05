<?php

namespace BizlyLabs\Wex;

class RetrieveMerchantLogHistoryResponse
{

    /**
     * @var MerchantLogHistoryResponse $RetrieveMerchantLogHistoryResult
     * @access public
     */
    public $RetrieveMerchantLogHistoryResult = null;

    /**
     * @param MerchantLogHistoryResponse $RetrieveMerchantLogHistoryResult
     * @access public
     */
    public function __construct($RetrieveMerchantLogHistoryResult)
    {
      $this->RetrieveMerchantLogHistoryResult = $RetrieveMerchantLogHistoryResult;
    }

}
