<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringProfileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringRedirectingAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringOriginatingAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CommunicationBarringOriginatingRule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CommunicationBarringRedirectingRule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringProfileName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TreatmentId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a new Communication Barring Profile.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCommunicationBarringProfileAddRequest extends ComplexType implements ComplexInterface
{
    public    $name                             = 'SystemCommunicationBarringProfileAddRequest';
    protected $name                             = null;
    protected $description                      = null;
    protected $originatingDefaultAction         = null;
    protected $originatingDefaultTreatmentId    = null;
    protected $originatingDefaultTransferNumber = null;
    protected $originatingDefaultCallTimeout    = null;
    protected $originatingRule                  = null;
    protected $redirectingDefaultAction         = null;
    protected $redirectingDefaultCallTimeout    = null;
    protected $redirectingRule                  = null;

    public function __construct(
         $name,
         $description = null,
         $originatingDefaultAction,
         $originatingDefaultTreatmentId = null,
         $originatingDefaultTransferNumber = null,
         $originatingDefaultCallTimeout = null,
         CommunicationBarringOriginatingRule $originatingRule = null,
         $redirectingDefaultAction,
         $redirectingDefaultCallTimeout = null,
         CommunicationBarringRedirectingRule $redirectingRule = null
    ) {
        $this->setName($name);
        $this->setDescription($description);
        $this->setOriginatingDefaultAction($originatingDefaultAction);
        $this->setOriginatingDefaultTreatmentId($originatingDefaultTreatmentId);
        $this->setOriginatingDefaultTransferNumber($originatingDefaultTransferNumber);
        $this->setOriginatingDefaultCallTimeout($originatingDefaultCallTimeout);
        $this->setOriginatingRule($originatingRule);
        $this->setRedirectingDefaultAction($redirectingDefaultAction);
        $this->setRedirectingDefaultCallTimeout($redirectingDefaultCallTimeout);
        $this->setRedirectingRule($redirectingRule);
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
        $this->name = ($name InstanceOf CommunicationBarringProfileName)
             ? $name
             : new CommunicationBarringProfileName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringProfileName
     */
    public function getName()
    {
        return $this->name->getValue();
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
    public function setOriginatingRule(CommunicationBarringOriginatingRule $originatingRule = null)
    {
        if (!$originatingRule) return $this;
        $this->originatingRule = $originatingRule;
        $this->originatingRule->setName('originatingRule');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringOriginatingRule
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
    public function setRedirectingRule(CommunicationBarringRedirectingRule $redirectingRule = null)
    {
        if (!$redirectingRule) return $this;
        $this->redirectingRule = $redirectingRule;
        $this->redirectingRule->setName('redirectingRule');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringRedirectingRule
     */
    public function getRedirectingRule()
    {
        return $this->redirectingRule;
    }
}
