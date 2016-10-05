<?php

class ResendNotification
{

    /**
     * @var User $user
     * @access public
     */
    public $user = null;

    /**
     * @var ResendNotificationRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param User $user
     * @param ResendNotificationRequest $request
     * @access public
     */
    public function __construct($user, $request)
    {
      $this->user = $user;
      $this->request = $request;
    }

}
