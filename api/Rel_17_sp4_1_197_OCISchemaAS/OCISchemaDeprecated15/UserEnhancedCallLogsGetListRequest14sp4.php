<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\EnhancedCallLogsMaxLoggedCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\EnhancedCallLogsOffset;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallLogsType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request user's call logs. It is possible to get a subset of the total list of calls
 *             by specifying a starting offset and the number of calls to get.
 *             If the callLogType is not specified, all types of calls are returned.
 *             The response is either a UserEnhancedCallLogsGetListResponse14sp4 or an ErrorResponse.
 *             Replaced by: 
 *             UserEnhancedCallLogsGetListRequest16
 */
class UserEnhancedCallLogsGetListRequest14sp4 extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\UserEnhancedCallLogsGetListResponse14sp4';
    public    $elementName = 'UserEnhancedCallLogsGetListRequest14sp4';
    protected $userId;
    protected $callLogType;
    protected $startingOffset;
    protected $numCalls;

    public function __construct(
         $userId = '',
         $callLogType = null,
         $startingOffset = '',
         $numCalls = ''
    ) {
        $this->setUserId($userId);
        $this->setCallLogType($callLogType);
        $this->setStartingOffset($startingOffset);
        $this->setNumCalls($numCalls);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\UserEnhancedCallLogsGetListResponse14sp4 $response
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
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallLogType($callLogType = null)
    {
        $this->callLogType = ($callLogType InstanceOf CallLogsType)
             ? $callLogType
             : new CallLogsType($callLogType);
        $this->callLogType->setElementName('callLogType');
        return $this;
    }

    /**
     * 
     * @return CallLogsType $callLogType
     */
    public function getCallLogType()
    {
        return ($this->callLogType)
            ? $this->callLogType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setStartingOffset($startingOffset = null)
    {
        $this->startingOffset = ($startingOffset InstanceOf EnhancedCallLogsOffset)
             ? $startingOffset
             : new EnhancedCallLogsOffset($startingOffset);
        $this->startingOffset->setElementName('startingOffset');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsOffset $startingOffset
     */
    public function getStartingOffset()
    {
        return ($this->startingOffset)
            ? $this->startingOffset->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNumCalls($numCalls = null)
    {
        $this->numCalls = ($numCalls InstanceOf EnhancedCallLogsMaxLoggedCalls)
             ? $numCalls
             : new EnhancedCallLogsMaxLoggedCalls($numCalls);
        $this->numCalls->setElementName('numCalls');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsMaxLoggedCalls $numCalls
     */
    public function getNumCalls()
    {
        return ($this->numCalls)
            ? $this->numCalls->getElementValue()
            : null;
    }
}
