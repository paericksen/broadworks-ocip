<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUserCreationTaskName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Delete a user creation task for a trunk group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupTrunkGroupUserCreationTaskDeleteRequest14sp4 extends ComplexType implements ComplexInterface
{
    public    $name          = 'GroupTrunkGroupUserCreationTaskDeleteRequest14sp4';
    protected $trunkGroupKey = null;
    protected $taskName      = null;

    public function __construct(
         TrunkGroupKey $trunkGroupKey,
         $taskName
    ) {
        $this->setTrunkGroupKey($trunkGroupKey);
        $this->setTaskName($taskName);
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
    public function setTrunkGroupKey(TrunkGroupKey $trunkGroupKey = null)
    {
        if (!$trunkGroupKey) return $this;
        $this->trunkGroupKey = $trunkGroupKey;
        $this->trunkGroupKey->setName('trunkGroupKey');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupKey
     */
    public function getTrunkGroupKey()
    {
        return $this->trunkGroupKey;
    }

    /**
     * 
     */
    public function setTaskName($taskName = null)
    {
        if (!$taskName) return $this;
        $this->taskName = ($taskName InstanceOf TrunkGroupUserCreationTaskName)
             ? $taskName
             : new TrunkGroupUserCreationTaskName($taskName);
        $this->taskName->setName('taskName');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupUserCreationTaskName
     */
    public function getTaskName()
    {
        return $this->taskName->getValue();
    }
}
