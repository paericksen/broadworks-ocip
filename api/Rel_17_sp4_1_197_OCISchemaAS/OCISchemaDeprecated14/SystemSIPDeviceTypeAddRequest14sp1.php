<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SignalingAddressType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedPositiveInt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\CPEDeviceOptions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\EarlyMediaSupportType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\WebBasedConfigURL;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to add a sip device type.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Replaced By: SystemSIPDeviceTypeAddRequest14sp2
 */
class SystemSIPDeviceTypeAddRequest14sp1 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemSIPDeviceTypeAddRequest14sp1';
    protected $deviceType;
    protected $numberOfPorts;
    protected $profile;
    protected $registrationCapable;
    protected $isConferenceDevice;
    protected $isMusicOnHoldDevice;
    protected $authenticationOverride;
    protected $RFC3264Hold;
    protected $isTrusted;
    protected $E164Capable;
    protected $routeAdvance;
    protected $forwardingOverride;
    protected $wirelessIntegration;
    protected $webBasedConfigURL;
    protected $isVideoCapable;
    protected $PBXIntegration;
    protected $useBusinessTrunkingContact;
    protected $staticRegistrationCapable;
    protected $cpeDeviceOptions;
    protected $earlyMediaSupport;

    public function __construct(
         $deviceType = '',
         $numberOfPorts = '',
         $profile = '',
         $registrationCapable = '',
         $isConferenceDevice = '',
         $isMusicOnHoldDevice = '',
         $authenticationOverride = '',
         $RFC3264Hold = '',
         $isTrusted = '',
         $E164Capable = '',
         $routeAdvance = '',
         $forwardingOverride = '',
         $wirelessIntegration = '',
         $webBasedConfigURL = null,
         $isVideoCapable = '',
         $PBXIntegration = '',
         $useBusinessTrunkingContact = '',
         $staticRegistrationCapable = '',
         $cpeDeviceOptions = null,
         $earlyMediaSupport = ''
    ) {
        $this->setDeviceType($deviceType);
        $this->setNumberOfPorts($numberOfPorts);
        $this->setProfile($profile);
        $this->setRegistrationCapable($registrationCapable);
        $this->setIsConferenceDevice($isConferenceDevice);
        $this->setIsMusicOnHoldDevice($isMusicOnHoldDevice);
        $this->setAuthenticationOverride($authenticationOverride);
        $this->setRFC3264Hold($RFC3264Hold);
        $this->setIsTrusted($isTrusted);
        $this->setE164Capable($E164Capable);
        $this->setRouteAdvance($routeAdvance);
        $this->setForwardingOverride($forwardingOverride);
        $this->setWirelessIntegration($wirelessIntegration);
        $this->setWebBasedConfigURL($webBasedConfigURL);
        $this->setIsVideoCapable($isVideoCapable);
        $this->setPBXIntegration($PBXIntegration);
        $this->setUseBusinessTrunkingContact($useBusinessTrunkingContact);
        $this->setStaticRegistrationCapable($staticRegistrationCapable);
        $this->setCpeDeviceOptions($cpeDeviceOptions);
        $this->setEarlyMediaSupport($earlyMediaSupport);
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
    public function setDeviceType($deviceType = null)
    {
        $this->deviceType = ($deviceType InstanceOf AccessDeviceType)
             ? $deviceType
             : new AccessDeviceType($deviceType);
        $this->deviceType->setElementName('deviceType');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceType $deviceType
     */
    public function getDeviceType()
    {
        return ($this->deviceType)
            ? $this->deviceType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNumberOfPorts(UnboundedPositiveInt $numberOfPorts = null)
    {
        $this->numberOfPorts = ($numberOfPorts InstanceOf UnboundedPositiveInt)
             ? $numberOfPorts
             : new UnboundedPositiveInt($numberOfPorts);
        $this->numberOfPorts->setElementName('numberOfPorts');
        return $this;
    }

    /**
     * 
     * @return UnboundedPositiveInt $numberOfPorts
     */
    public function getNumberOfPorts()
    {
        return $this->numberOfPorts;
    }

    /**
     * 
     */
    public function setProfile($profile = null)
    {
        $this->profile = ($profile InstanceOf SignalingAddressType)
             ? $profile
             : new SignalingAddressType($profile);
        $this->profile->setElementName('profile');
        return $this;
    }

    /**
     * 
     * @return SignalingAddressType $profile
     */
    public function getProfile()
    {
        return ($this->profile)
            ? $this->profile->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRegistrationCapable($registrationCapable = null)
    {
        $this->registrationCapable = new PrimitiveType($registrationCapable);
        $this->registrationCapable->setElementName('registrationCapable');
        return $this;
    }

    /**
     * 
     * @return boolean $registrationCapable
     */
    public function getRegistrationCapable()
    {
        return ($this->registrationCapable)
            ? $this->registrationCapable->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsConferenceDevice($isConferenceDevice = null)
    {
        $this->isConferenceDevice = new PrimitiveType($isConferenceDevice);
        $this->isConferenceDevice->setElementName('isConferenceDevice');
        return $this;
    }

    /**
     * 
     * @return boolean $isConferenceDevice
     */
    public function getIsConferenceDevice()
    {
        return ($this->isConferenceDevice)
            ? $this->isConferenceDevice->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsMusicOnHoldDevice($isMusicOnHoldDevice = null)
    {
        $this->isMusicOnHoldDevice = new PrimitiveType($isMusicOnHoldDevice);
        $this->isMusicOnHoldDevice->setElementName('isMusicOnHoldDevice');
        return $this;
    }

    /**
     * 
     * @return boolean $isMusicOnHoldDevice
     */
    public function getIsMusicOnHoldDevice()
    {
        return ($this->isMusicOnHoldDevice)
            ? $this->isMusicOnHoldDevice->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAuthenticationOverride($authenticationOverride = null)
    {
        $this->authenticationOverride = new PrimitiveType($authenticationOverride);
        $this->authenticationOverride->setElementName('authenticationOverride');
        return $this;
    }

    /**
     * 
     * @return boolean $authenticationOverride
     */
    public function getAuthenticationOverride()
    {
        return ($this->authenticationOverride)
            ? $this->authenticationOverride->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRFC3264Hold($RFC3264Hold = null)
    {
        $this->RFC3264Hold = new PrimitiveType($RFC3264Hold);
        $this->RFC3264Hold->setElementName('RFC3264Hold');
        return $this;
    }

    /**
     * 
     * @return boolean $RFC3264Hold
     */
    public function getRFC3264Hold()
    {
        return ($this->RFC3264Hold)
            ? $this->RFC3264Hold->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsTrusted($isTrusted = null)
    {
        $this->isTrusted = new PrimitiveType($isTrusted);
        $this->isTrusted->setElementName('isTrusted');
        return $this;
    }

    /**
     * 
     * @return boolean $isTrusted
     */
    public function getIsTrusted()
    {
        return ($this->isTrusted)
            ? $this->isTrusted->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setE164Capable($E164Capable = null)
    {
        $this->E164Capable = new PrimitiveType($E164Capable);
        $this->E164Capable->setElementName('E164Capable');
        return $this;
    }

    /**
     * 
     * @return boolean $E164Capable
     */
    public function getE164Capable()
    {
        return ($this->E164Capable)
            ? $this->E164Capable->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRouteAdvance($routeAdvance = null)
    {
        $this->routeAdvance = new PrimitiveType($routeAdvance);
        $this->routeAdvance->setElementName('routeAdvance');
        return $this;
    }

    /**
     * 
     * @return boolean $routeAdvance
     */
    public function getRouteAdvance()
    {
        return ($this->routeAdvance)
            ? $this->routeAdvance->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setForwardingOverride($forwardingOverride = null)
    {
        $this->forwardingOverride = new PrimitiveType($forwardingOverride);
        $this->forwardingOverride->setElementName('forwardingOverride');
        return $this;
    }

    /**
     * 
     * @return boolean $forwardingOverride
     */
    public function getForwardingOverride()
    {
        return ($this->forwardingOverride)
            ? $this->forwardingOverride->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setWirelessIntegration($wirelessIntegration = null)
    {
        $this->wirelessIntegration = new PrimitiveType($wirelessIntegration);
        $this->wirelessIntegration->setElementName('wirelessIntegration');
        return $this;
    }

    /**
     * 
     * @return boolean $wirelessIntegration
     */
    public function getWirelessIntegration()
    {
        return ($this->wirelessIntegration)
            ? $this->wirelessIntegration->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setWebBasedConfigURL($webBasedConfigURL = null)
    {
        $this->webBasedConfigURL = ($webBasedConfigURL InstanceOf WebBasedConfigURL)
             ? $webBasedConfigURL
             : new WebBasedConfigURL($webBasedConfigURL);
        $this->webBasedConfigURL->setElementName('webBasedConfigURL');
        return $this;
    }

    /**
     * 
     * @return WebBasedConfigURL $webBasedConfigURL
     */
    public function getWebBasedConfigURL()
    {
        return ($this->webBasedConfigURL)
            ? $this->webBasedConfigURL->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsVideoCapable($isVideoCapable = null)
    {
        $this->isVideoCapable = new PrimitiveType($isVideoCapable);
        $this->isVideoCapable->setElementName('isVideoCapable');
        return $this;
    }

    /**
     * 
     * @return boolean $isVideoCapable
     */
    public function getIsVideoCapable()
    {
        return ($this->isVideoCapable)
            ? $this->isVideoCapable->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPBXIntegration($PBXIntegration = null)
    {
        $this->PBXIntegration = new PrimitiveType($PBXIntegration);
        $this->PBXIntegration->setElementName('PBXIntegration');
        return $this;
    }

    /**
     * 
     * @return boolean $PBXIntegration
     */
    public function getPBXIntegration()
    {
        return ($this->PBXIntegration)
            ? $this->PBXIntegration->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseBusinessTrunkingContact($useBusinessTrunkingContact = null)
    {
        $this->useBusinessTrunkingContact = new PrimitiveType($useBusinessTrunkingContact);
        $this->useBusinessTrunkingContact->setElementName('useBusinessTrunkingContact');
        return $this;
    }

    /**
     * 
     * @return boolean $useBusinessTrunkingContact
     */
    public function getUseBusinessTrunkingContact()
    {
        return ($this->useBusinessTrunkingContact)
            ? $this->useBusinessTrunkingContact->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setStaticRegistrationCapable($staticRegistrationCapable = null)
    {
        $this->staticRegistrationCapable = new PrimitiveType($staticRegistrationCapable);
        $this->staticRegistrationCapable->setElementName('staticRegistrationCapable');
        return $this;
    }

    /**
     * 
     * @return boolean $staticRegistrationCapable
     */
    public function getStaticRegistrationCapable()
    {
        return ($this->staticRegistrationCapable)
            ? $this->staticRegistrationCapable->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCpeDeviceOptions(CPEDeviceOptions $cpeDeviceOptions = null)
    {
        $this->cpeDeviceOptions = ($cpeDeviceOptions InstanceOf CPEDeviceOptions)
             ? $cpeDeviceOptions
             : new CPEDeviceOptions($cpeDeviceOptions);
        $this->cpeDeviceOptions->setElementName('cpeDeviceOptions');
        return $this;
    }

    /**
     * 
     * @return CPEDeviceOptions $cpeDeviceOptions
     */
    public function getCpeDeviceOptions()
    {
        return $this->cpeDeviceOptions;
    }

    /**
     * 
     */
    public function setEarlyMediaSupport($earlyMediaSupport = null)
    {
        $this->earlyMediaSupport = ($earlyMediaSupport InstanceOf EarlyMediaSupportType)
             ? $earlyMediaSupport
             : new EarlyMediaSupportType($earlyMediaSupport);
        $this->earlyMediaSupport->setElementName('earlyMediaSupport');
        return $this;
    }

    /**
     * 
     * @return EarlyMediaSupportType $earlyMediaSupport
     */
    public function getEarlyMediaSupport()
    {
        return ($this->earlyMediaSupport)
            ? $this->earlyMediaSupport->getElementValue()
            : null;
    }
}
