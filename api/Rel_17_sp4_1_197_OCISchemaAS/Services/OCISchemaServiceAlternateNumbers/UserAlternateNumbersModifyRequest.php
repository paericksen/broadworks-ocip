<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAlternateNumbers; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAlternateNumbers\AlternateNumberEntry17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user level data associated with Alternate Numbers.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserAlternateNumbersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name             = 'UserAlternateNumbersModifyRequest';
    protected $userId           = null;
    protected $distinctiveRing  = null;
    protected $alternateEntry01 = null;
    protected $alternateEntry02 = null;
    protected $alternateEntry03 = null;
    protected $alternateEntry04 = null;
    protected $alternateEntry05 = null;
    protected $alternateEntry06 = null;
    protected $alternateEntry07 = null;
    protected $alternateEntry08 = null;
    protected $alternateEntry09 = null;
    protected $alternateEntry10 = null;

    public function __construct(
         $userId,
         $distinctiveRing = null,
         AlternateNumberEntry17 $alternateEntry01 = null,
         AlternateNumberEntry17 $alternateEntry02 = null,
         AlternateNumberEntry17 $alternateEntry03 = null,
         AlternateNumberEntry17 $alternateEntry04 = null,
         AlternateNumberEntry17 $alternateEntry05 = null,
         AlternateNumberEntry17 $alternateEntry06 = null,
         AlternateNumberEntry17 $alternateEntry07 = null,
         AlternateNumberEntry17 $alternateEntry08 = null,
         AlternateNumberEntry17 $alternateEntry09 = null,
         AlternateNumberEntry17 $alternateEntry10 = null
    ) {
        $this->setUserId($userId);
        $this->setDistinctiveRing($distinctiveRing);
        $this->setAlternateEntry01($alternateEntry01);
        $this->setAlternateEntry02($alternateEntry02);
        $this->setAlternateEntry03($alternateEntry03);
        $this->setAlternateEntry04($alternateEntry04);
        $this->setAlternateEntry05($alternateEntry05);
        $this->setAlternateEntry06($alternateEntry06);
        $this->setAlternateEntry07($alternateEntry07);
        $this->setAlternateEntry08($alternateEntry08);
        $this->setAlternateEntry09($alternateEntry09);
        $this->setAlternateEntry10($alternateEntry10);
    }

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserId($userId = null)
    {
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setDistinctiveRing($distinctiveRing = null)
    {
        if (!$distinctiveRing) return $this;
        $this->distinctiveRing = new PrimitiveType($distinctiveRing);
        $this->distinctiveRing->setName('distinctiveRing');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getDistinctiveRing()
    {
        return $this->distinctiveRing->getValue();
    }

    /**
     * 
     */
    public function setAlternateEntry01(AlternateNumberEntry17 $alternateEntry01 = null)
    {
        if (!$alternateEntry01) return $this;
        $this->alternateEntry01 = $alternateEntry01;
        $this->alternateEntry01->setName('alternateEntry01');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry17
     */
    public function getAlternateEntry01()
    {
        return $this->alternateEntry01;
    }

    /**
     * 
     */
    public function setAlternateEntry02(AlternateNumberEntry17 $alternateEntry02 = null)
    {
        if (!$alternateEntry02) return $this;
        $this->alternateEntry02 = $alternateEntry02;
        $this->alternateEntry02->setName('alternateEntry02');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry17
     */
    public function getAlternateEntry02()
    {
        return $this->alternateEntry02;
    }

    /**
     * 
     */
    public function setAlternateEntry03(AlternateNumberEntry17 $alternateEntry03 = null)
    {
        if (!$alternateEntry03) return $this;
        $this->alternateEntry03 = $alternateEntry03;
        $this->alternateEntry03->setName('alternateEntry03');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry17
     */
    public function getAlternateEntry03()
    {
        return $this->alternateEntry03;
    }

    /**
     * 
     */
    public function setAlternateEntry04(AlternateNumberEntry17 $alternateEntry04 = null)
    {
        if (!$alternateEntry04) return $this;
        $this->alternateEntry04 = $alternateEntry04;
        $this->alternateEntry04->setName('alternateEntry04');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry17
     */
    public function getAlternateEntry04()
    {
        return $this->alternateEntry04;
    }

    /**
     * 
     */
    public function setAlternateEntry05(AlternateNumberEntry17 $alternateEntry05 = null)
    {
        if (!$alternateEntry05) return $this;
        $this->alternateEntry05 = $alternateEntry05;
        $this->alternateEntry05->setName('alternateEntry05');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry17
     */
    public function getAlternateEntry05()
    {
        return $this->alternateEntry05;
    }

    /**
     * 
     */
    public function setAlternateEntry06(AlternateNumberEntry17 $alternateEntry06 = null)
    {
        if (!$alternateEntry06) return $this;
        $this->alternateEntry06 = $alternateEntry06;
        $this->alternateEntry06->setName('alternateEntry06');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry17
     */
    public function getAlternateEntry06()
    {
        return $this->alternateEntry06;
    }

    /**
     * 
     */
    public function setAlternateEntry07(AlternateNumberEntry17 $alternateEntry07 = null)
    {
        if (!$alternateEntry07) return $this;
        $this->alternateEntry07 = $alternateEntry07;
        $this->alternateEntry07->setName('alternateEntry07');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry17
     */
    public function getAlternateEntry07()
    {
        return $this->alternateEntry07;
    }

    /**
     * 
     */
    public function setAlternateEntry08(AlternateNumberEntry17 $alternateEntry08 = null)
    {
        if (!$alternateEntry08) return $this;
        $this->alternateEntry08 = $alternateEntry08;
        $this->alternateEntry08->setName('alternateEntry08');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry17
     */
    public function getAlternateEntry08()
    {
        return $this->alternateEntry08;
    }

    /**
     * 
     */
    public function setAlternateEntry09(AlternateNumberEntry17 $alternateEntry09 = null)
    {
        if (!$alternateEntry09) return $this;
        $this->alternateEntry09 = $alternateEntry09;
        $this->alternateEntry09->setName('alternateEntry09');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry17
     */
    public function getAlternateEntry09()
    {
        return $this->alternateEntry09;
    }

    /**
     * 
     */
    public function setAlternateEntry10(AlternateNumberEntry17 $alternateEntry10 = null)
    {
        if (!$alternateEntry10) return $this;
        $this->alternateEntry10 = $alternateEntry10;
        $this->alternateEntry10->setName('alternateEntry10');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry17
     */
    public function getAlternateEntry10()
    {
        return $this->alternateEntry10;
    }
}
