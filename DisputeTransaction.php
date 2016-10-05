<?php

class DisputeTransaction
{

    /**
     * @var User $user
     * @access public
     */
    public $user = null;

    /**
     * @var DisputeTransactionRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param User $user
     * @param DisputeTransactionRequest $request
     * @access public
     */
    public function __construct($user, $request)
    {
      $this->user = $user;
      $this->request = $request;
    }

}
