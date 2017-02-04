<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan;

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;


/**
 * Outgoing Calling Plan originating call permissions for a department.
 */
class OutgoingCallingPlanOriginatingDepartmentPermissionsModify extends ComplexType implements ComplexInterface
{
    public    $elementName = 'OutgoingCallingPlanOriginatingDepartmentPermissionsModify';
    protected $departmentKey;
    protected $permissions;

    /**
     *
     * @param string $departmentKey
     * @param array|OutgoingCallingPlanOriginatingPermissions $permissions
     */
    public function __construct(
         $departmentKey = '',
         $permissions = null
    ) {
        $this->setDepartmentKey($departmentKey);
        $this->setPermissions($permissions);
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
    public function setDepartmentKey(DepartmentKey $departmentKey = null)
    {
        $this->departmentKey = $departmentKey;
        return $this;
    }

    /**
     *
     * @return SimpleContent $departmentKey
     */
    public function getDepartmentKey()
    {
        return ($this->departmentKey)
            ? $this->departmentKey->getElementValue()
            : null;
    }

/**
 *
 * @param array|OutgoingCallingPlanOriginatingPermissions $permissions
 * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanOriginatingDepartmentPermissionsModify
 */
    public function setPermissions($permissions = null)
    {
        if($permissions instanceof OutgoingCallingPlanOriginatingPermissions){
        	$this->permissions = $permissions;
        }
        elseif(is_array($permissions)){
        	$this->permissions = new  OutgoingCallingPlanOriginatingPermissions(
        	$permissions['group'],
        	$permissions['local'],
        	$permissions['tollFree'],
        	$permissions['toll'],
        	$permissions['international'],
        	$permissions['operatorAssisted'],
        	$permissions['chargeableDirectoryAssisted'],
        	$permissions['specialServicesI'],
        	$permissions['specialServicesII'],
        	$permissions['premiumServicesI'],
        	$permissions['premiumServicesII'],
        	$permissions['casual'],
        	$permissions['urlDialing'],
        	$permissions['unknown']
        			);
        }
        else{
        	$this->permissions = null;
        }

//         $this->permissions->setElementName('permissions');
		$this->permissions->elementName = 'permissions';
        return $this;
    }

    /**
     *
     * @return SimpleContent $permissions
     */
    public function getPermissions()
    {
        return ($this->permissions)
            ? $this->permissions->getElementValue()
            : null;
    }
}
