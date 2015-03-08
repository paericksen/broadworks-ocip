<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemMGCPDeviceTypeGetListRequest.
 *         Contains a table of identity/ device profile types configured in the system.
 *         The column headings are: "Device Type", "Profile", "Is Obsolete".
 */
class SystemMGCPDeviceTypeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $deviceTypeTable = null;


    /**
     * 
     */
    public function setDeviceTypeTable(core:OCITable $deviceTypeTable = null)
    {
        $this->deviceTypeTable =  $deviceTypeTable;
    }

    /**
     * 
     */
    public function getDeviceTypeTable()
    {
        return (!$this->deviceTypeTable) ?: $this->deviceTypeTable->getValue();
    }
}
