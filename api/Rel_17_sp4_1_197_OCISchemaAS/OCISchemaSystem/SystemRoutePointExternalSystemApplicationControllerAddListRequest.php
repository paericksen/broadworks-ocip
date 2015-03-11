<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutePointExternalSystem;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ApplicationControllerName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add an application controller to Route Point External System.
 *       The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemRoutePointExternalSystemApplicationControllerAddListRequest extends ComplexType implements ComplexInterface
{
    public    $name                  = 'SystemRoutePointExternalSystemApplicationControllerAddListRequest';
    protected $name                  = null;
    protected $applicationController = null;

    public function __construct(
         $name,
         $applicationController = null
    ) {
        $this->setName($name);
        $this->setApplicationController($applicationController);
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
    public function setName($name = null)
    {
        if (!$name) return $this;
        $this->name = ($name InstanceOf RoutePointExternalSystem)
             ? $name
             : new RoutePointExternalSystem($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return RoutePointExternalSystem
     */
    public function getName()
    {
        return $this->name->getValue();
    }

    /**
     * 
     */
    public function setApplicationController($applicationController = null)
    {
        if (!$applicationController) return $this;
        $this->applicationController = ($applicationController InstanceOf ApplicationControllerName)
             ? $applicationController
             : new ApplicationControllerName($applicationController);
        $this->applicationController->setName('applicationController');
        return $this;
    }

    /**
     * 
     * @return ApplicationControllerName
     */
    public function getApplicationController()
    {
        return $this->applicationController->getValue();
    }
}
