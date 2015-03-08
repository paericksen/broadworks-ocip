<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAccountAuthorizationCodes; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAccountAuthorizationCodes\AccountAuthorizationCodeEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupAccountAuthorizationCodesGetListRequest.
 */
class GroupAccountAuthorizationCodesGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name      = __CLASS__;
    protected $codeEntry = null;


    /**
     * Account/Authorization Code.
     */
    public function setCodeEntry(AccountAuthorizationCodeEntry $codeEntry = null)
    {
        $this->codeEntry =  $codeEntry;
    }

    /**
     * Account/Authorization Code.
     */
    public function getCodeEntry()
    {
        return (!$this->codeEntry) ?: $this->codeEntry->getValue();
    }
}
