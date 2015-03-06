<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntNoAnswerRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallCenterBouncedCallGetRequest.
 */
class GroupCallCenterBouncedCallGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isActive,
             $numberOfRingsBeforeBouncingCall,
             $enableTransfer=null,
             $transferPhoneNumber=null,
             $bounceCallWhenAgentUnavailable
    ) {
        $this->isActive                        = $isActive;
        $this->numberOfRingsBeforeBouncingCall = new HuntNoAnswerRings($numberOfRingsBeforeBouncingCall);
        $this->enableTransfer                  = $enableTransfer;
        $this->transferPhoneNumber             = new OutgoingDNorSIPURI($transferPhoneNumber);
        $this->bounceCallWhenAgentUnavailable  = $bounceCallWhenAgentUnavailable;
        $this->args                            = func_get_args();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setNumberOfRingsBeforeBouncingCall($numberOfRingsBeforeBouncingCall)
    {
        $numberOfRingsBeforeBouncingCall and $this->numberOfRingsBeforeBouncingCall = new HuntNoAnswerRings($numberOfRingsBeforeBouncingCall);
    }

    public function getNumberOfRingsBeforeBouncingCall()
    {
        return (!$this->numberOfRingsBeforeBouncingCall) ?: $this->numberOfRingsBeforeBouncingCall->value();
    }

    public function setEnableTransfer($enableTransfer)
    {
        $enableTransfer and $this->enableTransfer = new xs:boolean($enableTransfer);
    }

    public function getEnableTransfer()
    {
        return (!$this->enableTransfer) ?: $this->enableTransfer->value();
    }

    public function setTransferPhoneNumber($transferPhoneNumber)
    {
        $transferPhoneNumber and $this->transferPhoneNumber = new OutgoingDNorSIPURI($transferPhoneNumber);
    }

    public function getTransferPhoneNumber()
    {
        return (!$this->transferPhoneNumber) ?: $this->transferPhoneNumber->value();
    }

    public function setBounceCallWhenAgentUnavailable($bounceCallWhenAgentUnavailable)
    {
        $bounceCallWhenAgentUnavailable and $this->bounceCallWhenAgentUnavailable = new xs:boolean($bounceCallWhenAgentUnavailable);
    }

    public function getBounceCallWhenAgentUnavailable()
    {
        return (!$this->bounceCallWhenAgentUnavailable) ?: $this->bounceCallWhenAgentUnavailable->value();
    }
}