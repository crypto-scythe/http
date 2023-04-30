<?php

declare(strict_types=1);

namespace CryptoScythe\Http;

/**
 * Class Preferences
 *
 * @see https://webconcepts.info/concepts/http-preference/
 * @see https://www.iana.org/assignments/http-parameters/http-parameters.xhtml#preferences
 */
final class Preferences {
    /**
     * Preference depth-noroot
     *
     * The "depth-noroot" preference indicates that the client wishes for the server to exclude the target (root)
     * resource from processing by the HTTP method and only apply the HTTP method to the target resource's
     * subordinate resources.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8144
     * @see https://datatracker.ietf.org/doc/html/rfc8144#section-4
     */
    public const DEPTH_NOROOT = 'depth-noroot';

    /**
     * Preference handling
     *
     * The "handling=strict" and "handling=lenient" preferences indicate, at the server's discretion, how the client
     * wishes the server to handle potential error conditions that can arise in the processing of a request.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7240
     * @see https://datatracker.ietf.org/doc/html/rfc7240#section-4.4
     */
    public const HANDLING = 'handling';

    /**
     * Preference respond-async
     *
     * The "respond-async" preference indicates that the client prefers the server to respond asynchronously to a
     * response.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7240
     * @see https://datatracker.ietf.org/doc/html/rfc7240#section-4.1
     */
    public const RESPOND_ASYNC = 'respond-async';

    /**
     * Preference return
     *
     * The "return=representation" preference indicates that the client prefers that the server include an entity
     * representing the current state of the resource in the response to a successful request. The "return=minimal"
     * preference, on the other hand, indicates that the client wishes the server to return only a minimal response
     * to a successful request.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7240
     * @see https://datatracker.ietf.org/doc/html/rfc7240#section-4.2
     */
    public const RETURN = 'return';

    /**
     * Preference safe
     *
     * When present in a request, the safe preference indicates that the user prefers that the origin server not
     * respond with content that is designated as objectionable, according to the origin server's definition of the
     * concept.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8674
     * @see https://datatracker.ietf.org/doc/html/rfc8674#section-2
     */
    public const SAFE = 'safe';

    /**
     * Preference wait
     *
     * The "wait" preference can be used to establish an upper bound on the length of time, in seconds, the client
     * expects it will take the server to process the request once it has been received.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7240
     * @see https://datatracker.ietf.org/doc/html/rfc7240#section-4.3
     */
    public const WAIT = 'wait';
}
