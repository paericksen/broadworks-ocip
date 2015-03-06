<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallingNumberDelivery; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user level data associated with Calling Number Delivery.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallingNumberDeliveryModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $isActiveForExternalCalls=null,
             $isActiveForInternalCalls=null
    ) {
        $this->userId                   = new UserId($userId);
        $this->isActiveForExternalCalls = $isActiveForExternalCalls;
        $this->isActiveForInternalCalls = $isActiveForInternalCalls;
        $this->args                     = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setIsActiveForExternalCalls($isActiveForExternalCalls)
    {
        $isActiveForExternalCalls and $this->isActiveForExternalCalls = new xs:boolean($isActiveForExternalCalls);
    }

    public function getIsActiveForExternalCalls()
    {
        return (!$this->isActiveForExternalCalls) ?: $this->isActiveForExternalCalls->value();
    }

    public function setIsActiveForInternalCalls($isActiveForInternalCalls)
    {
        $isActiveForInternalCalls and $this->isActiveForInternalCalls = new xs:boolean($isActiveForInternalCalls);
    }

    public function getIsActiveForInternalCalls()
    {
        return (!$this->isActiveForInternalCalls) ?: $this->isActiveForInternalCalls->value();
    }
}