<?php
/**
 * @package   Pls\Identifier\Uri
 * @author    PHP Library Standards <https://github.com/PHP-library-standards>
 * @copyright 2017 PHP Library Standards
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace Pls\Identifier\Uuid;

use Throwable;

/**
 * Base exception interface for all types of UUID exceptions.
 *
 * This interface MUST be implemented by all exceptions thrown by a `Uuid`
 * implementation.
 */
interface UuidException extends Throwable
{
}
