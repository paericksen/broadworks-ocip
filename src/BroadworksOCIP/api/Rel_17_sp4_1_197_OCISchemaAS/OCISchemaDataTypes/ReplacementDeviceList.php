<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * A list of devices that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 */
class ReplacementDeviceList extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ReplacementDeviceList';
    protected $device;

    public function __construct(
         $device = null
    ) {
        $this->setDevice($device);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDevice($device = null)
    {
        $this->device = new SimpleContent($device);
        $this->device->setElementName('device');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $device
     */
    public function getDevice()
    {
        return ($this->device)
            ? $this->device->getElementValue()
            : null;
    }
}
