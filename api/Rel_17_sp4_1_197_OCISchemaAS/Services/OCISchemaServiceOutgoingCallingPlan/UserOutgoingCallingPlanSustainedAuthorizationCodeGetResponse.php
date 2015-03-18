<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingCallingPlanAuthorizationCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserOutgoingCallingPlanAuthorizationCodeGetRequest.
 */
class UserOutgoingCallingPlanSustainedAuthorizationCodeGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserOutgoingCallingPlanSustainedAuthorizationCodeGetResponse';
    protected $code;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\UserOutgoingCallingPlanSustainedAuthorizationCodeGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCode($code = null)
    {
        $this->code = ($code InstanceOf OutgoingCallingPlanAuthorizationCode)
             ? $code
             : new OutgoingCallingPlanAuthorizationCode($code);
        $this->code->setElementName('code');
        return $this;
    }

    /**
     * 
     * @return OutgoingCallingPlanAuthorizationCode $code
     */
    public function getCode()
    {
        return ($this->code)
            ? $this->code->getElementValue()
            : null;
    }
}
