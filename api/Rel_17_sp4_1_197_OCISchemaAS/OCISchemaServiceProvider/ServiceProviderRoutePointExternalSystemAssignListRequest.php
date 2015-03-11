<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutePointExternalSystem;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Assign a list of route point external systems to a service provider.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderRoutePointExternalSystemAssignListRequest extends ComplexType implements ComplexInterface
{
    public    $name                     = 'ServiceProviderRoutePointExternalSystemAssignListRequest';
    protected $serviceProviderId        = null;
    protected $routePointExternalSystem = null;

    public function __construct(
         $serviceProviderId,
         $routePointExternalSystem = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setRoutePointExternalSystem($routePointExternalSystem);
    }

    /**
     * @return 
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
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setRoutePointExternalSystem($routePointExternalSystem = null)
    {
        if (!$routePointExternalSystem) return $this;
        $this->routePointExternalSystem = ($routePointExternalSystem InstanceOf RoutePointExternalSystem)
             ? $routePointExternalSystem
             : new RoutePointExternalSystem($routePointExternalSystem);
        $this->routePointExternalSystem->setName('routePointExternalSystem');
        return $this;
    }

    /**
     * 
     * @return RoutePointExternalSystem
     */
    public function getRoutePointExternalSystem()
    {
        return $this->routePointExternalSystem->getValue();
    }
}
