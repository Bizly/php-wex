<?php

class GetPaymentInformationUrl
{

    /**
     * @var User $user
     * @access public
     */
    public $user = null;

    /**
     * @var GetPaymentInformationUrlRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param User $user
     * @param GetPaymentInformationUrlRequest $request
     * @access public
     */
    public function __construct($user, $request)
    {
      $this->user = $user;
      $this->request = $request;
    }

}
