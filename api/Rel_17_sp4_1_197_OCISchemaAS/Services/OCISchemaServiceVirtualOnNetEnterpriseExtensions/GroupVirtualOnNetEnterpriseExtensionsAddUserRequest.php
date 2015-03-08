<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVirtualOnNetEnterpriseExtensions; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVirtualOnNetEnterpriseExtensions\VirtualOnNetUserRange;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVirtualOnNetEnterpriseExtensions\VirtualOnNetUser;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Adds Virtual On-Net users to a Group. It is possible to add 
 *         either: a single user,  or a list of users, or a range of users, 
 *         or any combination thereof.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupVirtualOnNetEnterpriseExtensionsAddUserRequest extends ComplexType implements ComplexInterface
{
    public    $name                  = __CLASS__;
    protected $serviceProviderId     = null;
    protected $groupId               = null;
    protected $virtualOnNetUser      = null;
    protected $virtualOnNetUserRange = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
          $virtualOnNetUser = null,
          $virtualOnNetUserRange = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setVirtualOnNetUser($virtualOnNetUser);
        $this->setVirtualOnNetUserRange($virtualOnNetUserRange);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

    /**
     * Virtual On-Net User.
     */
    public function setVirtualOnNetUser(VirtualOnNetUser $virtualOnNetUser = null)
    {
        $this->virtualOnNetUser =  $virtualOnNetUser;
    }

    /**
     * Virtual On-Net User.
     */
    public function getVirtualOnNetUser()
    {
        return (!$this->virtualOnNetUser) ?: $this->virtualOnNetUser->getValue();
    }

    /**
     * Virtual On-Net User Range.
     */
    public function setVirtualOnNetUserRange(VirtualOnNetUserRange $virtualOnNetUserRange = null)
    {
        $this->virtualOnNetUserRange =  $virtualOnNetUserRange;
    }

    /**
     * Virtual On-Net User Range.
     */
    public function getVirtualOnNetUserRange()
    {
        return (!$this->virtualOnNetUserRange) ?: $this->virtualOnNetUserRange->getValue();
    }
}
