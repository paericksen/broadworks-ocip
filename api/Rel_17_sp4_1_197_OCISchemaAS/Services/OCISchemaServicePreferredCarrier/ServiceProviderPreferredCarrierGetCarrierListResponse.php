<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\PreferredCarrierName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to a ServiceProviderPreferredCarrierGetCarrierListRequest.
 *         Contains the lists of carriers for a specified country code for a service provider / enterprise.
 */
class ServiceProviderPreferredCarrierGetCarrierListResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = 'ServiceProviderPreferredCarrierGetCarrierListResponse';
    protected $intraLataCarrier     = null;
    protected $interLataCarrier     = null;
    protected $internationalCarrier = null;

    /**
     * @return ServiceProviderPreferredCarrierGetCarrierListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIntraLataCarrier($intraLataCarrier = null)
    {
        if (!$intraLataCarrier) return $this;
        $this->intraLataCarrier = ($intraLataCarrier InstanceOf PreferredCarrierName)
             ? $intraLataCarrier
             : new PreferredCarrierName($intraLataCarrier);
        $this->intraLataCarrier->setName('intraLataCarrier');
        return $this;
    }

    /**
     * 
     * @return PreferredCarrierName
     */
    public function getIntraLataCarrier()
    {
        return $this->intraLataCarrier->getValue();
    }

    /**
     * 
     */
    public function setInterLataCarrier($interLataCarrier = null)
    {
        if (!$interLataCarrier) return $this;
        $this->interLataCarrier = ($interLataCarrier InstanceOf PreferredCarrierName)
             ? $interLataCarrier
             : new PreferredCarrierName($interLataCarrier);
        $this->interLataCarrier->setName('interLataCarrier');
        return $this;
    }

    /**
     * 
     * @return PreferredCarrierName
     */
    public function getInterLataCarrier()
    {
        return $this->interLataCarrier->getValue();
    }

    /**
     * 
     */
    public function setInternationalCarrier($internationalCarrier = null)
    {
        if (!$internationalCarrier) return $this;
        $this->internationalCarrier = ($internationalCarrier InstanceOf PreferredCarrierName)
             ? $internationalCarrier
             : new PreferredCarrierName($internationalCarrier);
        $this->internationalCarrier->setName('internationalCarrier');
        return $this;
    }

    /**
     * 
     * @return PreferredCarrierName
     */
    public function getInternationalCarrier()
    {
        return $this->internationalCarrier->getValue();
    }
}
