<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LoginType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCILocale;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Encoding;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * LoginRequest13mp10/Response13mp10 is 2nd stage of the 2 stage OCI login process.
 */
class LoginResponse13mp10 extends ComplexType implements ComplexInterface
{
    public    $name      = 'LoginResponse13mp10';
    protected $loginType = null;
    protected $locale    = null;
    protected $encoding  = null;

    /**
     * @return LoginResponse13mp10
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setLoginType($loginType = null)
    {
        if (!$loginType) return $this;
        $this->loginType = ($loginType InstanceOf LoginType)
             ? $loginType
             : new LoginType($loginType);
        $this->loginType->setName('loginType');
        return $this;
    }

    /**
     * 
     * @return LoginType
     */
    public function getLoginType()
    {
        return $this->loginType->getValue();
    }

    /**
     * 
     */
    public function setLocale($locale = null)
    {
        if (!$locale) return $this;
        $this->locale = ($locale InstanceOf OCILocale)
             ? $locale
             : new OCILocale($locale);
        $this->locale->setName('locale');
        return $this;
    }

    /**
     * 
     * @return OCILocale
     */
    public function getLocale()
    {
        return $this->locale->getValue();
    }

    /**
     * 
     */
    public function setEncoding($encoding = null)
    {
        if (!$encoding) return $this;
        $this->encoding = ($encoding InstanceOf Encoding)
             ? $encoding
             : new Encoding($encoding);
        $this->encoding->setName('encoding');
        return $this;
    }

    /**
     * 
     * @return Encoding
     */
    public function getEncoding()
    {
        return $this->encoding->getValue();
    }
}
