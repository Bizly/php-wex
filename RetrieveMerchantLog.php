<?php

namespace BizlyLabsWex;

class RetrieveMerchantLog
{

    /**
     * @var User $user
     * @access public
     */
    public $user = null;

    /**
     * @var MerchantLogRetrieveRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param User $user
     * @param MerchantLogRetrieveRequest $request
     * @access public
     */
    public function __construct($user, $request)
    {
      $this->user = $user;
      $this->request = $request;
    }

}
