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
     * Response to SystemAccessDeviceCustomTagGetListRequest.
 *         Contains a table of custom configuration tags managed by the Device Management System on a per-device profile basis.
 *         The column headings are: "Tag Name", "Tag Value"
 */
class SystemAccessDeviceCustomTagGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                  = __CLASS__;
    protected $deviceCustomTagsTable = null;


    /**
     * 
     */
    public function setDeviceCustomTagsTable(core:OCITable $deviceCustomTagsTable = null)
    {
        $this->deviceCustomTagsTable =  $deviceCustomTagsTable;
    }

    /**
     * 
     */
    public function getDeviceCustomTagsTable()
    {
        return (!$this->deviceCustomTagsTable) ?: $this->deviceCustomTagsTable->getValue();
    }
}
