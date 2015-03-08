<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the UserInstantConferencingGetCurrentConferenceListRequest.
 *         Contains a table with column headings:
 *         "Bridge Service User Id", "Bridge Name", "Conference Id",
 *         "Owner User Id", "Owner Last Name", "Owner First Name", "Owner Hiragana Last Name", "Owner Hiragana First Name",
 *         "Title", "Type", "Start Time".
 *         owner = display name
 */
class UserInstantConferencingGetCurrentConferenceListResponse extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $conferenceTable = null;


    /**
     * 
     */
    public function setConferenceTable(core:OCITable $conferenceTable = null)
    {
        $this->conferenceTable =  $conferenceTable;
    }

    /**
     * 
     */
    public function getConferenceTable()
    {
        return (!$this->conferenceTable) ?: $this->conferenceTable->getValue();
    }
}
