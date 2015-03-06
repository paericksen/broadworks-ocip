<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTwoStageDialing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TwoStageDialingDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify a Two Stage Dialing number's description in the system.
 *           The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTwoStageDialingModifyDnRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $phoneNumber,
             $description=null
    ) {
        $this->phoneNumber = new DN($phoneNumber);
        $this->description = $description;
        $this->args        = func_get_args();
    }

    public function setPhoneNumber($phoneNumber)
    {
        $phoneNumber and $this->phoneNumber = new DN($phoneNumber);
    }

    public function getPhoneNumber()
    {
        return (!$this->phoneNumber) ?: $this->phoneNumber->value();
    }

    public function setDescription($description)
    {
        $description and $this->description = new TwoStageDialingDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }
}