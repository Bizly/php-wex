<?php

namespace BizlyLabsWex;

class MerchantSettings
{

    /**
     * @var boolean $UseMerchantLevelOverrides
     * @access public
     */
    public $UseMerchantLevelOverrides = null;

    /**
     * @var int $ExpirationDays
     * @access public
     */
    public $ExpirationDays = null;

    /**
     * @var int $ExpirationReminderDays
     * @access public
     */
    public $ExpirationReminderDays = null;

    /**
     * @var int $AutoReconcilePercentAbove
     * @access public
     */
    public $AutoReconcilePercentAbove = null;

    /**
     * @var int $AutoReconcilePercentBelow
     * @access public
     */
    public $AutoReconcilePercentBelow = null;

    /**
     * @var int $CardLimitPadPercentage
     * @access public
     */
    public $CardLimitPadPercentage = null;

    /**
     * @var boolean $AggregateInvoices
     * @access public
     */
    public $AggregateInvoices = null;

    /**
     * @var boolean $HonorCreditInvoices
     * @access public
     */
    public $HonorCreditInvoices = null;

    /**
     * @var boolean $InvoiceMatching
     * @access public
     */
    public $InvoiceMatching = null;

    /**
     * @var boolean $CriMatch
     * @access public
     */
    public $CriMatch = null;

    /**
     * @var boolean $Level3AugmentData
     * @access public
     */
    public $Level3AugmentData = null;

    /**
     * @access public
     */
    public function __construct()
    {
    
    }

}
