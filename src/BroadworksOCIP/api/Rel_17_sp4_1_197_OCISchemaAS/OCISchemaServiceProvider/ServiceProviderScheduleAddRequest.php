<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Add a service provider schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderScheduleAddRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderScheduleAddRequest';
    protected $serviceProviderId;
    protected $scheduleName;
    protected $scheduleType;

    public function __construct(
         $serviceProviderId = '',
         $scheduleName = '',
         $scheduleType = ''
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setScheduleName($scheduleName);
        $this->setScheduleType($scheduleType);
    }

    /**
     * @return mixed $response
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
    public function setScheduleName($scheduleName = null)
    {
        $this->scheduleName = ($scheduleName InstanceOf ScheduleName)
             ? $scheduleName
             : new ScheduleName($scheduleName);
        $this->scheduleName->setElementName('scheduleName');
        return $this;
    }

    /**
     * 
     * @return ScheduleName $scheduleName
     */
    public function getScheduleName()
    {
        return ($this->scheduleName)
            ? $this->scheduleName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setScheduleType($scheduleType = null)
    {
        $this->scheduleType = ($scheduleType InstanceOf ScheduleType)
             ? $scheduleType
             : new ScheduleType($scheduleType);
        $this->scheduleType->setElementName('scheduleType');
        return $this;
    }

    /**
     * 
     * @return ScheduleType $scheduleType
     */
    public function getScheduleType()
    {
        return ($this->scheduleType)
            ? $this->scheduleType->getElementValue()
            : null;
    }
}
