<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementCommunicationBarringAlternateCallIndicatorList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementCommunicationBarringCallTypeList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDCriteriaDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDPrefixDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDCriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a Dialable Caller ID Criteria.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderDialableCallerIDCriteriaModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                        = 'ServiceProviderDialableCallerIDCriteriaModifyRequest';
    protected $serviceProviderId           = null;
    protected $name                        = null;
    protected $newName                     = null;
    protected $description                 = null;
    protected $prefixDigits                = null;
    protected $matchCallType               = null;
    protected $matchAlternateCallIndicator = null;
    protected $matchLocalCategory          = null;
    protected $matchNationalCategory       = null;
    protected $matchInterlataCategory      = null;
    protected $matchIntralataCategory      = null;
    protected $matchInternationalCategory  = null;
    protected $matchPrivateCategory        = null;
    protected $matchEmergencyCategory      = null;
    protected $matchOtherCategory          = null;

    public function __construct(
         $serviceProviderId,
         $name,
         $newName = null,
         $description = null,
         $prefixDigits = null,
         ReplacementCommunicationBarringCallTypeList $matchCallType = null,
         ReplacementCommunicationBarringAlternateCallIndicatorList $matchAlternateCallIndicator = null,
         $matchLocalCategory = null,
         $matchNationalCategory = null,
         $matchInterlataCategory = null,
         $matchIntralataCategory = null,
         $matchInternationalCategory = null,
         $matchPrivateCategory = null,
         $matchEmergencyCategory = null,
         $matchOtherCategory = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setName($name);
        $this->setNewName($newName);
        $this->setDescription($description);
        $this->setPrefixDigits($prefixDigits);
        $this->setMatchCallType($matchCallType);
        $this->setMatchAlternateCallIndicator($matchAlternateCallIndicator);
        $this->setMatchLocalCategory($matchLocalCategory);
        $this->setMatchNationalCategory($matchNationalCategory);
        $this->setMatchInterlataCategory($matchInterlataCategory);
        $this->setMatchIntralataCategory($matchIntralataCategory);
        $this->setMatchInternationalCategory($matchInternationalCategory);
        $this->setMatchPrivateCategory($matchPrivateCategory);
        $this->setMatchEmergencyCategory($matchEmergencyCategory);
        $this->setMatchOtherCategory($matchOtherCategory);
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
    public function setName($name = null)
    {
        if (!$name) return $this;
        $this->name = ($name InstanceOf DialableCallerIDCriteriaName)
             ? $name
             : new DialableCallerIDCriteriaName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return DialableCallerIDCriteriaName
     */
    public function getName()
    {
        return $this->name->getValue();
    }

    /**
     * 
     */
    public function setNewName($newName = null)
    {
        if (!$newName) return $this;
        $this->newName = ($newName InstanceOf DialableCallerIDCriteriaName)
             ? $newName
             : new DialableCallerIDCriteriaName($newName);
        $this->newName->setName('newName');
        return $this;
    }

    /**
     * 
     * @return DialableCallerIDCriteriaName
     */
    public function getNewName()
    {
        return $this->newName->getValue();
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        if (!$description) return $this;
        $this->description = ($description InstanceOf DialableCallerIDCriteriaDescription)
             ? $description
             : new DialableCallerIDCriteriaDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return DialableCallerIDCriteriaDescription
     */
    public function getDescription()
    {
        return $this->description->getValue();
    }

    /**
     * 
     */
    public function setPrefixDigits($prefixDigits = null)
    {
        if (!$prefixDigits) return $this;
        $this->prefixDigits = ($prefixDigits InstanceOf DialableCallerIDPrefixDigits)
             ? $prefixDigits
             : new DialableCallerIDPrefixDigits($prefixDigits);
        $this->prefixDigits->setName('prefixDigits');
        return $this;
    }

    /**
     * 
     * @return DialableCallerIDPrefixDigits
     */
    public function getPrefixDigits()
    {
        return $this->prefixDigits->getValue();
    }

    /**
     * 
     */
    public function setMatchCallType(ReplacementCommunicationBarringCallTypeList $matchCallType = null)
    {
        if (!$matchCallType) return $this;
        $this->matchCallType = $matchCallType;
        $this->matchCallType->setName('matchCallType');
        return $this;
    }

    /**
     * 
     * @return ReplacementCommunicationBarringCallTypeList
     */
    public function getMatchCallType()
    {
        return $this->matchCallType;
    }

    /**
     * 
     */
    public function setMatchAlternateCallIndicator(ReplacementCommunicationBarringAlternateCallIndicatorList $matchAlternateCallIndicator = null)
    {
        if (!$matchAlternateCallIndicator) return $this;
        $this->matchAlternateCallIndicator = $matchAlternateCallIndicator;
        $this->matchAlternateCallIndicator->setName('matchAlternateCallIndicator');
        return $this;
    }

    /**
     * 
     * @return ReplacementCommunicationBarringAlternateCallIndicatorList
     */
    public function getMatchAlternateCallIndicator()
    {
        return $this->matchAlternateCallIndicator;
    }

    /**
     * 
     */
    public function setMatchLocalCategory($matchLocalCategory = null)
    {
        if (!$matchLocalCategory) return $this;
        $this->matchLocalCategory = new PrimitiveType($matchLocalCategory);
        $this->matchLocalCategory->setName('matchLocalCategory');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchLocalCategory()
    {
        return $this->matchLocalCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchNationalCategory($matchNationalCategory = null)
    {
        if (!$matchNationalCategory) return $this;
        $this->matchNationalCategory = new PrimitiveType($matchNationalCategory);
        $this->matchNationalCategory->setName('matchNationalCategory');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchNationalCategory()
    {
        return $this->matchNationalCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchInterlataCategory($matchInterlataCategory = null)
    {
        if (!$matchInterlataCategory) return $this;
        $this->matchInterlataCategory = new PrimitiveType($matchInterlataCategory);
        $this->matchInterlataCategory->setName('matchInterlataCategory');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchInterlataCategory()
    {
        return $this->matchInterlataCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchIntralataCategory($matchIntralataCategory = null)
    {
        if (!$matchIntralataCategory) return $this;
        $this->matchIntralataCategory = new PrimitiveType($matchIntralataCategory);
        $this->matchIntralataCategory->setName('matchIntralataCategory');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchIntralataCategory()
    {
        return $this->matchIntralataCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchInternationalCategory($matchInternationalCategory = null)
    {
        if (!$matchInternationalCategory) return $this;
        $this->matchInternationalCategory = new PrimitiveType($matchInternationalCategory);
        $this->matchInternationalCategory->setName('matchInternationalCategory');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchInternationalCategory()
    {
        return $this->matchInternationalCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchPrivateCategory($matchPrivateCategory = null)
    {
        if (!$matchPrivateCategory) return $this;
        $this->matchPrivateCategory = new PrimitiveType($matchPrivateCategory);
        $this->matchPrivateCategory->setName('matchPrivateCategory');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchPrivateCategory()
    {
        return $this->matchPrivateCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchEmergencyCategory($matchEmergencyCategory = null)
    {
        if (!$matchEmergencyCategory) return $this;
        $this->matchEmergencyCategory = new PrimitiveType($matchEmergencyCategory);
        $this->matchEmergencyCategory->setName('matchEmergencyCategory');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchEmergencyCategory()
    {
        return $this->matchEmergencyCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchOtherCategory($matchOtherCategory = null)
    {
        if (!$matchOtherCategory) return $this;
        $this->matchOtherCategory = new PrimitiveType($matchOtherCategory);
        $this->matchOtherCategory->setName('matchOtherCategory');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchOtherCategory()
    {
        return $this->matchOtherCategory->getValue();
    }
}
