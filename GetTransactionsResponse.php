<?php

class GetTransactionsResponse
{

    /**
     * @var TransactionsResponse $GetTransactionsResult
     * @access public
     */
    public $GetTransactionsResult = null;

    /**
     * @param TransactionsResponse $GetTransactionsResult
     * @access public
     */
    public function __construct($GetTransactionsResult)
    {
      $this->GetTransactionsResult = $GetTransactionsResult;
    }

}
