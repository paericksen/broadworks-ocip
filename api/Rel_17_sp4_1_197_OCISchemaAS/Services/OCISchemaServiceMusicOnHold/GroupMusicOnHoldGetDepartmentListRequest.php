<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Returns a list of all departments that have a Music On Hold instance.
 *         The response is either GroupMusicOnHoldGetDepartmentListResponse or ErrorResponse.
 *         It is possible to get the instances within a specified department.
 */
class GroupMusicOnHoldGetDepartmentListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold\GroupMusicOnHoldGetDepartmentListResponse';
    public    $elementName = 'GroupMusicOnHoldGetDepartmentListRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $groupDepartmentName;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $groupDepartmentName = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setGroupDepartmentName($groupDepartmentName);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold\GroupMusicOnHoldGetDepartmentListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupDepartmentName($groupDepartmentName = null)
    {
        $this->groupDepartmentName = ($groupDepartmentName InstanceOf DepartmentName)
             ? $groupDepartmentName
             : new DepartmentName($groupDepartmentName);
        $this->groupDepartmentName->setElementName('groupDepartmentName');
        return $this;
    }

    /**
     * 
     * @return DepartmentName $groupDepartmentName
     */
    public function getGroupDepartmentName()
    {
        return ($this->groupDepartmentName)
            ? $this->groupDepartmentName->getElementValue()
            : null;
    }
}
