<?php

namespace BizlyLabs/Wex;

class DeleteInstantApproval
{

    /**
     * @var User $user
     * @access public
     */
    public $user = null;

    /**
     * @var InstantApprovalRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param User $user
     * @param InstantApprovalRequest $request
     * @access public
     */
    public function __construct($user, $request)
    {
      $this->user = $user;
      $this->request = $request;
    }

}
