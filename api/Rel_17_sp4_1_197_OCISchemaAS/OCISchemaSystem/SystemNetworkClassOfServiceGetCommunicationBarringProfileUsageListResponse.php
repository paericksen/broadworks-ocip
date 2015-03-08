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
     * Response to the SystemNetworkClassOfServiceGetCommunicationBarringProfileUsageListRequest.
 *         The response contains a table of all Network Classes of Service that
 *         contain the specific Communication Barring Profile. The column headings 
 *         are "Name" and "Description"
 */
class SystemNetworkClassOfServiceGetCommunicationBarringProfileUsageListResponse extends ComplexType implements ComplexInterface
{
    public    $name                       = __CLASS__;
    protected $networkClassOfServiceTable = null;


    /**
     * 
     */
    public function setNetworkClassOfServiceTable(core:OCITable $networkClassOfServiceTable = null)
    {
        $this->networkClassOfServiceTable =  $networkClassOfServiceTable;
    }

    /**
     * 
     */
    public function getNetworkClassOfServiceTable()
    {
        return (!$this->networkClassOfServiceTable) ?: $this->networkClassOfServiceTable->getValue();
    }
}
