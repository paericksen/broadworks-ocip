<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup;

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaLinePortUserPart;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDeviceMACAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDeviceNetAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaLinePortDomain;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserFirstName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserLastName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDeviceType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDeviceName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExtension;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDn;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to search endpoints in the group.
 *         The response is either GroupEndpointGetListResponse or ErrorResponse.
 */
class GroupEndpointGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupEndpointGetListResponse';
    public    $elementName = 'GroupEndpointGetListRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $responseSizeLimit;
    protected $searchCriteriaLinePortUserPart;
    protected $searchCriteriaLinePortDomain;
    protected $searchCriteriaUserLastName;
    protected $searchCriteriaUserFirstName;
    protected $searchCriteriaUserId;
    protected $searchCriteriaDn;
    protected $searchCriteriaExtension;
    protected $searchCriteriaDeviceType;
    protected $searchCriteriaDeviceName;
    protected $searchCriteriaDeviceMACAddress;
    protected $searchCriteriaDeviceNetAddress;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $responseSizeLimit = null,
         $searchCriteriaLinePortUserPart = null,
         $searchCriteriaLinePortDomain = null,
         $searchCriteriaUserLastName = null,
         $searchCriteriaUserFirstName = null,
         $searchCriteriaUserId = null,
         $searchCriteriaDn = null,
         $searchCriteriaExtension = null,
         $searchCriteriaDeviceType = null,
         $searchCriteriaDeviceName = null,
         $searchCriteriaDeviceMACAddress = null,
         $searchCriteriaDeviceNetAddress = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        if(!empty($responseSizeLimit)) $this->setResponseSizeLimit($responseSizeLimit);
        if(!empty($searchCriteriaLinePortUserPart)) $this->setSearchCriteriaLinePortUserPart($searchCriteriaLinePortUserPart);
        if(!empty($searchCriteriaLinePortDomain)) $this->setSearchCriteriaLinePortDomain($searchCriteriaLinePortDomain);
        if(!empty($searchCriteriaUserLastName)) $this->setSearchCriteriaUserLastName($searchCriteriaUserLastName);
        if(!empty($searchCriteriaUserFirstName)) $this->setSearchCriteriaUserFirstName($searchCriteriaUserFirstName);
        if(!empty($searchCriteriaUserId)) $this->setSearchCriteriaUserId($searchCriteriaUserId);
        if(!empty($searchCriteriaDn)) $this->setSearchCriteriaDn($searchCriteriaDn);
        if(!empty($searchCriteriaExtension)) $this->setSearchCriteriaExtension($searchCriteriaExtension);
        if(!empty($searchCriteriaDeviceType)) $this->setSearchCriteriaDeviceType($searchCriteriaDeviceType);
        if(!empty($searchCriteriaDeviceName)) $this->setSearchCriteriaDeviceName($searchCriteriaDeviceName);
        if(!empty($searchCriteriaDeviceMACAddress)) $this->setSearchCriteriaDeviceMACAddress($searchCriteriaDeviceMACAddress);
        if(!empty($searchCriteriaDeviceNetAddress)) $this->setSearchCriteriaDeviceNetAddress($searchCriteriaDeviceNetAddress);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupEndpointGetListResponse $response
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
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     *
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     *
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     *
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
    }

    /**
     *
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
        $this->responseSizeLimit->setElementName('responseSizeLimit');
        return $this;
    }

    /**
     *
     * @return ResponseSizeLimit $responseSizeLimit
     */
    public function getResponseSizeLimit()
    {
        return ($this->responseSizeLimit)
            ? $this->responseSizeLimit->getElementValue()
            : null;
    }

    /**
     *
     */
    public function setSearchCriteriaLinePortUserPart(SearchCriteriaLinePortUserPart $searchCriteriaLinePortUserPart = null)
    {
        $this->searchCriteriaLinePortUserPart = ($searchCriteriaLinePortUserPart InstanceOf SearchCriteriaLinePortUserPart)
             ? $searchCriteriaLinePortUserPart
             : new SearchCriteriaLinePortUserPart($searchCriteriaLinePortUserPart);
        $this->searchCriteriaLinePortUserPart->setElementName('searchCriteriaLinePortUserPart');
        return $this;
    }

    /**
     *
     * @return SearchCriteriaLinePortUserPart $searchCriteriaLinePortUserPart
     */
    public function getSearchCriteriaLinePortUserPart()
    {
        return $this->searchCriteriaLinePortUserPart;
    }

    /**
     *
     */
    public function setSearchCriteriaLinePortDomain(SearchCriteriaLinePortDomain $searchCriteriaLinePortDomain = null)
    {
        $this->searchCriteriaLinePortDomain = ($searchCriteriaLinePortDomain InstanceOf SearchCriteriaLinePortDomain)
             ? $searchCriteriaLinePortDomain
             : new SearchCriteriaLinePortDomain($searchCriteriaLinePortDomain);
        $this->searchCriteriaLinePortDomain->setElementName('searchCriteriaLinePortDomain');
        return $this;
    }

    /**
     *
     * @return SearchCriteriaLinePortDomain $searchCriteriaLinePortDomain
     */
    public function getSearchCriteriaLinePortDomain()
    {
        return $this->searchCriteriaLinePortDomain;
    }

    /**
     *
     */
    public function setSearchCriteriaUserLastName(SearchCriteriaUserLastName $searchCriteriaUserLastName = null)
    {
        $this->searchCriteriaUserLastName = ($searchCriteriaUserLastName InstanceOf SearchCriteriaUserLastName)
             ? $searchCriteriaUserLastName
             : new SearchCriteriaUserLastName($searchCriteriaUserLastName);
        $this->searchCriteriaUserLastName->setElementName('searchCriteriaUserLastName');
        return $this;
    }

    /**
     *
     * @return SearchCriteriaUserLastName $searchCriteriaUserLastName
     */
    public function getSearchCriteriaUserLastName()
    {
        return $this->searchCriteriaUserLastName;
    }

    /**
     *
     */
    public function setSearchCriteriaUserFirstName(SearchCriteriaUserFirstName $searchCriteriaUserFirstName = null)
    {
        $this->searchCriteriaUserFirstName = ($searchCriteriaUserFirstName InstanceOf SearchCriteriaUserFirstName)
             ? $searchCriteriaUserFirstName
             : new SearchCriteriaUserFirstName($searchCriteriaUserFirstName);
        $this->searchCriteriaUserFirstName->setElementName('searchCriteriaUserFirstName');
        return $this;
    }

    /**
     *
     * @return SearchCriteriaUserFirstName $searchCriteriaUserFirstName
     */
    public function getSearchCriteriaUserFirstName()
    {
        return $this->searchCriteriaUserFirstName;
    }

    /**
     *
     */
    public function setSearchCriteriaUserId(SearchCriteriaUserId $searchCriteriaUserId = null)
    {
        $this->searchCriteriaUserId = ($searchCriteriaUserId InstanceOf SearchCriteriaUserId)
             ? $searchCriteriaUserId
             : new SearchCriteriaUserId($searchCriteriaUserId);
        $this->searchCriteriaUserId->setElementName('searchCriteriaUserId');
        return $this;
    }

    /**
     *
     * @return SearchCriteriaUserId $searchCriteriaUserId
     */
    public function getSearchCriteriaUserId()
    {
        return $this->searchCriteriaUserId;
    }

    /**
     *
     */
    public function setSearchCriteriaDn(SearchCriteriaDn $searchCriteriaDn = null)
    {
        $this->searchCriteriaDn = ($searchCriteriaDn InstanceOf SearchCriteriaDn)
             ? $searchCriteriaDn
             : new SearchCriteriaDn($searchCriteriaDn);
        $this->searchCriteriaDn->setElementName('searchCriteriaDn');
        return $this;
    }

    /**
     *
     * @return SearchCriteriaDn $searchCriteriaDn
     */
    public function getSearchCriteriaDn()
    {
        return $this->searchCriteriaDn;
    }

    /**
     *
     */
    public function setSearchCriteriaExtension(SearchCriteriaExtension $searchCriteriaExtension = null)
    {
        $this->searchCriteriaExtension = ($searchCriteriaExtension InstanceOf SearchCriteriaExtension)
             ? $searchCriteriaExtension
             : new SearchCriteriaExtension($searchCriteriaExtension);
        $this->searchCriteriaExtension->setElementName('searchCriteriaExtension');
        return $this;
    }

    /**
     *
     * @return SearchCriteriaExtension $searchCriteriaExtension
     */
    public function getSearchCriteriaExtension()
    {
        return $this->searchCriteriaExtension;
    }

    /**
     *
     */
    public function setSearchCriteriaDeviceType(SearchCriteriaDeviceType $searchCriteriaDeviceType = null)
    {
        $this->searchCriteriaDeviceType = ($searchCriteriaDeviceType InstanceOf SearchCriteriaDeviceType)
             ? $searchCriteriaDeviceType
             : new SearchCriteriaDeviceType($searchCriteriaDeviceType);
        $this->searchCriteriaDeviceType->setElementName('searchCriteriaDeviceType');
        return $this;
    }

    /**
     *
     * @return SearchCriteriaDeviceType $searchCriteriaDeviceType
     */
    public function getSearchCriteriaDeviceType()
    {
        return $this->searchCriteriaDeviceType;
    }

    /**
     *
     */
    public function setSearchCriteriaDeviceName(SearchCriteriaDeviceName $searchCriteriaDeviceName = null)
    {
        $this->searchCriteriaDeviceName = ($searchCriteriaDeviceName InstanceOf SearchCriteriaDeviceName)
             ? $searchCriteriaDeviceName
             : new SearchCriteriaDeviceName($searchCriteriaDeviceName);
        $this->searchCriteriaDeviceName->setElementName('searchCriteriaDeviceName');
        return $this;
    }

    /**
     *
     * @return SearchCriteriaDeviceName $searchCriteriaDeviceName
     */
    public function getSearchCriteriaDeviceName()
    {
        return $this->searchCriteriaDeviceName;
    }

    /**
     *
     */
    public function setSearchCriteriaDeviceMACAddress(SearchCriteriaDeviceMACAddress $searchCriteriaDeviceMACAddress = null)
    {
        $this->searchCriteriaDeviceMACAddress = ($searchCriteriaDeviceMACAddress InstanceOf SearchCriteriaDeviceMACAddress)
             ? $searchCriteriaDeviceMACAddress
             : new SearchCriteriaDeviceMACAddress($searchCriteriaDeviceMACAddress);
        $this->searchCriteriaDeviceMACAddress->setElementName('searchCriteriaDeviceMACAddress');
        return $this;
    }

    /**
     *
     * @return SearchCriteriaDeviceMACAddress $searchCriteriaDeviceMACAddress
     */
    public function getSearchCriteriaDeviceMACAddress()
    {
        return $this->searchCriteriaDeviceMACAddress;
    }

    /**
     *
     */
    public function setSearchCriteriaDeviceNetAddress(SearchCriteriaDeviceNetAddress $searchCriteriaDeviceNetAddress = null)
    {
        $this->searchCriteriaDeviceNetAddress = ($searchCriteriaDeviceNetAddress InstanceOf SearchCriteriaDeviceNetAddress)
             ? $searchCriteriaDeviceNetAddress
             : new SearchCriteriaDeviceNetAddress($searchCriteriaDeviceNetAddress);
        $this->searchCriteriaDeviceNetAddress->setElementName('searchCriteriaDeviceNetAddress');
        return $this;
    }

    /**
     *
     * @return SearchCriteriaDeviceNetAddress $searchCriteriaDeviceNetAddress
     */
    public function getSearchCriteriaDeviceNetAddress()
    {
        return $this->searchCriteriaDeviceNetAddress;
    }
}
