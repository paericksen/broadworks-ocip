<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupInstantConferencingGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Phone Number", "Extension", "Ports", "Department", "Is Active".
 *         The column values for "Is Active" can either be true, or false.
 */
class GroupInstantConferencingGetInstanceListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $instantConferencingTable
    ) {
        $this->instantConferencingTable = $instantConferencingTable;
        $this->args                     = func_get_args();
    }

    public function setInstantConferencingTable($instantConferencingTable)
    {
        $instantConferencingTable and $this->instantConferencingTable = new core:OCITable($instantConferencingTable);
    }

    public function getInstantConferencingTable()
    {
        return (!$this->instantConferencingTable) ?: $this->instantConferencingTable->value();
    }
}