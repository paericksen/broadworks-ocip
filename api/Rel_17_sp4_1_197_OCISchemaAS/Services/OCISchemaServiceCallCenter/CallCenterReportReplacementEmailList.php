<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * A list of call center reporting email addresses that replaces a previously configured list.
 */
class CallCenterReportReplacementEmailList extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(    ) {
        $this->args= func_get_args();
    }
}