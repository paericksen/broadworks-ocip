<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCallParkGetInstanceRequest.
 *           Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", 
 *           "Hiragana First Name".  The users are in the table are in the order they will try to be parked on.
 */
class GroupCallParkGetInstanceResponse extends ComplexType implements ComplexInterface
{
    public    $name      = 'GroupCallParkGetInstanceResponse';
    protected $userTable = null;

    /**
     * @return GroupCallParkGetInstanceResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserTable(core:OCITable $userTable = null)
    {
        if (!$userTable) return $this;
        $this->userTable->setName('userTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getUserTable()
    {
        return $this->userTable->getValue();
    }
}
