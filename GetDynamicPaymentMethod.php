<?php

namespace BizlyLabs/Wex;

class GetDynamicPaymentMethod
{

    /**
     * @var User $user
     * @access public
     */
    public $user = null;

    /**
     * @var GetDynamicPaymentMethodRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param User $user
     * @param GetDynamicPaymentMethodRequest $request
     * @access public
     */
    public function __construct($user, $request)
    {
      $this->user = $user;
      $this->request = $request;
    }

}
