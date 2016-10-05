<?php

namespace BizlyLabsWex;

class CancelMerchantLog
{

    /**
     * @var User $user
     * @access public
     */
    public $user = null;

    /**
     * @var MerchantLogCancelRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param User $user
     * @param MerchantLogCancelRequest $request
     * @access public
     */
    public function __construct($user, $request)
    {
      $this->user = $user;
      $this->request = $request;
    }

}
