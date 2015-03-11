<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantGroupCall; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupInstantGroupCallGetInstanceListRequest.
 *         Contains a 6 column table with column headings:
 *         "Service User Id", "Name", "Phone Number", "Extension", "Department", "Is Active".
 *         The column values for Is Active can either be true, or false.
 */
class GroupInstantGroupCallGetInstanceListResponse extends ComplexType implements ComplexInterface
{
    public    $name                  = 'GroupInstantGroupCallGetInstanceListResponse';
    protected $instantGroupCallTable = null;

    /**
     * @return GroupInstantGroupCallGetInstanceListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setInstantGroupCallTable(core:OCITable $instantGroupCallTable = null)
    {
        if (!$instantGroupCallTable) return $this;
        $this->instantGroupCallTable->setName('instantGroupCallTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getInstantGroupCallTable()
    {
        return $this->instantGroupCallTable->getValue();
    }
}
