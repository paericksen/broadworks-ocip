<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMessageProcessing;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the UserVoiceMessagingUserGetVoiceManagementRequest13mp8.
 *         Replaced by: UserVoiceMessagingUserGetVoiceManagementResponse17
 */
class UserVoiceMessagingUserGetVoiceManagementResponse13mp8 extends ComplexType implements ComplexInterface
{
    public    $name                               = __CLASS__;
    protected $isActive                           = null;
    protected $processing                         = null;
    protected $voiceMessageDeliveryEmailAddress   = null;
    protected $usePhoneMessageWaitingIndicator    = null;
    protected $sendVoiceMessageNotifyEmail        = null;
    protected $voiceMessageNotifyEmailAddress     = null;
    protected $sendCarbonCopyVoiceMessage         = null;
    protected $voiceMessageCarbonCopyEmailAddress = null;
    protected $transferOnZeroToPhoneNumber        = null;
    protected $transferPhoneNumber                = null;
    protected $alwaysRedirectToVoiceMail          = null;
    protected $busyRedirectToVoiceMail            = null;
    protected $noAnswerRedirectToVoiceMail        = null;


    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->getValue();
    }

    /**
     * Choices to handle a voice message.
     */
    public function setProcessing($processing = null)
    {
        $this->processing = ($processing InstanceOf VoiceMessagingMessageProcessing)
             ? $processing
             : new VoiceMessagingMessageProcessing($processing);
    }

    /**
     * Choices to handle a voice message.
     */
    public function getProcessing()
    {
        return (!$this->processing) ?: $this->processing->getValue();
    }

    /**
     * Email Address
     */
    public function setVoiceMessageDeliveryEmailAddress($voiceMessageDeliveryEmailAddress = null)
    {
        $this->voiceMessageDeliveryEmailAddress = ($voiceMessageDeliveryEmailAddress InstanceOf EmailAddress)
             ? $voiceMessageDeliveryEmailAddress
             : new EmailAddress($voiceMessageDeliveryEmailAddress);
    }

    /**
     * Email Address
     */
    public function getVoiceMessageDeliveryEmailAddress()
    {
        return (!$this->voiceMessageDeliveryEmailAddress) ?: $this->voiceMessageDeliveryEmailAddress->getValue();
    }

    /**
     * 
     */
    public function setUsePhoneMessageWaitingIndicator($usePhoneMessageWaitingIndicator = null)
    {
        $this->usePhoneMessageWaitingIndicator = (boolean) $usePhoneMessageWaitingIndicator;
    }

    /**
     * 
     */
    public function getUsePhoneMessageWaitingIndicator()
    {
        return (!$this->usePhoneMessageWaitingIndicator) ?: $this->usePhoneMessageWaitingIndicator->getValue();
    }

    /**
     * 
     */
    public function setSendVoiceMessageNotifyEmail($sendVoiceMessageNotifyEmail = null)
    {
        $this->sendVoiceMessageNotifyEmail = (boolean) $sendVoiceMessageNotifyEmail;
    }

    /**
     * 
     */
    public function getSendVoiceMessageNotifyEmail()
    {
        return (!$this->sendVoiceMessageNotifyEmail) ?: $this->sendVoiceMessageNotifyEmail->getValue();
    }

    /**
     * Email Address
     */
    public function setVoiceMessageNotifyEmailAddress($voiceMessageNotifyEmailAddress = null)
    {
        $this->voiceMessageNotifyEmailAddress = ($voiceMessageNotifyEmailAddress InstanceOf EmailAddress)
             ? $voiceMessageNotifyEmailAddress
             : new EmailAddress($voiceMessageNotifyEmailAddress);
    }

    /**
     * Email Address
     */
    public function getVoiceMessageNotifyEmailAddress()
    {
        return (!$this->voiceMessageNotifyEmailAddress) ?: $this->voiceMessageNotifyEmailAddress->getValue();
    }

    /**
     * 
     */
    public function setSendCarbonCopyVoiceMessage($sendCarbonCopyVoiceMessage = null)
    {
        $this->sendCarbonCopyVoiceMessage = (boolean) $sendCarbonCopyVoiceMessage;
    }

    /**
     * 
     */
    public function getSendCarbonCopyVoiceMessage()
    {
        return (!$this->sendCarbonCopyVoiceMessage) ?: $this->sendCarbonCopyVoiceMessage->getValue();
    }

    /**
     * Email Address
     */
    public function setVoiceMessageCarbonCopyEmailAddress($voiceMessageCarbonCopyEmailAddress = null)
    {
        $this->voiceMessageCarbonCopyEmailAddress = ($voiceMessageCarbonCopyEmailAddress InstanceOf EmailAddress)
             ? $voiceMessageCarbonCopyEmailAddress
             : new EmailAddress($voiceMessageCarbonCopyEmailAddress);
    }

    /**
     * Email Address
     */
    public function getVoiceMessageCarbonCopyEmailAddress()
    {
        return (!$this->voiceMessageCarbonCopyEmailAddress) ?: $this->voiceMessageCarbonCopyEmailAddress->getValue();
    }

    /**
     * 
     */
    public function setTransferOnZeroToPhoneNumber($transferOnZeroToPhoneNumber = null)
    {
        $this->transferOnZeroToPhoneNumber = (boolean) $transferOnZeroToPhoneNumber;
    }

    /**
     * 
     */
    public function getTransferOnZeroToPhoneNumber()
    {
        return (!$this->transferOnZeroToPhoneNumber) ?: $this->transferOnZeroToPhoneNumber->getValue();
    }

    /**
     * An outgoing phone number or a number meant to be dialed. It is longer
     *         than a DN so that equal access digits or access code digits may be
     *         be included.  It cannot be a SIP URL.
     */
    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        $this->transferPhoneNumber = ($transferPhoneNumber InstanceOf OutgoingDN)
             ? $transferPhoneNumber
             : new OutgoingDN($transferPhoneNumber);
    }

    /**
     * An outgoing phone number or a number meant to be dialed. It is longer
     *         than a DN so that equal access digits or access code digits may be
     *         be included.  It cannot be a SIP URL.
     */
    public function getTransferPhoneNumber()
    {
        return (!$this->transferPhoneNumber) ?: $this->transferPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setAlwaysRedirectToVoiceMail($alwaysRedirectToVoiceMail = null)
    {
        $this->alwaysRedirectToVoiceMail = (boolean) $alwaysRedirectToVoiceMail;
    }

    /**
     * 
     */
    public function getAlwaysRedirectToVoiceMail()
    {
        return (!$this->alwaysRedirectToVoiceMail) ?: $this->alwaysRedirectToVoiceMail->getValue();
    }

    /**
     * 
     */
    public function setBusyRedirectToVoiceMail($busyRedirectToVoiceMail = null)
    {
        $this->busyRedirectToVoiceMail = (boolean) $busyRedirectToVoiceMail;
    }

    /**
     * 
     */
    public function getBusyRedirectToVoiceMail()
    {
        return (!$this->busyRedirectToVoiceMail) ?: $this->busyRedirectToVoiceMail->getValue();
    }

    /**
     * 
     */
    public function setNoAnswerRedirectToVoiceMail($noAnswerRedirectToVoiceMail = null)
    {
        $this->noAnswerRedirectToVoiceMail = (boolean) $noAnswerRedirectToVoiceMail;
    }

    /**
     * 
     */
    public function getNoAnswerRedirectToVoiceMail()
    {
        return (!$this->noAnswerRedirectToVoiceMail) ?: $this->noAnswerRedirectToVoiceMail->getValue();
    }
}
