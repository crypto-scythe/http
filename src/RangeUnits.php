<?php

declare(strict_types=1);

namespace CryptoScythe\Http;

/**
 * Class RangeUnits
 *
 * @see https://webconcepts.info/concepts/http-range-unit/
 * @see https://www.iana.org/assignments/http-parameters/http-parameters.xhtml#range-units
 */
final class RangeUnits {
    /**
     * Range unit bytes
     *
     * Since representation data is transferred in payloads as a sequence of octets, a byte range is a meaningful
     * substructure for any representation transferable over HTTP. The "bytes" range unit is defined for expressing
     * subranges of the data's octet sequence.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7233
     * @see https://datatracker.ietf.org/doc/html/rfc7233#section-2.1
     */
    public const BYTES = 'bytes';

    /**
     * Range unit bytes-live
     *
     * As with the "bytes" range unit, a "bytes-live" Range request allows a client to designate a subset of bytes
     * from the representation data to be transferred in payloads as a sequence of octets. But the form of a
     * "bytes-live" request is focused on accessing data that may be appended to the representation over time.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/pratt-httpbis-bytes-live-range-unit
     * @see https://datatracker.ietf.org/doc/html/draft-pratt-httpbis-bytes-live-range-unit#section-2
     */
    public const BYTES_LIVE = 'bytes-live';

    /**
     * Range unit none
     *
     * A server that does not support any kind of range request for the target resource MAY send "Accept-Ranges:
     * none" to advise the client not to attempt a range request.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7233
     * @see https://datatracker.ietf.org/doc/html/rfc7233#section-2.3
     */
    public const NONE = 'none';
}
