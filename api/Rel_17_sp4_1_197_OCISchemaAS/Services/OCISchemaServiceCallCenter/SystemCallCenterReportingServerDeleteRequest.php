<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportingServerName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Delete a Call Center Reporting Server.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemCallCenterReportingServerDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemCallCenterReportingServerDeleteRequest';
    protected $name = null;

    public function __construct(
         $name
    ) {
        $this->setName($name);
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
        $this->name = ($name InstanceOf CallCenterReportingServerName)
             ? $name
             : new CallCenterReportingServerName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportingServerName
     */
    public function getName()
    {
        return $this->name->getValue();
    }
}
