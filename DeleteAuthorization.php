<?php

class DeleteAuthorization
{

    /**
     * @var User $user
     * @access public
     */
    public $user = null;

    /**
     * @var DeleteAuthorizationRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param User $user
     * @param DeleteAuthorizationRequest $request
     * @access public
     */
    public function __construct($user, $request)
    {
      $this->user = $user;
      $this->request = $request;
    }

}
