<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAccountAuthorizationCodes; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAccountAuthorizationCodes\AccountAuthorizationCodeEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupAccountAuthorizationCodesGetListRequest.
 */
class GroupAccountAuthorizationCodesGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name      = 'GroupAccountAuthorizationCodesGetListResponse';
    protected $codeEntry = null;

    /**
     * @return GroupAccountAuthorizationCodesGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCodeEntry(AccountAuthorizationCodeEntry $codeEntry = null)
    {
        if (!$codeEntry) return $this;
        $this->codeEntry = $codeEntry;
        $this->codeEntry->setName('codeEntry');
        return $this;
    }

    /**
     * 
     * @return AccountAuthorizationCodeEntry
     */
    public function getCodeEntry()
    {
        return $this->codeEntry;
    }
}
