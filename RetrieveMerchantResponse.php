<?php

namespace BizlyLabs\Wex;

class RetrieveMerchantResponse
{

    /**
     * @var MerchantRetrieveResponse $RetrieveMerchantResult
     * @access public
     */
    public $RetrieveMerchantResult = null;

    /**
     * @param MerchantRetrieveResponse $RetrieveMerchantResult
     * @access public
     */
    public function __construct($RetrieveMerchantResult)
    {
      $this->RetrieveMerchantResult = $RetrieveMerchantResult;
    }

}
