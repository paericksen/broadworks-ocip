<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


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
    public    $name            = 'UserInstantConferencingGetCurrentConferenceListResponse';
    protected $conferenceTable = null;

    /**
     * @return UserInstantConferencingGetCurrentConferenceListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setConferenceTable(core:OCITable $conferenceTable = null)
    {
        if (!$conferenceTable) return $this;
        $this->conferenceTable->setName('conferenceTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getConferenceTable()
    {
        return $this->conferenceTable->getValue();
    }
}
