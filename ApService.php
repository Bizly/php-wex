<?php

namespace BizlyLabsWex;

include_once('CreateMerchantLog.php');
include_once('User.php');
include_once('MerchantLogCreateRequest.php');
include_once('Invoice.php');
include_once('UserDefinedField.php');
include_once('LineItem.php');
include_once('FinancialCode.php');
include_once('DeliveryMethodEnum.php');
include_once('PaymentScheduleItem.php');
include_once('MerchantPaymentTypeEnum.php');
include_once('ElectronicFundsTransferInfo.php');
include_once('AchCreditFormatEnum.php');
include_once('CheckInfo.php');
include_once('CreateMerchantLogResponse.php');
include_once('MerchantLogCreateResponse.php');
include_once('MerchantLogResponseCodeEnum.php');
include_once('CardInfo.php');
include_once('UpdateMerchantLog.php');
include_once('MerchantLogUpdateRequest.php');
include_once('UpdateMerchantLogResponse.php');
include_once('MerchantLogUpdateResponse.php');
include_once('RetrieveMerchantLog.php');
include_once('MerchantLogRetrieveRequest.php');
include_once('RetrieveMerchantLogResponse.php');
include_once('MerchantLogRetrieveResponse.php');
include_once('MerchantLog.php');
include_once('MerchantLogStatusEnum.php');
include_once('ReconciliationTypeEnum.php');
include_once('CancelMerchantLog.php');
include_once('MerchantLogCancelRequest.php');
include_once('CancelMerchantLogResponse.php');
include_once('MerchantLogCancelResponse.php');
include_once('GetRecentAccountActivity.php');
include_once('GetRecentAccountActivityRequest.php');
include_once('GetRecentAccountActivityResponse.php');
include_once('Authorization.php');
include_once('GetRecentAccountActivityInternational.php');
include_once('GetRecentAccountActivityInternationalResponse.php');
include_once('InternationalAuthorization.php');
include_once('CreateMerchant.php');
include_once('MerchantRequest.php');
include_once('MerchantPaymentMethodItem.php');
include_once('NotificationMethodEnum.php');
include_once('MerchantTriState.php');
include_once('PaymentGatewayEnrollment.php');
include_once('PaymentGatewayProcessingBank.php');
include_once('MerchantStatusEnum.php');
include_once('MerchantSettings.php');
include_once('CreateMerchantResponse.php');
include_once('MerchantResponse.php');
include_once('CreateMerchantExtended.php');
include_once('CreateMerchantExtendedResponse.php');
include_once('CreateMerchantResponseWithUniqueId.php');
include_once('UpdateMerchant.php');
include_once('UpdateMerchantResponse.php');
include_once('RetrieveMerchant.php');
include_once('MerchantRetrieveRequest.php');
include_once('RetrieveMerchantResponse.php');
include_once('MerchantRetrieveResponse.php');
include_once('RetrieveMerchantLogHistory.php');
include_once('RetrieveMerchantLogHistoryResponse.php');
include_once('MerchantLogHistoryResponse.php');
include_once('MerchantLogHistory.php');
include_once('QueryMerchantLogs.php');
include_once('MerchantLogQueryRequest.php');
include_once('QueryMerchantLogsResponse.php');
include_once('MerchantLogQueryResponse.php');
include_once('GetBackupCards.php');
include_once('BackupCardOrderRequest.php');
include_once('BackupCardOrderBlock.php');
include_once('GetBackupCardsResponse.php');
include_once('BackupCardResponse.php');
include_once('BackupCardInternational.php');
include_once('BackupCardResponseCode.php');
include_once('InstantApproval.php');
include_once('InstantApprovalRequest.php');
include_once('InstantApprovalResponse.php');
include_once('DeleteInstantApproval.php');
include_once('DeleteInstantApprovalResponse.php');
include_once('DeleteAuthorization.php');
include_once('DeleteAuthorizationRequest.php');
include_once('DeleteAuthorizationResponse.php');
include_once('ResendNotification.php');
include_once('ResendNotificationRequest.php');
include_once('ResendNotificationResponse.php');
include_once('GetPaymentInformationUrl.php');
include_once('GetPaymentInformationUrlRequest.php');
include_once('GetPaymentInformationUrlResponse.php');
include_once('GetTransactions.php');
include_once('GetTransactionsResponse.php');
include_once('TransactionsResponse.php');
include_once('Transaction.php');
include_once('GetDisputedTransactions.php');
include_once('DisputedAccountActivityRequest.php');
include_once('GetDisputedTransactionsResponse.php');
include_once('DisputedTransactionsResponse.php');
include_once('DisputedTransaction.php');
include_once('DisputeTransaction.php');
include_once('DisputeTransactionRequest.php');
include_once('DisputeTransactionReasonEnum.php');
include_once('DisputeTransactionResponse.php');
include_once('DisputeTransactionResponseCodeEnum.php');
include_once('RetrieveSecureCodeAuthPin.php');
include_once('RetrieveSecureCodeAuthPinRequest.php');
include_once('RetrieveSecureCodeAuthPinResponse.php');
include_once('GetPaymentSchedule.php');
include_once('GetPaymentScheduleRequest.php');
include_once('GetPaymentScheduleResponse.php');
include_once('PaymentScheduleItemResponse.php');
include_once('GetTransactionsInternational.php');
include_once('GetTransactionsInternationalResponse.php');
include_once('TransactionInternational.php');
include_once('GetDynamicPaymentMethod.php');
include_once('GetDynamicPaymentMethodRequest.php');
include_once('GetDynamicPaymentMethodResponse.php');
include_once('RetrieveMerchantExtended.php');
include_once('RetrieveMerchantExtendedResponse.php');
include_once('MerchantRetrieveExtendedResponse.php');
include_once('MerchantPaymentMethodResponseItem.php');


/**
 * A web service for submitting merchant logs to Encompass.
 */
class ApService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
      'CreateMerchantLog' => 'BizlyLabsWex\CreateMerchantLog',
      'User' => 'BizlyLabsWex\User',
      'MerchantLogCreateRequest' => 'BizlyLabsWex\MerchantLogCreateRequest',
      'Invoice' => 'BizlyLabsWex\Invoice',
      'UserDefinedField' => 'BizlyLabsWex\UserDefinedField',
      'LineItem' => 'BizlyLabsWex\LineItem',
      'FinancialCode' => 'BizlyLabsWex\FinancialCode',
      'PaymentScheduleItem' => 'BizlyLabsWex\PaymentScheduleItem',
      'ElectronicFundsTransferInfo' => 'BizlyLabsWex\ElectronicFundsTransferInfo',
      'CheckInfo' => 'BizlyLabsWex\CheckInfo',
      'CreateMerchantLogResponse' => 'BizlyLabsWex\CreateMerchantLogResponse',
      'MerchantLogCreateResponse' => 'BizlyLabsWex\MerchantLogCreateResponse',
      'CardInfo' => 'BizlyLabsWex\CardInfo',
      'UpdateMerchantLog' => 'BizlyLabsWex\UpdateMerchantLog',
      'MerchantLogUpdateRequest' => 'BizlyLabsWex\MerchantLogUpdateRequest',
      'UpdateMerchantLogResponse' => 'BizlyLabsWex\UpdateMerchantLogResponse',
      'MerchantLogUpdateResponse' => 'BizlyLabsWex\MerchantLogUpdateResponse',
      'RetrieveMerchantLog' => 'BizlyLabsWex\RetrieveMerchantLog',
      'MerchantLogRetrieveRequest' => 'BizlyLabsWex\MerchantLogRetrieveRequest',
      'RetrieveMerchantLogResponse' => 'BizlyLabsWex\RetrieveMerchantLogResponse',
      'MerchantLogRetrieveResponse' => 'BizlyLabsWex\MerchantLogRetrieveResponse',
      'MerchantLog' => 'BizlyLabsWex\MerchantLog',
      'CancelMerchantLog' => 'BizlyLabsWex\CancelMerchantLog',
      'MerchantLogCancelRequest' => 'BizlyLabsWex\MerchantLogCancelRequest',
      'CancelMerchantLogResponse' => 'BizlyLabsWex\CancelMerchantLogResponse',
      'MerchantLogCancelResponse' => 'BizlyLabsWex\MerchantLogCancelResponse',
      'GetRecentAccountActivity' => 'BizlyLabsWex\GetRecentAccountActivity',
      'GetRecentAccountActivityRequest' => 'BizlyLabsWex\GetRecentAccountActivityRequest',
      'GetRecentAccountActivityResponse' => 'BizlyLabsWex\GetRecentAccountActivityResponse',
      'Authorization' => 'BizlyLabsWex\Authorization',
      'GetRecentAccountActivityInternational' => 'BizlyLabsWex\GetRecentAccountActivityInternational',
      'GetRecentAccountActivityInternationalResponse' => 'BizlyLabsWex\GetRecentAccountActivityInternationalResponse',
      'InternationalAuthorization' => 'BizlyLabsWex\InternationalAuthorization',
      'CreateMerchant' => 'BizlyLabsWex\CreateMerchant',
      'MerchantRequest' => 'BizlyLabsWex\MerchantRequest',
      'MerchantPaymentMethodItem' => 'BizlyLabsWex\MerchantPaymentMethodItem',
      'PaymentGatewayEnrollment' => 'BizlyLabsWex\PaymentGatewayEnrollment',
      'MerchantSettings' => 'BizlyLabsWex\MerchantSettings',
      'CreateMerchantResponse' => 'BizlyLabsWex\CreateMerchantResponse',
      'MerchantResponse' => 'BizlyLabsWex\MerchantResponse',
      'CreateMerchantExtended' => 'BizlyLabsWex\CreateMerchantExtended',
      'CreateMerchantExtendedResponse' => 'BizlyLabsWex\CreateMerchantExtendedResponse',
      'CreateMerchantResponseWithUniqueId' => 'BizlyLabsWex\CreateMerchantResponseWithUniqueId',
      'UpdateMerchant' => 'BizlyLabsWex\UpdateMerchant',
      'UpdateMerchantResponse' => 'BizlyLabsWex\UpdateMerchantResponse',
      'RetrieveMerchant' => 'BizlyLabsWex\RetrieveMerchant',
      'MerchantRetrieveRequest' => 'BizlyLabsWex\MerchantRetrieveRequest',
      'RetrieveMerchantResponse' => 'BizlyLabsWex\RetrieveMerchantResponse',
      'MerchantRetrieveResponse' => 'BizlyLabsWex\MerchantRetrieveResponse',
      'RetrieveMerchantLogHistory' => 'BizlyLabsWex\RetrieveMerchantLogHistory',
      'RetrieveMerchantLogHistoryResponse' => 'BizlyLabsWex\RetrieveMerchantLogHistoryResponse',
      'MerchantLogHistoryResponse' => 'BizlyLabsWex\MerchantLogHistoryResponse',
      'MerchantLogHistory' => 'BizlyLabsWex\MerchantLogHistory',
      'QueryMerchantLogs' => 'BizlyLabsWex\QueryMerchantLogs',
      'MerchantLogQueryRequest' => 'BizlyLabsWex\MerchantLogQueryRequest',
      'QueryMerchantLogsResponse' => 'BizlyLabsWex\QueryMerchantLogsResponse',
      'MerchantLogQueryResponse' => 'BizlyLabsWex\MerchantLogQueryResponse',
      'GetBackupCards' => 'BizlyLabsWex\GetBackupCards',
      'BackupCardOrderRequest' => 'BizlyLabsWex\BackupCardOrderRequest',
      'BackupCardOrderBlock' => 'BizlyLabsWex\BackupCardOrderBlock',
      'GetBackupCardsResponse' => 'BizlyLabsWex\GetBackupCardsResponse',
      'BackupCardResponse' => 'BizlyLabsWex\BackupCardResponse',
      'BackupCardInternational' => 'BizlyLabsWex\BackupCardInternational',
      'InstantApproval' => 'BizlyLabsWex\InstantApproval',
      'InstantApprovalRequest' => 'BizlyLabsWex\InstantApprovalRequest',
      'InstantApprovalResponse' => 'BizlyLabsWex\InstantApprovalResponse',
      'DeleteInstantApproval' => 'BizlyLabsWex\DeleteInstantApproval',
      'DeleteInstantApprovalResponse' => 'BizlyLabsWex\DeleteInstantApprovalResponse',
      'DeleteAuthorization' => 'BizlyLabsWex\DeleteAuthorization',
      'DeleteAuthorizationRequest' => 'BizlyLabsWex\DeleteAuthorizationRequest',
      'DeleteAuthorizationResponse' => 'BizlyLabsWex\DeleteAuthorizationResponse',
      'ResendNotification' => 'BizlyLabsWex\ResendNotification',
      'ResendNotificationRequest' => 'BizlyLabsWex\ResendNotificationRequest',
      'ResendNotificationResponse' => 'BizlyLabsWex\ResendNotificationResponse',
      'GetPaymentInformationUrl' => 'BizlyLabsWex\GetPaymentInformationUrl',
      'GetPaymentInformationUrlRequest' => 'BizlyLabsWex\GetPaymentInformationUrlRequest',
      'GetPaymentInformationUrlResponse' => 'BizlyLabsWex\GetPaymentInformationUrlResponse',
      'GetTransactions' => 'BizlyLabsWex\GetTransactions',
      'GetTransactionsResponse' => 'BizlyLabsWex\GetTransactionsResponse',
      'TransactionsResponse' => 'BizlyLabsWex\TransactionsResponse',
      'Transaction' => 'BizlyLabsWex\Transaction',
      'GetDisputedTransactions' => 'BizlyLabsWex\GetDisputedTransactions',
      'DisputedAccountActivityRequest' => 'BizlyLabsWex\DisputedAccountActivityRequest',
      'GetDisputedTransactionsResponse' => 'BizlyLabsWex\GetDisputedTransactionsResponse',
      'DisputedTransactionsResponse' => 'BizlyLabsWex\DisputedTransactionsResponse',
      'DisputedTransaction' => 'BizlyLabsWex\DisputedTransaction',
      'DisputeTransaction' => 'BizlyLabsWex\DisputeTransaction',
      'DisputeTransactionRequest' => 'BizlyLabsWex\DisputeTransactionRequest',
      'DisputeTransactionResponse' => 'BizlyLabsWex\DisputeTransactionResponse',
      'RetrieveSecureCodeAuthPin' => 'BizlyLabsWex\RetrieveSecureCodeAuthPin',
      'RetrieveSecureCodeAuthPinRequest' => 'BizlyLabsWex\RetrieveSecureCodeAuthPinRequest',
      'RetrieveSecureCodeAuthPinResponse' => 'BizlyLabsWex\RetrieveSecureCodeAuthPinResponse',
      'GetPaymentSchedule' => 'BizlyLabsWex\GetPaymentSchedule',
      'GetPaymentScheduleRequest' => 'BizlyLabsWex\GetPaymentScheduleRequest',
      'GetPaymentScheduleResponse' => 'BizlyLabsWex\GetPaymentScheduleResponse',
      'PaymentScheduleItemResponse' => 'BizlyLabsWex\PaymentScheduleItemResponse',
      'GetTransactionsInternational' => 'BizlyLabsWex\GetTransactionsInternational',
      'GetTransactionsInternationalResponse' => 'BizlyLabsWex\GetTransactionsInternationalResponse',
      'TransactionInternational' => 'BizlyLabsWex\TransactionInternational',
      'GetDynamicPaymentMethod' => 'BizlyLabsWex\GetDynamicPaymentMethod',
      'GetDynamicPaymentMethodRequest' => 'BizlyLabsWex\GetDynamicPaymentMethodRequest',
      'GetDynamicPaymentMethodResponse' => 'BizlyLabsWex\GetDynamicPaymentMethodResponse',
      'RetrieveMerchantExtended' => 'BizlyLabsWex\RetrieveMerchantExtended',
      'RetrieveMerchantExtendedResponse' => 'BizlyLabsWex\RetrieveMerchantExtendedResponse',
      'MerchantRetrieveExtendedResponse' => 'BizlyLabsWex\MerchantRetrieveExtendedResponse',
      'MerchantPaymentMethodResponseItem' => 'BizlyLabsWex\MerchantPaymentMethodResponseItem');

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = 'https://demoservices.wrightexpresscorpcard.com/services/apService.asmx?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      
      parent::__construct($wsdl, $options);
    }

    /**
     * Submit a merchant log for AP processing.
     *
     * @param CreateMerchantLog $parameters
     * @access public
     * @return CreateMerchantLogResponse
     */
    public function CreateMerchantLog(CreateMerchantLog $parameters)
    {
      return $this->__soapCall('CreateMerchantLog', array($parameters));
    }

    /**
     * Update an existing merchant log.
     *
     * @param UpdateMerchantLog $parameters
     * @access public
     * @return UpdateMerchantLogResponse
     */
    public function UpdateMerchantLog(UpdateMerchantLog $parameters)
    {
      return $this->__soapCall('UpdateMerchantLog', array($parameters));
    }

    /**
     * Retrieve a merchant log.
     *
     * @param RetrieveMerchantLog $parameters
     * @access public
     * @return RetrieveMerchantLogResponse
     */
    public function RetrieveMerchantLog(RetrieveMerchantLog $parameters)
    {
      return $this->__soapCall('RetrieveMerchantLog', array($parameters));
    }

    /**
     * Cancel a merchant log.
     *
     * @param CancelMerchantLog $parameters
     * @access public
     * @return CancelMerchantLogResponse
     */
    public function CancelMerchantLog(CancelMerchantLog $parameters)
    {
      return $this->__soapCall('CancelMerchantLog', array($parameters));
    }

    /**
     * Get near real-time account activity by merchant log unique id or account number.
     *
     * @param GetRecentAccountActivity $parameters
     * @access public
     * @return GetRecentAccountActivityResponse
     */
    public function GetRecentAccountActivity(GetRecentAccountActivity $parameters)
    {
      return $this->__soapCall('GetRecentAccountActivity', array($parameters));
    }

    /**
     * Get near real-time international account activity by merchant log unique id or account number.
     *
     * @param GetRecentAccountActivityInternational $parameters
     * @access public
     * @return GetRecentAccountActivityInternationalResponse
     */
    public function GetRecentAccountActivityInternational(GetRecentAccountActivityInternational $parameters)
    {
      return $this->__soapCall('GetRecentAccountActivityInternational', array($parameters));
    }

    /**
     * Create a merchant.
     *
     * @param CreateMerchant $parameters
     * @access public
     * @return CreateMerchantResponse
     */
    public function CreateMerchant(CreateMerchant $parameters)
    {
      return $this->__soapCall('CreateMerchant', array($parameters));
    }

    /**
     * Create a merchant and get UniqueId in response.
     *
     * @param CreateMerchantExtended $parameters
     * @access public
     * @return CreateMerchantExtendedResponse
     */
    public function CreateMerchantExtended(CreateMerchantExtended $parameters)
    {
      return $this->__soapCall('CreateMerchantExtended', array($parameters));
    }

    /**
     * Update a merchant.
     *
     * @param UpdateMerchant $parameters
     * @access public
     * @return UpdateMerchantResponse
     */
    public function UpdateMerchant(UpdateMerchant $parameters)
    {
      return $this->__soapCall('UpdateMerchant', array($parameters));
    }

    /**
     * Retrieve a merchant.
     *
     * @param RetrieveMerchant $parameters
     * @access public
     * @return RetrieveMerchantResponse
     */
    public function RetrieveMerchant(RetrieveMerchant $parameters)
    {
      return $this->__soapCall('RetrieveMerchant', array($parameters));
    }

    /**
     * Retrieve a list of changes made to a merchant log.
     *
     * @param RetrieveMerchantLogHistory $parameters
     * @access public
     * @return RetrieveMerchantLogHistoryResponse
     */
    public function RetrieveMerchantLogHistory(RetrieveMerchantLogHistory $parameters)
    {
      return $this->__soapCall('RetrieveMerchantLogHistory', array($parameters));
    }

    /**
     * Query merchant logs.
     *
     * @param QueryMerchantLogs $parameters
     * @access public
     * @return QueryMerchantLogsResponse
     */
    public function QueryMerchantLogs(QueryMerchantLogs $parameters)
    {
      return $this->__soapCall('QueryMerchantLogs', array($parameters));
    }

    /**
     * Get backup cards.
     *
     * @param GetBackupCards $parameters
     * @access public
     * @return GetBackupCardsResponse
     */
    public function GetBackupCards(GetBackupCards $parameters)
    {
      return $this->__soapCall('GetBackupCards', array($parameters));
    }

    /**
     * Activate Instant Approval for an account.
     *
     * @param InstantApproval $parameters
     * @access public
     * @return InstantApprovalResponse
     */
    public function InstantApproval(InstantApproval $parameters)
    {
      return $this->__soapCall('InstantApproval', array($parameters));
    }

    /**
     * Delete Instant Approval from account.
     *
     * @param DeleteInstantApproval $parameters
     * @access public
     * @return DeleteInstantApprovalResponse
     */
    public function DeleteInstantApproval(DeleteInstantApproval $parameters)
    {
      return $this->__soapCall('DeleteInstantApproval', array($parameters));
    }

    /**
     * Delete Authorization from account.
     *
     * @param DeleteAuthorization $parameters
     * @access public
     * @return DeleteAuthorizationResponse
     */
    public function DeleteAuthorization(DeleteAuthorization $parameters)
    {
      return $this->__soapCall('DeleteAuthorization', array($parameters));
    }

    /**
     * Resend a Notification.
     *
     * @param ResendNotification $parameters
     * @access public
     * @return ResendNotificationResponse
     */
    public function ResendNotification(ResendNotification $parameters)
    {
      return $this->__soapCall('ResendNotification', array($parameters));
    }

    /**
     * Get payment information URL.
     *
     * @param GetPaymentInformationUrl $parameters
     * @access public
     * @return GetPaymentInformationUrlResponse
     */
    public function GetPaymentInformationUrl(GetPaymentInformationUrl $parameters)
    {
      return $this->__soapCall('GetPaymentInformationUrl', array($parameters));
    }

    /**
     * Retrieve transactions for an account.
     *
     * @param GetTransactions $parameters
     * @access public
     * @return GetTransactionsResponse
     */
    public function GetTransactions(GetTransactions $parameters)
    {
      return $this->__soapCall('GetTransactions', array($parameters));
    }

    /**
     * Retrieve disputed transactions for an account.
     *
     * @param GetDisputedTransactions $parameters
     * @access public
     * @return GetDisputedTransactionsResponse
     */
    public function GetDisputedTransactions(GetDisputedTransactions $parameters)
    {
      return $this->__soapCall('GetDisputedTransactions', array($parameters));
    }

    /**
     * Dispute a transaction.
     *
     * @param DisputeTransaction $parameters
     * @access public
     * @return DisputeTransactionResponse
     */
    public function DisputeTransaction(DisputeTransaction $parameters)
    {
      return $this->__soapCall('DisputeTransaction', array($parameters));
    }

    /**
     * Retrieve SecureCode PIN for an existing merchant log.
     *
     * @param RetrieveSecureCodeAuthPin $parameters
     * @access public
     * @return RetrieveSecureCodeAuthPinResponse
     */
    public function RetrieveSecureCodeAuthPin(RetrieveSecureCodeAuthPin $parameters)
    {
      return $this->__soapCall('RetrieveSecureCodeAuthPin', array($parameters));
    }

    /**
     * Get payment schedule for a merchant log.
     *
     * @param GetPaymentSchedule $parameters
     * @access public
     * @return GetPaymentScheduleResponse
     */
    public function GetPaymentSchedule(GetPaymentSchedule $parameters)
    {
      return $this->__soapCall('GetPaymentSchedule', array($parameters));
    }

    /**
     * Retrieve transactions for a merchant log.
     *
     * @param GetTransactionsInternational $parameters
     * @access public
     * @return GetTransactionsInternationalResponse
     */
    public function GetTransactionsInternational(GetTransactionsInternational $parameters)
    {
      return $this->__soapCall('GetTransactionsInternational', array($parameters));
    }

    /**
     * Get dynamic payment method for merchant.
     *
     * @param GetDynamicPaymentMethod $parameters
     * @access public
     * @return GetDynamicPaymentMethodResponse
     */
    public function GetDynamicPaymentMethod(GetDynamicPaymentMethod $parameters)
    {
      return $this->__soapCall('GetDynamicPaymentMethod', array($parameters));
    }

    /**
     * Retrieve a merchant with payment methods.
     *
     * @param RetrieveMerchantExtended $parameters
     * @access public
     * @return RetrieveMerchantExtendedResponse
     */
    public function RetrieveMerchantExtended(RetrieveMerchantExtended $parameters)
    {
      return $this->__soapCall('RetrieveMerchantExtended', array($parameters));
    }

}
