<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterRingTimeBeforePlayingComfortMessageBypassAnnouncementSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterComfortMessageBypassThresholdSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementMediaFileTypeList;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementDescriptionList;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLList;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupCallCenterComfortMessageBypassGetRequest17.
 */
class GroupCallCenterComfortMessageBypassGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterComfortMessageBypassGetResponse17';
    protected $isActive;
    protected $callWaitingAgeThresholdSeconds;
    protected $playAnnouncementAfterRinging;
    protected $ringTimeBeforePlayingAnnouncementSeconds;
    protected $audioMessageSelection;
    protected $audioUrlList;
    protected $audioFileList;
    protected $audioMediaTypeList;
    protected $videoMessageSelection;
    protected $videoUrlList;
    protected $videoFileList;
    protected $videoMediaTypeList;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterComfortMessageBypassGetResponse17 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallWaitingAgeThresholdSeconds($callWaitingAgeThresholdSeconds = null)
    {
        $this->callWaitingAgeThresholdSeconds = ($callWaitingAgeThresholdSeconds InstanceOf CallCenterComfortMessageBypassThresholdSeconds)
             ? $callWaitingAgeThresholdSeconds
             : new CallCenterComfortMessageBypassThresholdSeconds($callWaitingAgeThresholdSeconds);
        $this->callWaitingAgeThresholdSeconds->setElementName('callWaitingAgeThresholdSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterComfortMessageBypassThresholdSeconds $callWaitingAgeThresholdSeconds
     */
    public function getCallWaitingAgeThresholdSeconds()
    {
        return ($this->callWaitingAgeThresholdSeconds)
            ? $this->callWaitingAgeThresholdSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPlayAnnouncementAfterRinging($playAnnouncementAfterRinging = null)
    {
        $this->playAnnouncementAfterRinging = new PrimitiveType($playAnnouncementAfterRinging);
        $this->playAnnouncementAfterRinging->setElementName('playAnnouncementAfterRinging');
        return $this;
    }

    /**
     * 
     * @return boolean $playAnnouncementAfterRinging
     */
    public function getPlayAnnouncementAfterRinging()
    {
        return ($this->playAnnouncementAfterRinging)
            ? $this->playAnnouncementAfterRinging->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRingTimeBeforePlayingAnnouncementSeconds($ringTimeBeforePlayingAnnouncementSeconds = null)
    {
        $this->ringTimeBeforePlayingAnnouncementSeconds = ($ringTimeBeforePlayingAnnouncementSeconds InstanceOf CallCenterRingTimeBeforePlayingComfortMessageBypassAnnouncementSeconds)
             ? $ringTimeBeforePlayingAnnouncementSeconds
             : new CallCenterRingTimeBeforePlayingComfortMessageBypassAnnouncementSeconds($ringTimeBeforePlayingAnnouncementSeconds);
        $this->ringTimeBeforePlayingAnnouncementSeconds->setElementName('ringTimeBeforePlayingAnnouncementSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterRingTimeBeforePlayingComfortMessageBypassAnnouncementSeconds $ringTimeBeforePlayingAnnouncementSeconds
     */
    public function getRingTimeBeforePlayingAnnouncementSeconds()
    {
        return ($this->ringTimeBeforePlayingAnnouncementSeconds)
            ? $this->ringTimeBeforePlayingAnnouncementSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAudioMessageSelection($audioMessageSelection = null)
    {
        $this->audioMessageSelection = ($audioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $audioMessageSelection
             : new ExtendedFileResourceSelection($audioMessageSelection);
        $this->audioMessageSelection->setElementName('audioMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $audioMessageSelection
     */
    public function getAudioMessageSelection()
    {
        return ($this->audioMessageSelection)
            ? $this->audioMessageSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAudioUrlList(CallCenterAnnouncementURLList $audioUrlList = null)
    {
        $this->audioUrlList = ($audioUrlList InstanceOf CallCenterAnnouncementURLList)
             ? $audioUrlList
             : new CallCenterAnnouncementURLList($audioUrlList);
        $this->audioUrlList->setElementName('audioUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLList $audioUrlList
     */
    public function getAudioUrlList()
    {
        return $this->audioUrlList;
    }

    /**
     * 
     */
    public function setAudioFileList(CallCenterAnnouncementDescriptionList $audioFileList = null)
    {
        $this->audioFileList = ($audioFileList InstanceOf CallCenterAnnouncementDescriptionList)
             ? $audioFileList
             : new CallCenterAnnouncementDescriptionList($audioFileList);
        $this->audioFileList->setElementName('audioFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementDescriptionList $audioFileList
     */
    public function getAudioFileList()
    {
        return $this->audioFileList;
    }

    /**
     * 
     */
    public function setAudioMediaTypeList(CallCenterAnnouncementMediaFileTypeList $audioMediaTypeList = null)
    {
        $this->audioMediaTypeList = ($audioMediaTypeList InstanceOf CallCenterAnnouncementMediaFileTypeList)
             ? $audioMediaTypeList
             : new CallCenterAnnouncementMediaFileTypeList($audioMediaTypeList);
        $this->audioMediaTypeList->setElementName('audioMediaTypeList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementMediaFileTypeList $audioMediaTypeList
     */
    public function getAudioMediaTypeList()
    {
        return $this->audioMediaTypeList;
    }

    /**
     * 
     */
    public function setVideoMessageSelection($videoMessageSelection = null)
    {
        $this->videoMessageSelection = ($videoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $videoMessageSelection
             : new ExtendedFileResourceSelection($videoMessageSelection);
        $this->videoMessageSelection->setElementName('videoMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $videoMessageSelection
     */
    public function getVideoMessageSelection()
    {
        return ($this->videoMessageSelection)
            ? $this->videoMessageSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVideoUrlList(CallCenterAnnouncementURLList $videoUrlList = null)
    {
        $this->videoUrlList = ($videoUrlList InstanceOf CallCenterAnnouncementURLList)
             ? $videoUrlList
             : new CallCenterAnnouncementURLList($videoUrlList);
        $this->videoUrlList->setElementName('videoUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLList $videoUrlList
     */
    public function getVideoUrlList()
    {
        return $this->videoUrlList;
    }

    /**
     * 
     */
    public function setVideoFileList(CallCenterAnnouncementDescriptionList $videoFileList = null)
    {
        $this->videoFileList = ($videoFileList InstanceOf CallCenterAnnouncementDescriptionList)
             ? $videoFileList
             : new CallCenterAnnouncementDescriptionList($videoFileList);
        $this->videoFileList->setElementName('videoFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementDescriptionList $videoFileList
     */
    public function getVideoFileList()
    {
        return $this->videoFileList;
    }

    /**
     * 
     */
    public function setVideoMediaTypeList(CallCenterAnnouncementMediaFileTypeList $videoMediaTypeList = null)
    {
        $this->videoMediaTypeList = ($videoMediaTypeList InstanceOf CallCenterAnnouncementMediaFileTypeList)
             ? $videoMediaTypeList
             : new CallCenterAnnouncementMediaFileTypeList($videoMediaTypeList);
        $this->videoMediaTypeList->setElementName('videoMediaTypeList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementMediaFileTypeList $videoMediaTypeList
     */
    public function getVideoMediaTypeList()
    {
        return $this->videoMediaTypeList;
    }
}
