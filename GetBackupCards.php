<?php

namespace BizlyLabsWex;

class GetBackupCards
{

    /**
     * @var User $user
     * @access public
     */
    public $user = null;

    /**
     * @var BackupCardOrderRequest $request
     * @access public
     */
    public $request = null;

    /**
     * @param User $user
     * @param BackupCardOrderRequest $request
     * @access public
     */
    public function __construct($user, $request)
    {
      $this->user = $user;
      $this->request = $request;
    }

}
