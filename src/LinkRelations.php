<?php

declare(strict_types=1);

namespace CryptoScythe\Http;

/**
 * Class LinkRelations
 *
 * @see https://webconcepts.info/concepts/link-relation/
 * @see https://www.iana.org/assignments/link-relations/link-relations.xhtml
 */
final class LinkRelations {
    /**
     * Link relation P3Pv1
     *
     * Servers MAY serve HTML content with embedded link tags that indicate the location of the relevant P3P policy
     * reference file.
     *
     * @see https://webconcepts.info/specs/W3C/TR/P3P
     * @see https://www.w3.org/TR/P3P/#syntax_link
     */
    public const P3PV1 = 'P3Pv1';

    /**
     * Link relation about
     *
     * The "about" link relation can be used to refer to a resource that is the subject or topic of the link's
     * context. Multiple subjects can be indicated through the use of multiple "about" link relations.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6903
     * @see https://datatracker.ietf.org/doc/html/rfc6903#section-2
     */
    public const ABOUT = 'about';

    /**
     * Link relation alternate
     *
     * The value "alternate" signifies that the IRI in the value of the href attribute identifies an alternate
     * version of the resource described by the containing element.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4287
     * @see https://datatracker.ietf.org/doc/html/rfc4287#section-4.2.7.2
     * 
     * Designates substitute versions for the document in which the link occurs. When used together with the lang
     * attribute, it implies a translated version of the document. When used together with the media attribute, it
     * implies a version designed for a different medium (or media).
     *
     * @see https://webconcepts.info/specs/W3C/TR/html
     * @see https://www.w3.org/TR/html/links.html#link-type-alternate
     */
    public const ALTERNATE = 'alternate';

    /**
     * Link relation appendix
     *
     * Refers to a document serving as an appendix in a collection of documents.
     *
     * @see https://webconcepts.info/specs/W3C/TR/html4
     * @see https://www.w3.org/TR/html4/types.html#type-links
     */
    public const APPENDIX = 'appendix';

    /**
     * Link relation authenticate
     *
     * The "authenticate" can be used to link to a resource that hosts a page where a user can authenticate itself
     * for the current resource.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/pot-authentication-link
     * @see https://datatracker.ietf.org/doc/html/draft-pot-authentication-link#section-2
     */
    public const AUTHENTICATE = 'authenticate';

    /**
     * Link relation authenticated-as
     *
     * The "authenticated-as" link refers to a resource that describes the effective authenticated user for a HTTP
     * response.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/pot-authentication-link
     * @see https://datatracker.ietf.org/doc/html/draft-pot-authentication-link#section-3
     */
    public const AUTHENTICATED_AS = 'authenticated-as';

    /**
     * Link relation author
     *
     * The author keyword indicates that the referenced document provides further information about the author for
     * the page as a whole.
     *
     * @see https://webconcepts.info/specs/W3C/TR/html
     * @see https://www.w3.org/TR/html/links.html#link-type-author
     */
    public const AUTHOR = 'author';

    /**
     * Link relation authorization_endpoint
     *
     * After obtaining the End-User's profile URL, the client fetches the URL and looks for the
     * authorization_endpoint and token_endpoint rel values in the HTTP Link headers and HTML <link> tags. The
     * client builds the authorization request URL by starting with the discovered authorization_endpoint URL.
     *
     * @see https://webconcepts.info/specs/W3C/TR/indieauth
     * @see https://www.w3.org/TR/indieauth/#discovery-1
     */
    public const AUTHORIZATION_ENDPOINT = 'authorization_endpoint';

    /**
     * Link relation bcc
     *
     * Refers to a resource that is considered to be part of the private secondary audience of the link's context.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/snell-more-link-relations
     * @see https://datatracker.ietf.org/doc/html/draft-snell-more-link-relations#section-3
     */
    public const BCC = 'bcc';

    /**
     * Link relation bfrom
     *
     * Refers to a resource that is privately considered to be the originator of the link's context.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/snell-more-link-relations
     * @see https://datatracker.ietf.org/doc/html/draft-snell-more-link-relations#section-3
     */
    public const BFROM = 'bfrom';

    /**
     * Link relation bookmark
     *
     * The bookmark keyword gives a permalink for the nearest ancestor article element of the linking element in
     * question, or of the section the linking element is most closely associated with, if there are no ancestor
     * article elements.
     *
     * @see https://webconcepts.info/specs/W3C/TR/html
     * @see https://www.w3.org/TR/html/links.html#link-type-bookmark
     */
    public const BOOKMARK = 'bookmark';

    /**
     * Link relation boundto
     *
     * The purpose of a boundto relation type is to indicate that there is a binding between a source resource and a
     * destination resource for the purposes of synchronizing their content.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-core-dynlink
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-core-dynlink#section-6.2
     */
    public const BOUNDTO = 'boundto';

    /**
     * Link relation bto
     *
     * Refers to a resource that is considered to be part of the private primary audience of the link's context.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/snell-more-link-relations
     * @see https://datatracker.ietf.org/doc/html/draft-snell-more-link-relations#section-3
     */
    public const BTO = 'bto';

    /**
     * Link relation canonical
     *
     * The target (canonical) IRI MUST identify content that is either duplicative or a superset of the content at
     * the context (referring) IRI.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6596
     * @see https://datatracker.ietf.org/doc/html/rfc6596#section-3
     */
    public const CANONICAL = 'canonical';

    /**
     * Link relation cc
     *
     * Refers to a resource that is considered to be  part of the public secondary audience of the link's context.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/snell-more-link-relations
     * @see https://datatracker.ietf.org/doc/html/draft-snell-more-link-relations#section-3
     */
    public const CC = 'cc';

    /**
     * Link relation chapter
     *
     * Refers to a document serving as a chapter in a collection of documents.
     *
     * @see https://webconcepts.info/specs/W3C/TR/html4
     * @see https://www.w3.org/TR/html4/types.html#type-links
     */
    public const CHAPTER = 'chapter';

    /**
     * Link relation cite-as
     *
     * A link with the "cite-as" relation type indicates that, for referencing the link context, use of the URI of
     * the link target is preferred over use of the URI of the link context. It allows the resource identified by
     * the access URI (link context) to unambiguously link to its corresponding reference URI (link target), thereby
     * expressing that the link target is preferred over the link context for the purpose of permanent citation.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8574
     * @see https://datatracker.ietf.org/doc/html/rfc8574#section-4
     */
    public const CITE_AS = 'cite-as';

    /**
     * Link relation collection
     *
     * When included in a resource that represents a member of a collection, the 'collection' link relation
     * identifies a target resource that represents a collection of which the context resource is a member.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6573
     * @see https://datatracker.ietf.org/doc/html/rfc6573#section-2.2
     */
    public const COLLECTION = 'collection';

    /**
     * Link relation contents
     *
     * Refers to a document serving as a table of contents. Some user agents also support the synonym ToC (from
     * "Table of Contents").
     *
     * @see https://webconcepts.info/specs/W3C/TR/html4
     * @see https://www.w3.org/TR/html4/types.html#type-links
     */
    public const CONTENTS = 'contents';

    /**
     * Link relation copyright
     *
     * Refers to a copyright statement for the current document.
     *
     * @see https://webconcepts.info/specs/W3C/TR/html4
     * @see https://www.w3.org/TR/html4/types.html#type-links
     */
    public const COPYRIGHT = 'copyright';

    /**
     * Link relation create
     *
     * This indicates a target to use for creating new instances of a schema. This link definition SHOULD be a
     * submission link with a non-safe method (like POST).
     *
     * @see https://webconcepts.info/specs/IETF/I-D/zyp-json-schema
     * @see https://datatracker.ietf.org/doc/html/draft-zyp-json-schema#section-6.1.1.2
     */
    public const CREATE = 'create';

    /**
     * Link relation create-form
     *
     * When included in a response, the "create-form" link relation indicates a target resource that represents a
     * form that can be used to append a new member to the link context.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6861
     * @see https://datatracker.ietf.org/doc/html/rfc6861#section-3.1
     */
    public const CREATE_FORM = 'create-form';

    /**
     * Link relation current
     *
     * A URI that, when dereferenced, returns a feed document containing the most recent entries in the feed.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5005
     * @see https://datatracker.ietf.org/doc/html/rfc5005#section-4
     */
    public const CURRENT = 'current';

    /**
     * Link relation deprecation
     *
     * In addition to the Deprecation HTTP header field, the server can use links with the "deprecation" link
     * relation type to communicate to the client where to find more information about deprecation of the context.
     * This information can be in the form of documentation of the resource including details about the deprecation
     * related aspects of the context or the deprecation policy of the context provider or both for example.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-httpapi-deprecation-header
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-httpapi-deprecation-header#section-3
     */
    public const DEPRECATION = 'deprecation';

    /**
     * Link relation derivedfrom
     *
     * The document linked to was later converted to the document that contains this link relation. For example, an
     * RFC can have a link to the Internet Draft that became the RFC; in that case, the link relation would be
     * "derivedfrom".
     *
     * @see https://webconcepts.info/specs/IETF/I-D/hoffman-xml2rfc
     * @see https://datatracker.ietf.org/doc/html/draft-hoffman-xml2rfc#section-6.2
     */
    public const DERIVEDFROM = 'derivedfrom';

    /**
     * Link relation describedby
     *
     * The relationship A describedby B asserts that resource B provides a description of resource A. There are no
     * constraints on the format or representation of either A or B, neither are there any further constraints on
     * either resource.
     *
     * @see https://webconcepts.info/specs/W3C/TR/ldp
     * @see https://www.w3.org/TR/ldp/#link-relation-describedby
     * 
     * The relationship A 'describedby' B asserts that resource B provides a description of resource A. There are no
     * constraints on the format or representation of either A or B, neither are there any further constraints on
     * either resource.
     *
     * @see https://webconcepts.info/specs/W3C/TR/powder-dr
     * @see https://www.w3.org/TR/powder-dr/#appD
     */
    public const DESCRIBEDBY = 'describedby';

    /**
     * Link relation describes
     *
     * The relationship A 'describes' B asserts that resource A provides a description of resource B. There are no
     * constraints on the format or representation of either A or B, neither are there any further constraints on
     * either resource.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6892
     * @see https://datatracker.ietf.org/doc/html/rfc6892#section-2
     */
    public const DESCRIBES = 'describes';

    /**
     * Link relation disclosure
     *
     * Whenever the 'disclosure' relation type is used, the resource at the target Internationalized Resource
     * Identifier (IRI) MUST represent a list of patent disclosures made with respect to the material referenced by
     * context IRI.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6579
     * @see https://datatracker.ietf.org/doc/html/rfc6579#section-2
     */
    public const DISCLOSURE = 'disclosure';

    /**
     * Link relation dns-prefetch
     *
     * The dns-prefetch link relation type is used to indicate an origin that will be used to fetch required
     * resources, and that the user agent SHOULD resolve as early as possible.
     *
     * @see https://webconcepts.info/specs/W3C/TR/resource-hints
     * @see www.w3.org/TR/resource-hints/#dns-prefetch
     */
    public const DNS_PREFETCH = 'dns-prefetch';

    /**
     * Link relation down
     *
     * An Atom link element with a rel attribute value of "down" may be used to reference a resource where child
     * entries of an entry may be found.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/divilly-atom-hierarchy
     * @see https://datatracker.ietf.org/doc/html/draft-divilly-atom-hierarchy#section-2.2
     */
    public const DOWN = 'down';

    /**
     * Link relation edit
     *
     * The value of "edit" specifies that the value of the href attribute is the IRI of an editable Member Entry.
     * When appearing within an atom:entry, the href IRI can be used to retrieve, update, and delete the Resource
     * represented by that Entry. An atom:entry MUST NOT contain more than one "edit" link relation.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5023
     * @see https://datatracker.ietf.org/doc/html/rfc5023#section-11.1
     */
    public const EDIT = 'edit';

    /**
     * Link relation edit-form
     *
     * When included in a response, the "edit-form" link relation indicates a target resource that represents a form
     * that can be used for updating the context resource.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6861
     * @see https://datatracker.ietf.org/doc/html/rfc6861#section-3.2
     */
    public const EDIT_FORM = 'edit-form';

    /**
     * Link relation edit-media
     *
     * When appearing within an atom:entry, the value of the href attribute is an IRI that can be used to modify a
     * Media Resource associated with that Entry.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5023
     * @see https://datatracker.ietf.org/doc/html/rfc5023#section-11.2
     */
    public const EDIT_MEDIA = 'edit-media';

    /**
     * Link relation enclosure
     *
     * The value "enclosure" signifies that the IRI in the value of the href attribute identifies a related resource
     * that is potentially large in size and might require special handling. For atom:link elements with
     * rel="enclosure", the length attribute SHOULD be provided.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4287
     * @see https://datatracker.ietf.org/doc/html/rfc4287#section-4.2.7.2
     */
    public const ENCLOSURE = 'enclosure';

    /**
     * Link relation external
     *
     * Indicates that the referenced document is not part of the same site as the current document.
     *
     * @see https://webconcepts.info/specs/W3C/TR/html
     * @see https://www.w3.org/TR/html/links.html#link-type-external
     */
    public const EXTERNAL = 'external';

    /**
     * Link relation first
     *
     * A URI that refers to the furthest preceding document in a series of documents.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5005
     * @see https://datatracker.ietf.org/doc/html/rfc5005#section-3
     */
    public const FIRST = 'first';

    /**
     * Link relation from
     *
     * Refers to a resource that is publicly considered to be the originator of the link's context.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/snell-more-link-relations
     * @see https://datatracker.ietf.org/doc/html/draft-snell-more-link-relations#section-3
     */
    public const FROM = 'from';

    /**
     * Link relation full
     *
     * This indicates that the target of the link is the full representation for the instance object. The object
     * that contains this link possibly may not be the full representation.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/zyp-json-schema
     * @see https://datatracker.ietf.org/doc/html/draft-zyp-json-schema#section-6.1.1.2
     */
    public const FULL = 'full';

    /**
     * Link relation generator
     *
     * Refers to the resource that generated the context  resource. Typically, this would be used to identify the
     * software application that created the context resource.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/snell-more-link-relations
     * @see https://datatracker.ietf.org/doc/html/draft-snell-more-link-relations#section-3
     */
    public const GENERATOR = 'generator';

    /**
     * Link relation glossary
     *
     * Refers to a document providing a glossary of terms that pertain to the current document.
     *
     * @see https://webconcepts.info/specs/W3C/TR/html4
     * @see https://www.w3.org/TR/html4/types.html#type-links
     */
    public const GLOSSARY = 'glossary';

    /**
     * Link relation help
     *
     * The help keyword indicates that the referenced document provides help for the page as a whole.
     *
     * @see https://webconcepts.info/specs/W3C/TR/html
     * @see https://www.w3.org/TR/html/links.html#link-type-help
     */
    public const HELP = 'help';

    /**
     * Link relation home
     *
     * The "home" link relation type is used to establish a link to a "home document" resource that provides context
     * and/or starting points for the context resource.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/nottingham-json-home
     * @see https://datatracker.ietf.org/doc/html/draft-nottingham-json-home#section-6
     */
    public const HOME = 'home';

    /**
     * Link relation hosts
     *
     * The "hosts" relation type (from the verb "to host") indicates that the target URI is a resource hosted by the
     * server (i.e., server hosts resource) indicated by the context URI. The target URI MUST be a relative URI of
     * the context URI for this relation type.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6690
     * @see https://datatracker.ietf.org/doc/html/rfc6690#section-2.2
     */
    public const HOSTS = 'hosts';

    /**
     * Link relation hub
     *
     * A potential subscriber initiates discovery by retrieving (GET or HEAD request) the topic to which it wants to
     * subscribe. The HTTP response from the publisher MUST include at least one Link Header with rel=hub (a hub
     * link header) as well as exactly one Link Header with rel=self (the self link header). The former MUST
     * indicate the exact URL of a WebSub hub designated by the publisher.
     *
     * @see https://webconcepts.info/specs/W3C/TR/websub
     * @see https://www.w3.org/TR/websub/#discovery
     */
    public const HUB = 'hub';

    /**
     * Link relation icon
     *
     * The specified resource is an icon representing the page or site, and should be used by the user agent when
     * representing the page in the user interface.
     *
     * @see https://webconcepts.info/specs/W3C/TR/html
     * @see https://www.w3.org/TR/html/links.html#link-type-icon
     */
    public const ICON = 'icon';

    /**
     * Link relation index
     *
     * Refers to a document providing an index for the current document.
     *
     * @see https://webconcepts.info/specs/W3C/TR/html4
     * @see https://www.w3.org/TR/html4/types.html#type-links
     */
    public const INDEX = 'index';

    /**
     * Link relation instances
     *
     * This indicates the target resource that represents collection of instances of a schema.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/zyp-json-schema
     * @see https://datatracker.ietf.org/doc/html/draft-zyp-json-schema#section-6.1.1.2
     */
    public const INSTANCES = 'instances';

    /**
     * Link relation intervalAfter
     *
     * Refers to a resource associated with a time interval that ends before the beginning of the time interval
     * associated with the context resource.
     *
     * @see https://webconcepts.info/specs/W3C/TR/owl-time
     * @see https://www.w3.org/TR/owl-time/#time:intervalAfter
     */
    public const INTERVALAFTER = 'intervalAfter';

    /**
     * Link relation intervalBefore
     *
     * Refers to a resource associated with a time interval that begins after the end of the time interval
     * associated with the context resource.
     *
     * @see https://webconcepts.info/specs/W3C/TR/owl-time
     * @see https://www.w3.org/TR/owl-time/#time:intervalBefore
     */
    public const INTERVALBEFORE = 'intervalBefore';

    /**
     * Link relation intervalContains
     *
     * Refers to a resource associated with a time interval that begins after the beginning of the time interval
     * associated with the context resource, and ends before the end of the time interval associated with the
     * context resource.
     *
     * @see https://webconcepts.info/specs/W3C/TR/owl-time
     * @see https://www.w3.org/TR/owl-time/#time:intervalContains
     */
    public const INTERVALCONTAINS = 'intervalContains';

    /**
     * Link relation intervalDisjoint
     *
     * Refers to a resource associated with a time interval that begins after the end of the time interval
     * associated with the context resource, or ends before the beginning of the time interval associated with the
     * context resource.
     *
     * @see https://webconcepts.info/specs/W3C/TR/owl-time
     * @see https://www.w3.org/TR/owl-time/#time:intervalDisjoint
     */
    public const INTERVALDISJOINT = 'intervalDisjoint';

    /**
     * Link relation intervalDuring
     *
     * Refers to a resource associated with a time interval that begins before the beginning of the time interval
     * associated with the context resource, and ends after the end of the time interval associated with the context
     * resource.
     *
     * @see https://webconcepts.info/specs/W3C/TR/owl-time
     * @see https://www.w3.org/TR/owl-time/#time:intervalDuring
     */
    public const INTERVALDURING = 'intervalDuring';

    /**
     * Link relation intervalEquals
     *
     * Refers to a resource associated with a time interval whose beginning coincides with the beginning of the time
     * interval associated with the context resource, and whose end coincides with the end of the time interval
     * associated with the context resource.
     *
     * @see https://webconcepts.info/specs/W3C/TR/owl-time
     * @see https://www.w3.org/TR/owl-time/#time:intervalEquals
     */
    public const INTERVALEQUALS = 'intervalEquals';

    /**
     * Link relation intervalFinishedBy
     *
     * Refers to a resource associated with a time interval that begins after the beginning of the time interval
     * associated with the context resource, and whose end coincides with the end of the time interval associated
     * with the context resource.
     *
     * @see https://webconcepts.info/specs/W3C/TR/owl-time
     * @see https://www.w3.org/TR/owl-time/#time:intervalFinishedBy
     */
    public const INTERVALFINISHEDBY = 'intervalFinishedBy';

    /**
     * Link relation intervalFinishes
     *
     * Refers to a resource associated with a time interval that begins before the beginning of the time interval
     * associated with the context resource, and whose end coincides with the end of the time interval associated
     * with the context resource.
     *
     * @see https://webconcepts.info/specs/W3C/TR/owl-time
     * @see https://www.w3.org/TR/owl-time/#time:intervalFinishes
     */
    public const INTERVALFINISHES = 'intervalFinishes';

    /**
     * Link relation intervalIn
     *
     * refers to a resource associated with a time interval that begins before or is coincident with the beginning
     * of the time interval associated with the context resource, and ends after or is coincident with the end of
     * the time interval associated with the context resource.
     *
     * @see https://webconcepts.info/specs/W3C/TR/owl-time
     * @see https://www.w3.org/TR/owl-time/#time:intervalIn
     */
    public const INTERVALIN = 'intervalIn';

    /**
     * Link relation intervalMeets
     *
     * Refers to a resource associated with a time interval whose beginning coincides with the end of the time
     * interval associated with the context resource.
     *
     * @see https://webconcepts.info/specs/W3C/TR/owl-time
     * @see https://www.w3.org/TR/owl-time/#time:intervalMeets
     */
    public const INTERVALMEETS = 'intervalMeets';

    /**
     * Link relation intervalMetBy
     *
     * Refers to a resource associated with a time interval whose end coincides with the beginning of the time
     * interval associated with the context resource
     *
     * @see https://webconcepts.info/specs/W3C/TR/owl-time
     * @see https://www.w3.org/TR/owl-time/#time:intervalMetBy
     */
    public const INTERVALMETBY = 'intervalMetBy';

    /**
     * Link relation intervalOverlappedBy
     *
     * Refers to a resource associated with a time interval that begins before the beginning of the time interval
     * associated with the context resource, and ends after the beginning of the time interval associated with the
     * context resource.
     *
     * @see https://webconcepts.info/specs/W3C/TR/owl-time
     * @see https://www.w3.org/TR/owl-time/#time:intervalOverlappedBy
     */
    public const INTERVALOVERLAPPEDBY = 'intervalOverlappedBy';

    /**
     * Link relation intervalOverlaps
     *
     * Refers to a resource associated with a time interval that begins before the end of the time interval
     * associated with the context resource, and ends after the end of the time interval associated with the context
     * resource.
     *
     * @see https://webconcepts.info/specs/W3C/TR/owl-time
     * @see https://www.w3.org/TR/owl-time/#time:intervalOverlaps
     */
    public const INTERVALOVERLAPS = 'intervalOverlaps';

    /**
     * Link relation intervalStartedBy
     *
     * Refers to a resource associated with a time interval whose beginning coincides with the beginning of the time
     * interval associated with the context resource, and ends before the end of the time interval associated with
     * the context resource.
     *
     * @see https://webconcepts.info/specs/W3C/TR/owl-time
     * @see https://www.w3.org/TR/owl-time/#time:intervalStartedBy
     */
    public const INTERVALSTARTEDBY = 'intervalStartedBy';

    /**
     * Link relation intervalStarts
     *
     * Refers to a resource associated with a time interval whose beginning coincides with the beginning of the time
     * interval associated with the context resource, and ends after the end of the time interval associated with
     * the context resource.
     *
     * @see https://webconcepts.info/specs/W3C/TR/owl-time
     * @see https://www.w3.org/TR/owl-time/#time:intervalStarts
     */
    public const INTERVALSTARTS = 'intervalStarts';

    /**
     * Link relation inv-by
     *
     * The 'inv-by' link relation type allows a response to nominate one or more other resources that affect the
     * state of the resource it's associated with. That is, when one of the nominated resources changes, it also
     * changes the state of this response's resource.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/nottingham-linked-cache-inv
     * @see https://datatracker.ietf.org/doc/html/draft-nottingham-linked-cache-inv#section-3
     */
    public const INV_BY = 'inv-by';

    /**
     * Link relation invalidates
     *
     * The 'invalidates' link relation type allows a response that signifies a state change on the server to
     * indicate one or more associated URIs whose states have also changed.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/nottingham-linked-cache-inv
     * @see https://datatracker.ietf.org/doc/html/draft-nottingham-linked-cache-inv#section-2
     */
    public const INVALIDATES = 'invalidates';

    /**
     * Link relation item
     *
     * When included in a resource that represents a collection, the 'item' link relation identifies a target
     * resource that represents a member of that collection.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6573
     * @see https://datatracker.ietf.org/doc/html/rfc6573#section-2.1
     */
    public const ITEM = 'item';

    /**
     * Link relation last
     *
     * A URI that refers to the furthest following document in a series of documents.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5005
     * @see https://datatracker.ietf.org/doc/html/rfc5005#section-3
     */
    public const LAST = 'last';

    /**
     * Link relation latest-version
     *
     * When included on a versioned resource, this link points to a resource containing the latest (e.g., current)
     * version.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5829
     * @see https://datatracker.ietf.org/doc/html/rfc5829#section-3.2
     */
    public const LATEST_VERSION = 'latest-version';

    /**
     * Link relation license
     *
     * The "license" link relation can be used to associate licenses with a feed or entry. Feeds and entries can be
     * dual-licensed by including multiple "license" link relations specifying different href attribute values. If
     * multiple "license" link relations are specified, each SHOULD contain a title attribute specifying a
     * human-readable label for the license.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4946
     * @see https://datatracker.ietf.org/doc/html/rfc4946#section-2
     * 
     * The license keyword indicates that the referenced document provides the copyright license terms under which
     * the main content of the current document is provided.
     *
     * @see https://webconcepts.info/specs/W3C/TR/html
     * @see https://www.w3.org/TR/html/links.html#link-type-license
     */
    public const LICENSE = 'license';

    /**
     * Link relation linkset
     *
     * The "linkset" link relation type is used by a resource to link to a resource that provides a set of links.
     * Typically the Context IRI of these links  is the URI of the responding resource but links with other Context
     * IRIs MAY be provided.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-httpapi-linkset
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-httpapi-linkset#section-5
     */
    public const LINKSET = 'linkset';

    /**
     * Link relation location
     *
     * References a URI/IRI that represents a physical or logical location with which the context resource is
     * associated.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/snell-more-link-relations
     * @see https://datatracker.ietf.org/doc/html/draft-snell-more-link-relations#section-3
     */
    public const LOCATION = 'location';

    /**
     * Link relation logout
     *
     * The "logout" refers to a resource where an authenticated user might end their session.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/pot-authentication-link
     * @see https://datatracker.ietf.org/doc/html/draft-pot-authentication-link#section-4
     */
    public const LOGOUT = 'logout';

    /**
     * Link relation lrdd
     *
     * LRDD documents are linked to resources or host-meta documents using link templates with the "lrdd" relation
     * type.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6415
     * @see https://datatracker.ietf.org/doc/html/rfc6415#section-1.1.1
     */
    public const LRDD = 'lrdd';

    /**
     * Link relation manifest
     *
     * Imports or links to a manifest.
     *
     * @see https://webconcepts.info/specs/W3C/TR/appmanifest
     * @see https://www.w3.org/TR/appmanifest/#linking
     */
    public const MANIFEST = 'manifest';

    /**
     * Link relation memento
     *
     * A link with a "memento" Relation Type is used to point from a TimeGate or a Memento for an Original Resource,
     * as well as from the Original Resource itself, to a Memento for the Original Resource.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7089
     * @see https://datatracker.ietf.org/doc/html/rfc7089#section-2.2.4
     */
    public const MEMENTO = 'memento';

    /**
     * Link relation mentionedby
     *
     * Refers to a resource that mentions the context resource in some fashion. This, for example, would be used
     * when an article mentions another article, or a social status update mentions a particular user, etc.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/snell-more-link-relations
     * @see https://datatracker.ietf.org/doc/html/draft-snell-more-link-relations#section-3
     */
    public const MENTIONEDBY = 'mentionedby';

    /**
     * Link relation micropub
     *
     * Allows discovery of a Micropub endpoint which will be used to create posts.
     *
     * @see https://webconcepts.info/specs/W3C/TR/micropub
     * @see https://www.w3.org/TR/micropub/#endpoint-discovery
     */
    public const MICROPUB = 'micropub';

    /**
     * Link relation next
     *
     * A URI that refers to the immediately following document in a series of documents.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5005
     * @see https://datatracker.ietf.org/doc/html/rfc5005#section-3
     * 
     * Refers to the next document in a linear sequence of documents. User agents may choose to preload the "next"
     * document, to reduce the perceived load time.
     *
     * @see https://webconcepts.info/specs/W3C/TR/html
     * @see https://www.w3.org/TR/html/links.html#link-type-next
     */
    public const NEXT = 'next';

    /**
     * Link relation next-archive
     *
     * A URI that refers to the immediately following archive document.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5005
     * @see https://datatracker.ietf.org/doc/html/rfc5005#section-4
     */
    public const NEXT_ARCHIVE = 'next-archive';

    /**
     * Link relation nofollow
     *
     * The nofollow keyword indicates that the link is not endorsed by the original author or publisher of the page,
     * or that the link to the referenced document was included primarily because of a commercial relationship
     * between people affiliated with the two pages.
     *
     * @see https://webconcepts.info/specs/W3C/TR/html
     * @see https://www.w3.org/TR/html/links.html#link-type-nofollow
     */
    public const NOFOLLOW = 'nofollow';

    /**
     * Link relation noopener
     *
     * Requires that any browsing context created by following the hyperlink to disown its opener.
     *
     * @see https://webconcepts.info/specs/W3C/TR/html
     * @see https://www.w3.org/TR/html/links.html#link-type-nofollow
     */
    public const NOOPENER = 'noopener';

    /**
     * Link relation noreferrer
     *
     * This keyword indicates that no referrer information is to be leaked when following the link.
     *
     * @see https://webconcepts.info/specs/W3C/TR/html
     * @see https://www.w3.org/TR/html/links.html#link-type-noreferrer
     */
    public const NOREFERRER = 'noreferrer';

    /**
     * Link relation original
     *
     * A link with an "original" Relation Type is used to point from a TimeGate or a Memento to its associated
     * Original Resource.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7089
     * @see https://datatracker.ietf.org/doc/html/rfc7089#section-2.2.1
     */
    public const ORIGINAL = 'original';

    /**
     * Link relation payment-method-manifest
     *
     * Links to a payment method manifest, which describes a specific payment method within the Web Payments
     * ecosystem.
     *
     * @see https://webconcepts.info/specs/W3C/TR/payment-method-manifest
     * @see https://www.w3.org/TR/payment-method-manifest/#payment-method-manifest-link
     */
    public const PAYMENT_METHOD_MANIFEST = 'payment-method-manifest';

    /**
     * Link relation preconnect
     *
     * The preconnect link relation type is used to indicate an origin that will be used to fetch required
     * resources. Initiating an early connection, which includes the DNS lookup, TCP handshake, and optional TLS
     * negotiation, allows the user agent to mask the high latency costs of establishing a connection.
     *
     * @see https://webconcepts.info/specs/W3C/TR/resource-hints
     * @see https://www.w3.org/TR/resource-hints/#preconnect
     */
    public const PRECONNECT = 'preconnect';

    /**
     * Link relation predecessor-version
     *
     * When included on a versioned resource, this link points to a resource containing the predecessor version in
     * the version history.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5829
     * @see https://datatracker.ietf.org/doc/html/rfc5829#section-3.5
     */
    public const PREDECESSOR_VERSION = 'predecessor-version';

    /**
     * Link relation prefetch
     *
     * The prefetch link relation type is used to declare a resource that might be required by the next navigation,
     * and that the user agent SHOULD fetch, such that the user agent can deliver a faster response once the
     * resource is requested in the future.
     *
     * @see https://webconcepts.info/specs/W3C/TR/resource-hints
     * @see https://www.w3.org/TR/resource-hints/#prefetch
     */
    public const PREFETCH = 'prefetch';

    /**
     * Link relation preload
     *
     * The preload keyword may be used with link elements. This keyword creates an external resource link (preload
     * link) that is used to declare a resource and its fetch properties.
     *
     * @see https://webconcepts.info/specs/W3C/TR/preload
     * @see https://www.w3.org/TR/preload/#link-type-preload
     */
    public const PRELOAD = 'preload';

    /**
     * Link relation prerender
     *
     * The prerender link relation type is used to declare an HTML resource that might be required by the next
     * navigation, and that the user agent SHOULD fetch and execute, such that the user agent can deliver faster
     * response and processing once the resource is requested in the future.
     *
     * @see https://webconcepts.info/specs/W3C/TR/resource-hints
     * @see https://www.w3.org/TR/resource-hints/#prerender
     */
    public const PRERENDER = 'prerender';

    /**
     * Link relation prev
     *
     * Refers to the previous document in an ordered series of documents. Some user agents also support the synonym
     * "Previous".
     *
     * @see https://webconcepts.info/specs/W3C/TR/html
     * @see https://www.w3.org/TR/html/links.html#link-type-prev
     */
    public const PREV = 'prev';

    /**
     * Link relation prev-archive
     *
     * A URI that refers to the immediately preceding archive document.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5005
     * @see https://datatracker.ietf.org/doc/html/rfc5005#section-4
     */
    public const PREV_ARCHIVE = 'prev-archive';

    /**
     * Link relation preview
     *
     * The "preview" link relation can be used to refer to a resource that serves as a preview of the link's
     * context, likely with reduced quality or limited content. For instance, the preview link might reference a
     * screen capture of a video, a brief snippet of audio from a song, or a thumbnail representation of an image.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6903
     * @see https://datatracker.ietf.org/doc/html/rfc6903#section-3
     */
    public const PREVIEW = 'preview';

    /**
     * Link relation previous
     *
     * A URI that refers to the immediately preceding document in a series of documents.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5005
     * @see https://datatracker.ietf.org/doc/html/rfc5005#section-3
     */
    public const PREVIOUS = 'previous';

    /**
     * Link relation privacy-policy
     *
     * The "privacy-policy" link relation can be used to refer to a resource describing the privacy policy
     * associated with the link's context. The privacy policy can be any resource that discloses what personal
     * information about the user is collected and how that personal information is stored, used, managed, and
     * disclosed to other parties.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6903
     * @see https://datatracker.ietf.org/doc/html/rfc6903#section-4
     */
    public const PRIVACY_POLICY = 'privacy-policy';

    /**
     * Link relation profile
     *
     * A profile can be described as additional semantics that can be used to process a resource representation,
     * such as constraints, conventions, extensions, or any other aspects that do not alter the basic media type
     * semantics. A profile MUST NOT change the semantics of the resource representation when processed without
     * profile knowledge, so that clients both with and without knowledge of a profiled resource can safely use the
     * same representation.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6906
     * @see https://datatracker.ietf.org/doc/html/rfc6906#section-3
     */
    public const PROFILE = 'profile';

    /**
     * Link relation provider
     *
     * Refers to the resource that provided the context resource. Typically, this would be used to identify the
     * entity publishing the resource.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/snell-more-link-relations
     * @see https://datatracker.ietf.org/doc/html/draft-snell-more-link-relations#section-3
     */
    public const PROVIDER = 'provider';

    /**
     * Link relation redirect_uri
     *
     * If a client wishes to use a redirect URL that is on a different domain than their client_id, or if the
     * redirect URL uses a custom scheme (such as when the client is a native application), then the client will
     * need to whitelist those redirect URLs so that authorization endpoints can be sure it is safe to redirect
     * users there. The client SHOULD publish one or more <link> tags or Link HTTP headers with a rel attribute of
     * redirect_uri at the client_id URL.
     *
     * @see https://webconcepts.info/specs/W3C/TR/indieauth
     * @see https://www.w3.org/TR/indieauth/#redirect-url
     */
    public const REDIRECT_URI = 'redirect_uri';

    /**
     * Link relation register-user
     *
     * The "register-user" Link Relation refers to a resource where a user might sign up for a service for the
     * context URI.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/pot-authentication-link
     * @see https://datatracker.ietf.org/doc/html/draft-pot-authentication-link#section-5
     */
    public const REGISTER_USER = 'register-user';

    /**
     * Link relation related
     *
     * The value "related" signifies that the IRI in the value of the href attribute identifies a resource related
     * to the resource described by the containing element. For example, the feed for a site that discusses the
     * performance of the search engine at "https://search.example.com" might contain, as a child of atom:feed: <link
     * rel="related" href="https://search.example.com/"/> An identical link might appear as a child of any atom:entry
     * whose content contains a discussion of that same search engine.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4287
     * @see https://datatracker.ietf.org/doc/html/rfc4287#section-4.2.7.2
     */
    public const RELATED = 'related';

    /**
     * Link relation root
     *
     * This relation indicates that the target of the link SHOULD be treated as the root or the body of the
     * representation for the purposes of user agent interaction or fragment resolution. All other properties of the
     * instance objects can be regarded as meta-data descriptions for the data.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/zyp-json-schema
     * @see https://datatracker.ietf.org/doc/html/draft-zyp-json-schema#section-6.1.1.2
     */
    public const ROOT = 'root';

    /**
     * Link relation search
     *
     * The search keyword indicates that the referenced document provides an interface specifically for searching
     * the document and its related resources.
     *
     * @see https://webconcepts.info/specs/W3C/TR/html
     * @see https://www.w3.org/TR/html/links.html#link-type-search
     */
    public const SEARCH = 'search';

    /**
     * Link relation section
     *
     * Refers to a document serving as a section in a collection of documents.
     *
     * @see https://webconcepts.info/specs/W3C/TR/html4
     * @see https://www.w3.org/TR/html4/types.html#type-links
     */
    public const SECTION = 'section';

    /**
     * Link relation self
     *
     * The value "self" signifies that the IRI in the value of the href attribute identifies a resource equivalent
     * to the containing element.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4287
     * @see https://datatracker.ietf.org/doc/html/rfc4287#section-4.2.7.2
     */
    public const SELF = 'self';

    /**
     * Link relation service-desc
     *
     * The "service-desc" link relation type is used to represent the fact that a resource or a set of resources are
     * described at a specific URI. It identifies service description for the context that is primarily intended for
     * consumption by machines. Often, it is provided in a format that is consumed by tools, code libraries, or
     * similar components.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8631
     * @see https://datatracker.ietf.org/doc/html/rfc8631#section-4.2
     */
    public const SERVICE_DESC = 'service-desc';

    /**
     * Link relation service-doc
     *
     * The "service-doc" link relation type is used to represent the fact that a resource or a set of resources are
     * documented at a specific URI. It identifies service documentation for the context that is primarily intended
     * for human consumption.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8631
     * @see https://datatracker.ietf.org/doc/html/rfc8631#section-4.1
     */
    public const SERVICE_DOC = 'service-doc';

    /**
     * Link relation service-meta
     *
     * The "service-meta" link relation type is used to link to available metadata for the service context of a
     * resource. It identifies general metadata for the context that is primarily intended for consumption by
     * machines. In many cases, it is provided in a representation that is consumed by tools, code libraries, or
     * similar components.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8631
     * @see https://datatracker.ietf.org/doc/html/rfc8631#section-4.3
     */
    public const SERVICE_META = 'service-meta';

    /**
     * Link relation source
     *
     * Refers to the original source of information contained by the context resource.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/snell-more-link-relations
     * @see https://datatracker.ietf.org/doc/html/draft-snell-more-link-relations#section-3
     */
    public const SOURCE = 'source';

    /**
     * Link relation start
     *
     * Refers to the first document in a collection of documents. This link type tells search engines which document
     * is considered by the author to be the starting point of the collection.
     *
     * @see https://webconcepts.info/specs/W3C/TR/html4
     * @see https://www.w3.org/TR/html4/types.html#type-links
     */
    public const START = 'start';

    /**
     * Link relation status
     *
     * Identifies a resource that represents the context's status. Such a link may not be available from all
     * resources provided by a Web service, but from select resources such as a service's home resource.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8631
     * @see https://datatracker.ietf.org/doc/html/rfc8631#section-5
     */
    public const STATUS = 'status';

    /**
     * Link relation stylesheet
     *
     * The specified resource is a resource that describes how to present the document. Exactly how the resource is
     * to be processed depends on the actual type of the resource.
     *
     * @see https://webconcepts.info/specs/W3C/TR/html
     * @see https://www.w3.org/TR/html/links.html#link-type-stylesheet
     */
    public const STYLESHEET = 'stylesheet';

    /**
     * Link relation subsection
     *
     * Refers to a document serving as a subsection in a collection of documents.
     *
     * @see https://webconcepts.info/specs/W3C/TR/html4
     * @see https://www.w3.org/TR/html4/types.html#type-links
     */
    public const SUBSECTION = 'subsection';

    /**
     * Link relation successor-version
     *
     * When included on a versioned resource, this link points to a resource containing the successor version in the
     * version history.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5829
     * @see https://datatracker.ietf.org/doc/html/rfc5829#section-3.6
     */
    public const SUCCESSOR_VERSION = 'successor-version';

    /**
     * Link relation sunset
     *
     * Identifies a resource that provides information about the context's retirement policy.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8594
     * @see https://datatracker.ietf.org/doc/html/rfc8594#section-5
     */
    public const SUNSET = 'sunset';

    /**
     * Link relation tag
     *
     * The tag keyword indicates that the tag that the referenced document represents applies to the current
     * document.
     *
     * @see https://webconcepts.info/specs/W3C/TR/html
     * @see https://www.w3.org/TR/html/links.html#link-type-tag
     */
    public const TAG = 'tag';

    /**
     * Link relation terms-of-service
     *
     * The "terms-of-service" link relation can be used to refer to a resource describing the terms of service
     * associated with the link's context. The terms of service can be any resource that describes the rules to
     * which a consumer of the service must agree to follow when using the service provided by the link's context.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6903
     * @see https://datatracker.ietf.org/doc/html/rfc6903#section-5
     */
    public const TERMS_OF_SERVICE = 'terms-of-service';

    /**
     * Link relation timegate
     *
     * A link with a "timegate" Relation Type is used to point from the Original Resource, as well as from a Memento
     * associated with the Original Resource, to a TimeGate for the Original Resource.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7089
     * @see https://datatracker.ietf.org/doc/html/rfc7089#section-2.2.2
     */
    public const TIMEGATE = 'timegate';

    /**
     * Link relation timemap
     *
     * A link with a "timemap" Relation Type is used to point from a TimeGate or a Memento associated with an
     * Original Resource, as well as from the Original Resource itself, to a TimeMap for the Original Resource.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7089
     * @see https://datatracker.ietf.org/doc/html/rfc7089#section-2.2.3
     */
    public const TIMEMAP = 'timemap';

    /**
     * Link relation timesheet
     *
     * In non-XML markup languages, the link element can be used to reference an external timesheet document.
     *
     * @see https://webconcepts.info/specs/W3C/TR/timesheet
     * @see https://www.w3.org/TR/timesheet#smilTimesheetsNS-Elements-Timesheet
     */
    public const TIMESHEET = 'timesheet';

    /**
     * Link relation to
     *
     * Refers to a resource that is considered to be part of the public primary audience of the link's context.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/snell-more-link-relations
     * @see https://datatracker.ietf.org/doc/html/draft-snell-more-link-relations#section-3
     */
    public const TO = 'to';

    /**
     * Link relation token_endpoint
     *
     * After obtaining the End-User's profile URL, the client fetches the URL and looks for the
     * authorization_endpoint and token_endpoint rel values in the HTTP Link headers and HTML <link> tags. After the
     * state parameter is validated, the client makes a POST request to the token endpoint to verify the
     * authorization code and retrieve the final user profile URL.
     *
     * @see https://webconcepts.info/specs/W3C/TR/indieauth
     * @see https://www.w3.org/TR/indieauth/#token-endpoint-0
     */
    public const TOKEN_ENDPOINT = 'token_endpoint';

    /**
     * Link relation type
     *
     * The "type" link relation can be used to indicate that the context resource is an instance of the resource
     * identified by the target Internationalized Resource Identifier (IRI).
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6903
     * @see https://datatracker.ietf.org/doc/html/rfc6903#section-6
     */
    public const TYPE = 'type';

    /**
     * Link relation up
     *
     * An Atom link element with a rel attribute value of "up" may be used to reference a resource where parent
     * entries of an entry or a feed may be found.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/divilly-atom-hierarchy
     * @see https://datatracker.ietf.org/doc/html/draft-divilly-atom-hierarchy#section-2.3
     */
    public const UP = 'up';

    /**
     * Link relation version-history
     *
     * When included on a versioned resource, this link points to a resource containing the version history for this
     * resource.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5829
     * @see https://datatracker.ietf.org/doc/html/rfc5829#section-3.1
     */
    public const VERSION_HISTORY = 'version-history';

    /**
     * Link relation via
     *
     * The value "via" signifies that the IRI in the value of the href attribute identifies a resource that is the
     * source of the information provided in the containing element.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4287
     * @see https://datatracker.ietf.org/doc/html/rfc4287#section-4.2.7.2
     */
    public const VIA = 'via';

    /**
     * Link relation webmention
     *
     * Identifies a target URI that supports the Webmention protocol. This allows clients that mention a resource in
     * some form of publishing process to contact that endpoint and inform it that this resource has been mentioned.
     *
     * @see https://webconcepts.info/specs/W3C/TR/webmention
     * @see https://www.w3.org/TR/webmention/#sender-discovers-receiver-webmention-endpoint
     */
    public const WEBMENTION = 'webmention';

    /**
     * Link relation working-copy
     *
     * When included on a versioned resource, this link points to a working copy for this resource.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5829
     * @see https://datatracker.ietf.org/doc/html/rfc5829#section-3.3
     */
    public const WORKING_COPY = 'working-copy';

    /**
     * Link relation working-copy-of
     *
     * When included on a working copy, this link points to the versioned resource from which this working copy was
     * obtained.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5829
     * @see https://datatracker.ietf.org/doc/html/rfc5829#section-3.4
     */
    public const WORKING_COPY_OF = 'working-copy-of';
}
