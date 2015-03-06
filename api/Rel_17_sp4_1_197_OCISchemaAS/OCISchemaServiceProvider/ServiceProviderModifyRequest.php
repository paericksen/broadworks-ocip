<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Contact;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\StreetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the profile for a service provider or enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $defaultDomain=null,
             $serviceProviderName=null,
             $supportEmail=null,
             Contact $contact=null,
             StreetAddress $address=null,
             $useServiceProviderLanguages=null
    ) {
        $this->serviceProviderId           = new ServiceProviderId($serviceProviderId);
        $this->defaultDomain               = new NetAddress($defaultDomain);
        $this->serviceProviderName         = new ServiceProviderName($serviceProviderName);
        $this->supportEmail                = new EmailAddress($supportEmail);
        $this->contact                     = $contact;
        $this->address                     = $address;
        $this->useServiceProviderLanguages = $useServiceProviderLanguages;
        $this->args                        = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setDefaultDomain($defaultDomain)
    {
        $defaultDomain and $this->defaultDomain = new NetAddress($defaultDomain);
    }

    public function getDefaultDomain()
    {
        return (!$this->defaultDomain) ?: $this->defaultDomain->value();
    }

    public function setServiceProviderName($serviceProviderName)
    {
        $serviceProviderName and $this->serviceProviderName = new ServiceProviderName($serviceProviderName);
    }

    public function getServiceProviderName()
    {
        return (!$this->serviceProviderName) ?: $this->serviceProviderName->value();
    }

    public function setSupportEmail($supportEmail)
    {
        $supportEmail and $this->supportEmail = new EmailAddress($supportEmail);
    }

    public function getSupportEmail()
    {
        return (!$this->supportEmail) ?: $this->supportEmail->value();
    }

    public function setContact($contact)
    {
        $contact and $this->contact = new Contact($contact);
    }

    public function getContact()
    {
        return (!$this->contact) ?: $this->contact->value();
    }

    public function setAddress($address)
    {
        $address and $this->address = new StreetAddress($address);
    }

    public function getAddress()
    {
        return (!$this->address) ?: $this->address->value();
    }

    public function setUseServiceProviderLanguages($useServiceProviderLanguages)
    {
        $useServiceProviderLanguages and $this->useServiceProviderLanguages = new xs:boolean($useServiceProviderLanguages);
    }

    public function getUseServiceProviderLanguages()
    {
        return (!$this->useServiceProviderLanguages) ?: $this->useServiceProviderLanguages->value();
    }
}