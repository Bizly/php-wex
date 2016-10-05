<?php

class GetDisputedTransactionsResponse
{

    /**
     * @var DisputedTransactionsResponse $GetDisputedTransactionsResult
     * @access public
     */
    public $GetDisputedTransactionsResult = null;

    /**
     * @param DisputedTransactionsResponse $GetDisputedTransactionsResult
     * @access public
     */
    public function __construct($GetDisputedTransactionsResult)
    {
      $this->GetDisputedTransactionsResult = $GetDisputedTransactionsResult;
    }

}
