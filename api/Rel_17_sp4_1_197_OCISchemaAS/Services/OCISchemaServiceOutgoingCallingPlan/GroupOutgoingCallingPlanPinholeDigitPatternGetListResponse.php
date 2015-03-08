<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupOutgoingCallingPlanPinholeDigitPatternGetListRequest.
 *         Contains a table with column headings: "Name", "Digit Pattern".
 */
class GroupOutgoingCallingPlanPinholeDigitPatternGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $digitPatternTable = null;


    /**
     * 
     */
    public function setDigitPatternTable(core:OCITable $digitPatternTable = null)
    {
        $this->digitPatternTable =  $digitPatternTable;
    }

    /**
     * 
     */
    public function getDigitPatternTable()
    {
        return (!$this->digitPatternTable) ?: $this->digitPatternTable->getValue();
    }
}
