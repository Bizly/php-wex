<?php

namespace BizlyLabsWex;

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
