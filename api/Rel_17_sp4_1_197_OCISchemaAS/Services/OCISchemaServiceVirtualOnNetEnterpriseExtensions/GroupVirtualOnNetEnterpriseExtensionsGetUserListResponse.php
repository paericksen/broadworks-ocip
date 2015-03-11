<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVirtualOnNetEnterpriseExtensions; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupVirtualOnNetEnterpriseExtensionsGetUserListRequest.
 *         Contains a table with column headings: "Last Name", 
 *         "First Name", "Phone Number", "Extension", 
 *         "Virtual On-Net Call Type Name"
 *         in a row for each user.
 */
class GroupVirtualOnNetEnterpriseExtensionsGetUserListResponse extends ComplexType implements ComplexInterface
{
    public    $name      = 'GroupVirtualOnNetEnterpriseExtensionsGetUserListResponse';
    protected $userTable = null;

    /**
     * @return GroupVirtualOnNetEnterpriseExtensionsGetUserListResponse
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
