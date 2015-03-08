<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialPlanAccessCodeDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to ServiceProviderDialPlanPolicyGetAccessCodeRequest
 */
class ServiceProviderDialPlanPolicyGetAccessCodeResponse extends ComplexType implements ComplexInterface
{
    public    $name                                        = __CLASS__;
    protected $includeCodeForNetworkTranslationsAndRouting = null;
    protected $includeCodeForScreeningServices             = null;
    protected $enableSecondaryDialTone                     = null;
    protected $description                                 = null;


    /**
     * 
     */
    public function setIncludeCodeForNetworkTranslationsAndRouting($includeCodeForNetworkTranslationsAndRouting = null)
    {
        $this->includeCodeForNetworkTranslationsAndRouting = (boolean) $includeCodeForNetworkTranslationsAndRouting;
    }

    /**
     * 
     */
    public function getIncludeCodeForNetworkTranslationsAndRouting()
    {
        return (!$this->includeCodeForNetworkTranslationsAndRouting) ?: $this->includeCodeForNetworkTranslationsAndRouting->getValue();
    }

    /**
     * 
     */
    public function setIncludeCodeForScreeningServices($includeCodeForScreeningServices = null)
    {
        $this->includeCodeForScreeningServices = (boolean) $includeCodeForScreeningServices;
    }

    /**
     * 
     */
    public function getIncludeCodeForScreeningServices()
    {
        return (!$this->includeCodeForScreeningServices) ?: $this->includeCodeForScreeningServices->getValue();
    }

    /**
     * 
     */
    public function setEnableSecondaryDialTone($enableSecondaryDialTone = null)
    {
        $this->enableSecondaryDialTone = (boolean) $enableSecondaryDialTone;
    }

    /**
     * 
     */
    public function getEnableSecondaryDialTone()
    {
        return (!$this->enableSecondaryDialTone) ?: $this->enableSecondaryDialTone->getValue();
    }

    /**
     * Dial Plan Access Code Description.
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf DialPlanAccessCodeDescription)
             ? $description
             : new DialPlanAccessCodeDescription($description);
    }

    /**
     * Dial Plan Access Code Description.
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
    }
}
