<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup;

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupDnGetListRequest.
 *         The response contains the list of DNs assigned to the group.
 */
class GroupDnGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupDnGetListResponse';
    protected $phoneNumber = array();

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupDnGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     *
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber[] = ($phoneNumber InstanceOf DN)
             ? $phoneNumber
             : new DN($phoneNumber);
//         $this->phoneNumber->setElementName('phoneNumber');
        return $this;
    }

    /**
     *
     * @return DN $phoneNumber
     */
    public function getPhoneNumber()
    {
        return ($this->phoneNumber)
            ? $this->phoneNumber->getElementValue()
            : null;
    }
}
