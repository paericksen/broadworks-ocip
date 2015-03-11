<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNLocationCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Delete a enterprise voice VPN location.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseVoiceVPNDeletePolicyRequest extends ComplexType implements ComplexInterface
{
    public    $name                = 'EnterpriseVoiceVPNDeletePolicyRequest';
    protected $serviceProviderId   = null;
    protected $locationDialingCode = null;

    public function __construct(
         $serviceProviderId,
         $locationDialingCode
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setLocationDialingCode($locationDialingCode);
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
    public function setLocationDialingCode($locationDialingCode = null)
    {
        if (!$locationDialingCode) return $this;
        $this->locationDialingCode = ($locationDialingCode InstanceOf EnterpriseVoiceVPNLocationCode)
             ? $locationDialingCode
             : new EnterpriseVoiceVPNLocationCode($locationDialingCode);
        $this->locationDialingCode->setName('locationDialingCode');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNLocationCode
     */
    public function getLocationDialingCode()
    {
        return $this->locationDialingCode->getValue();
    }
}
