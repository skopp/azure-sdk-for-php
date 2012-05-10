<?php

/**
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 * PHP version 5
 *
 * @category  Microsoft
 * @package   WindowsAzure\Blob\Models
 * @author    Abdelrahman Elogeel <Abdelrahman.Elogeel@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link      http://pear.php.net/package/azure-sdk-for-php
 */
 
namespace WindowsAzure\Blob\Models;
use WindowsAzure\Common\Internal\Resources;

/**
 * Holds public acces types for a container.
 *
 * @category  Microsoft
 * @package   WindowsAzure\Blob\Models
 * @author    Abdelrahman Elogeel <Abdelrahman.Elogeel@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/azure-sdk-for-php
 */
class PublicAccessType
{
    const NONE                = Resources::EMPTY_STRING;
    const BLOBS_ONLY          = 'blob';
    const CONTAINER_AND_BLOBS = 'container';
    
    /**
     * Validates the public access.
     * 
     * @param string $type The public access type.
     * 
     * @return boolean
     */
    public static function isValid($type)
    {
        switch ($type) {
        case self::NONE:
        case self::BLOBS_ONLY:
        case self::CONTAINER_AND_BLOBS:
            return true;

        default:
            return false;
        }
    }
}

?>
