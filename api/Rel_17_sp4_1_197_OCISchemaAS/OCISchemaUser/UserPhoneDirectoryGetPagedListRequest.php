<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactUserDepartment;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaMobilePhoneNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupLocationCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactUserGroup;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaEmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExtension;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaYahooId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponsePagingControl;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserPhoneDirectoryGetPagedListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request a table containing the phone directory for a user.  
 *         Setting isEnterpriseRequested to true will return enterprise directory
 *         members in the response if the user is in an enterprise. Otherwise,
 *         just the group directory members for a user are returned in the 
 *         response.
 *         The response is either UserPhoneDirectoryGetPagedListResponse or 
 *         ErrorResponse.
 *         The search can be done using multiple criterias.
 *         If the searchCriteriaModeOr is present, any result matching any one criteria is included in the results. Otherwise, only
 *         results matching all the search criterias are included in the results.
 *         If no search criteria is specified, all results are returned.
 *         In all cases, if a responseSizeLimit is specified and the number of matching results is more than this limit, then an
 *         ErrorResponse is returned.
 *         Specifying searchCriteriaModeOr without any search criteria results in an ErrorResponse.
 */
class UserPhoneDirectoryGetPagedListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserPhoneDirectoryGetPagedListResponse';
    public    $name                              = 'UserPhoneDirectoryGetPagedListRequest';
    protected $userId                            = null;
    protected $isEnterpriseInfoRequested         = null;
    protected $responsePagingControl             = null;
    protected $searchCriteriaModeOr              = null;
    protected $searchCriteriaUserLastName        = null;
    protected $searchCriteriaUserFirstName       = null;
    protected $searchCriteriaDn                  = null;
    protected $searchCriteriaGroupLocationCode   = null;
    protected $searchCriteriaExtension           = null;
    protected $searchCriteriaMobilePhoneNumber   = null;
    protected $searchCriteriaEmailAddress        = null;
    protected $searchCriteriaYahooId             = null;
    protected $searchCriteriaExactUserGroup      = null;
    protected $searchCriteriaExactUserDepartment = null;
    protected $searchCriteriaUserId              = null;

    public function __construct(
         $userId,
         $isEnterpriseInfoRequested,
         ResponsePagingControl $responsePagingControl,
         $searchCriteriaModeOr = null,
         SearchCriteriaUserLastName $searchCriteriaUserLastName = null,
         SearchCriteriaUserFirstName $searchCriteriaUserFirstName = null,
         SearchCriteriaDn $searchCriteriaDn = null,
         SearchCriteriaGroupLocationCode $searchCriteriaGroupLocationCode = null,
         SearchCriteriaExtension $searchCriteriaExtension = null,
         SearchCriteriaMobilePhoneNumber $searchCriteriaMobilePhoneNumber = null,
         SearchCriteriaEmailAddress $searchCriteriaEmailAddress = null,
         SearchCriteriaYahooId $searchCriteriaYahooId = null,
         SearchCriteriaExactUserGroup $searchCriteriaExactUserGroup = null,
         SearchCriteriaExactUserDepartment $searchCriteriaExactUserDepartment = null,
         SearchCriteriaUserId $searchCriteriaUserId = null
    ) {
        $this->setUserId($userId);
        $this->setIsEnterpriseInfoRequested($isEnterpriseInfoRequested);
        $this->setResponsePagingControl($responsePagingControl);
        $this->setSearchCriteriaModeOr($searchCriteriaModeOr);
        $this->setSearchCriteriaUserLastName($searchCriteriaUserLastName);
        $this->setSearchCriteriaUserFirstName($searchCriteriaUserFirstName);
        $this->setSearchCriteriaDn($searchCriteriaDn);
        $this->setSearchCriteriaGroupLocationCode($searchCriteriaGroupLocationCode);
        $this->setSearchCriteriaExtension($searchCriteriaExtension);
        $this->setSearchCriteriaMobilePhoneNumber($searchCriteriaMobilePhoneNumber);
        $this->setSearchCriteriaEmailAddress($searchCriteriaEmailAddress);
        $this->setSearchCriteriaYahooId($searchCriteriaYahooId);
        $this->setSearchCriteriaExactUserGroup($searchCriteriaExactUserGroup);
        $this->setSearchCriteriaExactUserDepartment($searchCriteriaExactUserDepartment);
        $this->setSearchCriteriaUserId($searchCriteriaUserId);
    }

    /**
     * @return UserPhoneDirectoryGetPagedListResponse
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
    public function setIsEnterpriseInfoRequested($isEnterpriseInfoRequested = null)
    {
        if (!$isEnterpriseInfoRequested) return $this;
        $this->isEnterpriseInfoRequested = new PrimitiveType($isEnterpriseInfoRequested);
        $this->isEnterpriseInfoRequested->setName('isEnterpriseInfoRequested');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsEnterpriseInfoRequested()
    {
        return $this->isEnterpriseInfoRequested->getValue();
    }

    /**
     * 
     */
    public function setResponsePagingControl(ResponsePagingControl $responsePagingControl = null)
    {
        if (!$responsePagingControl) return $this;
        $this->responsePagingControl = $responsePagingControl;
        $this->responsePagingControl->setName('responsePagingControl');
        return $this;
    }

    /**
     * 
     * @return ResponsePagingControl
     */
    public function getResponsePagingControl()
    {
        return $this->responsePagingControl;
    }

    /**
     * 
     */
    public function setSearchCriteriaModeOr($searchCriteriaModeOr = null)
    {
        if (!$searchCriteriaModeOr) return $this;
        $this->searchCriteriaModeOr = new PrimitiveType($searchCriteriaModeOr);
        $this->searchCriteriaModeOr->setName('searchCriteriaModeOr');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getSearchCriteriaModeOr()
    {
        return $this->searchCriteriaModeOr->getValue();
    }

    /**
     * 
     */
    public function setSearchCriteriaUserLastName(SearchCriteriaUserLastName $searchCriteriaUserLastName = null)
    {
        if (!$searchCriteriaUserLastName) return $this;
        $this->searchCriteriaUserLastName = ($searchCriteriaUserLastName InstanceOf SearchCriteriaUserLastName)
             ? $searchCriteriaUserLastName
             : new SearchCriteriaUserLastName($searchCriteriaUserLastName);
        $this->searchCriteriaUserLastName->setName('searchCriteriaUserLastName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaUserLastName
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
        if (!$searchCriteriaUserFirstName) return $this;
        $this->searchCriteriaUserFirstName = ($searchCriteriaUserFirstName InstanceOf SearchCriteriaUserFirstName)
             ? $searchCriteriaUserFirstName
             : new SearchCriteriaUserFirstName($searchCriteriaUserFirstName);
        $this->searchCriteriaUserFirstName->setName('searchCriteriaUserFirstName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaUserFirstName
     */
    public function getSearchCriteriaUserFirstName()
    {
        return $this->searchCriteriaUserFirstName;
    }

    /**
     * 
     */
    public function setSearchCriteriaDn(SearchCriteriaDn $searchCriteriaDn = null)
    {
        if (!$searchCriteriaDn) return $this;
        $this->searchCriteriaDn = ($searchCriteriaDn InstanceOf SearchCriteriaDn)
             ? $searchCriteriaDn
             : new SearchCriteriaDn($searchCriteriaDn);
        $this->searchCriteriaDn->setName('searchCriteriaDn');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaDn
     */
    public function getSearchCriteriaDn()
    {
        return $this->searchCriteriaDn;
    }

    /**
     * 
     */
    public function setSearchCriteriaGroupLocationCode(SearchCriteriaGroupLocationCode $searchCriteriaGroupLocationCode = null)
    {
        if (!$searchCriteriaGroupLocationCode) return $this;
        $this->searchCriteriaGroupLocationCode = ($searchCriteriaGroupLocationCode InstanceOf SearchCriteriaGroupLocationCode)
             ? $searchCriteriaGroupLocationCode
             : new SearchCriteriaGroupLocationCode($searchCriteriaGroupLocationCode);
        $this->searchCriteriaGroupLocationCode->setName('searchCriteriaGroupLocationCode');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaGroupLocationCode
     */
    public function getSearchCriteriaGroupLocationCode()
    {
        return $this->searchCriteriaGroupLocationCode;
    }

    /**
     * 
     */
    public function setSearchCriteriaExtension(SearchCriteriaExtension $searchCriteriaExtension = null)
    {
        if (!$searchCriteriaExtension) return $this;
        $this->searchCriteriaExtension = ($searchCriteriaExtension InstanceOf SearchCriteriaExtension)
             ? $searchCriteriaExtension
             : new SearchCriteriaExtension($searchCriteriaExtension);
        $this->searchCriteriaExtension->setName('searchCriteriaExtension');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExtension
     */
    public function getSearchCriteriaExtension()
    {
        return $this->searchCriteriaExtension;
    }

    /**
     * 
     */
    public function setSearchCriteriaMobilePhoneNumber(SearchCriteriaMobilePhoneNumber $searchCriteriaMobilePhoneNumber = null)
    {
        if (!$searchCriteriaMobilePhoneNumber) return $this;
        $this->searchCriteriaMobilePhoneNumber = ($searchCriteriaMobilePhoneNumber InstanceOf SearchCriteriaMobilePhoneNumber)
             ? $searchCriteriaMobilePhoneNumber
             : new SearchCriteriaMobilePhoneNumber($searchCriteriaMobilePhoneNumber);
        $this->searchCriteriaMobilePhoneNumber->setName('searchCriteriaMobilePhoneNumber');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaMobilePhoneNumber
     */
    public function getSearchCriteriaMobilePhoneNumber()
    {
        return $this->searchCriteriaMobilePhoneNumber;
    }

    /**
     * 
     */
    public function setSearchCriteriaEmailAddress(SearchCriteriaEmailAddress $searchCriteriaEmailAddress = null)
    {
        if (!$searchCriteriaEmailAddress) return $this;
        $this->searchCriteriaEmailAddress = ($searchCriteriaEmailAddress InstanceOf SearchCriteriaEmailAddress)
             ? $searchCriteriaEmailAddress
             : new SearchCriteriaEmailAddress($searchCriteriaEmailAddress);
        $this->searchCriteriaEmailAddress->setName('searchCriteriaEmailAddress');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaEmailAddress
     */
    public function getSearchCriteriaEmailAddress()
    {
        return $this->searchCriteriaEmailAddress;
    }

    /**
     * 
     */
    public function setSearchCriteriaYahooId(SearchCriteriaYahooId $searchCriteriaYahooId = null)
    {
        if (!$searchCriteriaYahooId) return $this;
        $this->searchCriteriaYahooId = ($searchCriteriaYahooId InstanceOf SearchCriteriaYahooId)
             ? $searchCriteriaYahooId
             : new SearchCriteriaYahooId($searchCriteriaYahooId);
        $this->searchCriteriaYahooId->setName('searchCriteriaYahooId');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaYahooId
     */
    public function getSearchCriteriaYahooId()
    {
        return $this->searchCriteriaYahooId;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactUserGroup(SearchCriteriaExactUserGroup $searchCriteriaExactUserGroup = null)
    {
        if (!$searchCriteriaExactUserGroup) return $this;
        $this->searchCriteriaExactUserGroup = ($searchCriteriaExactUserGroup InstanceOf SearchCriteriaExactUserGroup)
             ? $searchCriteriaExactUserGroup
             : new SearchCriteriaExactUserGroup($searchCriteriaExactUserGroup);
        $this->searchCriteriaExactUserGroup->setName('searchCriteriaExactUserGroup');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactUserGroup
     */
    public function getSearchCriteriaExactUserGroup()
    {
        return $this->searchCriteriaExactUserGroup;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactUserDepartment(SearchCriteriaExactUserDepartment $searchCriteriaExactUserDepartment = null)
    {
        if (!$searchCriteriaExactUserDepartment) return $this;
        $this->searchCriteriaExactUserDepartment = ($searchCriteriaExactUserDepartment InstanceOf SearchCriteriaExactUserDepartment)
             ? $searchCriteriaExactUserDepartment
             : new SearchCriteriaExactUserDepartment($searchCriteriaExactUserDepartment);
        $this->searchCriteriaExactUserDepartment->setName('searchCriteriaExactUserDepartment');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactUserDepartment
     */
    public function getSearchCriteriaExactUserDepartment()
    {
        return $this->searchCriteriaExactUserDepartment;
    }

    /**
     * 
     */
    public function setSearchCriteriaUserId(SearchCriteriaUserId $searchCriteriaUserId = null)
    {
        if (!$searchCriteriaUserId) return $this;
        $this->searchCriteriaUserId = ($searchCriteriaUserId InstanceOf SearchCriteriaUserId)
             ? $searchCriteriaUserId
             : new SearchCriteriaUserId($searchCriteriaUserId);
        $this->searchCriteriaUserId->setName('searchCriteriaUserId');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaUserId
     */
    public function getSearchCriteriaUserId()
    {
        return $this->searchCriteriaUserId;
    }
}
