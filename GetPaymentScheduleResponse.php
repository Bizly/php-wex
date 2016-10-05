<?php

namespace BizlyLabs\Wex;

class GetPaymentScheduleResponse
{

    /**
     * @var MerchantLogResponseCodeEnum $ResponseCode
     * @access public
     */
    public $ResponseCode = null;

    /**
     * @var string $Description
     * @access public
     */
    public $Description = null;

    /**
     * @var PaymentScheduleItemResponse[] $PaymentSchedule
     * @access public
     */
    public $PaymentSchedule = null;

    /**
     * @param MerchantLogResponseCodeEnum $ResponseCode
     * @param string $Description
     * @param PaymentScheduleItemResponse[] $PaymentSchedule
     * @access public
     */
    public function __construct($ResponseCode, $Description, $PaymentSchedule)
    {
      $this->ResponseCode = $ResponseCode;
      $this->Description = $Description;
      $this->PaymentSchedule = $PaymentSchedule;
    }

}
