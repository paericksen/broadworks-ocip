<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PhoneListEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the EnterpriseCommonPhoneListGetListRequest.
 *         The response contains the enterprise's common phone list.
 */
class EnterpriseCommonPhoneListGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name  = __CLASS__;
    protected $entry = null;


    /**
     * Phone list entry.
     */
    public function setEntry(PhoneListEntry $entry = null)
    {
        $this->entry =  $entry;
    }

    /**
     * Phone list entry.
     */
    public function getEntry()
    {
        return (!$this->entry) ?: $this->entry->getValue();
    }
}
