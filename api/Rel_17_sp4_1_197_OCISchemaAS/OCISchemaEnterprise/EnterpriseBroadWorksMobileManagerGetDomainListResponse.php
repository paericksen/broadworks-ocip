<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerDomainName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the EnterpriseBroadWorksMobileManagerGetDomainListRequest.
 *         Contains the list of domains.
 */
class EnterpriseBroadWorksMobileManagerGetDomainListResponse extends ComplexType implements ComplexInterface
{
    public    $name       = __CLASS__;
    protected $domainName = null;


    /**
     * Domain name.
     */
    public function setDomainName($domainName = null)
    {
        $this->domainName = ($domainName InstanceOf BroadWorksMobileManagerDomainName)
             ? $domainName
             : new BroadWorksMobileManagerDomainName($domainName);
    }

    /**
     * Domain name.
     */
    public function getDomainName()
    {
        return (!$this->domainName) ?: $this->domainName->getValue();
    }
}
