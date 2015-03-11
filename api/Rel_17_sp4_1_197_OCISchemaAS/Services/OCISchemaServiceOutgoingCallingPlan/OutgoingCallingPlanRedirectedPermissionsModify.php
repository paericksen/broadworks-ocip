<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanRedirectedPermissionsModify;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Outgoing Calling Plan being forwarded/transferred permissions.
 */
class OutgoingCallingPlanRedirectedPermissionsModify extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanRedirectedPermissionsModify';
    public    $name         = 'OutgoingCallingPlanRedirectedPermissionsModify';
    protected $outsideGroup = null;

    public function __construct(
         $outsideGroup = null
    ) {
        $this->setOutsideGroup($outsideGroup);
    }

    /**
     * @return OutgoingCallingPlanRedirectedPermissionsModify
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setOutsideGroup($outsideGroup = null)
    {
        if (!$outsideGroup) return $this;
        $this->outsideGroup = new SimpleContent($outsideGroup);
        $this->outsideGroup->setName('outsideGroup');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getOutsideGroup()
    {
        return $this->outsideGroup->getValue();
    }
}
