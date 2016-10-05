<?php

namespace BizlyLabs\Wex;

class UpdateMerchantLog
{

    /**
     * @var User $user
     * @access public
     */
    public $user = null;

    /**
     * @var MerchantLogUpdateRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param User $user
     * @param MerchantLogUpdateRequest $request
     * @access public
     */
    public function __construct($user, $request)
    {
      $this->user = $user;
      $this->request = $request;
    }

}
