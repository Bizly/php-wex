<?php

namespace BizlyLabsWex;

class RetrieveMerchant
{

    /**
     * @var User $user
     * @access public
     */
    public $user = null;

    /**
     * @var MerchantRetrieveRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param User $user
     * @param MerchantRetrieveRequest $request
     * @access public
     */
    public function __construct($user, $request)
    {
      $this->user = $user;
      $this->request = $request;
    }

}
