<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemRoutingGetTranslationListRequest. The column headings are "Routing Digits"
 *         and "Route".
 */
class SystemRoutingGetTranslationListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $routingTable
    ) {
        $this->routingTable = $routingTable;
        $this->args         = func_get_args();
    }

    public function setRoutingTable($routingTable)
    {
        $routingTable and $this->routingTable = new core:OCITable($routingTable);
    }

    public function getRoutingTable()
    {
        return (!$this->routingTable) ?: $this->routingTable->value();
    }
}