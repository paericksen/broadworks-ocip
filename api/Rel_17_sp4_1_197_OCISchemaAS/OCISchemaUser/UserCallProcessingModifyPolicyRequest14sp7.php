<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxConcurrentFindMeFollowMeInvocations;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxCallTimeForAnsweredCallsMinutes16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxCallTimeForUnansweredCallsMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxConcurrentRedirectedCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxFindMeFollowMeDepth;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxSimultaneousCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxRedirectionDepth;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaPolicySelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupCLIDPolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaSetName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user level data associated with Call Procesing Policy.
 *           The response is either a SuccessResponse or an ErrorResponse.
 *  
 *           The useUserCLIDSetting attribute controls the CLID settings 
 *           (clidPolicy, emergencyClidPolicy, allowAlternateNumbersForRedirectingIdentity, useGroupName, allowConfigurableCLIDForRedirectingIdentity)
 *           
 *           The useUserMediaSetting attribute controls the Media settings 
 *           (medisPolicySelection, supportedMediaSetName)
 *           
 *           The useUserCallLimitsSetting attribute controls the Call Limits setting 
 *           (useMaxSimultaneousCalls, maxSimultaneousCalls, useMaxSimultaneousVideoCalls, maxSimultaneousVideoCalls, useMaxCallTimeForAnsweredCalls, maxCallTimeForAnsweredCallsMinutes, useMaxCallTimeForUnansweredCalls, maxCallTimeForUnansweredCallsMinutes, useMaxConcurrentRedirectedCalls, useMaxFindMeFollowMeDepth, maxRedirectionDepth, useMaxConcurrentFindMeFollowMeInvocations, maxConcurrentFindMeFollowMeInvocations)
 * 
 *           The useUserDCLIDSetting controls the Dialable Caller ID settings (enableDialableCallerID)
 *           
 *           The following elements are only used in AS data mode:
 *            useUserDCLIDSetting
 *            enableDialableCallerID
 *            allowConfigurableCLIDForRedirectingIdentity
 */
class UserCallProcessingModifyPolicyRequest14sp7 extends ComplexType implements ComplexInterface
{
    public    $name                                        = 'UserCallProcessingModifyPolicyRequest14sp7';
    protected $userId                                      = null;
    protected $useUserCLIDSetting                          = null;
    protected $useUserMediaSetting                         = null;
    protected $useUserCallLimitsSetting                    = null;
    protected $useUserDCLIDSetting                         = null;
    protected $useMaxSimultaneousCalls                     = null;
    protected $maxSimultaneousCalls                        = null;
    protected $useMaxSimultaneousVideoCalls                = null;
    protected $maxSimultaneousVideoCalls                   = null;
    protected $useMaxCallTimeForAnsweredCalls              = null;
    protected $maxCallTimeForAnsweredCallsMinutes          = null;
    protected $useMaxCallTimeForUnansweredCalls            = null;
    protected $maxCallTimeForUnansweredCallsMinutes        = null;
    protected $mediaPolicySelection                        = null;
    protected $supportedMediaSetName                       = null;
    protected $useMaxConcurrentRedirectedCalls             = null;
    protected $maxConcurrentRedirectedCalls                = null;
    protected $useMaxFindMeFollowMeDepth                   = null;
    protected $maxFindMeFollowMeDepth                      = null;
    protected $maxRedirectionDepth                         = null;
    protected $useMaxConcurrentFindMeFollowMeInvocations   = null;
    protected $maxConcurrentFindMeFollowMeInvocations      = null;
    protected $clidPolicy                                  = null;
    protected $emergencyClidPolicy                         = null;
    protected $allowAlternateNumbersForRedirectingIdentity = null;
    protected $useGroupName                                = null;
    protected $enableDialableCallerID                      = null;
    protected $blockCallingNameForExternalCalls            = null;
    protected $allowConfigurableCLIDForRedirectingIdentity = null;

    public function __construct(
         $userId,
         $useUserCLIDSetting = null,
         $useUserMediaSetting = null,
         $useUserCallLimitsSetting = null,
         $useUserDCLIDSetting = null,
         $useMaxSimultaneousCalls = null,
         $maxSimultaneousCalls = null,
         $useMaxSimultaneousVideoCalls = null,
         $maxSimultaneousVideoCalls = null,
         $useMaxCallTimeForAnsweredCalls = null,
         $maxCallTimeForAnsweredCallsMinutes = null,
         $useMaxCallTimeForUnansweredCalls = null,
         $maxCallTimeForUnansweredCallsMinutes = null,
         $mediaPolicySelection = null,
         $supportedMediaSetName = null,
         $useMaxConcurrentRedirectedCalls = null,
         $maxConcurrentRedirectedCalls = null,
         $useMaxFindMeFollowMeDepth = null,
         $maxFindMeFollowMeDepth = null,
         $maxRedirectionDepth = null,
         $useMaxConcurrentFindMeFollowMeInvocations = null,
         $maxConcurrentFindMeFollowMeInvocations = null,
         $clidPolicy = null,
         $emergencyClidPolicy = null,
         $allowAlternateNumbersForRedirectingIdentity = null,
         $useGroupName = null,
         $enableDialableCallerID = null,
         $blockCallingNameForExternalCalls = null,
         $allowConfigurableCLIDForRedirectingIdentity = null
    ) {
        $this->setUserId($userId);
        $this->setUseUserCLIDSetting($useUserCLIDSetting);
        $this->setUseUserMediaSetting($useUserMediaSetting);
        $this->setUseUserCallLimitsSetting($useUserCallLimitsSetting);
        $this->setUseUserDCLIDSetting($useUserDCLIDSetting);
        $this->setUseMaxSimultaneousCalls($useMaxSimultaneousCalls);
        $this->setMaxSimultaneousCalls($maxSimultaneousCalls);
        $this->setUseMaxSimultaneousVideoCalls($useMaxSimultaneousVideoCalls);
        $this->setMaxSimultaneousVideoCalls($maxSimultaneousVideoCalls);
        $this->setUseMaxCallTimeForAnsweredCalls($useMaxCallTimeForAnsweredCalls);
        $this->setMaxCallTimeForAnsweredCallsMinutes($maxCallTimeForAnsweredCallsMinutes);
        $this->setUseMaxCallTimeForUnansweredCalls($useMaxCallTimeForUnansweredCalls);
        $this->setMaxCallTimeForUnansweredCallsMinutes($maxCallTimeForUnansweredCallsMinutes);
        $this->setMediaPolicySelection($mediaPolicySelection);
        $this->setSupportedMediaSetName($supportedMediaSetName);
        $this->setUseMaxConcurrentRedirectedCalls($useMaxConcurrentRedirectedCalls);
        $this->setMaxConcurrentRedirectedCalls($maxConcurrentRedirectedCalls);
        $this->setUseMaxFindMeFollowMeDepth($useMaxFindMeFollowMeDepth);
        $this->setMaxFindMeFollowMeDepth($maxFindMeFollowMeDepth);
        $this->setMaxRedirectionDepth($maxRedirectionDepth);
        $this->setUseMaxConcurrentFindMeFollowMeInvocations($useMaxConcurrentFindMeFollowMeInvocations);
        $this->setMaxConcurrentFindMeFollowMeInvocations($maxConcurrentFindMeFollowMeInvocations);
        $this->setClidPolicy($clidPolicy);
        $this->setEmergencyClidPolicy($emergencyClidPolicy);
        $this->setAllowAlternateNumbersForRedirectingIdentity($allowAlternateNumbersForRedirectingIdentity);
        $this->setUseGroupName($useGroupName);
        $this->setEnableDialableCallerID($enableDialableCallerID);
        $this->setBlockCallingNameForExternalCalls($blockCallingNameForExternalCalls);
        $this->setAllowConfigurableCLIDForRedirectingIdentity($allowConfigurableCLIDForRedirectingIdentity);
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
    public function setUserId($userId = null)
    {
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setUseUserCLIDSetting($useUserCLIDSetting = null)
    {
        if (!$useUserCLIDSetting) return $this;
        $this->useUserCLIDSetting = new PrimitiveType($useUserCLIDSetting);
        $this->useUserCLIDSetting->setName('useUserCLIDSetting');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseUserCLIDSetting()
    {
        return $this->useUserCLIDSetting->getValue();
    }

    /**
     * 
     */
    public function setUseUserMediaSetting($useUserMediaSetting = null)
    {
        if (!$useUserMediaSetting) return $this;
        $this->useUserMediaSetting = new PrimitiveType($useUserMediaSetting);
        $this->useUserMediaSetting->setName('useUserMediaSetting');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseUserMediaSetting()
    {
        return $this->useUserMediaSetting->getValue();
    }

    /**
     * 
     */
    public function setUseUserCallLimitsSetting($useUserCallLimitsSetting = null)
    {
        if (!$useUserCallLimitsSetting) return $this;
        $this->useUserCallLimitsSetting = new PrimitiveType($useUserCallLimitsSetting);
        $this->useUserCallLimitsSetting->setName('useUserCallLimitsSetting');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseUserCallLimitsSetting()
    {
        return $this->useUserCallLimitsSetting->getValue();
    }

    /**
     * 
     */
    public function setUseUserDCLIDSetting($useUserDCLIDSetting = null)
    {
        if (!$useUserDCLIDSetting) return $this;
        $this->useUserDCLIDSetting = new PrimitiveType($useUserDCLIDSetting);
        $this->useUserDCLIDSetting->setName('useUserDCLIDSetting');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseUserDCLIDSetting()
    {
        return $this->useUserDCLIDSetting->getValue();
    }

    /**
     * 
     */
    public function setUseMaxSimultaneousCalls($useMaxSimultaneousCalls = null)
    {
        if (!$useMaxSimultaneousCalls) return $this;
        $this->useMaxSimultaneousCalls = new PrimitiveType($useMaxSimultaneousCalls);
        $this->useMaxSimultaneousCalls->setName('useMaxSimultaneousCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseMaxSimultaneousCalls()
    {
        return $this->useMaxSimultaneousCalls->getValue();
    }

    /**
     * 
     */
    public function setMaxSimultaneousCalls($maxSimultaneousCalls = null)
    {
        if (!$maxSimultaneousCalls) return $this;
        $this->maxSimultaneousCalls = ($maxSimultaneousCalls InstanceOf CallProcessingMaxSimultaneousCalls)
             ? $maxSimultaneousCalls
             : new CallProcessingMaxSimultaneousCalls($maxSimultaneousCalls);
        $this->maxSimultaneousCalls->setName('maxSimultaneousCalls');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxSimultaneousCalls
     */
    public function getMaxSimultaneousCalls()
    {
        return $this->maxSimultaneousCalls->getValue();
    }

    /**
     * 
     */
    public function setUseMaxSimultaneousVideoCalls($useMaxSimultaneousVideoCalls = null)
    {
        if (!$useMaxSimultaneousVideoCalls) return $this;
        $this->useMaxSimultaneousVideoCalls = new PrimitiveType($useMaxSimultaneousVideoCalls);
        $this->useMaxSimultaneousVideoCalls->setName('useMaxSimultaneousVideoCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseMaxSimultaneousVideoCalls()
    {
        return $this->useMaxSimultaneousVideoCalls->getValue();
    }

    /**
     * 
     */
    public function setMaxSimultaneousVideoCalls($maxSimultaneousVideoCalls = null)
    {
        if (!$maxSimultaneousVideoCalls) return $this;
        $this->maxSimultaneousVideoCalls = ($maxSimultaneousVideoCalls InstanceOf CallProcessingMaxSimultaneousCalls)
             ? $maxSimultaneousVideoCalls
             : new CallProcessingMaxSimultaneousCalls($maxSimultaneousVideoCalls);
        $this->maxSimultaneousVideoCalls->setName('maxSimultaneousVideoCalls');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxSimultaneousCalls
     */
    public function getMaxSimultaneousVideoCalls()
    {
        return $this->maxSimultaneousVideoCalls->getValue();
    }

    /**
     * 
     */
    public function setUseMaxCallTimeForAnsweredCalls($useMaxCallTimeForAnsweredCalls = null)
    {
        if (!$useMaxCallTimeForAnsweredCalls) return $this;
        $this->useMaxCallTimeForAnsweredCalls = new PrimitiveType($useMaxCallTimeForAnsweredCalls);
        $this->useMaxCallTimeForAnsweredCalls->setName('useMaxCallTimeForAnsweredCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseMaxCallTimeForAnsweredCalls()
    {
        return $this->useMaxCallTimeForAnsweredCalls->getValue();
    }

    /**
     * 
     */
    public function setMaxCallTimeForAnsweredCallsMinutes($maxCallTimeForAnsweredCallsMinutes = null)
    {
        if (!$maxCallTimeForAnsweredCallsMinutes) return $this;
        $this->maxCallTimeForAnsweredCallsMinutes = ($maxCallTimeForAnsweredCallsMinutes InstanceOf CallProcessingMaxCallTimeForAnsweredCallsMinutes16)
             ? $maxCallTimeForAnsweredCallsMinutes
             : new CallProcessingMaxCallTimeForAnsweredCallsMinutes16($maxCallTimeForAnsweredCallsMinutes);
        $this->maxCallTimeForAnsweredCallsMinutes->setName('maxCallTimeForAnsweredCallsMinutes');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxCallTimeForAnsweredCallsMinutes16
     */
    public function getMaxCallTimeForAnsweredCallsMinutes()
    {
        return $this->maxCallTimeForAnsweredCallsMinutes->getValue();
    }

    /**
     * 
     */
    public function setUseMaxCallTimeForUnansweredCalls($useMaxCallTimeForUnansweredCalls = null)
    {
        if (!$useMaxCallTimeForUnansweredCalls) return $this;
        $this->useMaxCallTimeForUnansweredCalls = new PrimitiveType($useMaxCallTimeForUnansweredCalls);
        $this->useMaxCallTimeForUnansweredCalls->setName('useMaxCallTimeForUnansweredCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseMaxCallTimeForUnansweredCalls()
    {
        return $this->useMaxCallTimeForUnansweredCalls->getValue();
    }

    /**
     * 
     */
    public function setMaxCallTimeForUnansweredCallsMinutes($maxCallTimeForUnansweredCallsMinutes = null)
    {
        if (!$maxCallTimeForUnansweredCallsMinutes) return $this;
        $this->maxCallTimeForUnansweredCallsMinutes = ($maxCallTimeForUnansweredCallsMinutes InstanceOf CallProcessingMaxCallTimeForUnansweredCallsMinutes)
             ? $maxCallTimeForUnansweredCallsMinutes
             : new CallProcessingMaxCallTimeForUnansweredCallsMinutes($maxCallTimeForUnansweredCallsMinutes);
        $this->maxCallTimeForUnansweredCallsMinutes->setName('maxCallTimeForUnansweredCallsMinutes');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxCallTimeForUnansweredCallsMinutes
     */
    public function getMaxCallTimeForUnansweredCallsMinutes()
    {
        return $this->maxCallTimeForUnansweredCallsMinutes->getValue();
    }

    /**
     * 
     */
    public function setMediaPolicySelection($mediaPolicySelection = null)
    {
        if (!$mediaPolicySelection) return $this;
        $this->mediaPolicySelection = ($mediaPolicySelection InstanceOf MediaPolicySelection)
             ? $mediaPolicySelection
             : new MediaPolicySelection($mediaPolicySelection);
        $this->mediaPolicySelection->setName('mediaPolicySelection');
        return $this;
    }

    /**
     * 
     * @return MediaPolicySelection
     */
    public function getMediaPolicySelection()
    {
        return $this->mediaPolicySelection->getValue();
    }

    /**
     * 
     */
    public function setSupportedMediaSetName($supportedMediaSetName = null)
    {
        if (!$supportedMediaSetName) return $this;
        $this->supportedMediaSetName = ($supportedMediaSetName InstanceOf MediaSetName)
             ? $supportedMediaSetName
             : new MediaSetName($supportedMediaSetName);
        $this->supportedMediaSetName->setName('supportedMediaSetName');
        return $this;
    }

    /**
     * 
     * @return MediaSetName
     */
    public function getSupportedMediaSetName()
    {
        return $this->supportedMediaSetName->getValue();
    }

    /**
     * 
     */
    public function setUseMaxConcurrentRedirectedCalls($useMaxConcurrentRedirectedCalls = null)
    {
        if (!$useMaxConcurrentRedirectedCalls) return $this;
        $this->useMaxConcurrentRedirectedCalls = new PrimitiveType($useMaxConcurrentRedirectedCalls);
        $this->useMaxConcurrentRedirectedCalls->setName('useMaxConcurrentRedirectedCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseMaxConcurrentRedirectedCalls()
    {
        return $this->useMaxConcurrentRedirectedCalls->getValue();
    }

    /**
     * 
     */
    public function setMaxConcurrentRedirectedCalls($maxConcurrentRedirectedCalls = null)
    {
        if (!$maxConcurrentRedirectedCalls) return $this;
        $this->maxConcurrentRedirectedCalls = ($maxConcurrentRedirectedCalls InstanceOf CallProcessingMaxConcurrentRedirectedCalls)
             ? $maxConcurrentRedirectedCalls
             : new CallProcessingMaxConcurrentRedirectedCalls($maxConcurrentRedirectedCalls);
        $this->maxConcurrentRedirectedCalls->setName('maxConcurrentRedirectedCalls');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxConcurrentRedirectedCalls
     */
    public function getMaxConcurrentRedirectedCalls()
    {
        return $this->maxConcurrentRedirectedCalls->getValue();
    }

    /**
     * 
     */
    public function setUseMaxFindMeFollowMeDepth($useMaxFindMeFollowMeDepth = null)
    {
        if (!$useMaxFindMeFollowMeDepth) return $this;
        $this->useMaxFindMeFollowMeDepth = new PrimitiveType($useMaxFindMeFollowMeDepth);
        $this->useMaxFindMeFollowMeDepth->setName('useMaxFindMeFollowMeDepth');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseMaxFindMeFollowMeDepth()
    {
        return $this->useMaxFindMeFollowMeDepth->getValue();
    }

    /**
     * 
     */
    public function setMaxFindMeFollowMeDepth($maxFindMeFollowMeDepth = null)
    {
        if (!$maxFindMeFollowMeDepth) return $this;
        $this->maxFindMeFollowMeDepth = ($maxFindMeFollowMeDepth InstanceOf CallProcessingMaxFindMeFollowMeDepth)
             ? $maxFindMeFollowMeDepth
             : new CallProcessingMaxFindMeFollowMeDepth($maxFindMeFollowMeDepth);
        $this->maxFindMeFollowMeDepth->setName('maxFindMeFollowMeDepth');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxFindMeFollowMeDepth
     */
    public function getMaxFindMeFollowMeDepth()
    {
        return $this->maxFindMeFollowMeDepth->getValue();
    }

    /**
     * 
     */
    public function setMaxRedirectionDepth($maxRedirectionDepth = null)
    {
        if (!$maxRedirectionDepth) return $this;
        $this->maxRedirectionDepth = ($maxRedirectionDepth InstanceOf CallProcessingMaxRedirectionDepth)
             ? $maxRedirectionDepth
             : new CallProcessingMaxRedirectionDepth($maxRedirectionDepth);
        $this->maxRedirectionDepth->setName('maxRedirectionDepth');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxRedirectionDepth
     */
    public function getMaxRedirectionDepth()
    {
        return $this->maxRedirectionDepth->getValue();
    }

    /**
     * 
     */
    public function setUseMaxConcurrentFindMeFollowMeInvocations($useMaxConcurrentFindMeFollowMeInvocations = null)
    {
        if (!$useMaxConcurrentFindMeFollowMeInvocations) return $this;
        $this->useMaxConcurrentFindMeFollowMeInvocations = new PrimitiveType($useMaxConcurrentFindMeFollowMeInvocations);
        $this->useMaxConcurrentFindMeFollowMeInvocations->setName('useMaxConcurrentFindMeFollowMeInvocations');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseMaxConcurrentFindMeFollowMeInvocations()
    {
        return $this->useMaxConcurrentFindMeFollowMeInvocations->getValue();
    }

    /**
     * 
     */
    public function setMaxConcurrentFindMeFollowMeInvocations($maxConcurrentFindMeFollowMeInvocations = null)
    {
        if (!$maxConcurrentFindMeFollowMeInvocations) return $this;
        $this->maxConcurrentFindMeFollowMeInvocations = ($maxConcurrentFindMeFollowMeInvocations InstanceOf CallProcessingMaxConcurrentFindMeFollowMeInvocations)
             ? $maxConcurrentFindMeFollowMeInvocations
             : new CallProcessingMaxConcurrentFindMeFollowMeInvocations($maxConcurrentFindMeFollowMeInvocations);
        $this->maxConcurrentFindMeFollowMeInvocations->setName('maxConcurrentFindMeFollowMeInvocations');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxConcurrentFindMeFollowMeInvocations
     */
    public function getMaxConcurrentFindMeFollowMeInvocations()
    {
        return $this->maxConcurrentFindMeFollowMeInvocations->getValue();
    }

    /**
     * 
     */
    public function setClidPolicy($clidPolicy = null)
    {
        if (!$clidPolicy) return $this;
        $this->clidPolicy = ($clidPolicy InstanceOf GroupCLIDPolicy)
             ? $clidPolicy
             : new GroupCLIDPolicy($clidPolicy);
        $this->clidPolicy->setName('clidPolicy');
        return $this;
    }

    /**
     * 
     * @return GroupCLIDPolicy
     */
    public function getClidPolicy()
    {
        return $this->clidPolicy->getValue();
    }

    /**
     * 
     */
    public function setEmergencyClidPolicy($emergencyClidPolicy = null)
    {
        if (!$emergencyClidPolicy) return $this;
        $this->emergencyClidPolicy = ($emergencyClidPolicy InstanceOf GroupCLIDPolicy)
             ? $emergencyClidPolicy
             : new GroupCLIDPolicy($emergencyClidPolicy);
        $this->emergencyClidPolicy->setName('emergencyClidPolicy');
        return $this;
    }

    /**
     * 
     * @return GroupCLIDPolicy
     */
    public function getEmergencyClidPolicy()
    {
        return $this->emergencyClidPolicy->getValue();
    }

    /**
     * 
     */
    public function setAllowAlternateNumbersForRedirectingIdentity($allowAlternateNumbersForRedirectingIdentity = null)
    {
        if (!$allowAlternateNumbersForRedirectingIdentity) return $this;
        $this->allowAlternateNumbersForRedirectingIdentity = new PrimitiveType($allowAlternateNumbersForRedirectingIdentity);
        $this->allowAlternateNumbersForRedirectingIdentity->setName('allowAlternateNumbersForRedirectingIdentity');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowAlternateNumbersForRedirectingIdentity()
    {
        return $this->allowAlternateNumbersForRedirectingIdentity->getValue();
    }

    /**
     * 
     */
    public function setUseGroupName($useGroupName = null)
    {
        if (!$useGroupName) return $this;
        $this->useGroupName = new PrimitiveType($useGroupName);
        $this->useGroupName->setName('useGroupName');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseGroupName()
    {
        return $this->useGroupName->getValue();
    }

    /**
     * 
     */
    public function setEnableDialableCallerID($enableDialableCallerID = null)
    {
        if (!$enableDialableCallerID) return $this;
        $this->enableDialableCallerID = new PrimitiveType($enableDialableCallerID);
        $this->enableDialableCallerID->setName('enableDialableCallerID');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableDialableCallerID()
    {
        return $this->enableDialableCallerID->getValue();
    }

    /**
     * 
     */
    public function setBlockCallingNameForExternalCalls($blockCallingNameForExternalCalls = null)
    {
        if (!$blockCallingNameForExternalCalls) return $this;
        $this->blockCallingNameForExternalCalls = new PrimitiveType($blockCallingNameForExternalCalls);
        $this->blockCallingNameForExternalCalls->setName('blockCallingNameForExternalCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getBlockCallingNameForExternalCalls()
    {
        return $this->blockCallingNameForExternalCalls->getValue();
    }

    /**
     * 
     */
    public function setAllowConfigurableCLIDForRedirectingIdentity($allowConfigurableCLIDForRedirectingIdentity = null)
    {
        if (!$allowConfigurableCLIDForRedirectingIdentity) return $this;
        $this->allowConfigurableCLIDForRedirectingIdentity = new PrimitiveType($allowConfigurableCLIDForRedirectingIdentity);
        $this->allowConfigurableCLIDForRedirectingIdentity->setName('allowConfigurableCLIDForRedirectingIdentity');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowConfigurableCLIDForRedirectingIdentity()
    {
        return $this->allowConfigurableCLIDForRedirectingIdentity->getValue();
    }
}
