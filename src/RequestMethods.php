<?php

declare(strict_types=1);

namespace CryptoScythe\Http;

/**
 * Class RequestMethods
 *
 * @see https://webconcepts.info/concepts/http-method/
 * @see https://www.iana.org/assignments/http-methods/http-methods.xhtml#methods
 */
final class RequestMethods {
    /**
     * Request method ACL
     *
     * The ACL method modifies the access control list (which can be read via the DAV:acl property) of a resource.
     * Specifically, the ACL method only permits modification to ACEs that are not inherited, and are not protected.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/3744
     * @see https://datatracker.ietf.org/doc/html/rfc3744#section-8.1
     */
    public const ACL = 'ACL';

    /**
     * Request method BASELINE-CONTROL
     *
     * A collection can be placed under baseline control with a BASELINE-CONTROL request. When a collection is
     * placed under baseline control, the DAV:version-controlled-configuration property of the collection is set to
     * identify a new version-controlled configuration. This version-controlled configuration can be checked out and
     * then checked in to create a new baseline for that collection.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/3253
     * @see https://datatracker.ietf.org/doc/html/rfc3253#section-12.6
     */
    public const BASELINE_CONTROL = 'BASELINE-CONTROL';

    /**
     * Request method BIND
     *
     * The BIND method modifies the collection identified by the Request-URI, by adding a new binding from the
     * segment specified in the BIND body to the resource identified in the BIND body.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5842
     * @see https://datatracker.ietf.org/doc/html/rfc5842#section-4
     */
    public const BIND = 'BIND';

    /**
     * Request method CHECKIN
     *
     * A CHECKIN request can be applied to a checked-out version-controlled resource to produce a new version whose
     * content and dead properties are copied from the checked-out resource.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/3253
     * @see https://datatracker.ietf.org/doc/html/rfc3253#section-4.4
     */
    public const CHECKIN = 'CHECKIN';

    /**
     * Request method CHECKOUT
     *
     * A CHECKOUT request can be applied to a checked-in version-controlled resource to allow modifications to the
     * content and dead properties of that version-controlled resource.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/3253
     * @see https://datatracker.ietf.org/doc/html/rfc3253#section-4.3
     */
    public const CHECKOUT = 'CHECKOUT';

    /**
     * Request method CONNECT
     *
     * The CONNECT method requests that the recipient establish a tunnel to the destination origin server identified
     * by the request-target and, if successful, thereafter restrict its behavior to blind forwarding of packets, in
     * both directions, until the tunnel is closed. Tunnels are commonly used to create an end-to-end virtual
     * connection, through one or more proxies, which can then be secured using TLS (Transport Layer Security).
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-4.3.6
     */
    public const CONNECT = 'CONNECT';

    /**
     * Request method COPY
     *
     * The COPY method creates a duplicate of the source resource identified by the Request-URI, in the destination
     * resource identified by the URI in the Destination header. The Destination header MUST be present. The exact
     * behavior of the COPY method depends on the type of the source resource.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4918
     * @see https://datatracker.ietf.org/doc/html/rfc4918#section-9.8
     */
    public const COPY = 'COPY';

    /**
     * Request method DELETE
     *
     * The DELETE method requests that the origin server remove the association between the target resource and its
     * current functionality. In effect, this method is similar to the rm command in UNIX: it expresses a deletion
     * operation on the URI mapping of the origin server rather than an expectation that the previously associated
     * information be deleted.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-4.3.5
     */
    public const DELETE = 'DELETE';

    /**
     * Request method GET
     *
     * The GET method requests transfer of a current selected representation for the target resource. GET is the
     * primary mechanism of information retrieval and the focus of almost all performance optimizations. Hence, when
     * people speak of retrieving some identifiable information via HTTP, they are generally referring to making a
     * GET request.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-4.3.1
     */
    public const GET = 'GET';

    /**
     * Request method HEAD
     *
     * The HEAD method is identical to GET except that the server MUST NOT send a message body in the response
     * (i.e., the response terminates at the end of the header section). The server SHOULD send the same header
     * fields in response to a HEAD request as it would have sent if the request had been a GET, except that the
     * payload header fields MAY be omitted. This method can be used for obtaining metadata about the selected
     * representation without transferring the representation data and is often used for testing hypertext links for
     * validity, accessibility, and recent modification.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-4.3.2
     */
    public const HEAD = 'HEAD';

    /**
     * Request method LABEL
     *
     * A LABEL request can be applied to a version to modify the labels that select that version. The case of a
     * label name MUST be preserved when it is stored and retrieved. When comparing two label names to decide if
     * they match or not, a server SHOULD use a case-sensitive URL-escaped UTF-8 encoded comparison of the two label
     * names.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/3253
     * @see https://datatracker.ietf.org/doc/html/rfc3253#section-8.2
     */
    public const LABEL = 'LABEL';

    /**
     * Request method LINK
     *
     * The LINK method is used to establish one or more relationships between the resource identified by the
     * effective request URI and one or more other resources.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/snell-link-method
     * @see https://datatracker.ietf.org/doc/html/draft-snell-link-method#section-3
     */
    public const LINK = 'LINK';

    /**
     * Request method LOCK
     *
     * The LOCK method is used to take out a lock of any access type and to refresh an existing lock.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4918
     * @see https://datatracker.ietf.org/doc/html/rfc4918#section-9.10
     */
    public const LOCK = 'LOCK';

    /**
     * Request method MERGE
     *
     * The MERGE method performs the logical merge of a specified version (the "merge source") into a specified
     * version-controlled resource (the "merge target"). If the merge source is neither an ancestor nor a descendant
     * of the DAV:checked-in or DAV:checked-out version of the merge target, the MERGE checks out the merge target
     * (if it is not already checked out) and adds the URL of the merge source to the DAV:merge-set of the merge
     * target.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/3253
     * @see https://datatracker.ietf.org/doc/html/rfc3253#section-11.2
     */
    public const MERGE = 'MERGE';

    /**
     * Request method MKACTIVITY
     *
     * A MKACTIVITY request creates a new activity resource. A server MAY restrict activity creation to particular
     * collections, but a client can determine the location of these collections from a DAV:activity-collection-set
     * OPTIONS request.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/3253
     * @see https://datatracker.ietf.org/doc/html/rfc3253#section-13.5
     */
    public const MKACTIVITY = 'MKACTIVITY';

    /**
     * Request method MKCALENDAR
     *
     * An HTTP request using the MKCALENDAR method creates a new calendar collection resource. A server MAY restrict
     * calendar collection creation to particular collections.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4791
     * @see https://datatracker.ietf.org/doc/html/rfc4791#section-5.3.1
     */
    public const MKCALENDAR = 'MKCALENDAR';

    /**
     * Request method MKCOL
     *
     * MKCOL creates a new collection resource at the location specified by the Request-URI. If the Request-URI is
     * already mapped to a resource, then the MKCOL MUST fail. During MKCOL processing, a server MUST make the
     * Request-URI an internal member of its parent collection, unless the Request-URI is "/". If no such ancestor
     * exists, the method MUST fail. When the MKCOL operation creates a new collection resource, all ancestors MUST
     * already exist, or the method MUST fail with a 409 (Conflict) status code.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4918
     * @see https://datatracker.ietf.org/doc/html/rfc4918#section-9.3
     */
    public const MKCOL = 'MKCOL';

    /**
     * Request method MKREDIRECTREF
     *
     * The MKREDIRECTREF method requests the creation of a redirect reference resource.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4437
     * @see https://datatracker.ietf.org/doc/html/rfc4437#section-6
     */
    public const MKREDIRECTREF = 'MKREDIRECTREF';

    /**
     * Request method MKWORKSPACE
     *
     * A MKWORKSPACE request creates a new workspace resource. A server MAY restrict workspace creation to
     * particular collections, but a client can determine the location of these collections from a
     * DAV:workspace-collection-set OPTIONS request.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/3253
     * @see https://datatracker.ietf.org/doc/html/rfc3253#section-6.3
     */
    public const MKWORKSPACE = 'MKWORKSPACE';

    /**
     * Request method MOVE
     *
     * The MOVE operation on a non-collection resource is the logical equivalent of a copy (COPY), followed by
     * consistency maintenance processing, followed by a delete of the source, where all three actions are performed
     * in a single operation. The consistency maintenance step allows the server to perform updates caused by the
     * move, such as updating all URLs, other than the Request-URI that identifies the source resource, to point to
     * the new destination resource.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4918
     * @see https://datatracker.ietf.org/doc/html/rfc4918#section-9.9
     */
    public const MOVE = 'MOVE';

    /**
     * Request method OPTIONS
     *
     * The OPTIONS method requests information about the communication options available for the target resource, at
     * either the origin server or an intervening intermediary. This method allows a client to determine the options
     * and/or requirements associated with a resource, or the capabilities of a server, without implying a resource
     * action.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-4.3.7
     */
    public const OPTIONS = 'OPTIONS';

    /**
     * Request method ORDERPATCH
     *
     * The ORDERPATCH method is used to change the ordering semantics of a collection, to change the order of the
     * collection's members in the ordering, or both.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/3648
     * @see https://datatracker.ietf.org/doc/html/rfc3648#section-7
     */
    public const ORDERPATCH = 'ORDERPATCH';

    /**
     * Request method PATCH
     *
     * The PATCH method requests that a set of changes described in the request entity be applied to the resource
     * identified by the Request-URI. The set of changes is represented in a format called a "patch document"
     * identified by a media type. If the Request-URI does not point to an existing resource, the server MAY create
     * a new resource, depending on the patch document type (whether it can logically modify a null resource) and
     * permissions, etc.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5789
     * @see https://datatracker.ietf.org/doc/html/rfc5789#section-2
     */
    public const PATCH = 'PATCH';

    /**
     * Request method POST
     *
     * The POST method requests that the target resource process the representation enclosed in the request
     * according to the resource's own specific semantics.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-4.3.3
     */
    public const POST = 'POST';

    /**
     * Request method PRI
     *
     * This method is never used by an actual client. This method will appear to be used when an HTTP/1.1 server or
     * intermediary attempts to parse an HTTP/2 connection preface.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7540
     * @see https://datatracker.ietf.org/doc/html/rfc7540#section-3.5
     */
    public const PRI = 'PRI';

    /**
     * Request method PROPFIND
     *
     * The PROPFIND method retrieves properties defined on the resource identified by the Request-URI, if the
     * resource does not have any internal members, or on the resource identified by the Request-URI and potentially
     * its member resources, if the resource is a collection that has internal member URLs.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4918
     * @see https://datatracker.ietf.org/doc/html/rfc4918#section-9.1
     */
    public const PROPFIND = 'PROPFIND';

    /**
     * Request method PROPPATCH
     *
     * The PROPPATCH method processes instructions specified in the request body to set and/or remove properties
     * defined on the resource identified by the Request-URI.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4918
     * @see https://datatracker.ietf.org/doc/html/rfc4918#section-9.2
     */
    public const PROPPATCH = 'PROPPATCH';

    /**
     * Request method PUT
     *
     * The PUT method requests that the state of the target resource be created or replaced with the state defined
     * by the representation enclosed in the request message payload. A successful PUT of a given representation
     * would suggest that a subsequent GET on that same target resource will result in an equivalent representation
     * being sent in a 200 (OK) response. However, there is no guarantee that such a state change will be
     * observable, since the target resource might be acted upon by other user agents in parallel, or might be
     * subject to dynamic processing by the origin server, before any subsequent GET is received. A successful
     * response only implies that the user agent's intent was achieved at the time of its processing by the origin
     * server.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-4.3.4
     */
    public const PUT = 'PUT';

    /**
     * Request method QUERY
     *
     * The QUERY method is used to initiate a server-side query. Unlike the HTTP GET method, which requests that a
     * server return a representation of the resource identified by the target URI, the QUERY method is used to ask
     * the server to perform a query operation (described by the request payload) over some set of data scoped to
     * the effective request URI. The payload returned in response to a QUERY cannot be assumed to be a
     * representation of the resource identified by the effective request URI.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-httpbis-safe-method-w-body
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-httpbis-safe-method-w-body#section-2
     */
    public const QUERY = 'QUERY';

    /**
     * Request method REBIND
     *
     * The REBIND method removes a binding to a resource from a collection, and adds a binding to that resource into
     * the collection identified by the Request-URI. The request body specifies the binding to be added (segment)
     * and the old binding to be removed (href). It is effectively an atomic form of a MOVE request, and MUST be
     * treated the same way as MOVE for the purpose of determining access permissions.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5842
     * @see https://datatracker.ietf.org/doc/html/rfc5842#section-6
     */
    public const REBIND = 'REBIND';

    /**
     * Request method REPORT
     *
     * A REPORT request is an extensible mechanism for obtaining information about a resource. Unlike a resource
     * property, which has a single value, the value of a report can depend on additional information specified in
     * the REPORT request body and in the REPORT request headers.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/3253
     * @see https://datatracker.ietf.org/doc/html/rfc3253#section-3.6
     */
    public const REPORT = 'REPORT';

    /**
     * Request method SEARCH
     *
     * The client invokes the SEARCH method to initiate a server-side search. The body of the request defines the
     * query. The server MUST emit an entity matching the WebDAV multistatus format.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5323
     * @see https://datatracker.ietf.org/doc/html/rfc5323#section-2
     */
    public const SEARCH = 'SEARCH';

    /**
     * Request method TRACE
     *
     * The TRACE method requests a remote, application-level loop-back of the request message. The final recipient
     * of the request SHOULD reflect the message received, excluding some fields described below, back to the client
     * as the message body of a 200 (OK) response with a Content-Type of "message/http". The final recipient is
     * either the origin server or the first server to receive a Max-Forwards value of zero (0) in the request.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-4.3.8
     */
    public const TRACE = 'TRACE';

    /**
     * Request method UNBIND
     *
     * The UNBIND method modifies the collection identified by the Request-URI by removing the binding identified by
     * the segment specified in the UNBIND body.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5842
     * @see https://datatracker.ietf.org/doc/html/rfc5842#section-5
     */
    public const UNBIND = 'UNBIND';

    /**
     * Request method UNCHECKOUT
     *
     * An UNCHECKOUT request can be applied to a checked-out version-controlled resource to cancel the CHECKOUT and
     * restore the pre-CHECKOUT state of the version-controlled resource.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/3253
     * @see https://datatracker.ietf.org/doc/html/rfc3253#section-4.5
     */
    public const UNCHECKOUT = 'UNCHECKOUT';

    /**
     * Request method UNLINK
     *
     * The UNLINK method is used to remove one or more relationships between the resource identified by the
     * effective request URI and other resources.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/snell-link-method
     * @see https://datatracker.ietf.org/doc/html/draft-snell-link-method#section-4
     */
    public const UNLINK = 'UNLINK';

    /**
     * Request method UNLOCK
     *
     * The UNLOCK method removes the lock identified by the lock token in the Lock-Token request header. The
     * Request-URI MUST identify a resource within the scope of the lock.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4918
     * @see https://datatracker.ietf.org/doc/html/rfc4918#section-9.11
     */
    public const UNLOCK = 'UNLOCK';

    /**
     * Request method UPDATE
     *
     * The UPDATE method modifies the content and dead properties of a checked-in version-controlled resource (the
     * "update target") to be those of a specified version (the "update source") from the version history of that
     * version-controlled resource.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/3253
     * @see https://datatracker.ietf.org/doc/html/rfc3253#section-7.1
     */
    public const UPDATE = 'UPDATE';

    /**
     * Request method UPDATEREDIRECTREF
     *
     * The UPDATEREDIRECTREF method requests the update of a redirect reference resource.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4437
     * @see https://datatracker.ietf.org/doc/html/rfc4437#section-7
     */
    public const UPDATEREDIRECTREF = 'UPDATEREDIRECTREF';

    /**
     * Request method VERSION-CONTROL
     *
     * A VERSION-CONTROL request can be used to create a version-controlled resource at the request-URL. It can be
     * applied to a versionable resource or to a version-controlled resource.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/3253
     * @see https://datatracker.ietf.org/doc/html/rfc3253#section-3.5
     */
    public const VERSION_CONTROL = 'VERSION-CONTROL';
}
