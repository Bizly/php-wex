<?php

namespace BizlyLabsWex;

class QueryMerchantLogs
{

    /**
     * @var User $user
     * @access public
     */
    public $user = null;

    /**
     * @var MerchantLogQueryRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param User $user
     * @param MerchantLogQueryRequest $request
     * @access public
     */
    public function __construct($user, $request)
    {
      $this->user = $user;
      $this->request = $request;
    }

}
