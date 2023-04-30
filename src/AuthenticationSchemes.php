<?php

declare(strict_types=1);

namespace CryptoScythe\Http;

/**
 * Class AuthenticationSchemes
 *
 * @see https://webconcepts.info/concepts/http-authentication-scheme/
 * @see https://www.iana.org/assignments/http-authschemes/http-authschemes.xhtml#authschemes
 */
final class AuthenticationSchemes {
    /**
     * Authentication scheme Basic
     *
     * The Basic authentication scheme is based on the model that the client needs to authenticate itself with a
     * user-id and a password for each protection space ("realm"). The realm value is a free-form string that can
     * only be compared for equality with other realms on that server.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7617
     * @see https://datatracker.ietf.org/doc/html/rfc7617#section-2
     */
    public const BASIC = 'Basic';

    /**
     * Authentication scheme Bearer
     *
     * All challenges defined by this specification MUST use the auth-scheme value "Bearer". This scheme MUST be
     * followed by one or more auth-param values.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6750
     * @see https://datatracker.ietf.org/doc/html/rfc6750#section-3
     */
    public const BEARER = 'Bearer';

    /**
     * Authentication scheme Digest
     *
     * The Digest scheme is based on a simple challenge-response paradigm. The Digest scheme challenges using a
     * nonce value and might indicate that username hashing is supported. A valid response contains an unkeyed
     * digest of the username, the password, the given nonce value, the HTTP method, and the requested URI.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7616
     * @see https://datatracker.ietf.org/doc/html/rfc7616#section-3
     */
    public const DIGEST = 'Digest';

    /**
     * Authentication scheme HOBA
     *
     * An HTTP server that supports HOBA authentication includes the "HOBA" auth-scheme value in a WWW-Authenticate
     * header field when it wants the client to authenticate with HOBA.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7486
     * @see https://datatracker.ietf.org/doc/html/rfc7486#section-3
     */
    public const HOBA = 'HOBA';

    /**
     * Authentication scheme Mutual
     *
     * The scheme provides true mutual authentication between an HTTP client and an HTTP server, using just a simple
     * password as a credential.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8120
     * @see https://datatracker.ietf.org/doc/html/rfc8120#section-2
     */
    public const MUTUAL = 'Mutual';

    /**
     * Authentication scheme Negotiate
     *
     * Use of Kerberos is wrapped in an HTTP auth-scheme of "Negotiate".
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4559
     * @see https://datatracker.ietf.org/doc/html/rfc4559#section-4
     */
    public const NEGOTIATE = 'Negotiate';

    /**
     * Authentication scheme OAuth
     *
     * Protocol parameters can be transmitted using the HTTP "Authorization" header field as defined by RFC 2617
     * with the auth-scheme name set to "OAuth" (case insensitive). Servers MAY indicate their support for the
     * "OAuth" auth-scheme by returning the HTTP "WWW-Authenticate" response header field upon client requests for
     * protected resources.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5849
     * @see https://datatracker.ietf.org/doc/html/rfc5849#section-3.5.1
     */
    public const OAUTH = 'OAuth';

    /**
     * Authentication scheme SCRAM-SHA-1
     *
     * HTTP SCRAM is an HTTP Authentication mechanism whose client response and server challenge messages are
     * text-based messages containing one or more attribute-value pairs separated by commas. SCRAM-SHA-1 is
     * registered for database compatibility with implementations of RFC 5802 that want to also expose HTTP access
     * to a related service, but it is not recommended for new deployments.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7804
     * @see https://datatracker.ietf.org/doc/html/rfc7804#section-5
     */
    public const SCRAM_SHA_1 = 'SCRAM-SHA-1';

    /**
     * Authentication scheme SCRAM-SHA-256
     *
     * HTTP SCRAM is an HTTP Authentication mechanism whose client response and server challenge messages are
     * text-based messages containing one or more attribute-value pairs separated by commas. For interoperability,
     * all HTTP clients and servers supporting SCRAM MUST implement the SCRAM-SHA-256 authentication mechanism.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7804
     * @see https://datatracker.ietf.org/doc/html/rfc7804#section-5
     */
    public const SCRAM_SHA_256 = 'SCRAM-SHA-256';

    /**
     * Authentication scheme vapid
     *
     * This authentication scheme carries a signed JWT, plus the key that signed that JWT. This authentication
     * scheme is for origin-server authentication only. Therefore, this authentication scheme MUST NOT be used with
     * the Proxy-Authenticate or Proxy-Authorization header fields.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-webpush-vapid
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-webpush-vapid#section-3
     */
    public const VAPID = 'vapid';
}
