<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxConcurrentFindMeFollowMeInvocations;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\CallProcessingMaxCallTimeForAnsweredCallsMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxCallTimeForUnansweredCallsMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxConcurrentRedirectedCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxFindMeFollowMeDepth;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxSimultaneousCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxRedirectionDepth;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkUsageSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaPolicySelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupCLIDPolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaSetName;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupCallProcessingGetPolicyRequest15sp2.
 */
class GroupCallProcessingGetPolicyResponse15sp2 extends ComplexType implements ComplexInterface
{
    public    $name                                                = 'GroupCallProcessingGetPolicyResponse15sp2';
    protected $useGroupCLIDSetting                                 = null;
    protected $useGroupMediaSetting                                = null;
    protected $useGroupCallLimitsSetting                           = null;
    protected $useGroupTranslationRoutingSetting                   = null;
    protected $useMaxSimultaneousCalls                             = null;
    protected $maxSimultaneousCalls                                = null;
    protected $useMaxSimultaneousVideoCalls                        = null;
    protected $maxSimultaneousVideoCalls                           = null;
    protected $useMaxCallTimeForAnsweredCalls                      = null;
    protected $maxCallTimeForAnsweredCallsMinutes                  = null;
    protected $useMaxCallTimeForUnansweredCalls                    = null;
    protected $maxCallTimeForUnansweredCallsMinutes                = null;
    protected $mediaPolicySelection                                = null;
    protected $supportedMediaSetName                               = null;
    protected $networkUsageSelection                               = null;
    protected $enforceGroupCallingLineIdentityRestriction          = null;
    protected $allowEnterpriseGroupCallTypingForPrivateDialingPlan = null;
    protected $allowEnterpriseGroupCallTypingForPublicDialingPlan  = null;
    protected $overrideCLIDRestrictionForPrivateCallCategory       = null;
    protected $useEnterpriseCLIDForPrivateCallCategory             = null;
    protected $enableEnterpriseExtensionDialing                    = null;
    protected $useMaxConcurrentRedirectedCalls                     = null;
    protected $maxConcurrentRedirectedCalls                        = null;
    protected $useMaxFindMeFollowMeDepth                           = null;
    protected $maxFindMeFollowMeDepth                              = null;
    protected $maxRedirectionDepth                                 = null;
    protected $useMaxConcurrentFindMeFollowMeInvocations           = null;
    protected $maxConcurrentFindMeFollowMeInvocations              = null;
    protected $clidPolicy                                          = null;
    protected $emergencyClidPolicy                                 = null;
    protected $allowAlternateNumbersForRedirectingIdentity         = null;
    protected $useGroupName                                        = null;

    /**
     * @return GroupCallProcessingGetPolicyResponse15sp2
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUseGroupCLIDSetting($useGroupCLIDSetting = null)
    {
        if (!$useGroupCLIDSetting) return $this;
        $this->useGroupCLIDSetting = new PrimitiveType($useGroupCLIDSetting);
        $this->useGroupCLIDSetting->setName('useGroupCLIDSetting');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseGroupCLIDSetting()
    {
        return $this->useGroupCLIDSetting->getValue();
    }

    /**
     * 
     */
    public function setUseGroupMediaSetting($useGroupMediaSetting = null)
    {
        if (!$useGroupMediaSetting) return $this;
        $this->useGroupMediaSetting = new PrimitiveType($useGroupMediaSetting);
        $this->useGroupMediaSetting->setName('useGroupMediaSetting');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseGroupMediaSetting()
    {
        return $this->useGroupMediaSetting->getValue();
    }

    /**
     * 
     */
    public function setUseGroupCallLimitsSetting($useGroupCallLimitsSetting = null)
    {
        if (!$useGroupCallLimitsSetting) return $this;
        $this->useGroupCallLimitsSetting = new PrimitiveType($useGroupCallLimitsSetting);
        $this->useGroupCallLimitsSetting->setName('useGroupCallLimitsSetting');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseGroupCallLimitsSetting()
    {
        return $this->useGroupCallLimitsSetting->getValue();
    }

    /**
     * 
     */
    public function setUseGroupTranslationRoutingSetting($useGroupTranslationRoutingSetting = null)
    {
        if (!$useGroupTranslationRoutingSetting) return $this;
        $this->useGroupTranslationRoutingSetting = new PrimitiveType($useGroupTranslationRoutingSetting);
        $this->useGroupTranslationRoutingSetting->setName('useGroupTranslationRoutingSetting');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseGroupTranslationRoutingSetting()
    {
        return $this->useGroupTranslationRoutingSetting->getValue();
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
        $this->maxCallTimeForAnsweredCallsMinutes = ($maxCallTimeForAnsweredCallsMinutes InstanceOf CallProcessingMaxCallTimeForAnsweredCallsMinutes)
             ? $maxCallTimeForAnsweredCallsMinutes
             : new CallProcessingMaxCallTimeForAnsweredCallsMinutes($maxCallTimeForAnsweredCallsMinutes);
        $this->maxCallTimeForAnsweredCallsMinutes->setName('maxCallTimeForAnsweredCallsMinutes');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxCallTimeForAnsweredCallsMinutes
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
    public function setNetworkUsageSelection($networkUsageSelection = null)
    {
        if (!$networkUsageSelection) return $this;
        $this->networkUsageSelection = ($networkUsageSelection InstanceOf NetworkUsageSelection)
             ? $networkUsageSelection
             : new NetworkUsageSelection($networkUsageSelection);
        $this->networkUsageSelection->setName('networkUsageSelection');
        return $this;
    }

    /**
     * 
     * @return NetworkUsageSelection
     */
    public function getNetworkUsageSelection()
    {
        return $this->networkUsageSelection->getValue();
    }

    /**
     * 
     */
    public function setEnforceGroupCallingLineIdentityRestriction($enforceGroupCallingLineIdentityRestriction = null)
    {
        if (!$enforceGroupCallingLineIdentityRestriction) return $this;
        $this->enforceGroupCallingLineIdentityRestriction = new PrimitiveType($enforceGroupCallingLineIdentityRestriction);
        $this->enforceGroupCallingLineIdentityRestriction->setName('enforceGroupCallingLineIdentityRestriction');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnforceGroupCallingLineIdentityRestriction()
    {
        return $this->enforceGroupCallingLineIdentityRestriction->getValue();
    }

    /**
     * 
     */
    public function setAllowEnterpriseGroupCallTypingForPrivateDialingPlan($allowEnterpriseGroupCallTypingForPrivateDialingPlan = null)
    {
        if (!$allowEnterpriseGroupCallTypingForPrivateDialingPlan) return $this;
        $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan = new PrimitiveType($allowEnterpriseGroupCallTypingForPrivateDialingPlan);
        $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan->setName('allowEnterpriseGroupCallTypingForPrivateDialingPlan');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowEnterpriseGroupCallTypingForPrivateDialingPlan()
    {
        return $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan->getValue();
    }

    /**
     * 
     */
    public function setAllowEnterpriseGroupCallTypingForPublicDialingPlan($allowEnterpriseGroupCallTypingForPublicDialingPlan = null)
    {
        if (!$allowEnterpriseGroupCallTypingForPublicDialingPlan) return $this;
        $this->allowEnterpriseGroupCallTypingForPublicDialingPlan = new PrimitiveType($allowEnterpriseGroupCallTypingForPublicDialingPlan);
        $this->allowEnterpriseGroupCallTypingForPublicDialingPlan->setName('allowEnterpriseGroupCallTypingForPublicDialingPlan');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowEnterpriseGroupCallTypingForPublicDialingPlan()
    {
        return $this->allowEnterpriseGroupCallTypingForPublicDialingPlan->getValue();
    }

    /**
     * 
     */
    public function setOverrideCLIDRestrictionForPrivateCallCategory($overrideCLIDRestrictionForPrivateCallCategory = null)
    {
        if (!$overrideCLIDRestrictionForPrivateCallCategory) return $this;
        $this->overrideCLIDRestrictionForPrivateCallCategory = new PrimitiveType($overrideCLIDRestrictionForPrivateCallCategory);
        $this->overrideCLIDRestrictionForPrivateCallCategory->setName('overrideCLIDRestrictionForPrivateCallCategory');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getOverrideCLIDRestrictionForPrivateCallCategory()
    {
        return $this->overrideCLIDRestrictionForPrivateCallCategory->getValue();
    }

    /**
     * 
     */
    public function setUseEnterpriseCLIDForPrivateCallCategory($useEnterpriseCLIDForPrivateCallCategory = null)
    {
        if (!$useEnterpriseCLIDForPrivateCallCategory) return $this;
        $this->useEnterpriseCLIDForPrivateCallCategory = new PrimitiveType($useEnterpriseCLIDForPrivateCallCategory);
        $this->useEnterpriseCLIDForPrivateCallCategory->setName('useEnterpriseCLIDForPrivateCallCategory');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseEnterpriseCLIDForPrivateCallCategory()
    {
        return $this->useEnterpriseCLIDForPrivateCallCategory->getValue();
    }

    /**
     * 
     */
    public function setEnableEnterpriseExtensionDialing($enableEnterpriseExtensionDialing = null)
    {
        if (!$enableEnterpriseExtensionDialing) return $this;
        $this->enableEnterpriseExtensionDialing = new PrimitiveType($enableEnterpriseExtensionDialing);
        $this->enableEnterpriseExtensionDialing->setName('enableEnterpriseExtensionDialing');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableEnterpriseExtensionDialing()
    {
        return $this->enableEnterpriseExtensionDialing->getValue();
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
}
