<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackAuthorization;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Authorize (with quantity) or unauthorize a service pack.
 */
class ServicePackAuthorization extends ComplexType implements ComplexInterface
{
    public    $responseType    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackAuthorization';
    public    $name            = 'ServicePackAuthorization';
    protected $servicePackName = null;

    public function __construct(
         $servicePackName
    ) {
        $this->setServicePackName($servicePackName);
    }

    /**
     * @return ServicePackAuthorization
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServicePackName($servicePackName = null)
    {
        if (!$servicePackName) return $this;
        $this->servicePackName = new SimpleContent($servicePackName);
        $this->servicePackName->setName('servicePackName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getServicePackName()
    {
        return $this->servicePackName->getValue();
    }
}
