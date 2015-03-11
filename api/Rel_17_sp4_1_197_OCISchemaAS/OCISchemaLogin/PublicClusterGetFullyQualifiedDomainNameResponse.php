<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to PublicClusterGetFullyQualifiedDomainNameRequest.
 */
class PublicClusterGetFullyQualifiedDomainNameResponse extends ComplexType implements ComplexInterface
{
    public    $name              = 'PublicClusterGetFullyQualifiedDomainNameResponse';
    protected $publicClusterFQDN = null;

    /**
     * @return PublicClusterGetFullyQualifiedDomainNameResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPublicClusterFQDN($publicClusterFQDN = null)
    {
        if (!$publicClusterFQDN) return $this;
        $this->publicClusterFQDN = ($publicClusterFQDN InstanceOf DomainName)
             ? $publicClusterFQDN
             : new DomainName($publicClusterFQDN);
        $this->publicClusterFQDN->setName('publicClusterFQDN');
        return $this;
    }

    /**
     * 
     * @return DomainName
     */
    public function getPublicClusterFQDN()
    {
        return $this->publicClusterFQDN->getValue();
    }
}
