<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderReplacementCommunicationBarringHierarchicalRedirectingRuleList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * A list of Service Provider Communication Barring Hierarchical Redirecting Rules that replaces a previously configured list. By convention, an element of this type 
 *         may be set nill to clear the list.
 */
class ServiceProviderReplacementCommunicationBarringHierarchicalRedirectingRuleList extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderReplacementCommunicationBarringHierarchicalRedirectingRuleList';
    public    $name = 'ServiceProviderReplacementCommunicationBarringHierarchicalRedirectingRuleList';
    protected $rule = null;

    public function __construct(
         $rule = null
    ) {
        $this->setRule($rule);
    }

    /**
     * @return ServiceProviderReplacementCommunicationBarringHierarchicalRedirectingRuleList
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRule($rule = null)
    {
        if (!$rule) return $this;
        $this->rule = new SimpleContent($rule);
        $this->rule->setName('rule');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getRule()
    {
        return $this->rule->getValue();
    }
}
