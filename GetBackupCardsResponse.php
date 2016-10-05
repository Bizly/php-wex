<?php

namespace BizlyLabsWex;

class GetBackupCardsResponse
{

    /**
     * @var BackupCardResponse $GetBackupCardsResult
     * @access public
     */
    public $GetBackupCardsResult = null;

    /**
     * @param BackupCardResponse $GetBackupCardsResult
     * @access public
     */
    public function __construct($GetBackupCardsResult)
    {
      $this->GetBackupCardsResult = $GetBackupCardsResult;
    }

}
