<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\GroupTrunkGroupGetInstanceResponse17sp3;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get a Trunk Group Instance's profile.
 *         The response is either a GroupTrunkGroupGetInstanceResponse17sp3 or an ErrorResponse.
 *         The response contains a hosted user table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name".
 *         
 *         Replaced by: GroupTrunkGroupGetInstanceRequest17sp4
 */
class GroupTrunkGroupGetInstanceRequest17sp3 extends ComplexType implements ComplexInterface
{
    public    $responseType  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\GroupTrunkGroupGetInstanceResponse17sp3';
    public    $name          = 'GroupTrunkGroupGetInstanceRequest17sp3';
    protected $trunkGroupKey = null;

    public function __construct(
         TrunkGroupKey $trunkGroupKey
    ) {
        $this->setTrunkGroupKey($trunkGroupKey);
    }

    /**
     * @return GroupTrunkGroupGetInstanceResponse17sp3
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
}
