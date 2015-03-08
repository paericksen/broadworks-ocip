<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedPositiveInt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserService;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to add a service pack to a service provider.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderServicePackAddRequest extends ComplexType implements ComplexInterface
{
    public    $name                   = __CLASS__;
    protected $serviceProviderId      = null;
    protected $servicePackName        = null;
    protected $servicePackDescription = null;
    protected $isAvailableForUse      = null;
    protected $servicePackQuantity    = null;
    protected $serviceName            = null;

    public function __construct(
         $serviceProviderId,
         $servicePackName,
         $servicePackDescription = null,
         $isAvailableForUse,
          $servicePackQuantity,
         $serviceName = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setServicePackName($servicePackName);
        $this->setServicePackDescription($servicePackDescription);
        $this->setIsAvailableForUse($isAvailableForUse);
        $this->setServicePackQuantity($servicePackQuantity);
        $this->setServiceName($serviceName);
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
     * Service Pack name.
     */
    public function setServicePackName($servicePackName = null)
    {
        $this->servicePackName = ($servicePackName InstanceOf ServicePackName)
             ? $servicePackName
             : new ServicePackName($servicePackName);
    }

    /**
     * Service Pack name.
     */
    public function getServicePackName()
    {
        return (!$this->servicePackName) ?: $this->servicePackName->getValue();
    }

    /**
     * Service Pack description.
     */
    public function setServicePackDescription($servicePackDescription = null)
    {
        $this->servicePackDescription = ($servicePackDescription InstanceOf ServicePackDescription)
             ? $servicePackDescription
             : new ServicePackDescription($servicePackDescription);
    }

    /**
     * Service Pack description.
     */
    public function getServicePackDescription()
    {
        return (!$this->servicePackDescription) ?: $this->servicePackDescription->getValue();
    }

    /**
     * 
     */
    public function setIsAvailableForUse($isAvailableForUse = null)
    {
        $this->isAvailableForUse = (boolean) $isAvailableForUse;
    }

    /**
     * 
     */
    public function getIsAvailableForUse()
    {
        return (!$this->isAvailableForUse) ?: $this->isAvailableForUse->getValue();
    }

    /**
     * Unbounded Quantity. Can either be unlimited or a positive int quantity.
     */
    public function setServicePackQuantity(UnboundedPositiveInt $servicePackQuantity = null)
    {
        $this->servicePackQuantity =  $servicePackQuantity;
    }

    /**
     * Unbounded Quantity. Can either be unlimited or a positive int quantity.
     */
    public function getServicePackQuantity()
    {
        return (!$this->servicePackQuantity) ?: $this->servicePackQuantity->getValue();
    }

    /**
     * User level services.
     */
    public function setServiceName($serviceName = null)
    {
        $this->serviceName = ($serviceName InstanceOf UserService)
             ? $serviceName
             : new UserService($serviceName);
    }

    /**
     * User level services.
     */
    public function getServiceName()
    {
        return (!$this->serviceName) ?: $this->serviceName->getValue();
    }
}
