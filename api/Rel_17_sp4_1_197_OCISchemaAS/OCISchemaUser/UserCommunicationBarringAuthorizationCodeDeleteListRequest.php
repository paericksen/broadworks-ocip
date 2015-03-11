<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringAuthorizationCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Delete a list of Communication Barring Authorization codes from a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCommunicationBarringAuthorizationCodeDeleteListRequest extends ComplexType implements ComplexInterface
{
    public    $name   = 'UserCommunicationBarringAuthorizationCodeDeleteListRequest';
    protected $userId = null;
    protected $code   = null;

    public function __construct(
         $userId,
         $code = null
    ) {
        $this->setUserId($userId);
        $this->setCode($code);
    }

    /**
     * @return 
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
    public function setCode($code = null)
    {
        if (!$code) return $this;
        $this->code = ($code InstanceOf CommunicationBarringAuthorizationCode)
             ? $code
             : new CommunicationBarringAuthorizationCode($code);
        $this->code->setName('code');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringAuthorizationCode
     */
    public function getCode()
    {
        return $this->code->getValue();
    }
}
