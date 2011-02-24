<?php
/**
 * Copyright 2011 Victor Farazdagi
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); 
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at 
 *
 *          http://www.apache.org/licenses/LICENSE-2.0 
 *
 * Unless required by applicable law or agreed to in writing, software 
 * distributed under the License is distributed on an "AS IS" BASIS, 
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. 
 * See the License for the specific language governing permissions and 
 * limitations under the License. 
 *
 * @category    Phrozn
 * @package     Phrozn\Has
 * @author      Victor Farazdagi
 * @copyright   2011 Victor Farazdagi
 * @license     http://www.apache.org/licenses/LICENSE-2.0
 */

namespace Phrozn\Has;

/**
 * Contract defining entity which has destination path
 *
 * @category    Phrozn
 * @package     Phrozn\Has
 * @author      Victor Farazdagi
 */
interface Destination 
{
    /**
     * Set where to compile site into
     *
     * @param string $path Destination/output path
     *
     * @return \Phrozn\Has\Destination
     */
    public function setDestinationPath($path);

    /**
     * Get site output path
     *
     * @return string
     */
    public function getDestinationPath();
}