<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CountryCodeTimeBetweenCallWaitingTonesMilliseconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CountryCodeOffHookWarningTimerSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CountryCodeRingPeriodMilliseconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CountryCodeMaxCallWaitingTones;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NationalPrefix;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CountryName;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Add a country code to the system.
 *         If ringPeriodMilliseconds is not specified, a default of 6000 milliseconds is assumed.
 *         If offHookWarningTimerSeconds is not specified, a default of 30 seconds is assumed.
 *         If enableNationalPrefix is not specified, a default of false is assumed.
 *         If nationalPrefix is not specified, a default of null string is assumed.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCountryCodeAddRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCountryCodeAddRequest';
    protected $countryCode;
    protected $countryName;
    protected $ringPeriodMilliseconds;
    protected $offHookWarningTimerSeconds;
    protected $enableNationalPrefix;
    protected $nationalPrefix;
    protected $maxCallWaitingTones;
    protected $timeBetweenCallWaitingTonesMilliseconds;

    public function __construct(
         $countryCode = '',
         $countryName = '',
         $ringPeriodMilliseconds = null,
         $offHookWarningTimerSeconds = null,
         $enableNationalPrefix = null,
         $nationalPrefix = null,
         $maxCallWaitingTones = null,
         $timeBetweenCallWaitingTonesMilliseconds = null
    ) {
        $this->setCountryCode($countryCode);
        $this->setCountryName($countryName);
        $this->setRingPeriodMilliseconds($ringPeriodMilliseconds);
        $this->setOffHookWarningTimerSeconds($offHookWarningTimerSeconds);
        $this->setEnableNationalPrefix($enableNationalPrefix);
        $this->setNationalPrefix($nationalPrefix);
        $this->setMaxCallWaitingTones($maxCallWaitingTones);
        $this->setTimeBetweenCallWaitingTonesMilliseconds($timeBetweenCallWaitingTonesMilliseconds);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCountryCode($countryCode = null)
    {
        $this->countryCode = ($countryCode InstanceOf CountryCode)
             ? $countryCode
             : new CountryCode($countryCode);
        $this->countryCode->setElementName('countryCode');
        return $this;
    }

    /**
     * 
     * @return CountryCode $countryCode
     */
    public function getCountryCode()
    {
        return ($this->countryCode)
            ? $this->countryCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCountryName($countryName = null)
    {
        $this->countryName = ($countryName InstanceOf CountryName)
             ? $countryName
             : new CountryName($countryName);
        $this->countryName->setElementName('countryName');
        return $this;
    }

    /**
     * 
     * @return CountryName $countryName
     */
    public function getCountryName()
    {
        return ($this->countryName)
            ? $this->countryName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRingPeriodMilliseconds($ringPeriodMilliseconds = null)
    {
        $this->ringPeriodMilliseconds = ($ringPeriodMilliseconds InstanceOf CountryCodeRingPeriodMilliseconds)
             ? $ringPeriodMilliseconds
             : new CountryCodeRingPeriodMilliseconds($ringPeriodMilliseconds);
        $this->ringPeriodMilliseconds->setElementName('ringPeriodMilliseconds');
        return $this;
    }

    /**
     * 
     * @return CountryCodeRingPeriodMilliseconds $ringPeriodMilliseconds
     */
    public function getRingPeriodMilliseconds()
    {
        return ($this->ringPeriodMilliseconds)
            ? $this->ringPeriodMilliseconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOffHookWarningTimerSeconds($offHookWarningTimerSeconds = null)
    {
        $this->offHookWarningTimerSeconds = ($offHookWarningTimerSeconds InstanceOf CountryCodeOffHookWarningTimerSeconds)
             ? $offHookWarningTimerSeconds
             : new CountryCodeOffHookWarningTimerSeconds($offHookWarningTimerSeconds);
        $this->offHookWarningTimerSeconds->setElementName('offHookWarningTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return CountryCodeOffHookWarningTimerSeconds $offHookWarningTimerSeconds
     */
    public function getOffHookWarningTimerSeconds()
    {
        return ($this->offHookWarningTimerSeconds)
            ? $this->offHookWarningTimerSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableNationalPrefix($enableNationalPrefix = null)
    {
        $this->enableNationalPrefix = new PrimitiveType($enableNationalPrefix);
        $this->enableNationalPrefix->setElementName('enableNationalPrefix');
        return $this;
    }

    /**
     * 
     * @return boolean $enableNationalPrefix
     */
    public function getEnableNationalPrefix()
    {
        return ($this->enableNationalPrefix)
            ? $this->enableNationalPrefix->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNationalPrefix($nationalPrefix = null)
    {
        $this->nationalPrefix = ($nationalPrefix InstanceOf NationalPrefix)
             ? $nationalPrefix
             : new NationalPrefix($nationalPrefix);
        $this->nationalPrefix->setElementName('nationalPrefix');
        return $this;
    }

    /**
     * 
     * @return NationalPrefix $nationalPrefix
     */
    public function getNationalPrefix()
    {
        return ($this->nationalPrefix)
            ? $this->nationalPrefix->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxCallWaitingTones($maxCallWaitingTones = null)
    {
        $this->maxCallWaitingTones = ($maxCallWaitingTones InstanceOf CountryCodeMaxCallWaitingTones)
             ? $maxCallWaitingTones
             : new CountryCodeMaxCallWaitingTones($maxCallWaitingTones);
        $this->maxCallWaitingTones->setElementName('maxCallWaitingTones');
        return $this;
    }

    /**
     * 
     * @return CountryCodeMaxCallWaitingTones $maxCallWaitingTones
     */
    public function getMaxCallWaitingTones()
    {
        return ($this->maxCallWaitingTones)
            ? $this->maxCallWaitingTones->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTimeBetweenCallWaitingTonesMilliseconds($timeBetweenCallWaitingTonesMilliseconds = null)
    {
        $this->timeBetweenCallWaitingTonesMilliseconds = ($timeBetweenCallWaitingTonesMilliseconds InstanceOf CountryCodeTimeBetweenCallWaitingTonesMilliseconds)
             ? $timeBetweenCallWaitingTonesMilliseconds
             : new CountryCodeTimeBetweenCallWaitingTonesMilliseconds($timeBetweenCallWaitingTonesMilliseconds);
        $this->timeBetweenCallWaitingTonesMilliseconds->setElementName('timeBetweenCallWaitingTonesMilliseconds');
        return $this;
    }

    /**
     * 
     * @return CountryCodeTimeBetweenCallWaitingTonesMilliseconds $timeBetweenCallWaitingTonesMilliseconds
     */
    public function getTimeBetweenCallWaitingTonesMilliseconds()
    {
        return ($this->timeBetweenCallWaitingTonesMilliseconds)
            ? $this->timeBetweenCallWaitingTonesMilliseconds->getElementValue()
            : null;
    }
}
