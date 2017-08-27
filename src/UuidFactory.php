<?php
/**
 * @package   Pls\Identifier\Uri
 * @author    PHP Library Standards <https://github.com/PHP-library-standards>
 * @copyright 2017 PHP Library Standards
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace Pls\Identifier\Uuid;

/**
 * Interface describing a URI factory.
 */
interface UuidFactory
{
    /**
     * Creates a version 2 UUID from a host ID, sequence number, local
     * domain identifier, local identifier and the current time.
     *
     * @param int $node        A 48-bit integer representing the hardware
     *     address.
     * @param int $clockSeq    A 14-bit number used to help avoid duplicates
     *     that could arise when the clock is set backwards in time or if the
     *     node ID changes.
     * @param int $localDomain A 8-bit integer which is an identifier domain
     *     meaningful to the local host.
     * @param int $localId     A 32-bit integer which is an identifier within
     *     the $localDomain meaningful to the local host.
     *
     * @throws UuidException A given argument is invalid.
     *
     * @return Uuid
     */
    public function createDCESecurity(
        int $node,
        int $clockSeq,
        int $localDomain,
        int $localId
    ): Uuid;

    /**
     * Creates a UUID from a byte string.
     *
     * @param string $bytes A 16-byte string representation of a UUID.
     *
     * @throws UuidException $bytes is not a valid 16-byte string.
     *
     * @return Uuid
     */
    public function createFromBytes(string $bytes): Uuid;

    /**
     * Creates a UUID from an integer.
     *
     * @param int $int Any integer.
     *
     * @return Uuid
     */
    public function createFromInt(int $int): Uuid;

    /**
     * Creates a UUID from a string.
     *
     * @param string $string A canonical textual representation of a UUID.
     *
     * @throws UuidException $string is not a UUID canonical textual
     *     representation.
     *
     * @return Uuid
     */
    public function createFromString(string $string): Uuid;

    /**
     * Creates a version 3 or 5 UUID from a UUID namespace designator and a
     * name.
     *
     * Version 3 uses MD5 hashing. Version 5 uses SHA-1 hashing.
     *
     * @param Uuid   $namespace Any UUID to use as the namespace designator.
     * @param string $name      Any string to use as the name.
     * @param bool   $sha1      `true` creates a version 5 UUID, `false`
     *     creates a version 3 UUID.
     *
     * @return Uuid
     */
    public function createNameBased(
        Uuid $namespace,
        string $name,
        bool $sha1 = true
    ): Uuid;

    /**
     * Creates a version 4 UUID.
     *
     * @return Uuid
     */
    public function createRandom(): Uuid;

    /**
     * Creates a version 1 UUID from a host ID, sequence number, and the current
     * time.
     *
     * @param int $node     A 48-bit integer representing the hardware address.
     * @param int $clockSeq A 14-bit number used to help avoid duplicates that
     *     could arise when the clock is set backwards in time or if the node ID
     *     changes.
     *
     * @throws UuidException A given argument is invalid.
     *
     * @return Uuid
     */
    public function createTimeBased(int $node, int $clockSeq): Uuid;
}
