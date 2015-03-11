<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsAccountAuthorizationCodeFilter;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsRedirectedNumberFilter;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsCallLogsRequestType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsSubscriberType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsNumberFilter;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsTimeRange;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponsePagingControl;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\UserEnhancedCallLogsGetListResponse17sp4;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request user's call logs.
 *         If the callLogType is not specified, all types of calls logs (placed, received, missed) are returned.
 *         The filters "dateTimeRange", "numberFilter", "redirectedNumberFilter", accountAuthorizationCodeFilter"
 *         and ""subscriberType" are ignored if call logs are stored in CDS. When "ReceivedOrMissed" is specified
 *         as "callLogType" and call logs are stored in CDS, all call logs including placed will be returned.
 *         It is possible to restrict the number of rows returned using responsePagingControl. If responsePagingControl
 *         is not specified, the value of Enhanced Call Logs system parameter maxNonPagedResponseSize will control
 *         the maximum number of call logs can be returned. 
 *         The response is either a UserEnhancedCallLogsGetListResponse17sp4 or an ErrorResponse.
 */
class UserEnhancedCallLogsGetListRequest17sp4 extends ComplexType implements ComplexInterface
{
    public    $responseType                   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\UserEnhancedCallLogsGetListResponse17sp4';
    public    $name                           = 'UserEnhancedCallLogsGetListRequest17sp4';
    protected $userId                         = null;
    protected $callLogType                    = null;
    protected $dateTimeRange                  = null;
    protected $numberFilter                   = null;
    protected $redirectedNumberFilter         = null;
    protected $accountAuthorizationCodeFilter = null;
    protected $subscriberType                 = null;
    protected $responsePagingControl          = null;

    public function __construct(
         $userId,
         $callLogType = null,
         EnhancedCallLogsTimeRange $dateTimeRange,
         EnhancedCallLogsNumberFilter $numberFilter = null,
         EnhancedCallLogsRedirectedNumberFilter $redirectedNumberFilter = null,
         EnhancedCallLogsAccountAuthorizationCodeFilter $accountAuthorizationCodeFilter = null,
         $subscriberType = null,
         ResponsePagingControl $responsePagingControl = null
    ) {
        $this->setUserId($userId);
        $this->setCallLogType($callLogType);
        $this->setDateTimeRange($dateTimeRange);
        $this->setNumberFilter($numberFilter);
        $this->setRedirectedNumberFilter($redirectedNumberFilter);
        $this->setAccountAuthorizationCodeFilter($accountAuthorizationCodeFilter);
        $this->setSubscriberType($subscriberType);
        $this->setResponsePagingControl($responsePagingControl);
    }

    /**
     * @return UserEnhancedCallLogsGetListResponse17sp4
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserId($userId = null)
    {
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setCallLogType($callLogType = null)
    {
        if (!$callLogType) return $this;
        $this->callLogType = ($callLogType InstanceOf EnhancedCallLogsCallLogsRequestType)
             ? $callLogType
             : new EnhancedCallLogsCallLogsRequestType($callLogType);
        $this->callLogType->setName('callLogType');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsCallLogsRequestType
     */
    public function getCallLogType()
    {
        return $this->callLogType->getValue();
    }

    /**
     * 
     */
    public function setDateTimeRange(EnhancedCallLogsTimeRange $dateTimeRange = null)
    {
        if (!$dateTimeRange) return $this;
        $this->dateTimeRange = $dateTimeRange;
        $this->dateTimeRange->setName('dateTimeRange');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsTimeRange
     */
    public function getDateTimeRange()
    {
        return $this->dateTimeRange;
    }

    /**
     * 
     */
    public function setNumberFilter(EnhancedCallLogsNumberFilter $numberFilter = null)
    {
        if (!$numberFilter) return $this;
        $this->numberFilter = $numberFilter;
        $this->numberFilter->setName('numberFilter');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsNumberFilter
     */
    public function getNumberFilter()
    {
        return $this->numberFilter;
    }

    /**
     * 
     */
    public function setRedirectedNumberFilter(EnhancedCallLogsRedirectedNumberFilter $redirectedNumberFilter = null)
    {
        if (!$redirectedNumberFilter) return $this;
        $this->redirectedNumberFilter = $redirectedNumberFilter;
        $this->redirectedNumberFilter->setName('redirectedNumberFilter');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsRedirectedNumberFilter
     */
    public function getRedirectedNumberFilter()
    {
        return $this->redirectedNumberFilter;
    }

    /**
     * 
     */
    public function setAccountAuthorizationCodeFilter(EnhancedCallLogsAccountAuthorizationCodeFilter $accountAuthorizationCodeFilter = null)
    {
        if (!$accountAuthorizationCodeFilter) return $this;
        $this->accountAuthorizationCodeFilter = $accountAuthorizationCodeFilter;
        $this->accountAuthorizationCodeFilter->setName('accountAuthorizationCodeFilter');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsAccountAuthorizationCodeFilter
     */
    public function getAccountAuthorizationCodeFilter()
    {
        return $this->accountAuthorizationCodeFilter;
    }

    /**
     * 
     */
    public function setSubscriberType($subscriberType = null)
    {
        if (!$subscriberType) return $this;
        $this->subscriberType = ($subscriberType InstanceOf EnhancedCallLogsSubscriberType)
             ? $subscriberType
             : new EnhancedCallLogsSubscriberType($subscriberType);
        $this->subscriberType->setName('subscriberType');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsSubscriberType
     */
    public function getSubscriberType()
    {
        return $this->subscriberType->getValue();
    }

    /**
     * 
     */
    public function setResponsePagingControl(ResponsePagingControl $responsePagingControl = null)
    {
        if (!$responsePagingControl) return $this;
        $this->responsePagingControl = $responsePagingControl;
        $this->responsePagingControl->setName('responsePagingControl');
        return $this;
    }

    /**
     * 
     * @return ResponsePagingControl
     */
    public function getResponsePagingControl()
    {
        return $this->responsePagingControl;
    }
}
