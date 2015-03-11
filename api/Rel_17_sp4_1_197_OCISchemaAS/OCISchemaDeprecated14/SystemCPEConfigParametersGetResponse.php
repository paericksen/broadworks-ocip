<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\DeviceManagementFTPFileTransferTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\DeviceManagementFTPConnectTimeoutSeconds;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemCPEConfigParametersGetListRequest.
 *         Contains a list of system CPE Config parameters.
 *         Replaced By: SystemCPEConfigParametersGetResponse14sp6
 */
class SystemCPEConfigParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                          = 'SystemCPEConfigParametersGetResponse';
    protected $enableIPDeviceManagement      = null;
    protected $ftpConnectTimeoutSeconds      = null;
    protected $ftpFileTransferTimeoutSeconds = null;

    /**
     * @return SystemCPEConfigParametersGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnableIPDeviceManagement($enableIPDeviceManagement = null)
    {
        if (!$enableIPDeviceManagement) return $this;
        $this->enableIPDeviceManagement = new PrimitiveType($enableIPDeviceManagement);
        $this->enableIPDeviceManagement->setName('enableIPDeviceManagement');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableIPDeviceManagement()
    {
        return $this->enableIPDeviceManagement->getValue();
    }

    /**
     * 
     */
    public function setFtpConnectTimeoutSeconds($ftpConnectTimeoutSeconds = null)
    {
        if (!$ftpConnectTimeoutSeconds) return $this;
        $this->ftpConnectTimeoutSeconds = ($ftpConnectTimeoutSeconds InstanceOf DeviceManagementFTPConnectTimeoutSeconds)
             ? $ftpConnectTimeoutSeconds
             : new DeviceManagementFTPConnectTimeoutSeconds($ftpConnectTimeoutSeconds);
        $this->ftpConnectTimeoutSeconds->setName('ftpConnectTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementFTPConnectTimeoutSeconds
     */
    public function getFtpConnectTimeoutSeconds()
    {
        return $this->ftpConnectTimeoutSeconds->getValue();
    }

    /**
     * 
     */
    public function setFtpFileTransferTimeoutSeconds($ftpFileTransferTimeoutSeconds = null)
    {
        if (!$ftpFileTransferTimeoutSeconds) return $this;
        $this->ftpFileTransferTimeoutSeconds = ($ftpFileTransferTimeoutSeconds InstanceOf DeviceManagementFTPFileTransferTimeoutSeconds)
             ? $ftpFileTransferTimeoutSeconds
             : new DeviceManagementFTPFileTransferTimeoutSeconds($ftpFileTransferTimeoutSeconds);
        $this->ftpFileTransferTimeoutSeconds->setName('ftpFileTransferTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementFTPFileTransferTimeoutSeconds
     */
    public function getFtpFileTransferTimeoutSeconds()
    {
        return $this->ftpFileTransferTimeoutSeconds->getValue();
    }
}
