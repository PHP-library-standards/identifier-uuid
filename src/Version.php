<?php
/**
 * @package   Pls\Identifier\Uuid
 * @author    PHP Library Standards <https://github.com/PHP-library-standards>
 * @copyright 2017 PHP Library Standards
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace Pls\Identifier\Uuid;

/**
 * UUID version values.
 */
interface Version
{
    public const
        TIME_BASED       = 1,
        DCE_SECURITY     = 2,
        MD5_NAME_BASED   = 3,
        RANDOM           = 4,
        SHA_1_NAME_BASED = 5;
}
