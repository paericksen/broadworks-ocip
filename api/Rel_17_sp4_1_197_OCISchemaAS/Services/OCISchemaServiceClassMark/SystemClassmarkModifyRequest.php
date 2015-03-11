<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceClassMark; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceClassMark\ClassmarkValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceClassMark\Classmark;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\WebDisplayKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a Class Mark in system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemClassmarkModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name          = 'SystemClassmarkModifyRequest';
    protected $classmark     = null;
    protected $value         = null;
    protected $webDisplayKey = null;

    public function __construct(
         $classmark,
         $value = null,
         $webDisplayKey = null
    ) {
        $this->setClassmark($classmark);
        $this->setValue($value);
        $this->setWebDisplayKey($webDisplayKey);
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
    public function setClassmark($classmark = null)
    {
        if (!$classmark) return $this;
        $this->classmark = ($classmark InstanceOf Classmark)
             ? $classmark
             : new Classmark($classmark);
        $this->classmark->setName('classmark');
        return $this;
    }

    /**
     * 
     * @return Classmark
     */
    public function getClassmark()
    {
        return $this->classmark->getValue();
    }

    /**
     * 
     */
    public function setValue($value = null)
    {
        if (!$value) return $this;
        $this->value = ($value InstanceOf ClassmarkValue)
             ? $value
             : new ClassmarkValue($value);
        $this->value->setName('value');
        return $this;
    }

    /**
     * 
     * @return ClassmarkValue
     */
    public function getValue()
    {
        return $this->value->getValue();
    }

    /**
     * 
     */
    public function setWebDisplayKey($webDisplayKey = null)
    {
        if (!$webDisplayKey) return $this;
        $this->webDisplayKey = ($webDisplayKey InstanceOf WebDisplayKey)
             ? $webDisplayKey
             : new WebDisplayKey($webDisplayKey);
        $this->webDisplayKey->setName('webDisplayKey');
        return $this;
    }

    /**
     * 
     * @return WebDisplayKey
     */
    public function getWebDisplayKey()
    {
        return $this->webDisplayKey->getValue();
    }
}
