<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Policy for a group administrator's access to trunk groups.
 *         "Full" indicates full access to add/modify/delete trunk groups in the group.
 *         "Full Resources" indicates
 *           1) Restricted from adding or removing trunk groups, and
 *           2) Full access to trunk group resources
 *         "Read-Only Resources" indicates
 *           1) Restricted from adding or removing trunk groups, and
 *           2) Read-only access to trunk group resources
 *         "None" indicates no access to trunk groups in the group.
 */
class GroupAdminTrunkGroupAccess extends SimpleType
{
    public $elementName = "GroupAdminTrunkGroupAccess";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Full',
            'Full Resources',
            'Read-Only Resources',
            'None'
        ]));
    }
}
