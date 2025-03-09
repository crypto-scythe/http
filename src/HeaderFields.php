<?php

declare(strict_types=1);

namespace CryptoScythe\Http;

/**
 * Class HeaderFields
 *
 * @see https://webconcepts.info/concepts/http-header/
 * @see https://www.iana.org/assignments/message-headers/message-headers.xhtml
 */
final class HeaderFields {
    /**
     * Header field A-IM
     *
     * The A-IM request-header field is similar to Accept, but restricts the instance-manipulations that are
     * acceptable in the response. A response may be the result of applying multiple instance-manipulations. When an
     * A-IM request-header field includes one or more delta-coding values, the request MUST contain an If-None-Match
     * header field, listing one or more entity tags from prior responses for the request-URI.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/3229
     * @see https://datatracker.ietf.org/doc/html/rfc3229#section-10.5.3
     */
    public const A_IM = 'A-IM';

    /**
     * Header field ALPN
     *
     * Clients include the ALPN header field in an HTTP CONNECT request to indicate the application-layer protocol
     * that a client intends to use within the tunnel, or a set of protocols that might be used within the tunnel.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7639
     * @see https://datatracker.ietf.org/doc/html/rfc7639#section-2
     */
    public const ALPN = 'ALPN';

    /**
     * Header field Accept
     *
     * The "Accept" header field can be used by user agents to specify response media types that are acceptable.
     * Accept header fields can be used to indicate that the request is specifically limited to a small set of
     * desired types, as in the case of a request for an in-line image.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-5.3.2
     */
    public const ACCEPT = 'Accept';

    /**
     * Header field Accept-Additions
     *
     * In HTTP, the "Accept" request-header field is used to specify media types which are acceptable for the
     * response. However, in HTCPCP, the response may result in additional actions on the part of the automated pot.
     * For this reason, HTCPCP adds a new header field, "Accept-Additions".
     *
     * @see https://webconcepts.info/specs/IETF/RFC/2324
     * @see https://datatracker.ietf.org/doc/html/rfc2324#section-2.2.2.1
     * 
     * It has been observed that some users of blended teas have an occasional preference for teas brewed as an
     * emulsion of cane sugar with hints of water. To allow for this circumstance, the Accept-Additions header field
     * defined in the base HTCPCP specification is updated to allow the following options.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7168
     * @see https://datatracker.ietf.org/doc/html/rfc7168#section-2.2.1
     */
    public const ACCEPT_ADDITIONS = 'Accept-Additions';

    /**
     * Header field Accept-CH
     *
     * The Accept-CH response header field or the equivalent HTML meta element with http-equiv attribute (HTML5)
     * indicate server support for particular hints indicated in its value.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-httpbis-client-hints
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-httpbis-client-hints#section-3.1
     */
    public const ACCEPT_CH = 'Accept-CH';

    /**
     * Header field Accept-Charset
     *
     * The "Accept-Charset" header field can be sent by a user agent to indicate what charsets are acceptable in
     * textual response content. This field allows user agents capable of understanding more comprehensive or
     * special-purpose charsets to signal that capability to an origin server that is capable of representing
     * information in those charsets.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-5.3.3
     */
    public const ACCEPT_CHARSET = 'Accept-Charset';

    /**
     * Header field Accept-Datetime
     *
     * The "Accept-Datetime" request header is transmitted by a user agent to indicate it wants to access a past
     * state of an Original Resource. To that end, the "Accept-Datetime" header is conveyed in an HTTP request
     * issued against a TimeGate for an Original Resource, and its value indicates the datetime of the desired past
     * state of the Original Resource.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7089
     * @see https://datatracker.ietf.org/doc/html/rfc7089#section-2.1.1
     */
    public const ACCEPT_DATETIME = 'Accept-Datetime';

    /**
     * Header field Accept-Encoding
     *
     * Section 5.3.4 of RFC 7231 defines "Accept-Encoding" as a request header field only. This specification
     * expands that definition to allow "Accept-Encoding" as a response header field as well. When present in a
     * response, it indicates what content codings the resource was willing to accept in the associated request. A
     * field value that only contains "identity" implies that no content codings were supported.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7694
     * @see https://datatracker.ietf.org/doc/html/rfc7694#section-3
     * 
     * The "Accept-Encoding" header field can be used by user agents to indicate what response content-codings are
     * acceptable in the response. An "identity" token is used as a synonym for "no encoding" in order to
     * communicate when no encoding is preferred.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-5.3.4
     */
    public const ACCEPT_ENCODING = 'Accept-Encoding';

    /**
     * Header field Accept-Features
     *
     * The Accept-Features request header can be used by a user agent to give information about the presence or
     * absence of certain features in the feature set of the current request. Servers can use this information when
     * running a remote variant selection algorithm.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/2295
     * @see https://datatracker.ietf.org/doc/html/rfc2295#section-8.2
     */
    public const ACCEPT_FEATURES = 'Accept-Features';

    /**
     * Header field Accept-Indefinite-Ranges
     *
     * The Accept-Indefinite-Ranges request-header field allows the client to indicate its acceptance of
     * indefinite-sized range requests for a resource.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/combs-http-indeterminate-range
     * @see https://datatracker.ietf.org/doc/html/draft-combs-http-indeterminate-range#section-2.1
     */
    public const ACCEPT_INDEFINITE_RANGES = 'Accept-Indefinite-Ranges';

    /**
     * Header field Accept-Language
     *
     * The "Accept-Language" header field can be used by user agents to indicate the set of natural languages that
     * are preferred in the response.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-5.3.5
     */
    public const ACCEPT_LANGUAGE = 'Accept-Language';

    /**
     * Header field Accept-Patch
     *
     * This specification introduces a new response header Accept-Patch used to specify the patch document formats
     * accepted by the server. Accept-Patch SHOULD appear in the OPTIONS response for any resource that supports the
     * use of the PATCH method. The presence of the Accept-Patch header in response to any method is an implicit
     * indication that PATCH is allowed on the resource identified by the Request-URI.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5789
     * @see https://datatracker.ietf.org/doc/html/rfc5789#section-3.1
     */
    public const ACCEPT_PATCH = 'Accept-Patch';

    /**
     * Header field Accept-Post
     *
     * The Accept-Post HTTP header SHOULD appear in the OPTIONS response for any resource that supports the use of
     * the POST method. The presence of the Accept-Post header in response to any method is an implicit indication
     * that POST is allowed on the resource identified by the Request-URI. The presence of a specific document
     * format in this header indicates that that specific format is allowed on POST requests to the resource
     * identified by the Request-URI.
     *
     * @see https://webconcepts.info/specs/W3C/TR/ldp
     * @see https://www.w3.org/TR/ldp/#header-accept-post
     */
    public const ACCEPT_POST = 'Accept-Post';

    /**
     * Header field Accept-Profile
     *
     * In order to allow a user agent to inform a server about its preferences regarding profiles for resource
     * representations, the "Accept-Profile" HTTP header used. A user agent can specify several profiles and use
     * quality indicators (q-values) to indicate preferences.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/svensson-profiled-representations
     * @see https://datatracker.ietf.org/doc/html/draft-svensson-profiled-representations#section-4
     */
    public const ACCEPT_PROFILE = 'Accept-Profile';

    /**
     * Header field Accept-Push-Policy
     *
     * A client can express the desired push policy for a request by sending an "Accept-Push-Policy" header field in
     * the request. The header field value contains the push policy that the client expects the server to use when
     * processing the request.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ruellan-http-accept-push-policy
     * @see https://datatracker.ietf.org/doc/html/draft-ruellan-http-accept-push-policy#section-3.1
     */
    public const ACCEPT_PUSH_POLICY = 'Accept-Push-Policy';

    /**
     * Header field Accept-Query
     *
     * The "Accept-Query" response header field MAY be used by a server to directly signal support for the QUERY
     * method while identifying the specific query format media type(s) that may be used.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-httpbis-safe-method-w-body
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-httpbis-safe-method-w-body#section-3
     */
    public const ACCEPT_QUERY = 'Accept-Query';

    /**
     * Header field Accept-Ranges
     *
     * The "Accept-Ranges" header field allows a server to indicate that it supports range requests for the target
     * resource.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7233
     * @see https://datatracker.ietf.org/doc/html/rfc7233#section-2.3
     */
    public const ACCEPT_RANGES = 'Accept-Ranges';

    /**
     * Header field Access-Control-Allow-Credentials
     *
     * The Access-Control-Allow-Credentials header indicates whether the response to request can be exposed when the
     * omit credentials flag is unset. When part of the response to a preflight request it indicates that the actual
     * request can include user credentials.
     *
     * @see https://webconcepts.info/specs/W3C/TR/cors
     * @see https://www.w3.org/TR/cors/#access-control-allow-credentials-response-header
     */
    public const ACCESS_CONTROL_ALLOW_CREDENTIALS = 'Access-Control-Allow-Credentials';

    /**
     * Header field Access-Control-Allow-Headers
     *
     * The Access-Control-Allow-Headers header indicates, as part of the response to a preflight request, which
     * header field names can be used during the actual request.
     *
     * @see https://webconcepts.info/specs/W3C/TR/cors
     * @see https://www.w3.org/TR/cors/#access-control-allow-headers-response-header
     */
    public const ACCESS_CONTROL_ALLOW_HEADERS = 'Access-Control-Allow-Headers';

    /**
     * Header field Access-Control-Allow-Methods
     *
     * The Access-Control-Allow-Methods header indicates, as part of the response to a preflight request, which
     * methods can be used during the actual request.
     *
     * @see https://webconcepts.info/specs/W3C/TR/cors
     * @see https://www.w3.org/TR/cors/#access-control-allow-methods-response-header
     */
    public const ACCESS_CONTROL_ALLOW_METHODS = 'Access-Control-Allow-Methods';

    /**
     * Header field Access-Control-Allow-Origin
     *
     * The Access-Control-Allow-Origin header indicates whether a resource can be shared based by returning the
     * value of the Origin request header, "*", or "null" in the response.
     *
     * @see https://webconcepts.info/specs/W3C/TR/cors
     * @see https://www.w3.org/TR/cors/#access-control-allow-origin-response-header
     */
    public const ACCESS_CONTROL_ALLOW_ORIGIN = 'Access-Control-Allow-Origin';

    /**
     * Header field Access-Control-Expose-Headers
     *
     * The Access-Control-Expose-Headers header indicates which headers are safe to expose to the API of a CORS API
     * specification.
     *
     * @see https://webconcepts.info/specs/W3C/TR/cors
     * @see https://www.w3.org/TR/cors/#access-control-expose-headers-response-header
     */
    public const ACCESS_CONTROL_EXPOSE_HEADERS = 'Access-Control-Expose-Headers';

    /**
     * Header field Access-Control-Max-Age
     *
     * The Access-Control-Max-Age header indicates how long the results of a preflight request can be cached in a
     * preflight result cache.
     *
     * @see https://webconcepts.info/specs/W3C/TR/cors
     * @see https://www.w3.org/TR/cors/#access-control-max-age-response-header
     */
    public const ACCESS_CONTROL_MAX_AGE = 'Access-Control-Max-Age';

    /**
     * Header field Access-Control-Request-Headers
     *
     * The Access-Control-Request-Headers header indicates which headers will be used in the actual request as part
     * of the preflight request.
     *
     * @see https://webconcepts.info/specs/W3C/TR/cors
     * @see https://www.w3.org/TR/cors/#access-control-request-headers-request-header
     */
    public const ACCESS_CONTROL_REQUEST_HEADERS = 'Access-Control-Request-Headers';

    /**
     * Header field Access-Control-Request-Method
     *
     * The Access-Control-Request-Method header indicates which method will be used in the actual request as part of
     * the preflight request.
     *
     * @see https://webconcepts.info/specs/W3C/TR/cors
     * @see https://www.w3.org/TR/cors/#access-control-request-method-request-header
     */
    public const ACCESS_CONTROL_REQUEST_METHOD = 'Access-Control-Request-Method';

    /**
     * Header field Age
     *
     * The "Age" header field conveys the sender's estimate of the amount of time since the response was generated
     * or successfully validated at the origin server.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7234
     * @see https://datatracker.ietf.org/doc/html/rfc7234#section-5.1
     */
    public const AGE = 'Age';

    /**
     * Header field Allow
     *
     * The "Allow" header field lists the set of methods advertised as supported by the target resource. The purpose
     * of this field is strictly to inform the recipient of valid request methods associated with the resource.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-7.4.1
     */
    public const ALLOW = 'Allow';

    /**
     * Header field Alt-Svc
     *
     * An HTTP(S) origin server can advertise the availability of alternative services to clients by adding an
     * Alt-Svc header field to responses.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7838
     * @see https://datatracker.ietf.org/doc/html/rfc7838#section-3
     */
    public const ALT_SVC = 'Alt-Svc';

    /**
     * Header field Alt-Used
     *
     * The Alt-Used header field is used in requests to indicate the identity of the alternative service in use,
     * just as the Host header field identifies the host and port of the origin. Alt-Used is intended to allow
     * alternative services to detect loops, differentiate traffic for purposes of load balancing, and generally to
     * ensure that it is possible to identify the intended destination of traffic, since introducing this
     * information after a protocol is in use has proven to be problematic.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7838
     * @see https://datatracker.ietf.org/doc/html/rfc7838#section-5
     */
    public const ALT_USED = 'Alt-Used';

    /**
     * Header field Alternates
     *
     * The Alternates response header is used to convey the list of variants bound to a negotiable resource. This
     * list can also include directives for any content negotiation process. If a response from a transparently
     * negotiable resource includes an Alternates header, this header MUST contain the complete variant list bound
     * to the negotiable resource. Responses from resources which do not support transparent content negotiation MAY
     * also use Alternates headers.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/2295
     * @see https://datatracker.ietf.org/doc/html/rfc2295#section-8.3
     */
    public const ALTERNATES = 'Alternates';

    /**
     * Header field Apply-To-Redirect-Ref
     *
     * The optional Apply-To-Redirect-Ref header can be used on any request to a redirect reference resource. When
     * it is present and set to "T", the request MUST be applied to the reference resource itself, and a 3xx
     * response MUST NOT be returned.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4437
     * @see https://datatracker.ietf.org/doc/html/rfc4437#section-12.2
     */
    public const APPLY_TO_REDIRECT_REF = 'Apply-To-Redirect-Ref';

    /**
     * Header field Authentication-Control
     *
     * The Authentication-Control header provides more precise control of the client behavior for Web applications
     * using an HTTP authentication protocol.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8053
     * @see https://datatracker.ietf.org/doc/html/rfc8053#section-4
     */
    public const AUTHENTICATION_CONTROL = 'Authentication-Control';

    /**
     * Header field Authentication-Info
     *
     * HTTP authentication schemes can use the Authentication-Info response header field to communicate information
     * after the client's authentication credentials have been accepted. This information can include a finalization
     * message from the server (e.g., it can contain the server authentication).
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7615
     * @see https://datatracker.ietf.org/doc/html/rfc7615#section-3
     */
    public const AUTHENTICATION_INFO = 'Authentication-Info';

    /**
     * Header field Authorization
     *
     * The client is expected to retry the request, passing an Authorization header field line with Digest scheme,
     * which is defined according to the framework above. The values of the opaque and algorithm fields must be
     * those supplied in the WWW-Authenticate response header field for the entity being requested.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7616
     * @see https://datatracker.ietf.org/doc/html/rfc7616#section-3.4
     * 
     * Protocol parameters can be transmitted using the HTTP "Authorization" header field as defined by RFC 2617
     * with the auth-scheme name set to "OAuth" (case insensitive).
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5849
     * @see https://datatracker.ietf.org/doc/html/rfc5849#section-3.5.1
     * 
     * The "Authorization" header field allows a user agent to authenticate itself with an origin server - usually,
     * but not necessarily, after receiving a 401 (Unauthorized) response. Its value consists of credentials
     * containing the authentication information of the user agent for the realm of the resource being requested.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7235
     * @see https://datatracker.ietf.org/doc/html/rfc7235#section-4.1
     */
    public const AUTHORIZATION = 'Authorization';

    /**
     * Header field C-Ext
     *
     * The C-Ext response header field is used to indicate that all hop-by-hop mandatory extension declarations in
     * the request were fulfilled.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/2774
     * @see https://datatracker.ietf.org/doc/html/rfc2774#section-4.3
     */
    public const C_EXT = 'C-Ext';

    /**
     * Header field C-Man
     *
     * A mandatory extension declaration indicates that the ultimate recipient MUST consult and adhere to the rules
     * given by the extension when processing the message or reporting an error. Hop-by-hop extension declarations
     * are meaningful only for a single HTTP connection. In HTTP/1.1, C-Man, C-Opt, and all header fields with
     * matching header-prefix values defined by C-Man and C-Opt MUST be protected by a Connection header field. That
     * is, these header fields are to be included as Connection header field directives.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/2774
     * @see https://datatracker.ietf.org/doc/html/rfc2774#section-4.2
     */
    public const C_MAN = 'C-Man';

    /**
     * Header field C-Opt
     *
     * An optional extension declaration indicates that the ultimate recipient of the extension MAY consult and
     * adhere to the rules given by the extension when processing the message, or ignore the extension declaration
     * completely. An agent may not be able to distinguish whether the ultimate recipient does not understand an
     * extension referred to by an optional extension or simply ignores the extension declaration. Hop-by-hop
     * extension declarations are meaningful only for a single HTTP connection. In HTTP/1.1, C-Man, C-Opt, and all
     * header fields with matching header-prefix values defined by C-Man and C-Opt MUST be protected by a Connection
     * header field. That is, these header fields are to be included as Connection header field directives.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/2774
     * @see https://datatracker.ietf.org/doc/html/rfc2774#section-4.2
     */
    public const C_OPT = 'C-Opt';

    /**
     * Header field C-PEP
     *
     * PEP hop-by-hop extension declarations are meaningful only for a single transport-level connection. The C-PEP
     * header field is a hop-by-hop header field and must not be communicated by proxies over further connections.
     *
     * @see https://webconcepts.info/specs/W3C/TR/WD-http-pep
     * @see https://www.w3.org/TR/WD-http-pep-971121.html#_Toc404743948
     */
    public const C_PEP = 'C-PEP';

    /**
     * Header field C-PEP-Info
     *
     * PEP hop-by-hop policies are meaningful only for a single transport-level connection. The C-PEP-Info header
     * field is a hop-by-hop header field and MUST NOT be communicated by proxies over further connections.
     *
     * @see https://webconcepts.info/specs/W3C/TR/WD-http-pep
     * @see https://www.w3.org/TR/WD-http-pep-971121.html#_Toc404743954
     */
    public const C_PEP_INFO = 'C-PEP-Info';

    /**
     * Header field CDN-Cache-Control
     *
     * The CDN-Cache-Control response header field is a targeted field that allows origin servers to control the
     * behavior of CDN caches interposed between them and clients separately from other caches that might handle the
     * response. It applies to caches that are part of a distributed network that operate on behalf of an origin
     * server (commonly called a CDN).
     *
     * @see https://webconcepts.info/specs/IETF/RFC/9213
     * @see https://datatracker.ietf.org/doc/html/rfc9213#section-3
     */
    public const CDN_CACHE_CONTROL = 'CDN-Cache-Control';

    /**
     * Header field Cache-Control
     *
     * The "Cache-Control" header field is used to specify directives for caches along the request/response chain.
     * Such cache directives are unidirectional in that the presence of a directive in a request does not imply that
     * the same directive is to be given in the response.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7234
     * @see https://datatracker.ietf.org/doc/html/rfc7234#section-5.2
     */
    public const CACHE_CONTROL = 'Cache-Control';

    /**
     * Header field Cache-NT
     *
     * For precisely identifying transferred content independent of the used URL and independent of additional
     * header fields in the context of content negotiation, the Cache-NT header field is used. The new header field
     * carries an SHA-256 value.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/drechsler-httpbis-improved-caching
     * @see https://datatracker.ietf.org/doc/html/draft-drechsler-httpbis-improved-caching#section-2.1
     */
    public const CACHE_NT = 'Cache-NT';

    /**
     * Header field Cache-Status
     *
     * The Cache-Status HTTP response header field indicates how caches have handled that response and its
     * corresponding request.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-httpbis-cache-header
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-httpbis-cache-header#section-2
     */
    public const CACHE_STATUS = 'Cache-Status';

    /**
     * Header field Cal-Managed-ID
     *
     * The Cal-Managed-ID response header field provides the value of the MANAGED-ID parameter corresponding to a
     * newly added ATTACH property. It MUST be sent only in response to a successful POST request with an action set
     * to attachment-add or attachment-update.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-calext-caldav-attachments
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-calext-caldav-attachments#section-5.1
     */
    public const CAL_MANAGED_ID = 'Cal-Managed-ID';

    /**
     * Header field Clear-Site-Data
     *
     * The Clear-Site-Data HTTP response header field sends a signal to the user agent that it ought to remove all
     * data of a certain set of types.
     *
     * @see https://webconcepts.info/specs/W3C/TR/clear-site-data
     * @see https://www.w3.org/TR/clear-site-data/#header
     */
    public const CLEAR_SITE_DATA = 'Clear-Site-Data';

    /**
     * Header field Client-Cert
     *
     * In the context of a TLS terminating reverse proxy deployment, the proxy makes the TLS client certificate
     * available to the backend application with the Client-Cert HTTP header field. This field contains the
     * end-entity certificate used by the client in the TLS handshake.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-httpbis-client-cert-field
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-httpbis-client-cert-field#section-2.2
     */
    public const CLIENT_CERT = 'Client-Cert';

    /**
     * Header field Client-Cert-Chain
     *
     * In the context of a TLS terminating reverse proxy deployment, the proxy MAY make the certificate chain used
     * for validation of the end-entity certificate available to the backend application with the Client-Cert-Chain
     * HTTP header field. This field contains certificates used by the proxy to validate the certificate used by the
     * client in the TLS handshake. These certificates might or might not have been provided by the client during
     * the TLS handshake.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-httpbis-client-cert-field
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-httpbis-client-cert-field#section-2.3
     */
    public const CLIENT_CERT_CHAIN = 'Client-Cert-Chain';

    /**
     * Header field Close
     *
     * The header field-name "Close" has been registered as "reserved", since using that name as an HTTP header
     * field might conflict with the "close" connection option of the Connection header field.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7230
     * @see https://datatracker.ietf.org/doc/html/rfc7230#section-8.1
     */
    public const CLOSE = 'Close';

    /**
     * Header field Connection
     *
     * The "Connection" header field allows the sender to indicate desired control options for the current
     * connection. In order to avoid confusing downstream recipients, a proxy or gateway MUST remove or replace any
     * received connection options before forwarding the message.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7230
     * @see https://datatracker.ietf.org/doc/html/rfc7230#section-6.1
     */
    public const CONNECTION = 'Connection';

    /**
     * Header field Content-Base
     *
     * The Content-Base entity-header field may be used to specify the base URI for resolving relative URLs within
     * the entity. This header field is described as Base in RFC 1808, which is expected to be revised.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/2068
     * @see https://datatracker.ietf.org/doc/html/rfc2068#section-14.11
     */
    public const CONTENT_BASE = 'Content-Base';

    /**
     * Header field Content-Digest
     *
     * The Content-Digest HTTP field can be used in requests and responses to communicate digests that are
     * calculated using a hashing algorithm applied to the actual message content.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/9530
     * @see https://datatracker.ietf.org/doc/html/rfc9530#section-2
     */
    public const CONTENT_DIGEST = 'Content-Digest';

    /**
     * Header field Content-Disposition
     *
     * The Content-Disposition response header field is used to convey additional information about how to process
     * the response payload, and also can be used to attach additional metadata, such as the filename to use when
     * saving the response payload locally.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6266
     * @see https://datatracker.ietf.org/doc/html/rfc6266#section-4
     */
    public const CONTENT_DISPOSITION = 'Content-Disposition';

    /**
     * Header field Content-Encoding
     *
     * The "Content-Encoding" header field indicates what content codings have been applied to the representation,
     * beyond those inherent in the media type, and thus what decoding mechanisms have to be applied in order to
     * obtain data in the media type referenced by the Content-Type header field. Content-Encoding is primarily used
     * to allow a representation's data to be compressed without losing the identity of its underlying media type.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-3.1.2.2
     */
    public const CONTENT_ENCODING = 'Content-Encoding';

    /**
     * Header field Content-Language
     *
     * The "Content-Language" header field describes the natural language(s) of the intended audience for the
     * representation. Note that this might not be equivalent to all the languages used within the representation.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-3.1.3.2
     */
    public const CONTENT_LANGUAGE = 'Content-Language';

    /**
     * Header field Content-Length
     *
     * When a message does not have a Transfer-Encoding header field, a Content-Length header field can provide the
     * anticipated size, as a decimal number of octets, for a potential payload body. For messages that do include a
     * payload body, the Content-Length field-value provides the framing information necessary for determining where
     * the body (and message) ends. For messages that do not include a payload body, the Content-Length indicates
     * the size of the selected representation (Section 3 of [Part2]).
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7230
     * @see https://datatracker.ietf.org/doc/html/rfc7230#section-3.3.2
     */
    public const CONTENT_LENGTH = 'Content-Length';

    /**
     * Header field Content-Location
     *
     * The "Content-Location" header field references a URI that can be used as an identifier for a specific
     * resource corresponding to the representation in this message's payload. In other words, if one were to
     * perform a GET request on this URI at the time of this message's generation, then a 200 (OK) response would
     * contain the same representation that is enclosed as payload in this message.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-3.1.4.2
     */
    public const CONTENT_LOCATION = 'Content-Location';

    /**
     * Header field Content-Range
     *
     * The Content-Range entity-header is sent with a partial entity-body to specify where in the full entity-body
     * the partial body should be applied.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/combs-http-indeterminate-range
     * @see https://datatracker.ietf.org/doc/html/draft-combs-http-indeterminate-range#section-2.2
     * 
     * The "Content-Range" header field is sent in a single part 206 (Partial Content) response to indicate the
     * partial range of the selected representation enclosed as the message payload, sent in each part of a
     * multipart 206 response to indicate the range enclosed within each body part, and sent in 416 (Range Not
     * Satisfiable) responses to provide information about the selected representation.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7233
     * @see https://datatracker.ietf.org/doc/html/rfc7233#section-4.2
     */
    public const CONTENT_RANGE = 'Content-Range';

    /**
     * Header field Content-Security-Policy
     *
     * The Content-Security-Policy header field is the preferred mechanism for delivering a policy.
     *
     * @see https://webconcepts.info/specs/W3C/TR/CSP2
     * @see https://www.w3.org/TR/CSP2/#content-security-policy-header-field
     * 
     * The Content-Security-Policy HTTP response header field is the preferred mechanism for delivering a policy
     * from a server to a client.
     *
     * @see https://webconcepts.info/specs/W3C/TR/CSP3
     * @see https://www.w3.org/TR/CSP3/#csp-header
     */
    public const CONTENT_SECURITY_POLICY = 'Content-Security-Policy';

    /**
     * Header field Content-Security-Policy-Pin
     *
     * The Content-Security-Policy-Pin header field is the mechanism for delivering a pinned policy that the user
     * agent MUST enforce for any resource which is not delivered with a Content-Security-Policy header (as
     * described in the "Pin a policy to response" algorithm).
     *
     * @see https://webconcepts.info/specs/W3C/TR/csp-pinning
     * @see https://www.w3.org/TR/csp-pinning/#content-security-policy-pin-header-field
     */
    public const CONTENT_SECURITY_POLICY_PIN = 'Content-Security-Policy-Pin';

    /**
     * Header field Content-Security-Policy-Report-Only
     *
     * The Content-Security-Policy-Report-Only header field lets servers experiment with policies by monitoring
     * (rather than enforcing) a policy.
     *
     * @see https://webconcepts.info/specs/W3C/TR/CSP2
     * @see https://www.w3.org/TR/CSP2/#content-security-policy-report-only-header-field
     * 
     * The Content-Security-Policy-Report-Only HTTP response header field allows web developers to experiment with
     * policies by monitoring (but not enforcing) their effects.
     *
     * @see https://webconcepts.info/specs/W3C/TR/CSP3
     * @see https://www.w3.org/TR/CSP3/#cspro-header
     */
    public const CONTENT_SECURITY_POLICY_REPORT_ONLY = 'Content-Security-Policy-Report-Only';

    /**
     * Header field Content-Security-Policy-Report-Only-Pin
     *
     * The Content-Security-Policy-Report-Only-Pin header field is the mechanism for delivering a pinned policy that
     * the user agent MUST monitor for any resource which is not delivered with a
     * Content-Security-Policy-Report-Only header (as described in the "Pin a policy to response" algorithm).
     *
     * @see https://webconcepts.info/specs/W3C/TR/csp-pinning
     * @see https://www.w3.org/TR/csp-pinning/#content-security-policy-report-only-pin-header-field
     */
    public const CONTENT_SECURITY_POLICY_REPORT_ONLY_PIN = 'Content-Security-Policy-Report-Only-Pin';

    /**
     * Header field Content-Signature
     *
     * The Content-Signature header field carries a signature of the payload body of an HTTP message. This allows
     * for content to be protected from modification.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/thomson-http-content-signature
     * @see https://datatracker.ietf.org/doc/html/draft-thomson-http-content-signature#section-2
     */
    public const CONTENT_SIGNATURE = 'Content-Signature';

    /**
     * Header field Content-Translation-Type
     *
     * The Content-Translation-Type field can be used in the individual language message parts to identify the type
     * of translation. Based on the value of this field and the user's preferences, a conforming email client can
     * determine which message part to display.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8255
     * @see https://datatracker.ietf.org/doc/html/rfc8255#section-6
     */
    public const CONTENT_TRANSLATION_TYPE = 'Content-Translation-Type';

    /**
     * Header field Content-Type
     *
     * The "Content-Type" header field indicates the media type of the associated representation: either the
     * representation enclosed in the message payload or the selected representation, as determined by the message
     * semantics. The indicated media type defines both the data format and how that data is intended to be
     * processed by a recipient, within the scope of the received message semantics, after any content codings
     * indicated by Content-Encoding are decoded.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-3.1.1.5
     */
    public const CONTENT_TYPE = 'Content-Type';

    /**
     * Header field Content-Version
     *
     * The Content-Version entity-header field defines the version tag associated with a rendition of an evolving
     * entity. Together with the Derived-From field, it allows a group of people to work simultaneously on the
     * creation of a work as an iterative process. The field should be used to allow evolution of a particular work
     * along a single path rather than derived works or renditions in different representations.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/2068
     * @see https://datatracker.ietf.org/doc/html/rfc2068#section-19.6.2.2
     */
    public const CONTENT_VERSION = 'Content-Version';

    /**
     * Header field Content-Warning
     *
     * The Content-Warning header allows to return different kinds of warning information via HTTP.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/cedik-http-warning
     * @see https://datatracker.ietf.org/doc/html/draft-cedik-http-warning#section-8.1
     */
    public const CONTENT_WARNING = 'Content-Warning';

    /**
     * Header field Cookie
     *
     * The user agent sends stored cookies to the origin server in the Cookie header.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-httpbis-rfc6265bis
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-httpbis-rfc6265bis#section-4.2
     * 
     * The user agent sends stored cookies to the origin server in the Cookie header.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6265
     * @see https://datatracker.ietf.org/doc/html/rfc6265#section-4.2
     */
    public const COOKIE = 'Cookie';

    /**
     * Header field Cookie2
     *
     * The Cookie2 request header facilitates interoperation between clients and servers that understand different
     * versions of the cookie specification.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/2965
     * @see https://datatracker.ietf.org/doc/html/rfc2965#section-3.3
     */
    public const COOKIE2 = 'Cookie2';

    /**
     * Header field DASL
     *
     * The DASL response header indicates server support for query grammars in the OPTIONS method. The value is a
     * list of URIs that indicate the types of supported grammars. Note that although the URIs can be used to
     * identify each supported search grammar, there is not necessarily a direct relationship between the URI and
     * the XML element name that can be used in XML based SEARCH requests (the element name itself is identified by
     * its namespace name (a URI reference) and the element's local name).
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5323
     * @see https://datatracker.ietf.org/doc/html/rfc5323#section-9.1.1
     */
    public const DASL = 'DASL';

    /**
     * Header field DAV
     *
     * This general-header appearing in the response indicates that the resource supports the DAV schema and
     * protocol as specified. As a request header, this header allows the client to advertise compliance with named
     * features when the server needs that information.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4918
     * @see https://datatracker.ietf.org/doc/html/rfc4918#section-10.1
     */
    public const DAV = 'DAV';

    /**
     * Header field DNT
     *
     * The DNT header field is defined as the means for expressing a user's tracking preference via HTTP.
     *
     * @see https://webconcepts.info/specs/W3C/TR/tracking-dnt
     * @see https://www.w3.org/TR/tracking-dnt/#dnt-header-field
     */
    public const DNT = 'DNT';

    /**
     * Header field Date
     *
     * The "Date" header field represents the date and time at which the message was originated, having the same
     * semantics as the Origination Date Field (orig-date) defined in Section 3.6.1 of RFC 5322.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-7.1.1.2
     */
    public const DATE = 'Date';

    /**
     * Header field Delta-Base
     *
     * The Delta-Base entity-header field is used in a delta-encoded response to specify the entity tag of the base
     * instance. A Delta-Base header field MUST be included in a response with an IM header that includes a
     * delta-coding, if the request included more than one entity tag in its If-None-Match header field. Any
     * response with an IM header that includes a delta-coding MAY include a Delta-Base header.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/3229
     * @see https://datatracker.ietf.org/doc/html/rfc3229#section-10.5.1
     */
    public const DELTA_BASE = 'Delta-Base';

    /**
     * Header field Deprecation
     *
     * The "Deprecation" HTTP response header field allows a server to communicate to a client that the
     * URI-identified resource in context of the message is deprecated. It can also provide information that the
     * resource is deprecated since which version.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-httpapi-deprecation-header
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-httpapi-deprecation-header#section-2
     */
    public const DEPRECATION = 'Deprecation';

    /**
     * Header field Depth
     *
     * The Depth request header is used with methods executed on resources that could potentially have internal
     * members to indicate whether the method is to be applied only to the resource ("Depth: 0"), to the resource
     * and its internal members only ("Depth: 1"), or the resource and all its members ("Depth: infinity").
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4918
     * @see https://datatracker.ietf.org/doc/html/rfc4918#section-10.2
     */
    public const DEPTH = 'Depth';

    /**
     * Header field Destination
     *
     * The Destination request header specifies the URI that identifies a destination resource for methods such as
     * COPY and MOVE, which take two URIs as parameters.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4918
     * @see https://datatracker.ietf.org/doc/html/rfc4918#section-10.3
     */
    public const DESTINATION = 'Destination';

    /**
     * Header field Device-Memory
     *
     * The Device Memory header field is a number that indicates the client's device memory i.e. approximate amount
     * of ram in GiB.
     *
     * @see https://webconcepts.info/specs/W3C/TR/device-memory-1
     * @see https://www.w3.org/TR/device-memory-1/#sec-device-memory-client-hint-header
     */
    public const DEVICE_MEMORY = 'Device-Memory';

    /**
     * Header field Digest
     *
     * The Digest message header field provides a message digest of the instance described by the message.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/3230
     * @see https://datatracker.ietf.org/doc/html/rfc3230#section-4.3.2
     */
    public const DIGEST = 'Digest';

    /**
     * Header field EDIINT-Features
     *
     * The EDIINT-Features header field indicates the originating user agent is capable of supporting the features
     * listed.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6017
     * @see https://datatracker.ietf.org/doc/html/rfc6017#section-3
     */
    public const EDIINT_FEATURES = 'EDIINT-Features';

    /**
     * Header field EPR
     *
     * Servers may request the protections outlined by Entry Point Regulation (EPR) by sending an EPR HTTP response
     * header field along with a response.
     *
     * @see https://webconcepts.info/specs/W3C/TR/epr
     * @see https://www.w3.org/TR/epr/#epr-header
     */
    public const EPR = 'EPR';

    /**
     * Header field ETag
     *
     * The "ETag" header field in a response provides the current entity-tag for the selected representation, as
     * determined at the conclusion of handling the request. An entity-tag is an opaque validator for
     * differentiating between multiple representations of the same resource, regardless of whether those multiple
     * representations are due to resource state changes over time, content negotiation resulting in multiple
     * representations being valid at the same time, or both.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7232
     * @see https://datatracker.ietf.org/doc/html/rfc7232#section-2.3
     */
    public const ETAG = 'ETag';

    /**
     * Header field Early-Data
     *
     * The Early-Data request header field indicates that the request has been conveyed in early data and that a
     * client understands the 425 (Too Early) status code.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8470
     * @see https://datatracker.ietf.org/doc/html/rfc8470#section-5.1
     */
    public const EARLY_DATA = 'Early-Data';

    /**
     * Header field Expect
     *
     * The "Expect" header field in a request indicates a certain set of behaviors (expectations) that need to be
     * supported by the server in order to properly handle this request.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-5.1.1
     */
    public const EXPECT = 'Expect';

    /**
     * Header field Expect-CT
     *
     * The Expect-CT response header field is a new field defined in this specification. It is used by a server to
     * indicate that UAs should evaluate connections to the host emitting the header field for CT compliance.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/9163
     * @see https://datatracker.ietf.org/doc/html/rfc9239#section-2.1
     */
    public const EXPECT_CT = 'Expect-CT';

    /**
     * Header field Expires
     *
     * The "Expires" header field gives the date/time after which the response is considered stale. The presence of
     * an Expires field does not imply that the original resource will change or cease to exist at, before, or after
     * that time.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7234
     * @see https://datatracker.ietf.org/doc/html/rfc7234#section-5.3
     */
    public const EXPIRES = 'Expires';

    /**
     * Header field Ext
     *
     * The Ext header field is used to indicate that all end-to-end mandatory extension declarations in the request
     * were fulfilled.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/2774
     * @see https://datatracker.ietf.org/doc/html/rfc2774#section-4.3
     */
    public const EXT = 'Ext';

    /**
     * Header field Feature-Policy
     *
     * The Feature-Policy HTTP header field can be used in the response (server to client) to communicate the
     * feature policy that should be enforced by the client.
     *
     * @see https://webconcepts.info/specs/W3C/TR/feature-policy-1
     * @see https://www.w3.org/TR/feature-policy-1/#feature-policy-http-header-field
     */
    public const FEATURE_POLICY = 'Feature-Policy';

    /**
     * Header field Forwarded
     *
     * The "Forwarded" HTTP header field is an OPTIONAL header field that, when used, contains a list of
     * parameter-identifier pairs that disclose information that is altered or lost when a proxy is involved in the
     * path of the request.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7239
     * @see https://datatracker.ietf.org/doc/html/rfc7239#section-4
     */
    public const FORWARDED = 'Forwarded';

    /**
     * Header field From
     *
     * The "From" header field contains an Internet email address for a human user who controls the requesting user
     * agent.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-5.5.1
     */
    public const FROM = 'From';

    /**
     * Header field GET-Location
     *
     * The GET-Location entity header identifies a substitute resource that can be used in subsequent requests for
     * the same information, but using the GET method.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/reschke-http-get-location
     * @see https://datatracker.ietf.org/doc/html/draft-reschke-http-get-location#section-3
     */
    public const GET_LOCATION = 'GET-Location';

    /**
     * Header field HTTP2-Settings
     *
     * A request that upgrades from HTTP/1.1 to HTTP/2 MUST include exactly one "HTTP2-Settings" header field. The
     * "HTTP2-Settings" header field is a connection-specific header field that includes parameters that govern the
     * HTTP/2 connection, provided in anticipation of the server accepting the request to upgrade.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7540
     * @see https://datatracker.ietf.org/doc/html/rfc7540#section-3.2.1
     */
    public const HTTP2_SETTINGS = 'HTTP2-Settings';

    /**
     * Header field Hobareg
     *
     * The server MUST add a header field to the response message when the registration has succeeded in order to
     * indicate the new state. The header to be used is "Hobareg", and the value when registration has succeeded is
     * to be "regok". When registration is in an intermediate state (e.g., on an HTTP response for an interstitial
     * page), the server MAY add this header with a value of "reginwork".
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7486
     * @see https://datatracker.ietf.org/doc/html/rfc7486#section-6.1.1
     */
    public const HOBAREG = 'Hobareg';

    /**
     * Header field Host
     *
     * The "Host" header field in a request provides the host and port information from the target URI, enabling the
     * origin server to distinguish among resources while servicing requests for multiple host names on a single IP
     * address.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7230
     * @see https://datatracker.ietf.org/doc/html/rfc7230#section-5.4
     */
    public const HOST = 'Host';

    /**
     * Header field IM
     *
     * The IM response-header field is used to indicate the instance-manipulations, if any, that have been applied
     * to the instance represented by the response. Typical instance manipulations include delta encoding and
     * compression.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/3229
     * @see https://datatracker.ietf.org/doc/html/rfc3229#section-10.5.2
     */
    public const IM = 'IM';

    /**
     * Header field Idempotency-Key
     *
     * An idempotency key is a unique value generated by the client which the resource server uses to recognize
     * subsequent retries of the same request. The "Idempotency-Key" HTTP request header field carries this key.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-httpapi-idempotency-key-header
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-httpapi-idempotency-key-header-00#section-2
     */
    public const IDEMPOTENCY_KEY = 'Idempotency-Key';

    /**
     * Header field If
     *
     * The If request header is intended to have similar functionality to the If-Match header defined in Section
     * 14.24 of RFC 2616. However, the If header handles any state token as well as ETags. A typical example of a
     * state token is a lock token, and lock tokens are the only state tokens defined in this specification.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4918
     * @see https://datatracker.ietf.org/doc/html/rfc4918#section-10.4
     */
    public const IF = 'If';

    /**
     * Header field If-Match
     *
     * The "If-Match" header field makes the request method conditional on the recipient origin server either having
     * at least one current representation of the target resource, when the field-value is "*", or having a current
     * representation of the target resource that has an entity-tag matching a member of the list of entity-tags
     * provided in the field-value.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7232
     * @see https://datatracker.ietf.org/doc/html/rfc7232#section-3.1
     */
    public const IF_MATCH = 'If-Match';

    /**
     * Header field If-Modified-Since
     *
     * The "If-Modified-Since" header field makes a GET or HEAD request method conditional on the selected
     * representation's modification date being more recent than the date provided in the field-value. Transfer of
     * the selected representation's data is avoided if that data has not changed.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7232
     * @see https://datatracker.ietf.org/doc/html/rfc7232#section-3.3
     */
    public const IF_MODIFIED_SINCE = 'If-Modified-Since';

    /**
     * Header field If-None-Match
     *
     * The "If-None-Match" header field makes the request method conditional on a recipient cache or origin server
     * either not having any current representation of the target resource, when the field-value is "*", or having a
     * selected representation with an entity-tag that does not match any of those listed in the field-value.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7232
     * @see https://datatracker.ietf.org/doc/html/rfc7232#section-3.2
     */
    public const IF_NONE_MATCH = 'If-None-Match';

    /**
     * Header field If-Range
     *
     * If a client has a partial copy of a representation and wishes to have an up-to-date copy of the entire
     * representation, it could use the Range header field with a conditional GET (using either or both of
     * If-Unmodified-Since and If-Match.)  However, if the precondition fails because the representation has been
     * modified, the client would then have to make a second request to obtain the entire current representation.
     * The "If-Range" header field allows a client to "short-circuit" the second request. Informally, its meaning
     * is: if the representation is unchanged, send me the part(s) that I am requesting in Range; otherwise, send me
     * the entire representation.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7233
     * @see https://datatracker.ietf.org/doc/html/rfc7233#section-3.2
     */
    public const IF_RANGE = 'If-Range';

    /**
     * Header field If-Schedule-Tag-Match
     *
     * The If-Schedule-Tag-Match request header field is used with a method to make it conditional. Clients can set
     * this header to the value returned in the Schedule-Tag response header, or the CALDAV:schedule-tag property,
     * of a scheduling object resource previously retrieved from the server to avoid overwriting "consequential"
     * changes to the scheduling object resource.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6638
     * @see https://datatracker.ietf.org/doc/html/rfc6638#section-8.3
     */
    public const IF_SCHEDULE_TAG_MATCH = 'If-Schedule-Tag-Match';

    /**
     * Header field If-Unmodified-Since
     *
     * The "If-Unmodified-Since" header field makes the request method conditional on the selected representation's
     * last modification date being earlier than or equal to the date provided in the field-value. This field
     * accomplishes the same purpose as If-Match for cases where the user agent does not have an entity-tag for the
     * representation.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7232
     * @see https://datatracker.ietf.org/doc/html/rfc7232#section-3.4
     */
    public const IF_UNMODIFIED_SINCE = 'If-Unmodified-Since';

    /**
     * Header field Include-Referred-Token-Binding-ID
     *
     * When a Token Consumer redirects the client to a Token Provider as a means to deliver the token request, it
     * SHOULD include an Include-Referred-Token-Binding-ID HTTP response header field in its HTTP response.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8473
     * @see https://datatracker.ietf.org/doc/html/rfc8473#section-5.3
     */
    public const INCLUDE_REFERRED_TOKEN_BINDING_ID = 'Include-Referred-Token-Binding-ID';

    /**
     * Header field Key
     *
     * The "Key" response header field describes the request attributes that the server has used to select the
     * current representation. As such, its semantics are similar to the "Vary" response header field, but it allows
     * more fine-grained description, using "key modifiers".
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-httpbis-key
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-httpbis-key#section-2
     */
    public const KEY = 'Key';

    /**
     * Header field Label
     *
     * For certain methods (e.g. GET, PROPFIND), if the request-URL identifies a version-controlled resource, a
     * label can be specified in a Label request header to cause the method to be applied to the version selected by
     * that label from the version history of that version-controlled resource.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/3253
     * @see https://datatracker.ietf.org/doc/html/rfc3253#section-8.3
     */
    public const LABEL = 'Label';

    /**
     * Header field Last-Event-ID
     *
     * The Last-Event-ID HTTP header specifies the value of the event source's last event ID string, encoded as
     * UTF-8.
     *
     * @see https://webconcepts.info/specs/W3C/TR/eventsource
     * @see https://www.w3.org/TR/eventsource/#last-event-id
     */
    public const LAST_EVENT_ID = 'Last-Event-ID';

    /**
     * Header field Last-Modified
     *
     * The "Last-Modified" header field in a response provides a timestamp indicating the date and time at which the
     * origin server believes the selected representation was last modified, as determined at the conclusion of
     * handling the request.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7232
     * @see https://datatracker.ietf.org/doc/html/rfc7232#section-2.2
     */
    public const LAST_MODIFIED = 'Last-Modified';

    /**
     * Header field Link
     *
     * The Link header field provides a means for serialising one or more links into HTTP headers.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8288
     * @see https://datatracker.ietf.org/doc/html/rfc8288#section-3
     */
    public const LINK = 'Link';

    /**
     * Header field Link-Template
     *
     * The Link-Template header field is a Structured Field that serializes one or more links into HTTP message
     * metadata. It is semantically equivalent to the Link header field defined in Section 3 of Web Linking, except
     * that the link target and link anchor can contain URI Templates.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/9652
     * @see https://datatracker.ietf.org/doc/html/rfc9652#name-the-link-template-header-fi
     */
    public const LINK_TEMPLATE = 'Link-Template';

    /**
     * Header field Location
     *
     * The "Location" header field is used in some responses to refer to a specific resource in relation to the
     * response. The type of relationship is defined by the combination of request method and status code semantics.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-7.1.2
     */
    public const LOCATION = 'Location';

    /**
     * Header field Lock-Token
     *
     * The Lock-Token request header is used with the UNLOCK method to identify the lock to be removed.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4918
     * @see https://datatracker.ietf.org/doc/html/rfc4918#section-10.5
     */
    public const LOCK_TOKEN = 'Lock-Token';

    /**
     * Header field MIME-Version
     *
     * HTTP is not a MIME-compliant protocol. However, messages can include a single MIME-Version header field to
     * indicate what version of the MIME protocol was used to construct the message. Use of the MIME-Version header
     * field indicates that the message is in full conformance with the MIME protocol (as defined in RFC 2045).
     * Senders are responsible for ensuring full conformance (where possible) when exporting HTTP messages to strict
     * MIME environments.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#appendix-A.1
     */
    public const MIME_VERSION = 'MIME-Version';

    /**
     * Header field Man
     *
     * A mandatory extension declaration indicates that the ultimate recipient MUST consult and adhere to the rules
     * given by the extension when processing the message or reporting an error.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/2774
     * @see https://datatracker.ietf.org/doc/html/rfc2774#section-4.1
     */
    public const MAN = 'Man';

    /**
     * Header field Max-Forwards
     *
     * The "Max-Forwards" header field provides a mechanism with the TRACE and OPTIONS request methods to limit the
     * number of times that the request is forwarded by proxies.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-5.1.2
     */
    public const MAX_FORWARDS = 'Max-Forwards';

    /**
     * Header field Memento-Datetime
     *
     * The "Memento-Datetime" response header is used by a server to indicate that a response reflects a prior state
     * of an Original Resource. Its value expresses the datetime of that state.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7089
     * @see https://datatracker.ietf.org/doc/html/rfc7089#section-2.1.1
     */
    public const MEMENTO_DATETIME = 'Memento-Datetime';

    /**
     * Header field NEL
     *
     * The NEL response header is used to communicate an origin's NEL policy to the user agent. The header's value
     * is interpreted as an array of JSON objects. Each object in the array defines an NEL policy for the origin.
     *
     * @see https://webconcepts.info/specs/W3C/TR/network-error-logging-1
     * @see https://www.w3.org/TR/network-error-logging-1/#nel-response-header
     */
    public const NEL = 'NEL';

    /**
     * Header field Negotiate
     *
     * The Negotiate request header can contain directives for any content negotiation process initiated by the
     * request.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/2295
     * @see https://datatracker.ietf.org/doc/html/rfc2295#section-8.4
     */
    public const NEGOTIATE = 'Negotiate';

    /**
     * Header field Nice
     *
     * The "Nice" header field indicates that a request is less important than a request that doesn't bear this
     * header.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/thomson-http-nice
     * @see https://datatracker.ietf.org/doc/html/draft-thomson-http-nice#section-2
     */
    public const NICE = 'Nice';

    /**
     * Header field OData-EntityId
     *
     * A response to a create or upsert operation that returns 204 No Content MUST include an OData-EntityId
     * response header. The value of the header is the entity-id of the entity that was acted on by the request.
     *
     * @see https://webconcepts.info/specs/OASIS/standard/odata-v4.0-part1-protocol
     * @see https://docs.oasis-open.org/odata/odata/v4.0/errata03/os/complete/part1-protocol/odata-v4.0-errata03-os-part1-protocol-complete.html#_Toc453752238
     */
    public const ODATA_ENTITYID = 'OData-EntityId';

    /**
     * Header field OData-Isolation
     *
     * The OData-Isolation header specifies the isolation of the current request from external changes. The only
     * supported value for this header is snapshot.
     *
     * @see https://webconcepts.info/specs/OASIS/standard/odata-v4.0-part1-protocol
     * @see https://docs.oasis-open.org/odata/odata/v4.0/errata03/os/complete/part1-protocol/odata-v4.0-errata03-os-part1-protocol-complete.html#_Toc453752232
     */
    public const ODATA_ISOLATION = 'OData-Isolation';

    /**
     * Header field OData-MaxVersion
     *
     * Clients SHOULD specify an OData-MaxVersion request header. If specified the service MUST generate a response
     * with an OData-Version less than or equal to the specified OData-MaxVersion.
     *
     * @see https://webconcepts.info/specs/OASIS/standard/odata-v4.0-part1-protocol
     * @see https://docs.oasis-open.org/odata/odata/v4.0/errata03/os/complete/part1-protocol/odata-v4.0-errata03-os-part1-protocol-complete.html#_Toc453752233
     */
    public const ODATA_MAXVERSION = 'OData-MaxVersion';

    /**
     * Header field OSCORE
     *
     * The HTTP OSCORE header field (see Section 13.4) is used for carrying the content of the CoAP OSCORE option
     * when transporting OSCORE messages over HTTP hops.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8613
     * @see https://datatracker.ietf.org/doc/html/rfc8613#section-11.1
     */
    public const OSCORE = 'OSCORE';

    /**
     * Header field Opt
     *
     * An optional extension declaration indicates that the ultimate recipient of the extension MAY consult and
     * adhere to the rules given by the extension when processing the message, or ignore the extension declaration
     * completely. An agent may not be able to distinguish whether the ultimate recipient does not understand an
     * extension referred to by an optional extension or simply ignores the extension declaration.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/2774
     * @see https://datatracker.ietf.org/doc/html/rfc2774#section-4.1
     */
    public const OPT = 'Opt';

    /**
     * Header field Optional-WWW-Authenticate
     *
     * The Optional-WWW-Authenticate header enables a non-mandatory authentication, which is not possible under the
     * current HTTP authentication mechanism.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8053
     * @see https://datatracker.ietf.org/doc/html/rfc8053#section-3
     */
    public const OPTIONAL_WWW_AUTHENTICATE = 'Optional-WWW-Authenticate';

    /**
     * Header field Ordering-Type
     *
     * When a collection is created, the client MAY request that it be ordered and specify the semantics of the
     * ordering by using the new Ordering-Type header with a MKCOL request. For collections that are ordered, the
     * client SHOULD identify the semantics of the ordering with a URI in the Ordering-Type header, although the
     * client MAY simply set the header value to DAV:custom to indicate that the collection is ordered but the
     * semantics of the ordering are not being advertised.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/3648
     * @see https://datatracker.ietf.org/doc/html/rfc3648#section-5.1
     */
    public const ORDERING_TYPE = 'Ordering-Type';

    /**
     * Header field Origin
     *
     * The Origin header indicates where the cross-origin request or preflight request originates from.
     *
     * @see https://webconcepts.info/specs/W3C/TR/cors
     * @see https://www.w3.org/TR/cors/#origin-request-header
     */
    public const ORIGIN = 'Origin';

    /**
     * Header field Origin-Cookie
     *
     * The user agent includes stored cookies whose "origin-flag" is set in the "Origin-Cookie" request header. When
     * the user agent generates an HTTP request, it MUST NOT attach more than one "Origin-Cookie" header field.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/west-origin-cookies
     * @see https://datatracker.ietf.org/doc/html/draft-west-origin-cookies#section-4.4
     */
    public const ORIGIN_COOKIE = 'Origin-Cookie';

    /**
     * Header field Overwrite
     *
     * The Overwrite request header specifies whether the server should overwrite a resource mapped to the
     * destination URL during a COPY or MOVE.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4918
     * @see https://datatracker.ietf.org/doc/html/rfc4918#section-10.6
     */
    public const OVERWRITE = 'Overwrite';

    /**
     * Header field P3P
     *
     * Any document retrieved by HTTP may point to a policy reference file through the use of a new response header,
     * the P3P header. If a site is using P3P headers, it SHOULD include this on responses for all appropriate
     * request methods, including HEAD and OPTIONS requests. The P3P header gives one or more comma-separated
     * directives.
     *
     * @see https://webconcepts.info/specs/W3C/TR/P3P
     * @see https://www.w3.org/TR/P3P/#syntax_ext
     */
    public const P3P = 'P3P';

    /**
     * Header field PEP
     *
     * PEP end-to-end declarations must be transmitted to the ultimate recipient of the declaration. The PEP header
     * field is an end-to-end header field.
     *
     * @see https://webconcepts.info/specs/W3C/TR/WD-http-pep
     * @see https://www.w3.org/TR/WD-http-pep-971121.html#_Toc404743947
     */
    public const PEP = 'PEP';

    /**
     * Header field PEP-Info
     *
     * PEP end-to-end policies MUST be transmitted to the ultimate recipient of a message.
     *
     * @see https://webconcepts.info/specs/W3C/TR/WD-http-pep
     * @see https://www.w3.org/TR/WD-http-pep-971121.html#_Toc404743953
     */
    public const PEP_INFO = 'PEP-Info';

    /**
     * Header field POE
     *
     * The POE HTTP header is a request-header field whose field-value indicates the version of POE that a client
     * supports.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/nottingham-http-poe
     * @see https://datatracker.ietf.org/doc/html/draft-nottingham-http-poe-00#section-4
     */
    public const POE = 'POE';

    /**
     * Header field POE-Links
     *
     * The POE-Links HTTP header is an entity-header field whose field-value is a comma-separated list of quoted
     * URI-references (without fragment identifiers) that the origin server asserts to be POE resources. The
     * contents of the POE-Links response header SHOULD correspond to links found in the content of the response
     * body.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/nottingham-http-poe
     * @see https://datatracker.ietf.org/doc/html/draft-nottingham-http-poe-00#section-3
     */
    public const POE_LINKS = 'POE-Links';

    /**
     * Header field Position
     *
     * When a new member is added to a collection with a client-maintained ordering (for example, with PUT, COPY, or
     * MKCOL), its position in the ordering can be set with the new Position header. The Position header allows the
     * client to specify that an internal member URI should be first in the collection's ordering, last in the
     * collection's ordering, immediately before some other internal member URI in the collection's ordering, or
     * immediately after some other internal member URI in the collection's ordering.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/3648
     * @see https://datatracker.ietf.org/doc/html/rfc3648#section-6.1
     */
    public const POSITION = 'Position';

    /**
     * Header field Pragma
     *
     * The "Pragma" header field allows backwards compatibility with HTTP/1.0 caches, so that clients can specify a
     * "no-cache" request that they will understand (as Cache-Control was not defined until HTTP/1.1). When the
     * Cache-Control header field is also present and understood in a request, Pragma is ignored.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7234
     * @see https://datatracker.ietf.org/doc/html/rfc7234#section-5.4
     */
    public const PRAGMA = 'Pragma';

    /**
     * Header field Prefer
     *
     * The Prefer request header field is used to indicate that particular server behaviors are preferred by the
     * client, but not required for successful completion of the request. Prefer is similar in nature to the Expect
     * header field with the exception that servers are allowed to ignore stated preferences.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7240
     * @see https://datatracker.ietf.org/doc/html/rfc7240#section-2
     */
    public const PREFER = 'Prefer';

    /**
     * Header field Prefer-Push
     *
     * "Prefer-Push" is an HTTP header field that a client may use to request that a server uses HTTP/2 Push to send
     * related resources as identified by their link relationships.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/pot-prefer-push
     * @see https://datatracker.ietf.org/doc/html/draft-pot-prefer-push#section-3
     */
    public const PREFER_PUSH = 'Prefer-Push';

    /**
     * Header field Preference-Applied
     *
     * The Preference-Applied response header MAY be included within a response message as an indication as to which
     * Prefer tokens were honored by the server and applied to the processing of a request.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7240
     * @see https://datatracker.ietf.org/doc/html/rfc7240#section-3
     */
    public const PREFERENCE_APPLIED = 'Preference-Applied';

    /**
     * Header field Priority
     *
     * The Priority HTTP header field can appear in requests and responses. A client uses it to specify the priority
     * of the response. A server uses it to inform the client that the priority was overwritten. An intermediary can
     * use the Priority information from client requests and server responses to correct or amend the precedence to
     * suit it. The Priority header field is an end-to-end signal of the request priority from the client or the
     * response priority from the server.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-httpbis-priority
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-httpbis-priority#section-5
     */
    public const PRIORITY = 'Priority';

    /**
     * Header field Proxy-Authenticate
     *
     * The "Proxy-Authenticate" header field consists of at least one challenge that indicates the authentication
     * scheme(s) and parameters applicable to the proxy for this effective request URI. It MUST be included as part
     * of a 407 (Proxy Authentication Required) response.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7235
     * @see https://datatracker.ietf.org/doc/html/rfc7235#section-4.2
     */
    public const PROXY_AUTHENTICATE = 'Proxy-Authenticate';

    /**
     * Header field Proxy-Authentication-Info
     *
     * The Proxy-Authentication-Info response header field is equivalent to Authentication-Info, except that it
     * applies to proxy authentication. However, unlike Authentication-Info, the Proxy-Authentication-Info header
     * field applies only to the next outbound client on the response chain. This is because only the client that
     * chose a given proxy is likely to have the credentials necessary for authentication.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7615
     * @see https://datatracker.ietf.org/doc/html/rfc7615#section-4
     */
    public const PROXY_AUTHENTICATION_INFO = 'Proxy-Authentication-Info';

    /**
     * Header field Proxy-Authorization
     *
     * The "Proxy-Authorization" header field allows the client to identify itself (or its user) to a proxy that
     * requires authentication. Its value consists of credentials containing the authentication information of the
     * client for the proxy and/or realm of the resource being requested.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7235
     * @see https://datatracker.ietf.org/doc/html/rfc7235#section-4.3
     */
    public const PROXY_AUTHORIZATION = 'Proxy-Authorization';

    /**
     * Header field Proxy-Features
     *
     * The proxy features header is used by a proxy sending data to a server. It specifies the features supported by
     * the specified proxy.
     *
     * @see https://webconcepts.info/specs/W3C/TR/WD-proxy
     * @see https://www.w3.org/TR/WD-proxy
     */
    public const PROXY_FEATURES = 'Proxy-Features';

    /**
     * Header field Proxy-Instruction
     *
     * The proxy instruction header is used to reply to a proxy features header. It should only be present when a
     * Proxy-Features header was present in the corresponding request.
     *
     * @see https://webconcepts.info/specs/W3C/TR/WD-proxy
     * @see https://www.w3.org/TR/WD-proxy
     */
    public const PROXY_INSTRUCTION = 'Proxy-Instruction';

    /**
     * Header field Proxy-Status
     *
     * The Proxy-Status HTTP response field allows an intermediary to convey additional information about its
     * handling of a response and its associated request.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/9209
     * @see https://datatracker.ietf.org/doc/html/rfc9209#section-2
     */
    public const PROXY_STATUS = 'Proxy-Status';

    /**
     * Header field Public
     *
     * The Public response-header field lists the set of methods supported by the server. The purpose of this field
     * is strictly to inform the recipient of the capabilities of the server regarding unusual methods. The methods
     * listed may or may not be applicable to the Request-URI; the Allow header field MAY be used to indicate
     * methods allowed for a particular URI.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/2068
     * @see https://datatracker.ietf.org/doc/html/rfc2068#section-14.35
     */
    public const PUBLIC = 'Public';

    /**
     * Header field Public-Key-Pins
     *
     * Whenever a UA receives a Valid Pinning Header, it MUST set its Pinning Metadata to the exact Pins, Effective
     * Expiration Date (computed from max-age), and (if any) report-uri given in the most recently received Valid
     * Pinning Header.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7469
     * @see https://datatracker.ietf.org/doc/html/rfc7469#section-2.5
     */
    public const PUBLIC_KEY_PINS = 'Public-Key-Pins';

    /**
     * Header field Public-Key-Pins-Report-Only
     *
     * Upon receipt of a Public-Key-Pins-Report-Only response header field, the UA should evaluate the policy
     * expressed in the field, and SHOULD generate and send a report. However, failure to validate the Pins in the
     * field MUST have no effect on the validity or non-validity of the policy expressed in the PKP field or in
     * previously noted Pins for the Known Pinned Host.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7469
     * @see https://datatracker.ietf.org/doc/html/rfc7469#section-2.5
     */
    public const PUBLIC_KEY_PINS_REPORT_ONLY = 'Public-Key-Pins-Report-Only';

    /**
     * Header field Push-Policy
     *
     * A server can indicate to a client the push policy it used when processing a request by sending a
     * "Push-Policy" header field in the corresponding response.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ruellan-http-accept-push-policy
     * @see https://datatracker.ietf.org/doc/html/draft-ruellan-http-accept-push-policy#section-3.2
     */
    public const PUSH_POLICY = 'Push-Policy';

    /**
     * Header field Range
     *
     * The "Range" header field on a GET request modifies the method semantics to request transfer of only one or
     * more subranges of the selected representation data, rather than the entire selected representation data.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7233
     * @see https://datatracker.ietf.org/doc/html/rfc7233#section-3.1
     */
    public const RANGE = 'Range';

    /**
     * Header field RateLimit-Limit
     *
     * The RateLimit-Limit response header field indicates the maximum number of requests that the server allocated
     * to the client in the current time-window.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-httpapi-ratelimit-headers
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-httpapi-ratelimit-headers#section-3.1
     */
    public const RATELIMIT_LIMIT = 'RateLimit-Limit';

    /**
     * Header field RateLimit-Remaining
     *
     * The RateLimit-Remaining response header field indicates the number of requests left for the client until the
     * quota resets.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-httpapi-ratelimit-headers
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-httpapi-ratelimit-headers#section-3.2
     */
    public const RATELIMIT_REMAINING = 'RateLimit-Remaining';

    /**
     * Header field RateLimit-Reset
     *
     * The RateLimit-Reset response header field indicates either the number of seconds until the quota resets, or
     * the timestamp when the quota resets.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-httpapi-ratelimit-headers
     * @see https://datatracker.ietf.org/doc/html/draft-polli-ratelimit-headers#section-3.3
     */
    public const RATELIMIT_RESET = 'RateLimit-Reset';

    /**
     * Header field Redirect-Ref
     *
     * The Redirect-Ref header is used in all 3xx responses from redirect reference resources. The value is the link
     * target as specified during redirect reference resource creation.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4437
     * @see https://datatracker.ietf.org/doc/html/rfc4437#section-12.1
     */
    public const REDIRECT_REF = 'Redirect-Ref';

    /**
     * Header field Referer
     *
     * The "Referer" header field allows the user agent to specify a URI reference for the resource from which the
     * target URI was obtained (i.e., the "referrer", though the field name is misspelled).
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-5.5.2
     */
    public const REFERER = 'Referer';

    /**
     * Header field Repeatability-Client-ID
     *
     * Repeatability-Client-ID is an optional header that MAY be provided by the client. Repeatability-Client-ID is
     * an opaque string representing a client-generated, globally unique for all time, identifier for the instance
     * of the client application that issued the request.
     *
     * @see https://webconcepts.info/specs/OASIS/standard/repeatable-requests-v1.0
     * @see https://docs.oasis-open.org/odata/repeatable-requests/v1.0/cs01/repeatable-requests-v1.0-cs01.html#sec_RepeatabilityClientID
     */
    public const REPEATABILITY_CLIENT_ID = 'Repeatability-Client-ID';

    /**
     * Header field Repeatability-First-Sent
     *
     * Repeatability-First-Sent MUST be sent by clients to specify that a request is repeatable.
     * Repeatability-First-Sent is used to specify the date and time at which the request was first created.
     *
     * @see https://webconcepts.info/specs/OASIS/standard/repeatable-requests-v1.0
     * @see https://docs.oasis-open.org/odata/repeatable-requests/v1.0/cs01/repeatable-requests-v1.0-cs01.html#sec_RepeatabilityFirstSent
     */
    public const REPEATABILITY_FIRST_SENT = 'Repeatability-First-Sent';

    /**
     * Header field Repeatability-Request-ID
     *
     * Repeatability-Request-ID MUST be sent by clients to specify that a request is repeatable. The value of the
     * Repeatability-Request-ID is an opaque string representing a client-generated, globally unique for all time,
     * identifier for the request.
     *
     * @see https://webconcepts.info/specs/OASIS/standard/repeatable-requests-v1.0
     * @see https://docs.oasis-open.org/odata/repeatable-requests/v1.0/cs01/repeatable-requests-v1.0-cs01.html#sec_RepeatabilityRequestID
     */
    public const REPEATABILITY_REQUEST_ID = 'Repeatability-Request-ID';

    /**
     * Header field Repeatability-Result
     *
     * Servers aware of repeatability MUST return the Repeatability-Result response header in the result of a
     * repeatable request with one of the case-insensitive values accepted or rejected.
     *
     * @see https://webconcepts.info/specs/OASIS/standard/repeatable-requests-v1.0
     * @see https://docs.oasis-open.org/odata/repeatable-requests/v1.0/cs01/repeatable-requests-v1.0-cs01.html#sec_RepeatabilityResult
     */
    public const REPEATABILITY_RESULT = 'Repeatability-Result';

    /**
     * Header field Report-To
     *
     * The Report-To HTTP response header field instructs the user agent to store reporting endpoints for an origin.
     *
     * @see https://webconcepts.info/specs/W3C/TR/reporting-1
     * @see https://www.w3.org/TR/reporting-1/#header
     */
    public const REPORT_TO = 'Report-To';

    /**
     * Header field Repr-Digest
     *
     * The Repr-Digest HTTP field can be used in requests and responses to communicate digests that are calculated
     * using a hashing algorithm applied to the entire selected representation data.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/9530
     * @see https://datatracker.ietf.org/doc/html/rfc9530#section-3
     */
    public const REPR_DIGEST = 'Repr-Digest';

    /**
     * Header field Retry-After
     *
     * Servers send the "Retry-After" header field to indicate how long the user agent ought to wait before making a
     * follow-up request. When sent with a 503 (Service Unavailable) response, Retry-After indicates how long the
     * service is expected to be unavailable to the client. When sent with any 3xx (Redirection) response,
     * Retry-After indicates the minimum time that the user agent is asked to wait before issuing the redirected
     * request.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-7.1.3
     */
    public const RETRY_AFTER = 'Retry-After';

    /**
     * Header field SOAPAction
     *
     * The SOAPAction HTTP request header field can be used to indicate the intent of the SOAP HTTP request. The
     * value is a URI identifying the intent. SOAP places no restrictions on the format or specificity of the URI or
     * that it is resolvable. An HTTP client MUST use this header field when issuing a SOAP HTTP Request.
     *
     * @see https://webconcepts.info/specs/W3C/TR/SOAP
     * @see https://www.w3.org/TR/2000/NOTE-SOAP-20000508/#_Toc478383528
     */
    public const SOAPACTION = 'SOAPAction';

    /**
     * Header field Safe
     *
     * The Safe response header field is used by origin servers to indicate whether repeating the received HTTP
     * request is safe in the sense of Section 9.1.1 (Safe Methods) of the HTTP/1.1 specification. For the purpose
     * of this specification, a HTTP request is considered to be a repetition of a previous request if both requests
     * are issued by the same user agent, and apply to the same resource, and have the same request method, and both
     * have no request body, or both have request bodies which are byte-wise identical after decoding of any content
     * and transfer codings.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/2310
     * @see https://datatracker.ietf.org/doc/html/rfc2310#section-4
     */
    public const SAFE = 'Safe';

    /**
     * Header field Schedule-Reply
     *
     * The Schedule-Reply request header is used by a client to indicate to a server whether or not a scheduling
     * operation ought to occur when an "Attendee" deletes a scheduling object resource. In particular, it controls
     * whether a reply scheduling message is sent to the "Organizer" as a result of the removal. There are
     * situations in which unsolicited scheduling messages need to be silently removed (or ignored) for security or
     * privacy reasons. This request header allows the scheduling object resource to be removed if such a need
     * arises.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6638
     * @see https://datatracker.ietf.org/doc/html/rfc6638#section-8.1
     */
    public const SCHEDULE_REPLY = 'Schedule-Reply';

    /**
     * Header field Schedule-Tag
     *
     * The Schedule-Tag response header provides the current value of the CALDAV:schedule-tag property value.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6638
     * @see https://datatracker.ietf.org/doc/html/rfc6638#section-8.2
     */
    public const SCHEDULE_TAG = 'Schedule-Tag';

    /**
     * Header field Sec-COWL
     *
     * The Sec-COWL HTTP request and response headers are used by user agents and servers to convey label metadata
     * to servers and user agents, respectively.
     *
     * @see https://webconcepts.info/specs/W3C/TR/COWL
     * @see https://www.w3.org/TR/COWL/#header
     */
    public const SEC_COWL = 'Sec-COWL';

    /**
     * Header field Sec-Fetch-Dest
     *
     * The Sec-Fetch-Dest HTTP request header exposes a request's destination to a server.
     *
     * @see https://webconcepts.info/specs/W3C/TR/fetch-metadata
     * @see https://www.w3.org/TR/fetch-metadata/#sec-fetch-dest-header
     */
    public const SEC_FETCH_DEST = 'Sec-Fetch-Dest';

    /**
     * Header field Sec-Fetch-Mode
     *
     * The Sec-Fetch-Mode HTTP request header exposes a request's mode to a server.
     *
     * @see https://webconcepts.info/specs/W3C/TR/fetch-metadata
     * @see https://www.w3.org/TR/fetch-metadata/#sec-fetch-mode-header
     */
    public const SEC_FETCH_MODE = 'Sec-Fetch-Mode';

    /**
     * Header field Sec-Fetch-Site
     *
     * The Sec-Fetch-Site HTTP request header exposes the relationship between a request initiator’s origin and
     * its target’s origin.
     *
     * @see https://webconcepts.info/specs/W3C/TR/fetch-metadata
     * @see https://www.w3.org/TR/fetch-metadata/#sec-fetch-site-header
     */
    public const SEC_FETCH_SITE = 'Sec-Fetch-Site';

    /**
     * Header field Sec-Fetch-User
     *
     * The Sec-Fetch-User HTTP request header exposes whether or not a navigation request was triggered by user
     * activation.
     *
     * @see https://webconcepts.info/specs/W3C/TR/fetch-metadata
     * @see https://www.w3.org/TR/fetch-metadata/#sec-fetch-user-header
     */
    public const SEC_FETCH_USER = 'Sec-Fetch-User';

    /**
     * Header field Sec-Token-Binding
     *
     * Once a client and server have negotiated the Token Binding protocol with HTTP/1.1 or HTTP/2, clients MUST
     * include a Sec-Token-Binding header field in their HTTP requests and MUST include only one such header field
     * per HTTP request. Also, the Sec-Token-Binding header field MUST NOT be included in HTTP responses.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8473
     * @see https://datatracker.ietf.org/doc/html/rfc8473#section-2
     */
    public const SEC_TOKEN_BINDING = 'Sec-Token-Binding';

    /**
     * Header field Sec-WebSocket-Accept
     *
     * The Sec-WebSocket-Accept header field is used in the WebSocket opening handshake. It is sent from the server
     * to the client to confirm that the server is willing to initiate the WebSocket connection.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6455
     * @see https://datatracker.ietf.org/doc/html/rfc6455#section-11.3.3
     */
    public const SEC_WEBSOCKET_ACCEPT = 'Sec-WebSocket-Accept';

    /**
     * Header field Sec-WebSocket-Extensions
     *
     * The Sec-WebSocket-Extensions header field is used in the WebSocket opening handshake. It is initially sent
     * from the client to the server, and then subsequently sent from the server to the client, to agree on a set of
     * protocol-level extensions to use for the duration of the connection.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6455
     * @see https://datatracker.ietf.org/doc/html/rfc6455#section-11.3.2
     */
    public const SEC_WEBSOCKET_EXTENSIONS = 'Sec-WebSocket-Extensions';

    /**
     * Header field Sec-WebSocket-Key
     *
     * The Sec-WebSocket-Key header field is used in the WebSocket opening handshake. It is sent from the client to
     * the server to provide part of the information used by the server to prove that it received a valid WebSocket
     * opening handshake.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6455
     * @see https://datatracker.ietf.org/doc/html/rfc6455#section-11.3.1
     */
    public const SEC_WEBSOCKET_KEY = 'Sec-WebSocket-Key';

    /**
     * Header field Sec-WebSocket-Protocol
     *
     * The Sec-WebSocket-Protocol header field is used in the WebSocket opening handshake. It is sent from the
     * client to the server and back from the server to the client to confirm the subprotocol of the connection.
     * This enables scripts to both select a subprotocol and be sure that the server agreed to serve that
     * subprotocol.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6455
     * @see https://datatracker.ietf.org/doc/html/rfc6455#section-11.3.4
     */
    public const SEC_WEBSOCKET_PROTOCOL = 'Sec-WebSocket-Protocol';

    /**
     * Header field Sec-WebSocket-Version
     *
     * The Sec-WebSocket-Version header field is used in the WebSocket opening handshake. It is sent from the client
     * to the server to indicate the protocol version of the connection. This enables servers to correctly interpret
     * the opening handshake and subsequent data being sent from the data, and close the connection if the server
     * cannot interpret that data in a safe manner. The Sec-WebSocket-Version header field is also sent from the
     * server to the client on WebSocket handshake error, when the version received from the client does not match a
     * version understood by the server. In such a case, the header field includes the protocol version(s) supported
     * by the server.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6455
     * @see https://datatracker.ietf.org/doc/html/rfc6455#section-11.3.5
     */
    public const SEC_WEBSOCKET_VERSION = 'Sec-WebSocket-Version';

    /**
     * Header field Security-Scheme
     *
     * All S-HTTP compliant agents must generate the Security-Scheme header in the headers of all HTTP messages they
     * generate. This header permits other agents to detect that they are communicating with an S-HTTP compliant
     * agent and generate the appropriate cryptographic options headers.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/2660
     * @see https://datatracker.ietf.org/doc/html/rfc2660#section-4.1
     */
    public const SECURITY_SCHEME = 'Security-Scheme';

    /**
     * Header field Server
     *
     * The "Server" header field contains information about the software used by the origin server to handle the
     * request, which is often used by clients to help identify the scope of reported interoperability problems, to
     * work around or tailor requests to avoid particular server limitations, and for analytics regarding server or
     * operating system use.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-7.4.2
     */
    public const SERVER = 'Server';

    /**
     * Header field Server-Timing
     *
     * The Server-Timing header field is used to communicate one or more metrics and descriptions for the given
     * request-response cycle.
     *
     * @see https://webconcepts.info/specs/W3C/TR/server-timing
     * @see https://www.w3.org/TR/server-timing/#the-server-timing-header-field
     */
    public const SERVER_TIMING = 'Server-Timing';

    /**
     * Header field Service-Worker
     *
     * An HTTP request to fetch a service worker's script resource will include the Service-Worker header. It
     * indicates that this request is a service worker's script resource request.
     *
     * @see https://webconcepts.info/specs/W3C/TR/service-workers-1
     * @see https://www.w3.org/TR/service-workers-1/#service-worker-script-request
     */
    public const SERVICE_WORKER = 'Service-Worker';

    /**
     * Header field Service-Worker-Allowed
     *
     * An HTTP response to a service worker's script resource request can include the Service-Worker-Allowed header.
     * It indicates that the user agent will override the path restriction, which limits the maximum allowed scope
     * url that the script can control, to the given value.
     *
     * @see https://webconcepts.info/specs/W3C/TR/service-workers-1
     * @see https://www.w3.org/TR/service-workers-1/#service-worker-script-response
     */
    public const SERVICE_WORKER_ALLOWED = 'Service-Worker-Allowed';

    /**
     * Header field Set-Cookie
     *
     * The Set-Cookie HTTP response header is used to send cookies from the server to the user agent.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-httpbis-rfc6265bis
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-httpbis-rfc6265bis#section-4.1
     * 
     * The Set-Cookie HTTP response header is used to send cookies from the server to the user agent.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6265
     * @see https://datatracker.ietf.org/doc/html/rfc6265#section-4.1
     */
    public const SET_COOKIE = 'Set-Cookie';

    /**
     * Header field Set-Cookie2
     *
     * The origin server initiates a session, if it so desires. To do so, it returns an extra response header to the
     * client, Set-Cookie2.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/2965
     * @see https://datatracker.ietf.org/doc/html/rfc2965#section-3.2
     */
    public const SET_COOKIE2 = 'Set-Cookie2';

    /**
     * Header field Signature
     *
     * The "signature" HTTP Header is based on the model that the sender must authenticate itself with a digital
     * signature produced by either a private asymmetric key (e.g., RSA) or a shared symmetric key (e.g., HMAC). The
     * scheme is parameterized enough such that it is not bound to any particular key type or signing algorithm.
     * However, it does explicitly assume that senders can send an HTTP 'Date' header.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/cavage-http-signatures
     * @see https://datatracker.ietf.org/doc/html/draft-cavage-http-signatures#section-4
     */
    public const SIGNATURE = 'Signature';

    /**
     * Header field Slug
     *
     * Slug is an HTTP entity-header whose presence in a POST to a Collection constitutes a request by the client to
     * use the header's value as part of any URIs that would normally be used to retrieve the to-be-created Entry or
     * Media Resources.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5023
     * @see https://datatracker.ietf.org/doc/html/rfc5023#section-9.7
     */
    public const SLUG = 'Slug';

    /**
     * Header field Status-URI
     *
     * The Status-URI response header may be used with the 102 (Processing) status code to inform the client as to
     * the status of a method.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/2518
     * @see https://datatracker.ietf.org/doc/html/rfc2518#section-9.7
     */
    public const STATUS_URI = 'Status-URI';

    /**
     * Header field Strict-Transport-Security
     *
     * The Strict-Transport-Security HTTP response header field (STS header field) indicates to a UA that it MUST
     * enforce the HSTS Policy in regards to the host emitting the response message containing this header field.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6797
     * @see https://datatracker.ietf.org/doc/html/rfc6797#section-6.1
     */
    public const STRICT_TRANSPORT_SECURITY = 'Strict-Transport-Security';

    /**
     * Header field SubOK
     *
     * The SubOK request header field is used to provide directives from an end-client to a proxy cache regarding
     * the possible substitution of an instance body from a cached response for one resource instance for the
     * instance body of the resource instance specified by the client's request.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/mogul-http-dupsup
     * @see https://datatracker.ietf.org/doc/html/draft-mogul-http-dupsup#section-5.2.1
     */
    public const SUBOK = 'SubOK';

    /**
     * Header field Subst
     *
     * The Subst response-header field MUST be used by a proxy to supply the URI of the original source of an
     * entity-body, if the source is different from the client's Request-URI, and if the client's request included
     * the "inform" directive in a SubOK request header field.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/mogul-http-dupsup
     * @see https://datatracker.ietf.org/doc/html/draft-mogul-http-dupsup#section-5.2.2
     */
    public const SUBST = 'Subst';

    /**
     * Header field Sunset
     *
     * The Sunset HTTP response header field allows a server to communicate the fact that a resource is expected to
     * become unresponsive at a specific point in time. It provides information for clients which they can use to
     * control their usage of the resource. The Sunset header contains a single timestamp which advertises the point
     * in time when the resource is expected to become unresponsive.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8594
     * @see https://datatracker.ietf.org/doc/html/rfc8594#section-3
     */
    public const SUNSET = 'Sunset';

    /**
     * Header field Surrogate-Capability
     *
     * The Surrogate-Capabilities request header allows surrogates to advertise their capabilities with capability
     * tokens. Capability tokens indicate sets of operations (e.g., caching, processing) that a surrogate is willing
     * to perform. They follow the form of product tokens in HTTP.
     *
     * @see https://webconcepts.info/specs/W3C/TR/edge-arch
     * @see https://www.w3.org/TR/edge-arch/
     */
    public const SURROGATE_CAPABILITY = 'Surrogate-Capability';

    /**
     * Header field Surrogate-Control
     *
     * The Surrogate-Control response header allows origin servers to dictate how surrogates should handle response
     * entities, with control directives. Currently defined directives control processing and cache behavior.
     *
     * @see https://webconcepts.info/specs/W3C/TR/edge-arch
     * @see https://www.w3.org/TR/edge-arch/
     */
    public const SURROGATE_CONTROL = 'Surrogate-Control';

    /**
     * Header field TCN
     *
     * The TCN response header is used by a server to signal that the resource is transparently negotiated.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/2295
     * @see https://datatracker.ietf.org/doc/html/rfc2295#section-8.5
     */
    public const TCN = 'TCN';

    /**
     * Header field TE
     *
     * The "TE" header field in a request indicates what transfer codings, besides chunked, the client is willing to
     * accept in response, and whether or not the client is willing to accept trailer fields in a chunked transfer
     * coding.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7230
     * @see https://datatracker.ietf.org/doc/html/rfc7230#section-4.3
     */
    public const TE = 'TE';

    /**
     * Header field TTL
     *
     * An application server MUST include the TTL (Time-To-Live) header field in its request for push message
     * delivery. The TTL header field contains a value in seconds that suggests how long a push message is retained
     * by the push service.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8030
     * @see https://datatracker.ietf.org/doc/html/rfc8030#section-5.2
     */
    public const TTL = 'TTL';

    /**
     * Header field Timeout
     *
     * Clients MAY include Timeout request headers in their LOCK requests. However, the server is not required to
     * honor or even consider these requests.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4918
     * @see https://datatracker.ietf.org/doc/html/rfc4918#section-10.7
     */
    public const TIMEOUT = 'Timeout';

    /**
     * Header field Title
     *
     * The title of the document. Not part of the document. Isomorphic with the <title> element in HTML.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4229
     * @see https://datatracker.ietf.org/doc/html/rfc4229#section-2.2.11
     */
    public const TITLE = 'Title';

    /**
     * Header field Tk
     *
     * The Tk response header field is defined as an OPTIONAL means for indicating the tracking status that applied
     * to the corresponding request, and as a REQUIRED means for indicating that a state-changing request has
     * resulted in an interactive change to the tracking status.
     *
     * @see https://webconcepts.info/specs/W3C/TR/tracking-dnt
     * @see https://www.w3.org/TR/tracking-dnt/#response-header-field
     */
    public const TK = 'Tk';

    /**
     * Header field Topic
     *
     * A push message topic is a string carried in a Topic header field. A topic is used to correlate push messages
     * sent to the same subscription and does not convey any other semantics.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8030
     * @see https://datatracker.ietf.org/doc/html/rfc8030#section-5.4
     */
    public const TOPIC = 'Topic';

    /**
     * Header field Trailer
     *
     * When a message includes a message body encoded with the chunked transfer coding and the sender desires to
     * send metadata in the form of trailer fields at the end of the message, the sender SHOULD generate a Trailer
     * header field before the message body to indicate which fields will be present in the trailers.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7230
     * @see https://datatracker.ietf.org/doc/html/rfc7230#section-4.4
     */
    public const TRAILER = 'Trailer';

    /**
     * Header field Transfer-Encoding
     *
     * The Transfer-Encoding header field lists the transfer coding names corresponding to the sequence of transfer
     * codings that have been (or will be) applied to the payload body in order to form the message body.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7230
     * @see https://datatracker.ietf.org/doc/html/rfc7230#section-3.3.1
     */
    public const TRANSFER_ENCODING = 'Transfer-Encoding';

    /**
     * Header field Tunnel-Protocol
     *
     * Clients include the Tunnel-Protocol header field in an HTTP CONNECT request to indicate the application layer
     * protocol that will be used within the tunnel, or the set of protocols that might be used within the tunnel.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-httpbis-tunnel-protocol
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-httpbis-tunnel-protocol#section-2
     */
    public const TUNNEL_PROTOCOL = 'Tunnel-Protocol';

    /**
     * Header field URI
     *
     * The URI header field has, in past versions of this specification, been used as a combination of the existing
     * Location, Content-Location, and Vary header fields as well as the future Alternates field. Its primary
     * purpose has been to include a list of additional URIs for the resource, including names and mirror locations.
     * However, it has become clear that the combination of many different functions within this single field has
     * been a barrier to consistently and correctly implementing any of those functions. Furthermore, we believe
     * that the identification of names and mirror locations would be better performed via the Link header field.
     * The URI header field is therefore deprecated in favor of those other fields.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/2068
     * @see https://datatracker.ietf.org/doc/html/rfc2068#section-19.6.2.5
     */
    public const URI = 'URI';

    /**
     * Header field Upgrade
     *
     * The "Upgrade" header field is intended to provide a simple mechanism for transitioning from HTTP/1.1 to some
     * other protocol on the same connection. A client MAY send a list of protocols in the Upgrade header field of a
     * request to invite the server to switch to one or more of those protocols, in order of descending preference,
     * before sending the final response.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7230
     * @see https://datatracker.ietf.org/doc/html/rfc7230#section-6.7
     */
    public const UPGRADE = 'Upgrade';

    /**
     * Header field Upgrade-Insecure-Requests
     *
     * The Upgrade-Insecure-Requests HTTP request header field sends a signal to the server expressing the client's
     * preference for an encrypted and authenticated response, and that it can successfully handle the
     * upgrade-insecure-requests directive in order to make that preference as seamless as possible to provide.
     *
     * @see https://webconcepts.info/specs/W3C/TR/upgrade-insecure-requests
     * @see https://www.w3.org/TR/upgrade-insecure-requests/#preference
     */
    public const UPGRADE_INSECURE_REQUESTS = 'Upgrade-Insecure-Requests';

    /**
     * Header field Upload-Incomplete
     *
     * The Upload-Incomplete request and response header field is an Item Structured Header indicating whether the
     * corresponding upload is considered complete.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/draft-ietf-httpbis-resumable-upload
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-httpbis-resumable-upload-01#section-9.2
     */
    public const UPLOAD_INCOMPLETE = 'Upload-Incomplete';

    /**
     * Header field Upload-Offset
     *
     * The Upload-Offset request and response header field is an Item Structured Header indicating the resumption
     * offset of corresponding upload, counted in bytes.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/draft-ietf-httpbis-resumable-upload
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-httpbis-resumable-upload-01#section-9.1
     */
    public const UPLOAD_OFFSET = 'Upload-Offset';

    /**
     * Header field Urgency
     *
     * An application server MAY include an Urgency header field in its request for push message delivery. This
     * header field indicates the message urgency. The push service MUST NOT forward the Urgency header field to the
     * user agent. A push message without the Urgency header field defaults to a value of "normal".
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8030
     * @see https://datatracker.ietf.org/doc/html/rfc8030#section-5.3
     */
    public const URGENCY = 'Urgency';

    /**
     * Header field User-Agent
     *
     * The "User-Agent" header field contains information about the user agent originating the request, which is
     * often used by servers to help identify the scope of reported interoperability problems, to work around or
     * tailor responses to avoid particular user agent limitations, and for analytics regarding browser or operating
     * system use.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-5.5.3
     */
    public const USER_AGENT = 'User-Agent';

    /**
     * Header field Variant-Key
     *
     * The Variant-Key HTTP response header field is used to indicate the value(s) from the Variants header field
     * that identify the representation it occurs within.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-httpbis-variants
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-httpbis-variants#section-3
     */
    public const VARIANT_KEY = 'Variant-Key';

    /**
     * Header field Variant-Vary
     *
     * The Variant-Vary response header can be used in a choice response to record any vary information which
     * applies to the variant data (the entity body combined with some of the entity headers) contained in the
     * response, rather than to the response as a whole.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/2295
     * @see https://datatracker.ietf.org/doc/html/rfc2295#section-8.6
     */
    public const VARIANT_VARY = 'Variant-Vary';

    /**
     * Header field Variants
     *
     * The Variants HTTP response header field indicates what representations are available for a given resource at
     * the time that the response is produced, by enumerating the request header fields that it varies on, along
     * with the values that are available for each.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-httpbis-variants
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-httpbis-variants#section-2
     */
    public const VARIANTS = 'Variants';

    /**
     * Header field Vary
     *
     * The "Vary" header field in a response describes what parts of a request message, aside from the method, Host
     * header field, and request target, might influence the origin server's process for selecting and representing
     * this response. The value consists of either a single asterisk ("*") or a list of header field names
     * (case-insensitive).
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-7.1.4
     */
    public const VARY = 'Vary';

    /**
     * Header field Via
     *
     * The "Via" header field indicates the presence of intermediate protocols and recipients between the user agent
     * and the server (on requests) or between the origin server and the client (on responses), similar to the
     * "Received" header field in email (Section 3.6.7 of RFC 5322). Via can be used for tracking message forwards,
     * avoiding request loops, and identifying the protocol capabilities of senders along the request/response
     * chain.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7230
     * @see https://datatracker.ietf.org/doc/html/rfc7230#section-5.7.1
     */
    public const VIA = 'Via';

    /**
     * Header field WWW-Authenticate
     *
     * If a server receives a request for an access-protected object, and an acceptable Authorization header is not
     * sent, the server responds with a "401 Unauthorized" status code, and a WWW-Authenticate header as per the
     * framework defined above.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7616
     * @see https://datatracker.ietf.org/doc/html/rfc7616#section-3.3
     * 
     * The "WWW-Authenticate" header field consists of at least one challenge that indicates the authentication
     * scheme(s) and parameters applicable to the effective request URI. It MUST be included in 401 (Unauthorized)
     * response messages and MAY be included in other response messages to indicate that supplying credentials (or
     * different credentials) might affect the response.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7235
     * @see https://datatracker.ietf.org/doc/html/rfc7235#section-4.4
     */
    public const WWW_AUTHENTICATE = 'WWW-Authenticate';

    /**
     * Header field Want-Content-Digest
     *
     * Want-Content-Digest indicates that the sender would like to receive (via the Content-Digest field) a content
     * digest on messages associated with the request URI and representation metadata.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/9530
     * @see https://datatracker.ietf.org/doc/html/rfc9530#section-4
     */
    public const WANT_CONTENT_DIGEST = 'Want-Content-Digest';

    /**
     * Header field Want-Digest
     *
     * The Want-Digest message header field indicates the sender's desire to receive an instance digest on messages
     * associated with the Request-URI.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/3230
     * @see https://datatracker.ietf.org/doc/html/rfc3230#section-4.3.1
     */
    public const WANT_DIGEST = 'Want-Digest';

    /**
     * Header field Want-Repr-Digest
     *
     * Want-Repr-Digest indicates that the sender would like to receive (via the Repr-Digest field) a representation
     * digest on messages associated with the request URI and representation metadata.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/9530
     * @see https://datatracker.ietf.org/doc/html/rfc9530#section-4
     */
    public const WANT_REPR_DIGEST = 'Want-Repr-Digest';

    /**
     * Header field Warning
     *
     * The "Warning" header field is used to carry additional information about the status or transformation of a
     * message that might not be reflected in the status code. This information is typically used to warn about
     * possible incorrectness introduced by caching operations or transformations applied to the payload of the
     * message.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7234
     * @see https://datatracker.ietf.org/doc/html/rfc7234#section-5.5
     */
    public const WARNING = 'Warning';

    /**
     * Header field X-Frame-Options
     *
     * The X-Frame-Options HTTP header field indicates a policy that specifies whether the browser should render the
     * transmitted resource within a <frame> or an <iframe>. Servers can declare this policy in the header of their
     * HTTP responses to prevent clickjacking attacks, which ensures that their content is not embedded into other
     * pages or frames.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7034
     * @see https://datatracker.ietf.org/doc/html/rfc7034#section-2
     */
    public const X_FRAME_OPTIONS = 'X-Frame-Options';

    /**
     * Header field traceparent
     *
     * The traceparent header represents the incoming request in a tracing system in a common format.
     *
     * @see https://webconcepts.info/specs/W3C/TR/trace-context
     * @see https://www.w3.org/TR/trace-context/#traceparent-field
     */
    public const TRACEPARENT = 'traceparent';

    /**
     * Header field tracestate
     *
     * The tracestate HTTP header field conveys information about request position in multiple distributed tracing
     * graphs.
     *
     * @see https://webconcepts.info/specs/W3C/TR/trace-context
     * @see https://www.w3.org/TR/trace-context/#tracestate-field
     */
    public const TRACESTATE = 'tracestate';

    /**
     * Header field webhook-id
     *
     * The unique webhook identifier.
     *
     * @see https://webconcepts.info/specs/Webhook/standard/webhooks
     * @see https://github.com/standard-webhooks/standard-webhooks/blob/main/spec/standard-webhooks.md#webhook-headers-sending-metadata-to-consumers
     */
    public const WEBHOOK_ID = 'webhook-id';

    /**
     * Header field webhook-signature
     *
     * The signature header is a space delimited list of signatures associated with this webhook. The reason it is a
     * list, and not just one signature is to support zero downtime secret rotation. The secret key used for the
     * signature should not be changed under normal circumstances, but it may be required that it does change under
     * some circumstances (e.g. compromise). Supporting zero downtime secret rotation means that webhook operations
     * won't be affected during the secret rotation process.
     *
     * @see https://webconcepts.info/specs/Webhook/standard/webhooks
     * @see https://github.com/standard-webhooks/standard-webhooks/blob/main/spec/standard-webhooks.md#webhook-headers-sending-metadata-to-consumers
     */
    public const WEBHOOK_SIGNATURE = 'webhook-signature';

    /**
     * Header field webhook-timestamp
     *
     * Integer unix timestamp (seconds since epoch).
     *
     * @see https://webconcepts.info/specs/Webhook/standard/webhooks
     * @see https://github.com/standard-webhooks/standard-webhooks/blob/main/spec/standard-webhooks.md#webhook-headers-sending-metadata-to-consumers
     */
    public const WEBHOOK_TIMESTAMP = 'webhook-timestamp';
}
