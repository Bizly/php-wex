<?php

namespace BizlyLabs/Wex;

class DeleteInstantApprovalResponse
{

    /**
     * @var InstantApprovalResponse $DeleteInstantApprovalResult
     * @access public
     */
    public $DeleteInstantApprovalResult = null;

    /**
     * @param InstantApprovalResponse $DeleteInstantApprovalResult
     * @access public
     */
    public function __construct($DeleteInstantApprovalResult)
    {
      $this->DeleteInstantApprovalResult = $DeleteInstantApprovalResult;
    }

}
