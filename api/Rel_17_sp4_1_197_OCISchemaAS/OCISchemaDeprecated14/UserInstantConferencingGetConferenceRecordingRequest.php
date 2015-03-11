<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecordingKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserInstantConferencingGetConferenceRecordingResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get the information of a conference recording owned or delegated by the user.
 *         The response is either UserInstantConferencingGetConferenceRecordingResponse
 *         or ErrorResponse.
 *         Replaced by: name="UserInstantConferencingGetConferenceRecordingRequest14Sp9
 */
class UserInstantConferencingGetConferenceRecordingRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserInstantConferencingGetConferenceRecordingResponse';
    public    $name         = 'UserInstantConferencingGetConferenceRecordingRequest';
    protected $userId       = null;
    protected $recordingKey = null;

    public function __construct(
         $userId,
         InstantConferencingRecordingKey $recordingKey
    ) {
        $this->setUserId($userId);
        $this->setRecordingKey($recordingKey);
    }

    /**
     * @return UserInstantConferencingGetConferenceRecordingResponse
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
    public function setRecordingKey(InstantConferencingRecordingKey $recordingKey = null)
    {
        if (!$recordingKey) return $this;
        $this->recordingKey = $recordingKey;
        $this->recordingKey->setName('recordingKey');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingRecordingKey
     */
    public function getRecordingKey()
    {
        return $this->recordingKey;
    }
}
