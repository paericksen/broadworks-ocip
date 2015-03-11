<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemMGCPDeviceTypeGetListRequest.
 *         Contains a table of identity/ device profile types configured in the system.
 *         The column headings are: "Device Type", "Profile", "Is Obsolete".
 */
class SystemMGCPDeviceTypeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name            = 'SystemMGCPDeviceTypeGetListResponse';
    protected $deviceTypeTable = null;

    /**
     * @return SystemMGCPDeviceTypeGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDeviceTypeTable(core:OCITable $deviceTypeTable = null)
    {
        if (!$deviceTypeTable) return $this;
        $this->deviceTypeTable->setName('deviceTypeTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getDeviceTypeTable()
    {
        return $this->deviceTypeTable->getValue();
    }
}
