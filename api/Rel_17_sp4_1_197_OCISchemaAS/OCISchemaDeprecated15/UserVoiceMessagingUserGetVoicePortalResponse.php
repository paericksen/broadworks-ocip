<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserVoiceMessagingUserGetVoicePortalRequest.
 *         Replaced By: UserVoiceMessagingUserGetVoicePortalResponse16
 */
class UserVoiceMessagingUserGetVoicePortalResponse extends ComplexType implements ComplexInterface
{
    public    $name                                 = 'UserVoiceMessagingUserGetVoicePortalResponse';
    protected $usePersonalizedName                  = null;
    protected $voicePortalAutoLogin                 = null;
    protected $personalizedNameAudioFileDescription = null;

    /**
     * @return UserVoiceMessagingUserGetVoicePortalResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUsePersonalizedName($usePersonalizedName = null)
    {
        if (!$usePersonalizedName) return $this;
        $this->usePersonalizedName = new PrimitiveType($usePersonalizedName);
        $this->usePersonalizedName->setName('usePersonalizedName');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUsePersonalizedName()
    {
        return $this->usePersonalizedName->getValue();
    }

    /**
     * 
     */
    public function setVoicePortalAutoLogin($voicePortalAutoLogin = null)
    {
        if (!$voicePortalAutoLogin) return $this;
        $this->voicePortalAutoLogin = new PrimitiveType($voicePortalAutoLogin);
        $this->voicePortalAutoLogin->setName('voicePortalAutoLogin');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getVoicePortalAutoLogin()
    {
        return $this->voicePortalAutoLogin->getValue();
    }

    /**
     * 
     */
    public function setPersonalizedNameAudioFileDescription($personalizedNameAudioFileDescription = null)
    {
        if (!$personalizedNameAudioFileDescription) return $this;
        $this->personalizedNameAudioFileDescription = ($personalizedNameAudioFileDescription InstanceOf FileDescription)
             ? $personalizedNameAudioFileDescription
             : new FileDescription($personalizedNameAudioFileDescription);
        $this->personalizedNameAudioFileDescription->setName('personalizedNameAudioFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription
     */
    public function getPersonalizedNameAudioFileDescription()
    {
        return $this->personalizedNameAudioFileDescription->getValue();
    }
}
