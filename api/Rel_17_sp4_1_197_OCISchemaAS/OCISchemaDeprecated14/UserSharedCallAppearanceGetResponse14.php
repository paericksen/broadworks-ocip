<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SharedCallAppearanceMaximumAppearances;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SharedCallAppearanceBridgeWarningTone;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the UserSharedCallAppearanceGetRequest14.
 *         The endpointTable contains columns:
 *           "Device Level", "Device Name", "Device Type", "Line/Port", "SIP Contact".
 *         The "Device Level" column contains one of the AccessDeviceLevel enumerated constants.
 *         Replaced By: UserSharedCallAppearanceGetResponse14sp2
 */
class UserSharedCallAppearanceGetResponse14 extends ComplexType implements ComplexInterface
{
    public    $name                                   = __CLASS__;
    protected $alertAllAppearancesForClickToDialCalls = null;
    protected $maxAppearances                         = null;
    protected $enableMultipleCallArrangement          = null;
    protected $multipleCallArrangementIsActive        = null;
    protected $endpointTable                          = null;
    protected $allowBridgingBetweenLocations          = null;
    protected $bridgeWarningTone                      = null;


    /**
     * 
     */
    public function setAlertAllAppearancesForClickToDialCalls($alertAllAppearancesForClickToDialCalls = null)
    {
        $this->alertAllAppearancesForClickToDialCalls = (boolean) $alertAllAppearancesForClickToDialCalls;
    }

    /**
     * 
     */
    public function getAlertAllAppearancesForClickToDialCalls()
    {
        return (!$this->alertAllAppearancesForClickToDialCalls) ?: $this->alertAllAppearancesForClickToDialCalls->getValue();
    }

    /**
     * Maximum Shared Call Appearances.
     */
    public function setMaxAppearances($maxAppearances = null)
    {
        $this->maxAppearances = ($maxAppearances InstanceOf SharedCallAppearanceMaximumAppearances)
             ? $maxAppearances
             : new SharedCallAppearanceMaximumAppearances($maxAppearances);
    }

    /**
     * Maximum Shared Call Appearances.
     */
    public function getMaxAppearances()
    {
        return (!$this->maxAppearances) ?: $this->maxAppearances->getValue();
    }

    /**
     * 
     */
    public function setEnableMultipleCallArrangement($enableMultipleCallArrangement = null)
    {
        $this->enableMultipleCallArrangement = (boolean) $enableMultipleCallArrangement;
    }

    /**
     * 
     */
    public function getEnableMultipleCallArrangement()
    {
        return (!$this->enableMultipleCallArrangement) ?: $this->enableMultipleCallArrangement->getValue();
    }

    /**
     * 
     */
    public function setMultipleCallArrangementIsActive($multipleCallArrangementIsActive = null)
    {
        $this->multipleCallArrangementIsActive = (boolean) $multipleCallArrangementIsActive;
    }

    /**
     * 
     */
    public function getMultipleCallArrangementIsActive()
    {
        return (!$this->multipleCallArrangementIsActive) ?: $this->multipleCallArrangementIsActive->getValue();
    }

    /**
     * 
     */
    public function setEndpointTable(core:OCITable $endpointTable = null)
    {
        $this->endpointTable =  $endpointTable;
    }

    /**
     * 
     */
    public function getEndpointTable()
    {
        return (!$this->endpointTable) ?: $this->endpointTable->getValue();
    }

    /**
     * 
     */
    public function setAllowBridgingBetweenLocations($allowBridgingBetweenLocations = null)
    {
        $this->allowBridgingBetweenLocations = (boolean) $allowBridgingBetweenLocations;
    }

    /**
     * 
     */
    public function getAllowBridgingBetweenLocations()
    {
        return (!$this->allowBridgingBetweenLocations) ?: $this->allowBridgingBetweenLocations->getValue();
    }

    /**
     * Warning tone types for Shared Call Appearance.
     *         The bridge warning tone types are none, barge-in, barge-in repeat.
     */
    public function setBridgeWarningTone($bridgeWarningTone = null)
    {
        $this->bridgeWarningTone = ($bridgeWarningTone InstanceOf SharedCallAppearanceBridgeWarningTone)
             ? $bridgeWarningTone
             : new SharedCallAppearanceBridgeWarningTone($bridgeWarningTone);
    }

    /**
     * Warning tone types for Shared Call Appearance.
     *         The bridge warning tone types are none, barge-in, barge-in repeat.
     */
    public function getBridgeWarningTone()
    {
        return (!$this->bridgeWarningTone) ?: $this->bridgeWarningTone->getValue();
    }
}
