<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to EnterpriseEnterpriseTrunkGetUserListRequest.
 *         The column headings for the enterpriseTrunkUserTable are: "Group Id", "User Id", "Last Name", "First Name", "Phone Number", "Alternate Trunk Identity", "Hiragana Last Name", "Hiragana First Name".
 */
class EnterpriseEnterpriseTrunkGetUserListResponse extends ComplexType implements ComplexInterface
{
    public    $name                     = __CLASS__;
    protected $enterpriseTrunkUserTable = null;


    /**
     * 
     */
    public function setEnterpriseTrunkUserTable(core:OCITable $enterpriseTrunkUserTable = null)
    {
        $this->enterpriseTrunkUserTable =  $enterpriseTrunkUserTable;
    }

    /**
     * 
     */
    public function getEnterpriseTrunkUserTable()
    {
        return (!$this->enterpriseTrunkUserTable) ?: $this->enterpriseTrunkUserTable->getValue();
    }
}
