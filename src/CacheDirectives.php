<?php

declare(strict_types=1);

namespace CryptoScytheHttp;

/**
 * Class CacheDirectives
 *
 * @see https://webconcepts.info/concepts/http-cache-directive/
 * @see https://www.iana.org/assignments/http-cache-directives/http-cache-directives.xhtml
 */
final class CacheDirectives {
    /**
     * Cache directive immutable
     *
     * When present in an HTTP response, the immutable Cache-Control extension indicates that the origin server MUST
     * NOT update the representation of that resource during the freshness lifetime of the response.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8246
     * @see https://datatracker.ietf.org/doc/html/rfc8246#section-2
     */
    public const IMMUTABLE = 'immutable';

    /**
     * Cache directive inv-maxage
     *
     * When present, the 'inv-maxage' cache-control extension indicates the number of seconds that caches who
     * implement Linked Cache invalidation can consider responses fresh for, provided they are not invalidated.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/nottingham-linked-cache-inv
     * @see https://datatracker.ietf.org/doc/html/draft-nottingham-linked-cache-inv#section-4
     */
    public const INV_MAXAGE = 'inv-maxage';

    /**
     * Cache directive max-age
     *
     * The "max-age" request directive indicates that the client is unwilling to accept a response whose age is
     * greater than the specified number of seconds. Unless the max-stale request directive is also present, the
     * client is not willing to accept a stale response. The "max-age" response directive indicates that the
     * response is to be considered stale after its age is greater than the specified number of seconds.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7234
     * @see https://datatracker.ietf.org/doc/html/rfc7234#section-5.2.1.1
     */
    public const MAX_AGE = 'max-age';

    /**
     * Cache directive max-stale
     *
     * The "max-stale" request directive indicates that the client is willing to accept a response that has exceeded
     * its freshness lifetime. If max-stale is assigned a value, then the client is willing to accept a response
     * that has exceeded its freshness lifetime by no more than the specified number of seconds. If no value is
     * assigned to max-stale, then the client is willing to accept a stale response of any age.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7234
     * @see https://datatracker.ietf.org/doc/html/rfc7234#section-5.2.1.2
     */
    public const MAX_STALE = 'max-stale';

    /**
     * Cache directive min-fresh
     *
     * The "min-fresh" request directive indicates that the client is willing to accept a response whose freshness
     * lifetime is no less than its current age plus the specified time in seconds. That is, the client wants a
     * response that will still be fresh for at least the specified number of seconds.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7234
     * @see https://datatracker.ietf.org/doc/html/rfc7234#section-5.2.1.3
     */
    public const MIN_FRESH = 'min-fresh';

    /**
     * Cache directive must-revalidate
     *
     * The "must-revalidate" response directive indicates that once it has become stale, a cache MUST NOT use the
     * response to satisfy subsequent requests without successful validation on the origin server.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7234
     * @see https://datatracker.ietf.org/doc/html/rfc7234#section-5.2.2.1
     */
    public const MUST_REVALIDATE = 'must-revalidate';

    /**
     * Cache directive no-cache
     *
     * The "no-cache" request directive indicates that a cache MUST NOT use a stored response to satisfy the request
     * without successful validation on the origin server. The "no-cache" response directive indicates that the
     * response MUST NOT be used to satisfy a subsequent request without successful validation on the origin server.
     * This allows an origin server to prevent a cache from using it to satisfy a request without contacting it,
     * even by caches that have been configured to send stale responses.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7234
     * @see https://datatracker.ietf.org/doc/html/rfc7234#section-5.2.1.4
     */
    public const NO_CACHE = 'no-cache';

    /**
     * Cache directive no-store
     *
     * The "no-store" directive indicates that a cache MUST NOT store any part of either this request or any
     * response to it. This directive applies to both private and shared caches. "MUST NOT store" in this context
     * means that the cache MUST NOT intentionally store the information in non-volatile storage, and MUST make a
     * best-effort attempt to remove the information from volatile storage as promptly as possible after forwarding
     * it.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7234
     * @see https://datatracker.ietf.org/doc/html/rfc7234#section-5.2.1.5
     */
    public const NO_STORE = 'no-store';

    /**
     * Cache directive no-transform
     *
     * The "no-transform" directive indicates that an intermediary (whether or not it implements a cache) MUST NOT
     * transform the payload.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7234
     * @see https://datatracker.ietf.org/doc/html/rfc7234#section-5.2.1.6
     */
    public const NO_TRANSFORM = 'no-transform';

    /**
     * Cache directive only-if-cached
     *
     * The "only-if-cached" request directive indicates that the client only wishes to obtain a stored response. If
     * it receives this directive, a cache SHOULD either respond using a stored response that is consistent with the
     * other constraints of the request, or respond with a 504 (Gateway Timeout) status code. If a group of caches
     * is being operated as a unified system with good internal connectivity, a member cache MAY forward such a
     * request within that group of caches.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7234
     * @see https://datatracker.ietf.org/doc/html/rfc7234#section-5.2.1.7
     */
    public const ONLY_IF_CACHED = 'only-if-cached';

    /**
     * Cache directive private
     *
     * The "private" response directive indicates that the response message is intended for a single user and MUST
     * NOT be stored by a shared cache. A private cache MAY store the response and reuse it for later requests, even
     * if the response would normally be non-cacheable.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7234
     * @see https://datatracker.ietf.org/doc/html/rfc7234#section-5.2.2.6
     */
    public const PRIVATE = 'private';

    /**
     * Cache directive proxy-revalidate
     *
     * The "proxy-revalidate" response directive has the same meaning as the must-revalidate response directive,
     * except that it does not apply to private caches.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7234
     * @see https://datatracker.ietf.org/doc/html/rfc7234#section-5.2.2.7
     */
    public const PROXY_REVALIDATE = 'proxy-revalidate';

    /**
     * Cache directive public
     *
     * The "public" response directive indicates that any cache MAY store the response, even if the response would
     * normally be non-cacheable or cacheable only within a private cache.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7234
     * @see https://datatracker.ietf.org/doc/html/rfc7234#section-5.2.2.5
     */
    public const PUBLIC = 'public';

    /**
     * Cache directive s-maxage
     *
     * The "s-maxage" response directive indicates that, in shared caches, the maximum age specified by this
     * directive overrides the maximum age specified by either the max-age directive or the Expires header field.
     * The s-maxage directive also implies the semantics of the proxy-revalidate response directive.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7234
     * @see https://datatracker.ietf.org/doc/html/rfc7234#section-5.2.2.9
     */
    public const S_MAXAGE = 's-maxage';

    /**
     * Cache directive stale-if-error
     *
     * The stale-if-error Cache-Control extension indicates that when an error is encountered, a cached stale
     * response MAY be used to satisfy the request, regardless of other freshness information.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5861
     * @see https://datatracker.ietf.org/doc/html/rfc5861#section-4
     */
    public const STALE_IF_ERROR = 'stale-if-error';

    /**
     * Cache directive stale-while-revalidate
     *
     * When present in an HTTP response, the stale-while-revalidate Cache-Control extension indicates that caches
     * MAY serve the response in which it appears after it becomes stale, up to the indicated number of seconds.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5861
     * @see https://datatracker.ietf.org/doc/html/rfc5861#section-3
     */
    public const STALE_WHILE_REVALIDATE = 'stale-while-revalidate';
}
