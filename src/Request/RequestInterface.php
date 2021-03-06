<?php
/**
 * Copyright (c) 2015 Shaun Hardy <party.hardy247@gmail.com>.
 *
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

namespace SMH\Enom\Request;


interface RequestInterface
{
    /**
     * Convert request to parameter array.
     *
     * @return array
     */
    public function toArray();
}
