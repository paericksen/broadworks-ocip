<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\GroupCallCenterGetInstanceResponse14sp3;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to get all the information of a Call Center instance.
 *         The response is either GroupCallCenterGetInstanceResponse14sp3 or ErrorResponse.
 *         Replaced By: GroupCallCenterGetInstanceRequest14sp9
 */
class GroupCallCenterGetInstanceRequest14sp3 extends ComplexType implements ComplexInterface
{
    public    $responseType  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\GroupCallCenterGetInstanceResponse14sp3';
    public    $name          = 'GroupCallCenterGetInstanceRequest14sp3';
    protected $serviceUserId = null;

    public function __construct(
         $serviceUserId
    ) {
        $this->setServiceUserId($serviceUserId);
    }

    /**
     * @return GroupCallCenterGetInstanceResponse14sp3
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        if (!$serviceUserId) return $this;
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
    }
}
