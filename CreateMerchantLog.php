<?php

namespace BizlyLabs\Wex;

class CreateMerchantLog
{

    /**
     * @var User $user
     * @access public
     */
    public $user = null;

    /**
     * @var MerchantLogCreateRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param User $user
     * @param MerchantLogCreateRequest $request
     * @access public
     */
    public function __construct($user, $request)
    {
      $this->user = $user;
      $this->request = $request;
    }

}
