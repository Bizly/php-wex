<?php

class GetPaymentSchedule
{

    /**
     * @var User $user
     * @access public
     */
    public $user = null;

    /**
     * @var GetPaymentScheduleRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param User $user
     * @param GetPaymentScheduleRequest $request
     * @access public
     */
    public function __construct($user, $request)
    {
      $this->user = $user;
      $this->request = $request;
    }

}
