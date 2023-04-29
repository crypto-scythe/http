<?php

declare(strict_types=1);

namespace CryptoScythe\Http;

/**
 * Class StatusCodes
 *
 * @see https://webconcepts.info/concepts/http-status-code/
 * @see https://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml
 */
final class StatusCodes {
    /**
     * Status 100
     *
     * The 100 (Continue) status code indicates that the initial part of a request has been received and has not yet
     * been rejected by the server. The server intends to send a final response after the request has been fully
     * received and acted upon.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.2.1
     */
    public const STATUS_100 = 100;
    public const MESSAGE_100 = 'Continue';
    public const STATUS_CONTINUE = self::STATUS_100;
    public const MESSAGE_CONTINUE = self::MESSAGE_100;

    /**
     * Status 101
     *
     * The 101 (Switching Protocols) status code indicates that the server understands and is willing to comply with
     * the client's request, via the Upgrade header field, for a change in the application protocol being used on
     * this connection. The server MUST generate an Upgrade header field in the response that indicates which
     * protocol(s) will be switched to immediately after the empty line that terminates the 101 response.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.2.2
     */
    public const STATUS_101 = 101;
    public const MESSAGE_101 = 'Switching Protocols';
    public const STATUS_SWITCHING_PROTOCOLS = self::STATUS_101;
    public const MESSAGE_SWITCHING_PROTOCOLS = self::MESSAGE_101;

    /**
     * Status 102
     *
     * The 102 (Processing) status code is an interim response used to inform the client that the server has
     * accepted the complete request, but has not yet completed it. This status code SHOULD only be sent when the
     * server has a reasonable expectation that the request will take significant time to complete. As guidance, if
     * a method is taking longer than 20 seconds (a reasonable, but arbitrary value) to process the server SHOULD
     * return a 102 (Processing) response. The server MUST send a final response after the request has been
     * completed.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/2518
     * @see https://datatracker.ietf.org/doc/html/rfc2518#section-10.1
     */
    public const STATUS_102 = 102;
    public const MESSAGE_102 = 'Processing';
    public const STATUS_PROCESSING = self::STATUS_102;
    public const MESSAGE_PROCESSING = self::MESSAGE_102;

    /**
     * Status 103
     *
     * The 103 (Early Hints) status code indicates the client that the server is likely to send a final request with
     * the headers included in the informational response.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8297
     * @see https://datatracker.ietf.org/doc/html/rfc8297#section-2
     */
    public const STATUS_103 = 103;
    public const MESSAGE_103 = 'Early Hints';
    public const STATUS_EARLY_HINTS = self::STATUS_103;
    public const MESSAGE_EARLY_HINTS = self::MESSAGE_103;

    /**
     * Status 200
     *
     * The 200 (OK) status code indicates that the request has succeeded. The payload sent in a 200 response depends
     * on the request method.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.3.1
     */
    public const STATUS_200 = 200;
    public const MESSAGE_200 = 'OK';
    public const STATUS_OK = self::STATUS_200;
    public const MESSAGE_OK = self::MESSAGE_200;

    /**
     * Status 201
     *
     * The 201 (Created) status code indicates that the request has been fulfilled and has resulted in one or more
     * new resources being created. The primary resource created by the request is identified by either a Location
     * header field in the response or, if no Location field is received, by the effective request URI.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.3.2
     */
    public const STATUS_201 = 201;
    public const MESSAGE_201 = 'Created';
    public const STATUS_CREATED = self::STATUS_201;
    public const MESSAGE_CREATED = self::MESSAGE_201;

    /**
     * Status 202
     *
     * The 202 (Accepted) status code indicates that the request has been accepted for processing, but the
     * processing has not been completed. The request might or might not eventually be acted upon, as it might be
     * disallowed when processing actually takes place. There is no facility in HTTP for re-sending a status code
     * from an asynchronous operation.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.3.3
     */
    public const STATUS_202 = 202;
    public const MESSAGE_202 = 'Accepted';
    public const STATUS_ACCEPTED = self::STATUS_202;
    public const MESSAGE_ACCEPTED = self::MESSAGE_202;

    /**
     * Status 203
     *
     * The 203 (Non-Authoritative Information) status code indicates that the request was successful but the
     * enclosed payload has been modified from that of the origin server's 200 (OK) response by a transforming
     * proxy.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.3.4
     */
    public const STATUS_203 = 203;
    public const MESSAGE_203 = 'Non-Authoritative Information';
    public const STATUS_NON_AUTHORITATIVE_INFORMATION = self::STATUS_203;
    public const MESSAGE_NON_AUTHORITATIVE_INFORMATION = self::MESSAGE_203;

    /**
     * Status 204
     *
     * The 204 (No Content) status code indicates that the server has successfully fulfilled the request and that
     * there is no additional content to send in the response payload body. Metadata in the response header fields
     * refer to the target resource and its selected representation after the requested action was applied.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.3.5
     */
    public const STATUS_204 = 204;
    public const MESSAGE_204 = 'No Content';
    public const STATUS_NO_CONTENT = self::STATUS_204;
    public const MESSAGE_NO_CONTENT = self::MESSAGE_204;

    /**
     * Status 205
     *
     * The 205 (Reset Content) status code indicates that the server has fulfilled the request and desires that the
     * user agent reset the "document view", which caused the request to be sent, to its original state as received
     * from the origin server.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.3.6
     */
    public const STATUS_205 = 205;
    public const MESSAGE_205 = 'Reset Content';
    public const STATUS_RESET_CONTENT = self::STATUS_205;
    public const MESSAGE_RESET_CONTENT = self::MESSAGE_205;

    /**
     * Status 206
     *
     * The 206 (Partial Content) status code indicates that the server is successfully fulfilling a range request
     * for the target resource by transferring one or more parts of the selected representation that correspond to
     * the satisfiable ranges found in the request's Range header field.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7233
     * @see https://datatracker.ietf.org/doc/html/rfc7233#section-4.1
     */
    public const STATUS_206 = 206;
    public const MESSAGE_206 = 'Partial Content';
    public const STATUS_PARTIAL_CONTENT = self::STATUS_206;
    public const MESSAGE_PARTIAL_CONTENT = self::MESSAGE_206;

    /**
     * Status 207
     *
     * The 207 (Multi-Status) status code provides status for multiple independent operations.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4918
     * @see https://datatracker.ietf.org/doc/html/rfc4918#section-11.1
     */
    public const STATUS_207 = 207;
    public const MESSAGE_207 = 'Multi-Status';
    public const STATUS_MULTI_STATUS = self::STATUS_207;
    public const MESSAGE_MULTI_STATUS = self::MESSAGE_207;

    /**
     * Status 208
     *
     * The 208 (Already Reported) status code can be used inside a DAV: propstat response element to avoid
     * enumerating the internal members of multiple bindings to the same collection repeatedly. For each binding to
     * a collection inside the request's scope, only one will be reported with a 200 status, while subsequent
     * DAV:response elements for all other bindings will use the 208 status, and no DAV:response elements for their
     * descendants are included.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5842
     * @see https://datatracker.ietf.org/doc/html/rfc5842#section-7.1
     */
    public const STATUS_208 = 208;
    public const MESSAGE_208 = 'Already Reported';
    public const STATUS_ALREADY_REPORTED = self::STATUS_208;
    public const MESSAGE_ALREADY_REPORTED = self::MESSAGE_208;

    /**
     * Status 226
     *
     * The server has fulfilled a GET request for the resource, and the response is a representation of the result
     * of one or more instance-manipulations applied to the current instance. The actual current instance might not
     * be available except by combining this response with other previous or future responses, as appropriate for
     * the specific instance-manipulation(s).
     *
     * @see https://webconcepts.info/specs/IETF/RFC/3229
     * @see https://datatracker.ietf.org/doc/html/rfc3229#section-10.4.1
     */
    public const STATUS_226 = 226;
    public const MESSAGE_226 = 'IM Used';
    public const STATUS_IM_USED = self::STATUS_226;
    public const MESSAGE_IM_USED = self::MESSAGE_226;

    /**
     * Status 300
     *
     * The 300 (Multiple Choices) status code indicates that the target resource has more than one representation,
     * each with its own more specific identifier, and information about the alternatives is being provided so that
     * the user (or user agent) can select a preferred representation by redirecting its request to one or more of
     * those identifiers. In other words, the server desires that the user agent engage in reactive negotiation to
     * select the most appropriate representation(s) for its needs.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.4.1
     */
    public const STATUS_300 = 300;
    public const MESSAGE_300 = 'Multiple Choices';
    public const STATUS_MULTIPLE_CHOICES = self::STATUS_300;
    public const MESSAGE_MULTIPLE_CHOICES = self::MESSAGE_300;

    /**
     * Status 301
     *
     * The 301 (Moved Permanently) status code indicates that the target resource has been assigned a new permanent
     * URI and any future references to this resource ought to use one of the enclosed URIs. Clients with
     * link-editing capabilities ought to automatically re-link references to the effective request URI to one or
     * more of the new references sent by the server, where possible.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.4.2
     */
    public const STATUS_301 = 301;
    public const MESSAGE_301 = 'Moved Permanently';
    public const STATUS_MOVED_PERMANENTLY = self::STATUS_301;
    public const MESSAGE_MOVED_PERMANENTLY = self::MESSAGE_301;

    /**
     * Status 302
     *
     * The 302 (Found) status code indicates that the target resource resides temporarily under a different URI.
     * Since the redirection might be altered on occasion, the client ought to continue to use the effective request
     * URI for future requests.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.4.3
     */
    public const STATUS_302 = 302;
    public const MESSAGE_302 = 'Found';
    public const STATUS_FOUND = self::STATUS_302;
    public const MESSAGE_FOUND = self::MESSAGE_302;

    /**
     * Status 303
     *
     * The 303 (See Other) status code indicates that the server is redirecting the user agent to a different
     * resource, as indicated by a URI in the Location header field, which is intended to provide an indirect
     * response to the original request. A user agent can perform a retrieval request targeting that URI (a GET or
     * HEAD request if using HTTP), which might also be redirected, and present the eventual result as an answer to
     * the original request. Note that the new URI in the Location header field is not considered equivalent to the
     * effective request URI.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.4.4
     */
    public const STATUS_303 = 303;
    public const MESSAGE_303 = 'See Other';
    public const STATUS_SEE_OTHER = self::STATUS_303;
    public const MESSAGE_SEE_OTHER = self::MESSAGE_303;

    /**
     * Status 304
     *
     * The 304 (Not Modified) status code indicates that a conditional GET or HEAD request has been received and
     * would have resulted in a 200 (OK) response if it were not for the fact that the condition evaluated to false.
     * In other words, there is no need for the server to transfer a representation of the target resource because
     * the request indicates that the client, which made the request conditional, already has a valid
     * representation; the server is therefore redirecting the client to make use of that stored representation as
     * if it were the payload of a 200 (OK) response.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7232
     * @see https://datatracker.ietf.org/doc/html/rfc7232#section-4.1
     */
    public const STATUS_304 = 304;
    public const MESSAGE_304 = 'Not Modified';
    public const STATUS_NOT_MODIFIED = self::STATUS_304;
    public const MESSAGE_NOT_MODIFIED = self::MESSAGE_304;

    /**
     * Status 305
     *
     * The 305 (Use Proxy) status code was defined in a previous version of HTTP/1.1 and is now deprecated.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.4.5
     */
    public const STATUS_305 = 305;
    public const MESSAGE_305 = 'Use Proxy';
    public const STATUS_USE_PROXY = self::STATUS_305;
    public const MESSAGE_USE_PROXY = self::MESSAGE_305;

    /**
     * Status 306
     *
     * The 306 status code was defined in a previous version of HTTP/1.1, is no longer used, and the code is
     * reserved.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.4.6
     */
    public const STATUS_306 = 306;
    public const MESSAGE_306 = 'Unused';
    public const STATUS_UNUSED = self::STATUS_306;
    public const MESSAGE_UNUSED = self::MESSAGE_306;

    /**
     * Status 307
     *
     * The 307 (Temporary Redirect) status code indicates that the target resource resides temporarily under a
     * different URI and the user agent MUST NOT change the request method if it performs an automatic redirection
     * to that URI. Since the redirection can change over time, the client ought to continue using the original
     * effective request URI for future requests.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.4.7
     */
    public const STATUS_307 = 307;
    public const MESSAGE_307 = 'Temporary Redirect';
    public const STATUS_TEMPORARY_REDIRECT = self::STATUS_307;
    public const MESSAGE_TEMPORARY_REDIRECT = self::MESSAGE_307;

    /**
     * Status 308
     *
     * The 308 (Permanent Redirect) status code indicates that the target resource has been assigned a new permanent
     * URI and any future references to this resource ought to use one of the enclosed URIs.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7538
     * @see https://datatracker.ietf.org/doc/html/rfc7538#section-3
     */
    public const STATUS_308 = 308;
    public const MESSAGE_308 = 'Permanent Redirect';
    public const STATUS_PERMANENT_REDIRECT = self::STATUS_308;
    public const MESSAGE_PERMANENT_REDIRECT = self::MESSAGE_308;

    /**
     * Status 400
     *
     * The 400 (Bad Request) status code indicates that the server cannot or will not process the request due to
     * something that is perceived to be a client error (e.g., malformed request syntax, invalid request message
     * framing, or deceptive request routing).
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.1
     */
    public const STATUS_400 = 400;
    public const MESSAGE_400 = 'Bad Request';
    public const STATUS_BAD_REQUEST = self::STATUS_400;
    public const MESSAGE_BAD_REQUEST = self::MESSAGE_400;

    /**
     * Status 401
     *
     * The 401 (Unauthorized) status code indicates that the request has not been applied because it lacks valid
     * authentication credentials for the target resource. The server generating a 401 response MUST send a
     * WWW-Authenticate header field (Section 4.1) containing at least one challenge applicable to the target
     * resource.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7235
     * @see https://datatracker.ietf.org/doc/html/rfc7235#section-3.1
     */
    public const STATUS_401 = 401;
    public const MESSAGE_401 = 'Unauthorized';
    public const STATUS_UNAUTHORIZED = self::STATUS_401;
    public const MESSAGE_UNAUTHORIZED = self::MESSAGE_401;

    /**
     * Status 402
     *
     * The 402 (Payment Required) status code is reserved for future use.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.2
     */
    public const STATUS_402 = 402;
    public const MESSAGE_402 = 'Payment Required';
    public const STATUS_PAYMENT_REQUIRED = self::STATUS_402;
    public const MESSAGE_PAYMENT_REQUIRED = self::MESSAGE_402;

    /**
     * Status 403
     *
     * The 403 (Forbidden) status code indicates that the server understood the request but refuses to authorize it.
     * A server that wishes to make public why the request has been forbidden can describe that reason in the
     * response payload (if any).
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.3
     */
    public const STATUS_403 = 403;
    public const MESSAGE_403 = 'Forbidden';
    public const STATUS_FORBIDDEN = self::STATUS_403;
    public const MESSAGE_FORBIDDEN = self::MESSAGE_403;

    /**
     * Status 404
     *
     * The 404 (Not Found) status code indicates that the origin server did not find a current representation for
     * the target resource or is not willing to disclose that one exists. A 404 status code does not indicate
     * whether this lack of representation is temporary or permanent; the 410 (Gone) status code is preferred over
     * 404 if the origin server knows, presumably through some configurable means, that the condition is likely to
     * be permanent.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.4
     */
    public const STATUS_404 = 404;
    public const MESSAGE_404 = 'Not Found';
    public const STATUS_NOT_FOUND = self::STATUS_404;
    public const MESSAGE_NOT_FOUND = self::MESSAGE_404;

    /**
     * Status 405
     *
     * The 405 (Method Not Allowed) status code indicates that the method received in the request-line is known by
     * the origin server but not supported by the target resource. The origin server MUST generate an Allow header
     * field in a 405 response containing a list of the target resource's currently supported methods.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.5
     */
    public const STATUS_405 = 405;
    public const MESSAGE_405 = 'Method Not Allowed';
    public const STATUS_METHOD_NOT_ALLOWED = self::STATUS_405;
    public const MESSAGE_METHOD_NOT_ALLOWED = self::MESSAGE_405;

    /**
     * Status 406
     *
     * The 406 (Not Acceptable) status code indicates that the target resource does not have a current
     * representation that would be acceptable to the user agent, according to the proactive negotiation header
     * fields received in the request, and the server is unwilling to supply a default representation.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.6
     */
    public const STATUS_406 = 406;
    public const MESSAGE_406 = 'Not Acceptable';
    public const STATUS_NOT_ACCEPTABLE = self::STATUS_406;
    public const MESSAGE_NOT_ACCEPTABLE = self::MESSAGE_406;

    /**
     * Status 407
     *
     * The 407 (Proxy Authentication Required) status code is similar to 401 (Unauthorized), but it indicates that
     * the client needs to authenticate itself in order to use a proxy. The proxy MUST send a Proxy-Authenticate
     * header field containing a challenge applicable to that proxy for the target resource. The client MAY repeat
     * the request with a new or replaced Proxy-Authorization header field.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7235
     * @see https://datatracker.ietf.org/doc/html/rfc7235#section-3.2
     */
    public const STATUS_407 = 407;
    public const MESSAGE_407 = 'Proxy Authentication Required';
    public const STATUS_PROXY_AUTHENTICATION_REQUIRED = self::STATUS_407;
    public const MESSAGE_PROXY_AUTHENTICATION_REQUIRED = self::MESSAGE_407;

    /**
     * Status 408
     *
     * The 408 (Request Timeout) status code indicates that the server did not receive a complete request message
     * within the time that it was prepared to wait. A server SHOULD send the "close" connection option in the
     * response, since 408 implies that the server has decided to close the connection rather than continue waiting.
     * If the client has an outstanding request in transit, the client MAY repeat that request on a new connection.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.7
     */
    public const STATUS_408 = 408;
    public const MESSAGE_408 = 'Request Timeout';
    public const STATUS_REQUEST_TIMEOUT = self::STATUS_408;
    public const MESSAGE_REQUEST_TIMEOUT = self::MESSAGE_408;

    /**
     * Status 409
     *
     * The 409 (Conflict) status code indicates that the request could not be completed due to a conflict with the
     * current state of the target resource. This code is used in situations where the user might be able to resolve
     * the conflict and resubmit the request. The server SHOULD generate a payload that includes enough information
     * for a user to recognize the source of the conflict.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.8
     */
    public const STATUS_409 = 409;
    public const MESSAGE_409 = 'Conflict';
    public const STATUS_CONFLICT = self::STATUS_409;
    public const MESSAGE_CONFLICT = self::MESSAGE_409;

    /**
     * Status 410
     *
     * The 410 (Gone) status code indicates that access to the target resource is no longer available at the origin
     * server and that this condition is likely to be permanent. If the origin server does not know, or has no
     * facility to determine, whether or not the condition is permanent, the status code 404 (Not Found) ought to be
     * used instead.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.9
     */
    public const STATUS_410 = 410;
    public const MESSAGE_410 = 'Gone';
    public const STATUS_GONE = self::STATUS_410;
    public const MESSAGE_GONE = self::MESSAGE_410;

    /**
     * Status 411
     *
     * The 411 (Length Required) status code indicates that the server refuses to accept the request without a
     * defined Content-Length. The client MAY repeat the request if it adds a valid Content-Length header field
     * containing the length of the message body in the request message.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.10
     */
    public const STATUS_411 = 411;
    public const MESSAGE_411 = 'Length Required';
    public const STATUS_LENGTH_REQUIRED = self::STATUS_411;
    public const MESSAGE_LENGTH_REQUIRED = self::MESSAGE_411;

    /**
     * Status 412
     *
     * The 412 (Precondition Failed) status code indicates that one or more conditions given in the request header
     * fields evaluated to false when tested on the server. This response code allows the client to place
     * preconditions on the current resource state (its current representations and metadata) and, thus, prevent the
     * request method from being applied if the target resource is in an unexpected state.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7232
     * @see https://datatracker.ietf.org/doc/html/rfc7232#section-4.2
     */
    public const STATUS_412 = 412;
    public const MESSAGE_412 = 'Precondition Failed';
    public const STATUS_PRECONDITION_FAILED = self::STATUS_412;
    public const MESSAGE_PRECONDITION_FAILED = self::MESSAGE_412;

    /**
     * Status 413
     *
     * The 413 (Payload Too Large) status code indicates that the server is refusing to process a request because
     * the request payload is larger than the server is willing or able to process. The server MAY close the
     * connection to prevent the client from continuing the request.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.11
     */
    public const STATUS_413 = 413;
    public const MESSAGE_413 = 'Payload Too Large';
    public const STATUS_PAYLOAD_TOO_LARGE = self::STATUS_413;
    public const MESSAGE_PAYLOAD_TOO_LARGE = self::MESSAGE_413;

    /**
     * Status 414
     *
     * The 414 (URI Too Long) status code indicates that the server is refusing to service the request because the
     * request-target is longer than the server is willing to interpret.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.12
     */
    public const STATUS_414 = 414;
    public const MESSAGE_414 = 'URI Too Long';
    public const STATUS_URI_TOO_LONG = self::STATUS_414;
    public const MESSAGE_URI_TOO_LONG = self::MESSAGE_414;

    /**
     * Status 415
     *
     * The 415 (Unsupported Media Type) status code indicates that the origin server is refusing to service the
     * request because the payload is in a format not supported by this method on the target resource. The format
     * problem might be due to the request's indicated Content-Type or Content-Encoding, or as a result of
     * inspecting the data directly.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.13
     */
    public const STATUS_415 = 415;
    public const MESSAGE_415 = 'Unsupported Media Type';
    public const STATUS_UNSUPPORTED_MEDIA_TYPE = self::STATUS_415;
    public const MESSAGE_UNSUPPORTED_MEDIA_TYPE = self::MESSAGE_415;

    /**
     * Status 416
     *
     * The 416 (Range Not Satisfiable) status code indicates that none of the ranges in the request's Range header
     * field (Section 3.1) overlap the current extent of the selected resource or that the set of ranges requested
     * has been rejected due to invalid ranges or an excessive request of small or overlapping ranges.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7233
     * @see https://datatracker.ietf.org/doc/html/rfc7233#section-4.4
     */
    public const STATUS_416 = 416;
    public const MESSAGE_416 = 'Range Not Satisfiable';
    public const STATUS_RANGE_NOT_SATISFIABLE = self::STATUS_416;
    public const MESSAGE_RANGE_NOT_SATISFIABLE = self::MESSAGE_416;

    /**
     * Status 417
     *
     * The 417 (Expectation Failed) status code indicates that the expectation given in the request's Expect header
     * field could not be met by at least one of the inbound servers.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.14
     */
    public const STATUS_417 = 417;
    public const MESSAGE_417 = 'Expectation Failed';
    public const STATUS_EXPECTATION_FAILED = self::STATUS_417;
    public const MESSAGE_EXPECTATION_FAILED = self::MESSAGE_417;

    /**
     * Status 418
     *
     * Any attempt to brew coffee with a teapot should result in the error code "418 I'm a teapot". The resulting
     * entity body MAY be short and stout.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/2324
     * @see https://datatracker.ietf.org/doc/html/rfc2324#section-2.3.2
     */
    public const STATUS_418 = 418;
    public const MESSAGE_418 = 'I\'m a teapot';
    public const STATUS_I_M_A_TEAPOT = self::STATUS_418;
    public const MESSAGE_I_M_A_TEAPOT = self::MESSAGE_418;

    /**
     * Status 421
     *
     * The 421 (Misdirected Request) status code indicates that the request was directed at a server that is not
     * able to produce a response. This can be sent by a server that is not configured to produce responses for the
     * combination of scheme and authority that are included in the request URI.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7540
     * @see https://datatracker.ietf.org/doc/html/rfc7540#section-9.1.2
     */
    public const STATUS_421 = 421;
    public const MESSAGE_421 = 'Misdirected Request';
    public const STATUS_MISDIRECTED_REQUEST = self::STATUS_421;
    public const MESSAGE_MISDIRECTED_REQUEST = self::MESSAGE_421;

    /**
     * Status 422
     *
     * The 422 (Unprocessable Entity) status code means the server understands the content type of the request
     * entity (hence a 415 (Unsupported Media Type) status code is inappropriate), and the syntax of the request
     * entity is correct (thus a 400 (Bad Request) status code is inappropriate) but was unable to process the
     * contained instructions. For example, this error condition may occur if an XML request body contains
     * well-formed (i.e., syntactically correct), but semantically erroneous, XML instructions.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4918
     * @see https://datatracker.ietf.org/doc/html/rfc4918#section-11.2
     */
    public const STATUS_422 = 422;
    public const MESSAGE_422 = 'Unprocessable Entity';
    public const STATUS_UNPROCESSABLE_ENTITY = self::STATUS_422;
    public const MESSAGE_UNPROCESSABLE_ENTITY = self::MESSAGE_422;

    /**
     * Status 423
     *
     * The 423 (Locked) status code means the source or destination resource of a method is locked. This response
     * SHOULD contain an appropriate precondition or postcondition code, such as 'lock-token-submitted' or
     * 'no-conflicting-lock'.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4918
     * @see https://datatracker.ietf.org/doc/html/rfc4918#section-11.3
     */
    public const STATUS_423 = 423;
    public const MESSAGE_423 = 'Locked';
    public const STATUS_LOCKED = self::STATUS_423;
    public const MESSAGE_LOCKED = self::MESSAGE_423;

    /**
     * Status 424
     *
     * The 424 (Failed Dependency) status code means that the method could not be performed on the resource because
     * the requested action depended on another action and that action failed. For example, if a command in a
     * PROPPATCH method fails, then, at minimum, the rest of the commands will also fail with 424 (Failed
     * Dependency).
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4918
     * @see https://datatracker.ietf.org/doc/html/rfc4918#section-11.4
     */
    public const STATUS_424 = 424;
    public const MESSAGE_424 = 'Failed Dependency';
    public const STATUS_FAILED_DEPENDENCY = self::STATUS_424;
    public const MESSAGE_FAILED_DEPENDENCY = self::MESSAGE_424;

    /**
     * Status 425
     *
     * A 425 (Too Early) status code indicates that the server is unwilling to risk processing a request that might
     * be replayed. User agents that send a request in early data are expected to retry the request when receiving a
     * 425 (Too Early) response status code. A user agent SHOULD retry automatically, but any retries MUST NOT be
     * sent in early data.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8470
     * @see https://datatracker.ietf.org/doc/html/rfc8470#section-5.2
     */
    public const STATUS_425 = 425;
    public const MESSAGE_425 = 'Too Early';
    public const STATUS_TOO_EARLY = self::STATUS_425;
    public const MESSAGE_TOO_EARLY = self::MESSAGE_425;

    /**
     * Status 426
     *
     * The 426 (Upgrade Required) status code indicates that the server refuses to perform the request using the
     * current protocol but might be willing to do so after the client upgrades to a different protocol. The server
     * MUST send an Upgrade header field in a 426 response to indicate the required protocol(s).
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.15
     */
    public const STATUS_426 = 426;
    public const MESSAGE_426 = 'Upgrade Required';
    public const STATUS_UPGRADE_REQUIRED = self::STATUS_426;
    public const MESSAGE_UPGRADE_REQUIRED = self::MESSAGE_426;

    /**
     * Status 428
     *
     * The 428 status code indicates that the origin server requires the request to be conditional.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6585
     * @see https://datatracker.ietf.org/doc/html/rfc6585#section-3
     */
    public const STATUS_428 = 428;
    public const MESSAGE_428 = 'Precondition Required';
    public const STATUS_PRECONDITION_REQUIRED = self::STATUS_428;
    public const MESSAGE_PRECONDITION_REQUIRED = self::MESSAGE_428;

    /**
     * Status 429
     *
     * The 429 status code indicates that the user has sent too many requests in a given amount of time ("rate
     * limiting").
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6585
     * @see https://datatracker.ietf.org/doc/html/rfc6585#section-4
     */
    public const STATUS_429 = 429;
    public const MESSAGE_429 = 'Too Many Requests';
    public const STATUS_TOO_MANY_REQUESTS = self::STATUS_429;
    public const MESSAGE_TOO_MANY_REQUESTS = self::MESSAGE_429;

    /**
     * Status 431
     *
     * The 431 status code indicates that the server is unwilling to process the request because its header fields
     * are too large. The request MAY be resubmitted after reducing the size of the request header fields.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6585
     * @see https://datatracker.ietf.org/doc/html/rfc6585#section-5
     */
    public const STATUS_431 = 431;
    public const MESSAGE_431 = 'Request Header Fields Too Large';
    public const STATUS_REQUEST_HEADER_FIELDS_TOO_LARGE = self::STATUS_431;
    public const MESSAGE_REQUEST_HEADER_FIELDS_TOO_LARGE = self::MESSAGE_431;

    /**
     * Status 451
     *
     * This status code indicates that the server is denying access to the resource as a consequence of a legal
     * demand. The server in question might not be an origin server. This type of legal demand typically most
     * directly affects the operations of ISPs and search engines.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7725
     * @see https://datatracker.ietf.org/doc/html/rfc7725#section-3
     */
    public const STATUS_451 = 451;
    public const MESSAGE_451 = 'Unavailable For Legal Reasons';
    public const STATUS_UNAVAILABLE_FOR_LEGAL_REASONS = self::STATUS_451;
    public const MESSAGE_UNAVAILABLE_FOR_LEGAL_REASONS = self::MESSAGE_451;

    /**
     * Status 500
     *
     * The 500 (Internal Server Error) status code indicates that the server encountered an unexpected condition
     * that prevented it from fulfilling the request.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.6.1
     */
    public const STATUS_500 = 500;
    public const MESSAGE_500 = 'Internal Server Error';
    public const STATUS_INTERNAL_SERVER_ERROR = self::STATUS_500;
    public const MESSAGE_INTERNAL_SERVER_ERROR = self::MESSAGE_500;

    /**
     * Status 501
     *
     * The 501 (Not Implemented) status code indicates that the server does not support the functionality required
     * to fulfill the request. This is the appropriate response when the server does not recognize the request
     * method and is not capable of supporting it for any resource.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.6.2
     */
    public const STATUS_501 = 501;
    public const MESSAGE_501 = 'Not Implemented';
    public const STATUS_NOT_IMPLEMENTED = self::STATUS_501;
    public const MESSAGE_NOT_IMPLEMENTED = self::MESSAGE_501;

    /**
     * Status 502
     *
     * The 502 (Bad Gateway) status code indicates that the server, while acting as a gateway or proxy, received an
     * invalid response from an inbound server it accessed while attempting to fulfill the request.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.6.3
     */
    public const STATUS_502 = 502;
    public const MESSAGE_502 = 'Bad Gateway';
    public const STATUS_BAD_GATEWAY = self::STATUS_502;
    public const MESSAGE_BAD_GATEWAY = self::MESSAGE_502;

    /**
     * Status 503
     *
     * The 503 (Service Unavailable) status code indicates that the server is currently unable to handle the request
     * due to a temporary overload or scheduled maintenance, which will likely be alleviated after some delay. The
     * server MAY send a Retry-After header field to suggest an appropriate amount of time for the client to wait
     * before retrying the request.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.6.4
     */
    public const STATUS_503 = 503;
    public const MESSAGE_503 = 'Service Unavailable';
    public const STATUS_SERVICE_UNAVAILABLE = self::STATUS_503;
    public const MESSAGE_SERVICE_UNAVAILABLE = self::MESSAGE_503;

    /**
     * Status 504
     *
     * The 504 (Gateway Timeout) status code indicates that the server, while acting as a gateway or proxy, did not
     * receive a timely response from an upstream server it needed to access in order to complete the request.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.6.5
     */
    public const STATUS_504 = 504;
    public const MESSAGE_504 = 'Gateway Timeout';
    public const STATUS_GATEWAY_TIMEOUT = self::STATUS_504;
    public const MESSAGE_GATEWAY_TIMEOUT = self::MESSAGE_504;

    /**
     * Status 505
     *
     * The 505 (HTTP Version Not Supported) status code indicates that the server does not support, or refuses to
     * support, the major version of HTTP that was used in the request message. The server is indicating that it is
     * unable or unwilling to complete the request using the same major version as the client, other than with this
     * error message. The server SHOULD generate a representation for the 505 response that describes why that
     * version is not supported and what other protocols are supported by that server.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-6.6.6
     */
    public const STATUS_505 = 505;
    public const MESSAGE_505 = 'HTTP Version Not Supported';
    public const STATUS_HTTP_VERSION_NOT_SUPPORTED = self::STATUS_505;
    public const MESSAGE_HTTP_VERSION_NOT_SUPPORTED = self::MESSAGE_505;

    /**
     * Status 506
     *
     * The 506 status code indicates that the server has an internal configuration error: the chosen variant
     * resource is configured to engage in transparent content negotiation itself, and is therefore not a proper end
     * point in the negotiation process.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/2295
     * @see https://datatracker.ietf.org/doc/html/rfc7725#section-3
     */
    public const STATUS_506 = 506;
    public const MESSAGE_506 = 'Variant Also Negotiates';
    public const STATUS_VARIANT_ALSO_NEGOTIATES = self::STATUS_506;
    public const MESSAGE_VARIANT_ALSO_NEGOTIATES = self::MESSAGE_506;

    /**
     * Status 507
     *
     * The 507 (Insufficient Storage) status code means the method could not be performed on the resource because
     * the server is unable to store the representation needed to successfully complete the request. This condition
     * is considered to be temporary. If the request that received this status code was the result of a user action,
     * the request MUST NOT be repeated until it is requested by a separate user action.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4918
     * @see https://datatracker.ietf.org/doc/html/rfc4918#section-11.5
     */
    public const STATUS_507 = 507;
    public const MESSAGE_507 = 'Insufficient Storage';
    public const STATUS_INSUFFICIENT_STORAGE = self::STATUS_507;
    public const MESSAGE_INSUFFICIENT_STORAGE = self::MESSAGE_507;

    /**
     * Status 508
     *
     * The 508 (Loop Detected) status code indicates that the server terminated an operation because it encountered
     * an infinite loop while processing a request with "Depth: infinity". This status indicates that the entire
     * operation failed.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5842
     * @see https://datatracker.ietf.org/doc/html/rfc5842#section-7.1
     */
    public const STATUS_508 = 508;
    public const MESSAGE_508 = 'Loop Detected';
    public const STATUS_LOOP_DETECTED = self::STATUS_508;
    public const MESSAGE_LOOP_DETECTED = self::MESSAGE_508;

    /**
     * Status 510
     *
     * The policy for accessing the resource has not been met in the request. The server should send back all the
     * information necessary for the client to issue an extended request. It is outside the scope of this
     * specification to specify how the extensions inform the client.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/2774
     * @see https://datatracker.ietf.org/doc/html/rfc2774#section-7
     */
    public const STATUS_510 = 510;
    public const MESSAGE_510 = 'Not Extended';
    public const STATUS_NOT_EXTENDED = self::STATUS_510;
    public const MESSAGE_NOT_EXTENDED = self::MESSAGE_510;

    /**
     * Status 511
     *
     * The 511 status code indicates that the client needs to authenticate to gain network access.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6585
     * @see https://datatracker.ietf.org/doc/html/rfc6585#section-6
     */
    public const STATUS_511 = 511;
    public const MESSAGE_511 = 'Network Authentication Required';
    public const STATUS_NETWORK_AUTHENTICATION_REQUIRED = self::STATUS_511;
    public const MESSAGE_NETWORK_AUTHENTICATION_REQUIRED = self::MESSAGE_511;
}
