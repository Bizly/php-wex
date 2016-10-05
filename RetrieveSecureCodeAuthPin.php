<?php

class RetrieveSecureCodeAuthPin
{

    /**
     * @var User $user
     * @access public
     */
    public $user = null;

    /**
     * @var RetrieveSecureCodeAuthPinRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param User $user
     * @param RetrieveSecureCodeAuthPinRequest $request
     * @access public
     */
    public function __construct($user, $request)
    {
      $this->user = $user;
      $this->request = $request;
    }

}
