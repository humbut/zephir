<?php

/*
 +--------------------------------------------------------------------------+
 | Zephir                                                                   |
 | Copyright (c) 2013-present Zephir Team (https://zephir-lang.com/)        |
 |                                                                          |
 | This source file is subject the MIT license, that is bundled with this   |
 | package in the file LICENSE, and is available through the world-wide-web |
 | at the following url: http://zephir-lang.com/license.html                |
 +--------------------------------------------------------------------------+
*/

namespace Zephir\Builder;

/**
 * LiteralBuilder
 *
 * Allows to manually build a literal expressions AST nodes
 */
class LiteralBuilder
{
    protected $type;

    protected $value;

    public function __construct($type, $value)
    {
        $this->type = $type;
        $this->value = $value;
    }

    public function get()
    {
        return array(
            'type'  => $this->type,
            'value' => $this->value
        );
    }
}
