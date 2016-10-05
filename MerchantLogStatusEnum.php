<?php

namespace BizlyLabs\Wex;

class MerchantLogStatusEnum
{
    const __default = 'Closed';
    const Closed = 'Closed';
    const Open = 'Open';
    const Reconciled = 'Reconciled';
    const Matched = 'Matched';
    const Expired = 'Expired';
    const Error = 'Error';
    const WaitingForApproval = 'WaitingForApproval';
    const Overdrawn = 'Overdrawn';
    const InsufficientFunds = 'InsufficientFunds';


}
