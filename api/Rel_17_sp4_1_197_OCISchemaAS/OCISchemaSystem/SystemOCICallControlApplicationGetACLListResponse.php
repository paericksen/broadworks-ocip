<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemOCICallControlApplicationGetACLListRequest. The table columns are:
 *         "Net Address" and "Description".
 */
class SystemOCICallControlApplicationGetACLListResponse extends ComplexType implements ComplexInterface
{
    public    $name     = 'SystemOCICallControlApplicationGetACLListResponse';
    protected $aclTable = null;

    /**
     * @return SystemOCICallControlApplicationGetACLListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAclTable(core:OCITable $aclTable = null)
    {
        if (!$aclTable) return $this;
        $this->aclTable->setName('aclTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getAclTable()
    {
        return $this->aclTable->getValue();
    }
}
