<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderCommunicationBarringHierarchicalRedirectingRule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderCommunicationBarringHierarchicalOriginatingRule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringProfileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringOriginatingAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringRedirectingAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringIncomingAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringIncomingRule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TreatmentId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the ServiceProviderCommunicationBarringProfileGetRequest.
 *         The response contains the Communication Barring Profile information.
 *         The incoming, originating and redirecting rules are returned in ascending priority order.
 */
class ServiceProviderCommunicationBarringProfileGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                             = 'ServiceProviderCommunicationBarringProfileGetResponse';
    protected $description                      = null;
    protected $originatingDefaultAction         = null;
    protected $originatingDefaultTreatmentId    = null;
    protected $originatingDefaultTransferNumber = null;
    protected $originatingDefaultCallTimeout    = null;
    protected $originatingRule                  = null;
    protected $redirectingDefaultAction         = null;
    protected $redirectingDefaultCallTimeout    = null;
    protected $redirectingRule                  = null;
    protected $incomingDefaultAction            = null;
    protected $incomingDefaultCallTimeout       = null;
    protected $incomingRule                     = null;
    protected $isDefault                        = null;

    /**
     * @return ServiceProviderCommunicationBarringProfileGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        if (!$description) return $this;
        $this->description = ($description InstanceOf CommunicationBarringProfileDescription)
             ? $description
             : new CommunicationBarringProfileDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringProfileDescription
     */
    public function getDescription()
    {
        return $this->description->getValue();
    }

    /**
     * 
     */
    public function setOriginatingDefaultAction($originatingDefaultAction = null)
    {
        if (!$originatingDefaultAction) return $this;
        $this->originatingDefaultAction = ($originatingDefaultAction InstanceOf CommunicationBarringOriginatingAction)
             ? $originatingDefaultAction
             : new CommunicationBarringOriginatingAction($originatingDefaultAction);
        $this->originatingDefaultAction->setName('originatingDefaultAction');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringOriginatingAction
     */
    public function getOriginatingDefaultAction()
    {
        return $this->originatingDefaultAction->getValue();
    }

    /**
     * 
     */
    public function setOriginatingDefaultTreatmentId($originatingDefaultTreatmentId = null)
    {
        if (!$originatingDefaultTreatmentId) return $this;
        $this->originatingDefaultTreatmentId = ($originatingDefaultTreatmentId InstanceOf TreatmentId)
             ? $originatingDefaultTreatmentId
             : new TreatmentId($originatingDefaultTreatmentId);
        $this->originatingDefaultTreatmentId->setName('originatingDefaultTreatmentId');
        return $this;
    }

    /**
     * 
     * @return TreatmentId
     */
    public function getOriginatingDefaultTreatmentId()
    {
        return $this->originatingDefaultTreatmentId->getValue();
    }

    /**
     * 
     */
    public function setOriginatingDefaultTransferNumber($originatingDefaultTransferNumber = null)
    {
        if (!$originatingDefaultTransferNumber) return $this;
        $this->originatingDefaultTransferNumber = ($originatingDefaultTransferNumber InstanceOf OutgoingDN)
             ? $originatingDefaultTransferNumber
             : new OutgoingDN($originatingDefaultTransferNumber);
        $this->originatingDefaultTransferNumber->setName('originatingDefaultTransferNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDN
     */
    public function getOriginatingDefaultTransferNumber()
    {
        return $this->originatingDefaultTransferNumber->getValue();
    }

    /**
     * 
     */
    public function setOriginatingDefaultCallTimeout($originatingDefaultCallTimeout = null)
    {
        if (!$originatingDefaultCallTimeout) return $this;
        $this->originatingDefaultCallTimeout = ($originatingDefaultCallTimeout InstanceOf CommunicationBarringTimeoutSeconds)
             ? $originatingDefaultCallTimeout
             : new CommunicationBarringTimeoutSeconds($originatingDefaultCallTimeout);
        $this->originatingDefaultCallTimeout->setName('originatingDefaultCallTimeout');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringTimeoutSeconds
     */
    public function getOriginatingDefaultCallTimeout()
    {
        return $this->originatingDefaultCallTimeout->getValue();
    }

    /**
     * 
     */
    public function setOriginatingRule(ServiceProviderCommunicationBarringHierarchicalOriginatingRule $originatingRule = null)
    {
        if (!$originatingRule) return $this;
        $this->originatingRule = $originatingRule;
        $this->originatingRule->setName('originatingRule');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderCommunicationBarringHierarchicalOriginatingRule
     */
    public function getOriginatingRule()
    {
        return $this->originatingRule;
    }

    /**
     * 
     */
    public function setRedirectingDefaultAction($redirectingDefaultAction = null)
    {
        if (!$redirectingDefaultAction) return $this;
        $this->redirectingDefaultAction = ($redirectingDefaultAction InstanceOf CommunicationBarringRedirectingAction)
             ? $redirectingDefaultAction
             : new CommunicationBarringRedirectingAction($redirectingDefaultAction);
        $this->redirectingDefaultAction->setName('redirectingDefaultAction');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringRedirectingAction
     */
    public function getRedirectingDefaultAction()
    {
        return $this->redirectingDefaultAction->getValue();
    }

    /**
     * 
     */
    public function setRedirectingDefaultCallTimeout($redirectingDefaultCallTimeout = null)
    {
        if (!$redirectingDefaultCallTimeout) return $this;
        $this->redirectingDefaultCallTimeout = ($redirectingDefaultCallTimeout InstanceOf CommunicationBarringTimeoutSeconds)
             ? $redirectingDefaultCallTimeout
             : new CommunicationBarringTimeoutSeconds($redirectingDefaultCallTimeout);
        $this->redirectingDefaultCallTimeout->setName('redirectingDefaultCallTimeout');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringTimeoutSeconds
     */
    public function getRedirectingDefaultCallTimeout()
    {
        return $this->redirectingDefaultCallTimeout->getValue();
    }

    /**
     * 
     */
    public function setRedirectingRule(ServiceProviderCommunicationBarringHierarchicalRedirectingRule $redirectingRule = null)
    {
        if (!$redirectingRule) return $this;
        $this->redirectingRule = $redirectingRule;
        $this->redirectingRule->setName('redirectingRule');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderCommunicationBarringHierarchicalRedirectingRule
     */
    public function getRedirectingRule()
    {
        return $this->redirectingRule;
    }

    /**
     * 
     */
    public function setIncomingDefaultAction($incomingDefaultAction = null)
    {
        if (!$incomingDefaultAction) return $this;
        $this->incomingDefaultAction = ($incomingDefaultAction InstanceOf CommunicationBarringIncomingAction)
             ? $incomingDefaultAction
             : new CommunicationBarringIncomingAction($incomingDefaultAction);
        $this->incomingDefaultAction->setName('incomingDefaultAction');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringIncomingAction
     */
    public function getIncomingDefaultAction()
    {
        return $this->incomingDefaultAction->getValue();
    }

    /**
     * 
     */
    public function setIncomingDefaultCallTimeout($incomingDefaultCallTimeout = null)
    {
        if (!$incomingDefaultCallTimeout) return $this;
        $this->incomingDefaultCallTimeout = ($incomingDefaultCallTimeout InstanceOf CommunicationBarringTimeoutSeconds)
             ? $incomingDefaultCallTimeout
             : new CommunicationBarringTimeoutSeconds($incomingDefaultCallTimeout);
        $this->incomingDefaultCallTimeout->setName('incomingDefaultCallTimeout');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringTimeoutSeconds
     */
    public function getIncomingDefaultCallTimeout()
    {
        return $this->incomingDefaultCallTimeout->getValue();
    }

    /**
     * 
     */
    public function setIncomingRule(CommunicationBarringIncomingRule $incomingRule = null)
    {
        if (!$incomingRule) return $this;
        $this->incomingRule = $incomingRule;
        $this->incomingRule->setName('incomingRule');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringIncomingRule
     */
    public function getIncomingRule()
    {
        return $this->incomingRule;
    }

    /**
     * 
     */
    public function setIsDefault($isDefault = null)
    {
        if (!$isDefault) return $this;
        $this->isDefault = new PrimitiveType($isDefault);
        $this->isDefault->setName('isDefault');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsDefault()
    {
        return $this->isDefault->getValue();
    }
}
