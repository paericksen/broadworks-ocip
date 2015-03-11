<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * Choices for the group Dial Plan Policy to decide which type of settings shall be used.
 *         Notes: Choice cannot be 'sp' or 'group' if Service Provider or group does not have
 *         public digit map set.
 */
class GroupDialPlanPolicySettingLevel extends SimpleType
{
    public $name = "GroupDialPlanPolicySettingLevel";
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = "";
        $this->addRestriction(new Enumeration([
            'System',
            'Service Provider',
            'Group'
        ]));
    }
}
