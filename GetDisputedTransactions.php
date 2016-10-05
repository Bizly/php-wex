<?php

namespace BizlyLabsWex;

class GetDisputedTransactions
{

    /**
     * @var User $user
     * @access public
     */
    public $user = null;

    /**
     * @var DisputedAccountActivityRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param User $user
     * @param DisputedAccountActivityRequest $request
     * @access public
     */
    public function __construct($user, $request)
    {
      $this->user = $user;
      $this->request = $request;
    }

}
