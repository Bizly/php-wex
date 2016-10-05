<?php

class UpdateMerchant
{

    /**
     * @var User $user
     * @access public
     */
    public $user = null;

    /**
     * @var MerchantRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param User $user
     * @param MerchantRequest $request
     * @access public
     */
    public function __construct($user, $request)
    {
      $this->user = $user;
      $this->request = $request;
    }

}
