<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\DtmfTransmissionSignalingContentType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\DTMFTransmissionMethod;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the SystemDTMFTransmissionGetRequest.
 */
class SystemDTMFTransmissionGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $transmissionMethod   = null;
    protected $signalingContentType = null;


    /**
     * The DTMF transmission method.
     */
    public function setTransmissionMethod($transmissionMethod = null)
    {
        $this->transmissionMethod = ($transmissionMethod InstanceOf DTMFTransmissionMethod)
             ? $transmissionMethod
             : new DTMFTransmissionMethod($transmissionMethod);
    }

    /**
     * The DTMF transmission method.
     */
    public function getTransmissionMethod()
    {
        return (!$this->transmissionMethod) ?: $this->transmissionMethod->getValue();
    }

    /**
     * The signaling content type.
     */
    public function setSignalingContentType($signalingContentType = null)
    {
        $this->signalingContentType = ($signalingContentType InstanceOf DtmfTransmissionSignalingContentType)
             ? $signalingContentType
             : new DtmfTransmissionSignalingContentType($signalingContentType);
    }

    /**
     * The signaling content type.
     */
    public function getSignalingContentType()
    {
        return (!$this->signalingContentType) ?: $this->signalingContentType->getValue();
    }
}
