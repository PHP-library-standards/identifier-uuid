<?php
/**
 * @package   Pls\Identifier\Uuid
 * @author    PHP Library Standards <https://github.com/PHP-library-standards>
 * @copyright 2017 PHP Library Standards
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace Pls\Identifier\Uuid;

/**
 * An RFC 4122 UUID.
 */
interface Uuid
{
    /**
     * Returns the canonical textual representation of the UUID.
     *
     * @return string The canonical textual representation.
     */
    public function __toString(): string;

    /**
     * Returns the low field of the timestamp (UUID bits 1 to 32) as an unsigned
     * 32-bit integer.
     *
     * @return int The `time_low` field value.
     */
    public function getTimeLow(): int;

    /**
     * Returns the middle field of the timestamp (UUID bits 33 to 48) as an
     * unsigned 16-bit integer.
     *
     * @return int The `time_mid` field value.
     */
    public function getTimeMid(): int;

    /**
     * The high field of the timestamp multiplexed with the version number (UUID
     * bits 49 to 64) as an unsigned 16-bit integer.
     *
     * @return int The `time_hi_and_version` field value.
     */
    public function getTimeHiAndVersion(): int;

    /**
     * Returns the high field of the clock sequence multiplexed with the
     * variant (UUID bits 65 to 72) as an unsigned 8-bit integer.
     *
     * @return int The `clock_seq_hi_and_res` field value.
     */
    public function getClockSeqHiAndRes(): int;

    /**
     * Returns the low field of the clock sequence (UUID bits 73 to 80) as an
     * unsigned 8-bit integer.
     *
     * @return int The `clock_seq_low` field value.
     */
    public function getClockSeqLow(): int;

    /**
     * Returns the spatially unique node identifier (UUID bits 81 to 128) as an
     * unsigned 48-bit integer.
     *
     * For version 1, the node field consists of an IEEE 802 MAC address,
     * usually the host address. For systems with multiple MAC addresses, any
     * available one can be used. The lowest addressed octet (octet number 10)
     * contains the global/local bit and the unicast/multicast bit, and is the
     * first octet of the address transmitted on an 802.3 LAN.
     *
     * For systems with no MAC address, a randomly or pseudo-randomly generated
     * value may be used; see RFC 4122, Section 4.5. The multicast bit must be
     * set in such addresses, in order that they will never conflict with
     * addresses obtained from network cards.
     *
     * For version 3 or 5, the node field is a 48-bit value constructed from a
     * name as described in RFC 4122, Section 4.3.
     *
     * For version 4, the node field is a randomly or pseudo-randomly generated
     * 48-bit value as described in RFC 4122, Section 4.4.
     *
     * @return int The `node` field value.
     */
    public function getNode(): int;

    /**
     * Returns the 128-bit integer value of the UUID.
     *
     * @return int The integer value.
     */
    public function getIntValue(): int;

    /**
     * Returns the 32-character hexadecimal value of the UUID.
     *
     * @return string The hexadecimal value.
     */
    public function getHexValue(): string;

    /**
     * Returns the variant number associated with the UUID.
     *
     * The returned value MUST be one of the `Variant` constants.
     *
     * @return int The variant number.
     */
    public function getVariant(): int;

    /**
     * Returns the version number associated with the UUID.
     *
     * The returned value MUST be one of the `Version` constants.
     *
     * @return int
     */
    public function getVersion(): int;
}
