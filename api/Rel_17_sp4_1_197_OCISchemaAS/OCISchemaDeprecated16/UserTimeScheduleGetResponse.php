<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\TimeInterval;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the UserTimeScheduleGetRequest.
 *         The response contains the requested time schedule information.
 */
class UserTimeScheduleGetResponse extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $timeScheduleName = null;
    protected $timeInterval01   = null;
    protected $timeInterval02   = null;
    protected $timeInterval03   = null;
    protected $timeInterval04   = null;
    protected $timeInterval05   = null;
    protected $timeInterval06   = null;
    protected $timeInterval07   = null;
    protected $timeInterval08   = null;
    protected $timeInterval09   = null;
    protected $timeInterval10   = null;
    protected $timeInterval11   = null;
    protected $timeInterval12   = null;
    protected $timeInterval13   = null;
    protected $timeInterval14   = null;
    protected $timeInterval15   = null;
    protected $timeInterval16   = null;
    protected $timeInterval17   = null;
    protected $timeInterval18   = null;
    protected $timeInterval19   = null;
    protected $timeInterval20   = null;


    /**
     * Schedule name.
     */
    public function setTimeScheduleName($timeScheduleName = null)
    {
        $this->timeScheduleName = ($timeScheduleName InstanceOf ScheduleName)
             ? $timeScheduleName
             : new ScheduleName($timeScheduleName);
    }

    /**
     * Schedule name.
     */
    public function getTimeScheduleName()
    {
        return (!$this->timeScheduleName) ?: $this->timeScheduleName->getValue();
    }

    /**
     * Time Interval.
     */
    public function setTimeInterval01(TimeInterval $timeInterval01 = null)
    {
        $this->timeInterval01 =  $timeInterval01;
    }

    /**
     * Time Interval.
     */
    public function getTimeInterval01()
    {
        return (!$this->timeInterval01) ?: $this->timeInterval01->getValue();
    }

    /**
     * Time Interval.
     */
    public function setTimeInterval02(TimeInterval $timeInterval02 = null)
    {
        $this->timeInterval02 =  $timeInterval02;
    }

    /**
     * Time Interval.
     */
    public function getTimeInterval02()
    {
        return (!$this->timeInterval02) ?: $this->timeInterval02->getValue();
    }

    /**
     * Time Interval.
     */
    public function setTimeInterval03(TimeInterval $timeInterval03 = null)
    {
        $this->timeInterval03 =  $timeInterval03;
    }

    /**
     * Time Interval.
     */
    public function getTimeInterval03()
    {
        return (!$this->timeInterval03) ?: $this->timeInterval03->getValue();
    }

    /**
     * Time Interval.
     */
    public function setTimeInterval04(TimeInterval $timeInterval04 = null)
    {
        $this->timeInterval04 =  $timeInterval04;
    }

    /**
     * Time Interval.
     */
    public function getTimeInterval04()
    {
        return (!$this->timeInterval04) ?: $this->timeInterval04->getValue();
    }

    /**
     * Time Interval.
     */
    public function setTimeInterval05(TimeInterval $timeInterval05 = null)
    {
        $this->timeInterval05 =  $timeInterval05;
    }

    /**
     * Time Interval.
     */
    public function getTimeInterval05()
    {
        return (!$this->timeInterval05) ?: $this->timeInterval05->getValue();
    }

    /**
     * Time Interval.
     */
    public function setTimeInterval06(TimeInterval $timeInterval06 = null)
    {
        $this->timeInterval06 =  $timeInterval06;
    }

    /**
     * Time Interval.
     */
    public function getTimeInterval06()
    {
        return (!$this->timeInterval06) ?: $this->timeInterval06->getValue();
    }

    /**
     * Time Interval.
     */
    public function setTimeInterval07(TimeInterval $timeInterval07 = null)
    {
        $this->timeInterval07 =  $timeInterval07;
    }

    /**
     * Time Interval.
     */
    public function getTimeInterval07()
    {
        return (!$this->timeInterval07) ?: $this->timeInterval07->getValue();
    }

    /**
     * Time Interval.
     */
    public function setTimeInterval08(TimeInterval $timeInterval08 = null)
    {
        $this->timeInterval08 =  $timeInterval08;
    }

    /**
     * Time Interval.
     */
    public function getTimeInterval08()
    {
        return (!$this->timeInterval08) ?: $this->timeInterval08->getValue();
    }

    /**
     * Time Interval.
     */
    public function setTimeInterval09(TimeInterval $timeInterval09 = null)
    {
        $this->timeInterval09 =  $timeInterval09;
    }

    /**
     * Time Interval.
     */
    public function getTimeInterval09()
    {
        return (!$this->timeInterval09) ?: $this->timeInterval09->getValue();
    }

    /**
     * Time Interval.
     */
    public function setTimeInterval10(TimeInterval $timeInterval10 = null)
    {
        $this->timeInterval10 =  $timeInterval10;
    }

    /**
     * Time Interval.
     */
    public function getTimeInterval10()
    {
        return (!$this->timeInterval10) ?: $this->timeInterval10->getValue();
    }

    /**
     * Time Interval.
     */
    public function setTimeInterval11(TimeInterval $timeInterval11 = null)
    {
        $this->timeInterval11 =  $timeInterval11;
    }

    /**
     * Time Interval.
     */
    public function getTimeInterval11()
    {
        return (!$this->timeInterval11) ?: $this->timeInterval11->getValue();
    }

    /**
     * Time Interval.
     */
    public function setTimeInterval12(TimeInterval $timeInterval12 = null)
    {
        $this->timeInterval12 =  $timeInterval12;
    }

    /**
     * Time Interval.
     */
    public function getTimeInterval12()
    {
        return (!$this->timeInterval12) ?: $this->timeInterval12->getValue();
    }

    /**
     * Time Interval.
     */
    public function setTimeInterval13(TimeInterval $timeInterval13 = null)
    {
        $this->timeInterval13 =  $timeInterval13;
    }

    /**
     * Time Interval.
     */
    public function getTimeInterval13()
    {
        return (!$this->timeInterval13) ?: $this->timeInterval13->getValue();
    }

    /**
     * Time Interval.
     */
    public function setTimeInterval14(TimeInterval $timeInterval14 = null)
    {
        $this->timeInterval14 =  $timeInterval14;
    }

    /**
     * Time Interval.
     */
    public function getTimeInterval14()
    {
        return (!$this->timeInterval14) ?: $this->timeInterval14->getValue();
    }

    /**
     * Time Interval.
     */
    public function setTimeInterval15(TimeInterval $timeInterval15 = null)
    {
        $this->timeInterval15 =  $timeInterval15;
    }

    /**
     * Time Interval.
     */
    public function getTimeInterval15()
    {
        return (!$this->timeInterval15) ?: $this->timeInterval15->getValue();
    }

    /**
     * Time Interval.
     */
    public function setTimeInterval16(TimeInterval $timeInterval16 = null)
    {
        $this->timeInterval16 =  $timeInterval16;
    }

    /**
     * Time Interval.
     */
    public function getTimeInterval16()
    {
        return (!$this->timeInterval16) ?: $this->timeInterval16->getValue();
    }

    /**
     * Time Interval.
     */
    public function setTimeInterval17(TimeInterval $timeInterval17 = null)
    {
        $this->timeInterval17 =  $timeInterval17;
    }

    /**
     * Time Interval.
     */
    public function getTimeInterval17()
    {
        return (!$this->timeInterval17) ?: $this->timeInterval17->getValue();
    }

    /**
     * Time Interval.
     */
    public function setTimeInterval18(TimeInterval $timeInterval18 = null)
    {
        $this->timeInterval18 =  $timeInterval18;
    }

    /**
     * Time Interval.
     */
    public function getTimeInterval18()
    {
        return (!$this->timeInterval18) ?: $this->timeInterval18->getValue();
    }

    /**
     * Time Interval.
     */
    public function setTimeInterval19(TimeInterval $timeInterval19 = null)
    {
        $this->timeInterval19 =  $timeInterval19;
    }

    /**
     * Time Interval.
     */
    public function getTimeInterval19()
    {
        return (!$this->timeInterval19) ?: $this->timeInterval19->getValue();
    }

    /**
     * Time Interval.
     */
    public function setTimeInterval20(TimeInterval $timeInterval20 = null)
    {
        $this->timeInterval20 =  $timeInterval20;
    }

    /**
     * Time Interval.
     */
    public function getTimeInterval20()
    {
        return (!$this->timeInterval20) ?: $this->timeInterval20->getValue();
    }
}
