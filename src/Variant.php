<?php
/**
 * @package   Pls\Identifier\Uuid
 * @author    PHP Library Standards <https://github.com/PHP-library-standards>
 * @copyright 2017 PHP Library Standards
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace Pls\Identifier\Uuid;

/**
 * UUID variant values.
 */
interface Variant
{
    public const
        NCS_BACKWARD_COMPATIBILITY = 0,
        RFC_4122                   = 1,
        MS_BACKWARD_COMPATIBILITY  = 2,
        FUTURE_RESERVED            = 3;
}
