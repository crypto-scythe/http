<?php

declare(strict_types=1);

namespace CryptoScythe\Http;

/**
 * Class ForwardedParameters
 *
 * @see https://webconcepts.info/concepts/http-forwarded-parameter/
 * @see https://www.iana.org/assignments/http-parameters/http-parameters.xhtml#forwarded
 */
final class ForwardedParameters {
    /**
     * Forwarded parameter by
     *
     * The "by" parameter is used to disclose the interface where the request came in to the proxy server.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7239
     * @see https://datatracker.ietf.org/doc/html/rfc7239#section-5.1
     */
    public const BY = 'by';

    /**
     * Forwarded parameter for
     *
     * The "for" parameter is used to disclose information about the client that initiated the request and
     * subsequent proxies in a chain of proxies.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7239
     * @see https://datatracker.ietf.org/doc/html/rfc7239#section-5.2
     */
    public const FOR = 'for';

    /**
     * Forwarded parameter host
     *
     * The "host" parameter is used to forward the original value of the "Host" header field.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7239
     * @see https://datatracker.ietf.org/doc/html/rfc7239#section-5.3
     */
    public const HOST = 'host';

    /**
     * Forwarded parameter proto
     *
     * The "proto" parameter has the value of the used protocol type.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7239
     * @see https://datatracker.ietf.org/doc/html/rfc7239#section-5.4
     */
    public const PROTO = 'proto';
}
