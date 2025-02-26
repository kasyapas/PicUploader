<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IdentitySet File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* IdentitySet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IdentitySet extends Entity
{

    /**
    * Gets the application
    * The Identity of the Application. This property is read-only.
    *
    * @return Identity|null The application
    */
    public function getApplication()
    {
        if (array_key_exists("application", $this->_propDict)) {
            if (is_a($this->_propDict["application"], "\Microsoft\Graph\Model\Identity") || is_null($this->_propDict["application"])) {
                return $this->_propDict["application"];
            } else {
                $this->_propDict["application"] = new Identity($this->_propDict["application"]);
                return $this->_propDict["application"];
            }
        }
        return null;
    }

    /**
    * Sets the application
    * The Identity of the Application. This property is read-only.
    *
    * @param Identity $val The value to assign to the application
    *
    * @return IdentitySet The IdentitySet
    */
    public function setApplication($val)
    {
        $this->_propDict["application"] = $val;
         return $this;
    }

    /**
    * Gets the device
    * The Identity of the Device. This property is read-only.
    *
    * @return Identity|null The device
    */
    public function getDevice()
    {
        if (array_key_exists("device", $this->_propDict)) {
            if (is_a($this->_propDict["device"], "\Microsoft\Graph\Model\Identity") || is_null($this->_propDict["device"])) {
                return $this->_propDict["device"];
            } else {
                $this->_propDict["device"] = new Identity($this->_propDict["device"]);
                return $this->_propDict["device"];
            }
        }
        return null;
    }

    /**
    * Sets the device
    * The Identity of the Device. This property is read-only.
    *
    * @param Identity $val The value to assign to the device
    *
    * @return IdentitySet The IdentitySet
    */
    public function setDevice($val)
    {
        $this->_propDict["device"] = $val;
         return $this;
    }

    /**
    * Gets the user
    * The Identity of the User. This property is read-only.
    *
    * @return Identity|null The user
    */
    public function getUser()
    {
        if (array_key_exists("user", $this->_propDict)) {
            if (is_a($this->_propDict["user"], "\Microsoft\Graph\Model\Identity") || is_null($this->_propDict["user"])) {
                return $this->_propDict["user"];
            } else {
                $this->_propDict["user"] = new Identity($this->_propDict["user"]);
                return $this->_propDict["user"];
            }
        }
        return null;
    }

    /**
    * Sets the user
    * The Identity of the User. This property is read-only.
    *
    * @param Identity $val The value to assign to the user
    *
    * @return IdentitySet The IdentitySet
    */
    public function setUser($val)
    {
        $this->_propDict["user"] = $val;
         return $this;
    }
}
