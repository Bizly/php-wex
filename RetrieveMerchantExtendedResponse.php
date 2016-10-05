<?php

class RetrieveMerchantExtendedResponse
{

    /**
     * @var MerchantRetrieveExtendedResponse $RetrieveMerchantExtendedResult
     * @access public
     */
    public $RetrieveMerchantExtendedResult = null;

    /**
     * @param MerchantRetrieveExtendedResponse $RetrieveMerchantExtendedResult
     * @access public
     */
    public function __construct($RetrieveMerchantExtendedResult)
    {
      $this->RetrieveMerchantExtendedResult = $RetrieveMerchantExtendedResult;
    }

}
