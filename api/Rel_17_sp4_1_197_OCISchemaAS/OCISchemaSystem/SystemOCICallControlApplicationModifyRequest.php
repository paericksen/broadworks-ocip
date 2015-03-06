<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCICallControlApplicationId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCICallApplicationNotificationTimeOutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCICallControlApplicationDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EventNotificationChannelsPerSet;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify an application from the OCI call control application list.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemOCICallControlApplicationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $applicationId,
             $enableSystemWide=null,
             $notificationTimeoutSeconds=null,
             $description=null,
             $maxEventChannelsPerSet=null
    ) {
        $this->applicationId              = new OCICallControlApplicationId($applicationId);
        $this->enableSystemWide           = $enableSystemWide;
        $this->notificationTimeoutSeconds = $notificationTimeoutSeconds;
        $this->description                = $description;
        $this->maxEventChannelsPerSet     = new EventNotificationChannelsPerSet($maxEventChannelsPerSet);
        $this->args                       = func_get_args();
    }

    public function setApplicationId($applicationId)
    {
        $applicationId and $this->applicationId = new OCICallControlApplicationId($applicationId);
    }

    public function getApplicationId()
    {
        return (!$this->applicationId) ?: $this->applicationId->value();
    }

    public function setEnableSystemWide($enableSystemWide)
    {
        $enableSystemWide and $this->enableSystemWide = new xs:boolean($enableSystemWide);
    }

    public function getEnableSystemWide()
    {
        return (!$this->enableSystemWide) ?: $this->enableSystemWide->value();
    }

    public function setNotificationTimeoutSeconds($notificationTimeoutSeconds)
    {
        $notificationTimeoutSeconds and $this->notificationTimeoutSeconds = new OCICallApplicationNotificationTimeOutSeconds($notificationTimeoutSeconds);
    }

    public function getNotificationTimeoutSeconds()
    {
        return (!$this->notificationTimeoutSeconds) ?: $this->notificationTimeoutSeconds->value();
    }

    public function setDescription($description)
    {
        $description and $this->description = new OCICallControlApplicationDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setMaxEventChannelsPerSet($maxEventChannelsPerSet)
    {
        $maxEventChannelsPerSet and $this->maxEventChannelsPerSet = new EventNotificationChannelsPerSet($maxEventChannelsPerSet);
    }

    public function getMaxEventChannelsPerSet()
    {
        return (!$this->maxEventChannelsPerSet) ?: $this->maxEventChannelsPerSet->value();
    }
}