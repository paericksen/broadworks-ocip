<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaFromDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserCustomRingbackUserGetCriteriaRequest.
 */
class UserCustomRingbackUserGetCriteriaResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = 'UserCustomRingbackUserGetCriteriaResponse';
    protected $timeSchedule         = null;
    protected $fromDnCriteria       = null;
    protected $audioSelection       = null;
    protected $audioFileDescription = null;
    protected $audioFileUrl         = null;
    protected $videoSelection       = null;
    protected $videoFileDescription = null;
    protected $videoFileUrl         = null;

    /**
     * @return UserCustomRingbackUserGetCriteriaResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTimeSchedule(TimeSchedule $timeSchedule = null)
    {
        if (!$timeSchedule) return $this;
        $this->timeSchedule = $timeSchedule;
        $this->timeSchedule->setName('timeSchedule');
        return $this;
    }

    /**
     * 
     * @return TimeSchedule
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule;
    }

    /**
     * 
     */
    public function setFromDnCriteria(CriteriaFromDn $fromDnCriteria = null)
    {
        if (!$fromDnCriteria) return $this;
        $this->fromDnCriteria = $fromDnCriteria;
        $this->fromDnCriteria->setName('fromDnCriteria');
        return $this;
    }

    /**
     * 
     * @return CriteriaFromDn
     */
    public function getFromDnCriteria()
    {
        return $this->fromDnCriteria;
    }

    /**
     * 
     */
    public function setAudioSelection($audioSelection = null)
    {
        if (!$audioSelection) return $this;
        $this->audioSelection = ($audioSelection InstanceOf ExtendedFileResourceSelection)
             ? $audioSelection
             : new ExtendedFileResourceSelection($audioSelection);
        $this->audioSelection->setName('audioSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection
     */
    public function getAudioSelection()
    {
        return $this->audioSelection->getValue();
    }

    /**
     * 
     */
    public function setAudioFileDescription($audioFileDescription = null)
    {
        if (!$audioFileDescription) return $this;
        $this->audioFileDescription = ($audioFileDescription InstanceOf FileDescription)
             ? $audioFileDescription
             : new FileDescription($audioFileDescription);
        $this->audioFileDescription->setName('audioFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription
     */
    public function getAudioFileDescription()
    {
        return $this->audioFileDescription->getValue();
    }

    /**
     * 
     */
    public function setAudioFileUrl($audioFileUrl = null)
    {
        if (!$audioFileUrl) return $this;
        $this->audioFileUrl = ($audioFileUrl InstanceOf URL)
             ? $audioFileUrl
             : new URL($audioFileUrl);
        $this->audioFileUrl->setName('audioFileUrl');
        return $this;
    }

    /**
     * 
     * @return URL
     */
    public function getAudioFileUrl()
    {
        return $this->audioFileUrl->getValue();
    }

    /**
     * 
     */
    public function setVideoSelection($videoSelection = null)
    {
        if (!$videoSelection) return $this;
        $this->videoSelection = ($videoSelection InstanceOf ExtendedFileResourceSelection)
             ? $videoSelection
             : new ExtendedFileResourceSelection($videoSelection);
        $this->videoSelection->setName('videoSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection
     */
    public function getVideoSelection()
    {
        return $this->videoSelection->getValue();
    }

    /**
     * 
     */
    public function setVideoFileDescription($videoFileDescription = null)
    {
        if (!$videoFileDescription) return $this;
        $this->videoFileDescription = ($videoFileDescription InstanceOf FileDescription)
             ? $videoFileDescription
             : new FileDescription($videoFileDescription);
        $this->videoFileDescription->setName('videoFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription
     */
    public function getVideoFileDescription()
    {
        return $this->videoFileDescription->getValue();
    }

    /**
     * 
     */
    public function setVideoFileUrl($videoFileUrl = null)
    {
        if (!$videoFileUrl) return $this;
        $this->videoFileUrl = ($videoFileUrl InstanceOf URL)
             ? $videoFileUrl
             : new URL($videoFileUrl);
        $this->videoFileUrl->setName('videoFileUrl');
        return $this;
    }

    /**
     * 
     * @return URL
     */
    public function getVideoFileUrl()
    {
        return $this->videoFileUrl->getValue();
    }
}
