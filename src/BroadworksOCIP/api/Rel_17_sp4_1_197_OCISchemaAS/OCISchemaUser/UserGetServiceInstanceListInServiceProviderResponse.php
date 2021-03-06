<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserGetServiceInstanceListInServiceProviderRequest.
 *         Contains a table with column headings :  "User Id", "Group Id", "Service Type",
 *         "Name", "Phone Number", "Extension", "Department" in a row for each Service Instance.  Possible values for Service Type column are ServiceType enums.
 */
class UserGetServiceInstanceListInServiceProviderResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserGetServiceInstanceListInServiceProviderResponse';
    protected $serviceInstanceTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserGetServiceInstanceListInServiceProviderResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceInstanceTable(TableType $serviceInstanceTable = null)
    {
        $this->serviceInstanceTable = $serviceInstanceTable;
        $this->serviceInstanceTable->setElementName('serviceInstanceTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getServiceInstanceTable()
    {
        return $this->serviceInstanceTable;
    }
}
