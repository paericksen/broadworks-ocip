<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify a service provider schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderScheduleModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $serviceProviderId = null;
    protected $scheduleKey       = null;
    protected $newScheduleName   = null;

    public function __construct(
         $serviceProviderId,
          $scheduleKey,
         $newScheduleName = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setScheduleKey($scheduleKey);
        $this->setNewScheduleName($newScheduleName);
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
     * Uniquely identifies Holiday and Time Schedules within a level(System, Service Provider, Group or User level).
     */
    public function setScheduleKey(ScheduleKey $scheduleKey = null)
    {
        $this->scheduleKey =  $scheduleKey;
    }

    /**
     * Uniquely identifies Holiday and Time Schedules within a level(System, Service Provider, Group or User level).
     */
    public function getScheduleKey()
    {
        return (!$this->scheduleKey) ?: $this->scheduleKey->getValue();
    }

    /**
     * Schedule name.
     */
    public function setNewScheduleName($newScheduleName = null)
    {
        $this->newScheduleName = ($newScheduleName InstanceOf ScheduleName)
             ? $newScheduleName
             : new ScheduleName($newScheduleName);
    }

    /**
     * Schedule name.
     */
    public function getNewScheduleName()
    {
        return (!$this->newScheduleName) ?: $this->newScheduleName->getValue();
    }
}
