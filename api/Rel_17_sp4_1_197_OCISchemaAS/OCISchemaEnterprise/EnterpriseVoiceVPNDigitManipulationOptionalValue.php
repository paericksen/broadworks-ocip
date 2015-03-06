<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseVoiceVPNDigitManipulationOperationOptionalValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseVoiceVPNDigitManipulationValue;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Enterprise Voice VPN Digit Manipulation Entry that optionally has a value.
 */
class EnterpriseVoiceVPNDigitManipulationOptionalValue extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $operation,
             $value=null
    ) {
        $this->operation = $operation;
        $this->value     = $value;
        $this->args      = func_get_args();
    }

    public function setOperation($operation)
    {
        $operation and $this->operation = new EnterpriseVoiceVPNDigitManipulationOperationOptionalValue($operation);
    }

    public function getOperation()
    {
        return (!$this->operation) ?: $this->operation->value();
    }

    public function setValue($value)
    {
        $value and $this->value = new EnterpriseVoiceVPNDigitManipulationValue($value);
    }

    public function getValue()
    {
        return (!$this->value) ?: $this->value->value();
    }
}