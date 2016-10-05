<?php

namespace BizlyLabsWex;

class GetTransactions
{

    /**
     * @var User $user
     * @access public
     */
    public $user = null;

    /**
     * @var GetRecentAccountActivityRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param User $user
     * @param GetRecentAccountActivityRequest $request
     * @access public
     */
    public function __construct($user, $request)
    {
      $this->user = $user;
      $this->request = $request;
    }

}
