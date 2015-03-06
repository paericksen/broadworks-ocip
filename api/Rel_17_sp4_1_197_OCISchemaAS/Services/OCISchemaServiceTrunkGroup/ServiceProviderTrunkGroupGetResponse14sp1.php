<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedNonNegativeInt;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the ServiceProviderTrunkGroupGetRequest14sp1.
 *         The response contains the maximum and bursting maximum permissible active trunk group calls for the service provider.
 */
class ServiceProviderTrunkGroupGetResponse14sp1 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             UnboundedNonNegativeInt $maxActiveCalls,
             UnboundedNonNegativeInt $burstingMaxActiveCalls
    ) {
        $this->maxActiveCalls         = $maxActiveCalls;
        $this->burstingMaxActiveCalls = $burstingMaxActiveCalls;
        $this->args                   = func_get_args();
    }

    public function setMaxActiveCalls($maxActiveCalls)
    {
        $maxActiveCalls and $this->maxActiveCalls = new UnboundedNonNegativeInt($maxActiveCalls);
    }

    public function getMaxActiveCalls()
    {
        return (!$this->maxActiveCalls) ?: $this->maxActiveCalls->value();
    }

    public function setBurstingMaxActiveCalls($burstingMaxActiveCalls)
    {
        $burstingMaxActiveCalls and $this->burstingMaxActiveCalls = new UnboundedNonNegativeInt($burstingMaxActiveCalls);
    }

    public function getBurstingMaxActiveCalls()
    {
        return (!$this->burstingMaxActiveCalls) ?: $this->burstingMaxActiveCalls->value();
    }
}