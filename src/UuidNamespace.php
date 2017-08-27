<?php
/**
 * @package   Pls\Identifier\Uuid
 * @author    PHP Library Standards <https://github.com/PHP-library-standards>
 * @copyright 2017 PHP Library Standards
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace Pls\Identifier\Uuid;

/**
 * Defined namespace UUID values.
 */
interface UuidNamespace
{
    public const
        FQDN = '6ba7b810-9dad-11d1-80b4-00c04fd430c8',
        URL  = '6ba7b811-9dad-11d1-80b4-00c04fd430c8',
        OID  = '6ba7b812-9dad-11d1-80b4-00c04fd430c8',
        X500 = '6ba7b814-9dad-11d1-80b4-00c04fd430c8';
}
