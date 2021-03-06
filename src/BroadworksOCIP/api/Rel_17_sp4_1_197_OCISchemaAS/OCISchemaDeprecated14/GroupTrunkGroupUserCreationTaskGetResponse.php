<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUserCreationUserIdFormat;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUserCreationSIPURIFormat;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUserCreationTaskStatus;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUserCreationMode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserService;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to a GroupTrunkGroupUserCreationTaskGetRequest.
 */
class GroupTrunkGroupUserCreationTaskGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupTrunkGroupUserCreationTaskGetResponse';
    protected $userIdFormat;
    protected $userIdDomain;
    protected $populateExtension;
    protected $linePortFormat;
    protected $linePortDomain;
    protected $populateContact;
    protected $contactFormat;
    protected $contactDomain;
    protected $usersCreated;
    protected $totalUsersToCreate;
    protected $errorCount;
    protected $servicePackName;
    protected $userServiceName;
    protected $status;
    protected $userCreationMode;
    protected $taskSummary;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\GroupTrunkGroupUserCreationTaskGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserIdFormat($userIdFormat = null)
    {
        $this->userIdFormat = ($userIdFormat InstanceOf TrunkGroupUserCreationUserIdFormat)
             ? $userIdFormat
             : new TrunkGroupUserCreationUserIdFormat($userIdFormat);
        $this->userIdFormat->setElementName('userIdFormat');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupUserCreationUserIdFormat $userIdFormat
     */
    public function getUserIdFormat()
    {
        return ($this->userIdFormat)
            ? $this->userIdFormat->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserIdDomain($userIdDomain = null)
    {
        $this->userIdDomain = ($userIdDomain InstanceOf NetAddress)
             ? $userIdDomain
             : new NetAddress($userIdDomain);
        $this->userIdDomain->setElementName('userIdDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress $userIdDomain
     */
    public function getUserIdDomain()
    {
        return ($this->userIdDomain)
            ? $this->userIdDomain->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPopulateExtension($populateExtension = null)
    {
        $this->populateExtension = new PrimitiveType($populateExtension);
        $this->populateExtension->setElementName('populateExtension');
        return $this;
    }

    /**
     * 
     * @return boolean $populateExtension
     */
    public function getPopulateExtension()
    {
        return ($this->populateExtension)
            ? $this->populateExtension->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLinePortFormat($linePortFormat = null)
    {
        $this->linePortFormat = ($linePortFormat InstanceOf TrunkGroupUserCreationSIPURIFormat)
             ? $linePortFormat
             : new TrunkGroupUserCreationSIPURIFormat($linePortFormat);
        $this->linePortFormat->setElementName('linePortFormat');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupUserCreationSIPURIFormat $linePortFormat
     */
    public function getLinePortFormat()
    {
        return ($this->linePortFormat)
            ? $this->linePortFormat->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLinePortDomain($linePortDomain = null)
    {
        $this->linePortDomain = ($linePortDomain InstanceOf NetAddress)
             ? $linePortDomain
             : new NetAddress($linePortDomain);
        $this->linePortDomain->setElementName('linePortDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress $linePortDomain
     */
    public function getLinePortDomain()
    {
        return ($this->linePortDomain)
            ? $this->linePortDomain->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPopulateContact($populateContact = null)
    {
        $this->populateContact = new PrimitiveType($populateContact);
        $this->populateContact->setElementName('populateContact');
        return $this;
    }

    /**
     * 
     * @return boolean $populateContact
     */
    public function getPopulateContact()
    {
        return ($this->populateContact)
            ? $this->populateContact->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setContactFormat($contactFormat = null)
    {
        $this->contactFormat = ($contactFormat InstanceOf TrunkGroupUserCreationSIPURIFormat)
             ? $contactFormat
             : new TrunkGroupUserCreationSIPURIFormat($contactFormat);
        $this->contactFormat->setElementName('contactFormat');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupUserCreationSIPURIFormat $contactFormat
     */
    public function getContactFormat()
    {
        return ($this->contactFormat)
            ? $this->contactFormat->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setContactDomain($contactDomain = null)
    {
        $this->contactDomain = ($contactDomain InstanceOf NetAddress)
             ? $contactDomain
             : new NetAddress($contactDomain);
        $this->contactDomain->setElementName('contactDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress $contactDomain
     */
    public function getContactDomain()
    {
        return ($this->contactDomain)
            ? $this->contactDomain->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUsersCreated($usersCreated = null)
    {
        $this->usersCreated = new PrimitiveType($usersCreated);
        $this->usersCreated->setElementName('usersCreated');
        return $this;
    }

    /**
     * 
     * @return int $usersCreated
     */
    public function getUsersCreated()
    {
        return ($this->usersCreated)
            ? $this->usersCreated->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTotalUsersToCreate($totalUsersToCreate = null)
    {
        $this->totalUsersToCreate = new PrimitiveType($totalUsersToCreate);
        $this->totalUsersToCreate->setElementName('totalUsersToCreate');
        return $this;
    }

    /**
     * 
     * @return int $totalUsersToCreate
     */
    public function getTotalUsersToCreate()
    {
        return ($this->totalUsersToCreate)
            ? $this->totalUsersToCreate->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setErrorCount($errorCount = null)
    {
        $this->errorCount = new PrimitiveType($errorCount);
        $this->errorCount->setElementName('errorCount');
        return $this;
    }

    /**
     * 
     * @return int $errorCount
     */
    public function getErrorCount()
    {
        return ($this->errorCount)
            ? $this->errorCount->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServicePackName($servicePackName = null)
    {
        $this->servicePackName = ($servicePackName InstanceOf ServicePackName)
             ? $servicePackName
             : new ServicePackName($servicePackName);
        $this->servicePackName->setElementName('servicePackName');
        return $this;
    }

    /**
     * 
     * @return ServicePackName $servicePackName
     */
    public function getServicePackName()
    {
        return ($this->servicePackName)
            ? $this->servicePackName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserServiceName($userServiceName = null)
    {
        $this->userServiceName = ($userServiceName InstanceOf UserService)
             ? $userServiceName
             : new UserService($userServiceName);
        $this->userServiceName->setElementName('userServiceName');
        return $this;
    }

    /**
     * 
     * @return UserService $userServiceName
     */
    public function getUserServiceName()
    {
        return ($this->userServiceName)
            ? $this->userServiceName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setStatus($status = null)
    {
        $this->status = ($status InstanceOf TrunkGroupUserCreationTaskStatus)
             ? $status
             : new TrunkGroupUserCreationTaskStatus($status);
        $this->status->setElementName('status');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupUserCreationTaskStatus $status
     */
    public function getStatus()
    {
        return ($this->status)
            ? $this->status->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserCreationMode($userCreationMode = null)
    {
        $this->userCreationMode = ($userCreationMode InstanceOf TrunkGroupUserCreationMode)
             ? $userCreationMode
             : new TrunkGroupUserCreationMode($userCreationMode);
        $this->userCreationMode->setElementName('userCreationMode');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupUserCreationMode $userCreationMode
     */
    public function getUserCreationMode()
    {
        return ($this->userCreationMode)
            ? $this->userCreationMode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTaskSummary($taskSummary = null)
    {
        $this->taskSummary = new PrimitiveType($taskSummary);
        $this->taskSummary->setElementName('taskSummary');
        return $this;
    }

    /**
     * 
     * @return string $taskSummary
     */
    public function getTaskSummary()
    {
        return ($this->taskSummary)
            ? $this->taskSummary->getElementValue()
            : null;
    }
}
