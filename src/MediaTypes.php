<?php

declare(strict_types=1);

namespace CryptoScytheHttp;

/**
 * Class MediaTypes
 *
 * @see https://webconcepts.info/concepts/media-type/
 * @see https://www.iana.org/assignments/media-types/media-types.xhtml
 */
final class MediaTypes {
    /**
     * Media type application/EmergencyCallData.Control+xml
     *
     * Pan-European eCall provides a standardized and mandated set of vehicle-related data (including VIN, vehicle
     * type, propulsion type, current and optionally previous location coordinates, and the number of occupants)
     * known as the Minimum Set of Data (MSD). The application/EmergencyCallData.Control+xml media type enables the
     * metadata/control data to be carried in SIP.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8147
     * @see https://datatracker.ietf.org/doc/html/rfc8147#section-9
     */
    public const APPLICATION_EMERGENCYCALLDATA_CONTROL_XML = 'application/EmergencyCallData.Control+xml';

    /**
     * Media type application/EmergencyCallData.eCall.MSD
     *
     * Pan-European eCall provides a standardized and mandated set of vehicle-related data (including VIN, vehicle
     * type, propulsion type, current and optionally previous location coordinates, and the number of occupants)
     * known as the Minimum Set of Data (MSD). The application/EmergencyCallData.eCall.MSD media type enables the
     * MSD to be carried in SIP.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8147
     * @see https://datatracker.ietf.org/doc/html/rfc8147#section-5
     */
    public const APPLICATION_EMERGENCYCALLDATA_ECALL_MSD = 'application/EmergencyCallData.eCall.MSD';

    /**
     * Media type application/activity+json
     *
     * In the most basic sense, an "activity" is a semantic description of a potential or completed action. In the
     * former case, the activity expresses what can or might be done with a particular object, while in the latter
     * case, it expresses what has already been done. It is the goal of this specification to provide a JSON-based
     * syntax that is sufficient to express metadata about activities in a rich, human-friendly, machine-processable
     * and extensible manner. This may include constructing natural-language descriptions or visual representations
     * about the activity, associating actionable information with various types of objects, communicating or
     * recording activity logs, or delegation of potential actions to other applications.
     *
     * @see https://webconcepts.info/specs/W3C/TR/activitystreams-core
     * @see https://www.w3.org/TR/activitystreams-core/#introduction
     */
    public const APPLICATION_ACTIVITY_JSON = 'application/activity+json';

    /**
     * Media type application/alps+json
     *
     * When representing ALPS documents in JSON format, the 'descriptor' and 'ext' properties are always expressed
     * as arrays of anonymous objects - even when there is only one member in the array.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/amundsen-richardson-foster-alps
     * @see https://datatracker.ietf.org/doc/html/draft-amundsen-richardson-foster-alps#section-4.2
     */
    public const APPLICATION_ALPS_JSON = 'application/alps+json';

    /**
     * Media type application/alps+xml
     *
     * In the XML version of an ALPS document, the following ALPS properties always appear as XML elements: 'alps',
     * 'doc', 'descriptor', and 'ext'. All other ALPS properties appear as XML attributes.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/amundsen-richardson-foster-alps
     * @see https://datatracker.ietf.org/doc/html/draft-amundsen-richardson-foster-alps#section-4.1
     */
    public const APPLICATION_ALPS_XML = 'application/alps+xml';

    /**
     * Media type application/atom+xml
     *
     * This specification describes two kinds of Atom Documents: Atom Feed Documents and Atom Entry Documents. Both
     * kinds of Atom Documents are specified in terms of the XML Information Set, serialized as XML 1.0 and
     * identified with the "application/atom+xml" media type. Atom Documents MUST be well-formed XML.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4287
     * @see https://datatracker.ietf.org/doc/html/rfc4287#section-2
     */
    public const APPLICATION_ATOM_XML = 'application/atom+xml';

    /**
     * Media type application/atomcat+xml
     *
     * An Atom Publishing Protocol Category Document, when serialized as XML 1.0, can be identified with the
     * following media type.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5023
     * @see https://datatracker.ietf.org/doc/html/rfc5023#section-16.1
     */
    public const APPLICATION_ATOMCAT_XML = 'application/atomcat+xml';

    /**
     * Media type application/atomdeleted+xml
     *
     * A "Deleted Entry Document" represents exactly one at:deleted-entry element outside the context of an Atom
     * feed. Its root is the at:deleted-entry element.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6271
     * @see https://datatracker.ietf.org/doc/html/rfc6721#section-4
     */
    public const APPLICATION_ATOMDELETED_XML = 'application/atomdeleted+xml';

    /**
     * Media type application/atomsvc+xml
     *
     * An Atom Publishing Protocol Service Document, when serialized as XML 1.0, can be identified with the
     * following media type.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5023
     * @see https://datatracker.ietf.org/doc/html/rfc5023#section-16.2
     */
    public const APPLICATION_ATOMSVC_XML = 'application/atomsvc+xml';

    /**
     * Media type application/auth-policy+xml
     *
     * This document defines a framework for authorization policies controlling access to application-specific data.
     * This framework combines common location- and presence-specific authorization aspects. An XML schema specifies
     * the language in which common policy rules are represented. The common policy framework can be extended to
     * other application domains.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4745
     * @see https://datatracker.ietf.org/doc/html/rfc4745#section-15.2
     */
    public const APPLICATION_AUTH_POLICY_XML = 'application/auth-policy+xml';

    /**
     * Media type application/cbor
     *
     * CBOR follows some specific design goals that are not well met by current binary formats. The underlying data
     * model is an extended version of the JSON data model.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7049
     * @see https://datatracker.ietf.org/doc/html/rfc7049#section-1
     */
    public const APPLICATION_CBOR = 'application/cbor';

    /**
     * Media type application/coap-group+json
     *
     * CoAP endpoints implementing the membership configuration RESTful interface MUST support the CoAP group
     * configuration Internet Media Type "application/coap-group+json".
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7390
     * @see https://datatracker.ietf.org/doc/html/rfc7390#section-2.6.2.1
     */
    public const APPLICATION_COAP_GROUP_JSON = 'application/coap-group+json';

    /**
     * Media type application/coap-payload
     *
     * This media type represents any payload that a CoAP message can carry, having a content format that can be
     * identified by a CoAP Content-Format parameter (an integer in range 0-65535). The parameter "cf" is the
     * integer defining the CoAP content format.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-core-http-mapping
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-core-http-mapping#section-6.2
     */
    public const APPLICATION_COAP_PAYLOAD = 'application/coap-payload';

    /**
     * Media type application/cose
     *
     * The "application/cose" media type is used to indicate that the content is a COSE message.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8152
     * @see https://datatracker.ietf.org/doc/html/rfc8152#section-16.9.1
     */
    public const APPLICATION_COSE = 'application/cose';

    /**
     * Media type application/cose-key
     *
     * The "application/cose-key" media type is used to indicate that content is a COSE_Key object.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8152
     * @see https://datatracker.ietf.org/doc/html/rfc8152#section-16.9.2
     */
    public const APPLICATION_COSE_KEY = 'application/cose-key';

    /**
     * Media type application/cose-key-set
     *
     * The "application/cose-key" media type is used to indicate that content is a COSE_KeySet object.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8152
     * @see https://datatracker.ietf.org/doc/html/rfc8152#section-16.9.2
     */
    public const APPLICATION_COSE_KEY_SET = 'application/cose-key-set';

    /**
     * Media type application/csrattrs
     *
     * Responses to attribute request messages MUST be encoded as the content-type of "application/csrattrs" with a
     * Content-Transfer-Encoding of "base64".
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7030
     * @see https://datatracker.ietf.org/doc/html/rfc7030#section-4.5.2
     */
    public const APPLICATION_CSRATTRS = 'application/csrattrs';

    /**
     * Media type application/cwt
     *
     * How to determine that a CBOR data structure is a CWT is application-dependent. In some cases, this
     * information is known from the application context, such as from the position of the CWT in a data structure
     * at which the value must be a CWT. One method of indicating that a CBOR object is a CWT is the use of the
     * "application/cwt" content type by a transport protocol.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8392
     * @see https://datatracker.ietf.org/doc/html/rfc8392#section-1
     */
    public const APPLICATION_CWT = 'application/cwt';

    /**
     * Media type application/dash+xml
     *
     * "application/dash+xml" is the formal MIME type registration for the MPD. The Media Presentation Description
     * (MPD) is a document that contains metadata required by a DASH Client to construct appropriate HTTP-URLs to
     * access Segments and to provide the streaming service to the user.
     *
     * @see https://webconcepts.info/specs/ISO/IEC/23009-1
     * @see https://www.iso.org/obp/ui/#iso:std:iso-iec:23009:-1
     */
    public const APPLICATION_DASH_XML = 'application/dash+xml';

    /**
     * Media type application/exi
     *
     * A new media type registration "application/exi" described below is being proposed for community review, with
     * the intent to eventually submit it to the IESG for review, approval, and registration with IANA.
     *
     * @see https://webconcepts.info/specs/W3C/TR/exi
     * @see https://www.w3.org/TR/exi/#internetMediaType
     */
    public const APPLICATION_EXI = 'application/exi';

    /**
     * Media type application/font-sfnt
     *
     * An Open font file contains data, in table format, that comprises either a TrueType or a PostScript outline
     * font. Rasterizers use combinations of data from the tables contained in the font to render the TrueType or
     * PostScript glyph outlines. Some of this supporting data is used no matter which outline format is used; some
     * of the supporting data is specific to either TrueType or PostScript.
     *
     * @see https://webconcepts.info/specs/ISO/IEC/14496-22
     * @see https://www.iso.org/obp/ui/#iso:std:iso-iec:14496:-22
     */
    public const APPLICATION_FONT_SFNT = 'application/font-sfnt';

    /**
     * Media type application/geo+json
     *
     * The media type for GeoJSON text is "application/geo+json". The entry for "application/vnd.geo+json" in the
     * same registry should have its status changed to be Obsolete with a pointer to the media type
     * "application/geo+json" and a reference added to this RFC.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7946
     * @see https://datatracker.ietf.org/doc/html/rfc7946#section-12
     */
    public const APPLICATION_GEO_JSON = 'application/geo+json';

    /**
     * Media type application/geo+json-seq
     *
     * A GeoJSON text sequence is any number of GeoJSON texts, each encoded in UTF-8, each preceded by one ASCII RS
     * character, and each followed by a line feed (LF).
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8142
     * @see https://datatracker.ietf.org/doc/html/rfc8142#section-2
     */
    public const APPLICATION_GEO_JSON_SEQ = 'application/geo+json-seq';

    /**
     * Media type application/gzip
     *
     * The 'application/gzip' media type describes a block of data that is compressed using gzip compression. The
     * data is a stream of bytes as described in RFC 1952.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6713
     * @see https://datatracker.ietf.org/doc/html/rfc6713#section-3
     */
    public const APPLICATION_GZIP = 'application/gzip';

    /**
     * Media type application/hal+json
     *
     * HAL is a generic media type with which Web APIs can be developed and exposed as series of links. Clients of
     * these APIs can select links by their link relation type and traverse them in order to progress through the
     * application.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/kelly-json-hal
     * @see https://datatracker.ietf.org/doc/html/draft-kelly-json-hal#section-1
     */
    public const APPLICATION_HAL_JSON = 'application/hal+json';

    /**
     * Media type application/hal+xml
     *
     * The XML Hypertext Application Language (HAL) is a standard which establishes conventions for expressing
     * hypermedia controls, such as links, with XML. HAL is a generic media type with which Web APIs can be
     * developed and exposed as series of links. Clients of these APIs can select links by their link relation type
     * and traverse them in order to progress through the application.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/michaud-xml-hal
     * @see https://datatracker.ietf.org/doc/html/draft-michaud-xml-hal#section-3
     */
    public const APPLICATION_HAL_XML = 'application/hal+xml';

    /**
     * Media type application/held+xml
     *
     * This section gives the XML Schema Definition of the "application/held+xml" format. This is presented as a
     * formal definition of the "application/held+xml" format. Note that the XML Schema Definition is not intended
     * to be used with on-the-fly validation of the presence XML document.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5985
     * @see https://datatracker.ietf.org/doc/html/rfc5985#section-7
     */
    public const APPLICATION_HELD_XML = 'application/held+xml';

    /**
     * Media type application/home+json
     *
     * This document proposes a "home document" format for non-browser HTTP clients.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/nottingham-json-home
     * @see https://datatracker.ietf.org/doc/html/draft-nottingham-json-home
     */
    public const APPLICATION_HOME_JSON = 'application/home+json';

    /**
     * Media type application/home+xml
     *
     * The specification for HTTP Home Documents provides a JSON syntax only. This media type provides an XML syntax
     * for the same underlying data model, so that the concept of HTTP Home Documents can be consistently exposed in
     * both JSON- and XML-based HTTP services.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/wilde-home-xml
     * @see https://datatracker.ietf.org/doc/html/draft-wilde-home-xml-04#section-4.1
     */
    public const APPLICATION_HOME_XML = 'application/home+xml';

    /**
     * Media type application/http
     *
     * The application/http type can be used to enclose a pipeline of one or more HTTP request or response messages
     * (not intermixed).
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7230
     * @see https://datatracker.ietf.org/doc/html/rfc7230#section-8.3.2
     */
    public const APPLICATION_HTTP = 'application/http';

    /**
     * Media type application/jose
     *
     * The "application/jose" media type can be used to indicate that the content is a JWS or JWE using the JWS
     * Compact Serialization or the JWE Compact Serialization.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7515
     * @see https://datatracker.ietf.org/doc/html/rfc7515#section-9.2
     */
    public const APPLICATION_JOSE = 'application/jose';

    /**
     * Media type application/jose+json
     *
     * The "application/jose+json" media type can be used to indicate that the content is a JWS or JWE using the JWS
     * JSON Serialization or the JWE JSON Serialization.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7515
     * @see https://datatracker.ietf.org/doc/html/rfc7515#section-9.2
     */
    public const APPLICATION_JOSE_JSON = 'application/jose+json';

    /**
     * Media type application/jrd+json
     *
     * The WebFinger resource returns a JSON Resource Descriptor (JRD) as the resource representation to convey
     * information about an entity on the Internet.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7033
     * @see https://datatracker.ietf.org/doc/html/rfc7033#section-10.2
     */
    public const APPLICATION_JRD_JSON = 'application/jrd+json';

    /**
     * Media type application/json
     *
     * JavaScript Object Notation (JSON) is a text format for the serialization of structured data. It is derived
     * from the object literals of JavaScript, as defined in the ECMAScript Programming Language Standard, Third
     * Edition.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-jsonbis-rfc7159bis
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-jsonbis-rfc7159bis#section-1
     * 
     * JavaScript Object Notation (JSON) is a text format for the serialization of structured data. It is derived
     * from the object literals of JavaScript, as defined in the ECMAScript Programming Language Standard, Third
     * Edition. JSON can represent four primitive types (strings, numbers, booleans, and null) and two structured
     * types (objects and arrays).
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8259
     * @see https://datatracker.ietf.org/doc/html/rfc8259#section-1
     */
    public const APPLICATION_JSON = 'application/json';

    /**
     * Media type application/json-patch+json
     *
     * A JSON Patch document is a JSON [RFC4627] document that represents an array of objects. Each object
     * represents a single operation to be applied to the target JSON document.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6902
     * @see https://datatracker.ietf.org/doc/html/rfc6902#section-3
     */
    public const APPLICATION_JSON_PATCH_JSON = 'application/json-patch+json';

    /**
     * Media type application/json-seq
     *
     * "JSON text sequences" are specifically not JSON texts themselves but are composed of (possible) JSON texts.
     * JSON text sequences can be parsed (and produced) incrementally without having to have a streaming parser (nor
     * streaming encoder).
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7464
     * @see https://datatracker.ietf.org/doc/html/rfc7464#section-2
     */
    public const APPLICATION_JSON_SEQ = 'application/json-seq';

    /**
     * Media type application/jwk+json
     *
     * A JWK is a JSON object that represents a cryptographic key. The members of the object represent properties of
     * the key, including its value.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7517
     * @see https://datatracker.ietf.org/doc/html/rfc7517#section-4
     */
    public const APPLICATION_JWK_JSON = 'application/jwk+json';

    /**
     * Media type application/jwk-set+json
     *
     * A JWK Set is a JSON object that represents a set of JWKs. The JSON object MUST have a "keys" member, with its
     * value being an array of JWKs.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7517
     * @see https://datatracker.ietf.org/doc/html/rfc7517#section-5
     */
    public const APPLICATION_JWK_SET_JSON = 'application/jwk-set+json';

    /**
     * Media type application/jwt
     *
     * The JWT Claims Set represents a JSON object whose members are the claims conveyed by the JWT.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7519
     * @see https://datatracker.ietf.org/doc/html/rfc7519#section-4
     */
    public const APPLICATION_JWT = 'application/jwt';

    /**
     * Media type application/ld+json
     *
     * Generally speaking, the data model used for JSON-LD is a labeled, directed graph. The graph contains nodes,
     * which are connected by edges. A node is typically data such as a string, number, typed values (like dates and
     * times) or an IRI. There is also a special class of node called a blank node, which is typically used to
     * express data that does not have a global identifier like an IRI. Blank nodes are identified using a blank
     * node identifier.
     *
     * @see https://webconcepts.info/specs/W3C/TR/json-ld
     * @see https://www.w3.org/TR/json-ld/#data-model-overview
     */
    public const APPLICATION_LD_JSON = 'application/ld+json';

    /**
     * Media type application/link-format
     *
     * The CoRE Link Format extends the HTTP Link Header field specified in RFC 5988.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6690
     * @see https://datatracker.ietf.org/doc/html/rfc6690#section-2
     */
    public const APPLICATION_LINK_FORMAT = 'application/link-format';

    /**
     * Media type application/link-format+cbor
     *
     * An application/link-format document is a collection of web links, each of which is a collection of attributes
     * applied to a "URI-Reference". The application/link-format+cbor media type is a CBOR-based serialization of
     * such a document.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-core-links-json
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-core-links-json#section-2
     */
    public const APPLICATION_LINK_FORMAT_CBOR = 'application/link-format+cbor';

    /**
     * Media type application/link-format+json
     *
     * An application/link-format document is a collection of web links, each of which is a collection of attributes
     * applied to a "URI-Reference". The application/link-format+json media type is a JSON-based serialization of
     * such a document.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-core-links-json
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-core-links-json#section-2
     */
    public const APPLICATION_LINK_FORMAT_JSON = 'application/link-format+json';

    /**
     * Media type application/linkset
     *
     * This document format is identical to the payload of the HTTP Link header. It is defined in Section 3 of RFC
     * 5988bis, more specifically by its ABNF production rule for "Link" and subsequent ones.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-httpapi-linkset
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-httpapi-linkset#section-4.1
     */
    public const APPLICATION_LINKSET = 'application/linkset';

    /**
     * Media type application/linkset+json
     *
     * For applications that prefer a JSON serialization of link set resources, the following definition provides a
     * JSON serialization which is intended to faithfully reproduce the abstract model of RFC 5988bis.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-httpapi-linkset
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-httpapi-linkset#section-4.2
     */
    public const APPLICATION_LINKSET_JSON = 'application/linkset+json';

    /**
     * Media type application/mads+xml
     *
     * An XML schema for an authority element set used to provide metadata about agents (people, organizations),
     * events, and terms (topics, geographics, genres, etc.). It is a companion to MODS.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6207
     * @see https://datatracker.ietf.org/doc/html/rfc6207#section-3
     */
    public const APPLICATION_MADS_XML = 'application/mads+xml';

    /**
     * Media type application/manifest+json
     *
     * A manifest is a JSON document that contains startup parameters and application defaults for when a web
     * application is launched. A manifest consists of a top-level object that contains zero or more members.
     *
     * @see https://webconcepts.info/specs/W3C/TR/appmanifest
     * @see https://www.w3.org/TR/appmanifest/#manifest-and-its-members
     */
    public const APPLICATION_MANIFEST_JSON = 'application/manifest+json';

    /**
     * Media type application/marc
     *
     * Since there are different flavors of MARC which would be processed by different applications, this
     * content-type/subtype refers to the harmonized USMARC/CANMARC specification. Additional content-types/subtypes
     * may be defined in the future (e.g. application/unimarc).
     *
     * @see https://webconcepts.info/specs/IETF/RFC/2220
     * @see https://datatracker.ietf.org/doc/html/rfc2220#section-2
     */
    public const APPLICATION_MARC = 'application/marc';

    /**
     * Media type application/marcxml+xml
     *
     * An XML schema for the direct XML representation of the MARC format (for which there already exists a media
     * type, application/marc).
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6207
     * @see https://datatracker.ietf.org/doc/html/rfc6207#section-5
     */
    public const APPLICATION_MARCXML_XML = 'application/marcxml+xml';

    /**
     * Media type application/merge-patch+json
     *
     * The merge patch format is primarily intended for use with the HTTP PATCH method as a means of describing a
     * set of modifications to a target resource's content. A JSON merge patch document describes changes to be made
     * to a target JSON document using a syntax that closely mimics the document being modified.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7396
     * @see https://datatracker.ietf.org/doc/html/rfc7396#section-1
     */
    public const APPLICATION_MERGE_PATCH_JSON = 'application/merge-patch+json';

    /**
     * Media type application/mets+xml
     *
     * An XML schema for encoding descriptive, administrative, and structural metadata regarding objects within a
     * digital library.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6207
     * @see https://datatracker.ietf.org/doc/html/rfc6207#section-4
     */
    public const APPLICATION_METS_XML = 'application/mets+xml';

    /**
     * Media type application/mods+xml
     *
     * An XML schema for a bibliographic element set that may be used for a variety of purposes, and particularly
     * for library applications.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6207
     * @see https://datatracker.ietf.org/doc/html/rfc6207#section-2
     */
    public const APPLICATION_MODS_XML = 'application/mods+xml';

    /**
     * Media type application/nlsml+xml
     *
     * The Natural Language Semantics Markup Language (NLSML) is an XML data structure with elements and attributes
     * designed to carry result information from recognizer (including enrollment) and verifier resources.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6768
     * @see https://datatracker.ietf.org/doc/html/rfc6787#section-6.3.1
     */
    public const APPLICATION_NLSML_XML = 'application/nlsml+xml';

    /**
     * Media type application/p2p-overlay+xml
     *
     * This specification defines a new content type "application/p2p-overlay+xml" for a MIME entity that contains
     * overlay information.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6940
     * @see https://datatracker.ietf.org/doc/html/rfc6940#section-11.1
     */
    public const APPLICATION_P2P_OVERLAY_XML = 'application/p2p-overlay+xml';

    /**
     * Media type application/patch-ops-error+xml
     *
     * A new MIME error format is defined for applications that require deterministic error handling when patching
     * cannot be applied. It is anticipated that these error elements can be used within other MIME types that allow
     * extension elements.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5261
     * @see https://datatracker.ietf.org/doc/html/rfc5261#section-5
     */
    public const APPLICATION_PATCH_OPS_ERROR_XML = 'application/patch-ops-error+xml';

    /**
     * Media type application/pdf
     *
     * PDF is used to represent "final form" formatted documents. PDF pages may include text, images, graphics, and
     * multimedia content such as video and audio. PDF is also capable of containing auxiliary structures, including
     * annotations, bookmarks, file attachments, hyperlinks, logical structures, and metadata. These features are
     * useful for navigation and building collections of related documents, as well as for reviewing and commenting
     * on documents.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8118
     * @see https://datatracker.ietf.org/doc/html/rfc8118#section-1
     */
    public const APPLICATION_PDF = 'application/pdf';

    /**
     * Media type application/powder+xml
     *
     * ???
     *
     * @see https://webconcepts.info/specs/W3C/TR/powder-dr
     * @see https://www.w3.org/TR/powder-dr/#appB
     */
    public const APPLICATION_POWDER_XML = 'application/powder+xml';

    /**
     * Media type application/powder-s+xml
     *
     * ???
     *
     * @see https://webconcepts.info/specs/W3C/TR/powder-dr
     * @see https://www.w3.org/TR/powder-dr/#appC
     */
    public const APPLICATION_POWDER_S_XML = 'application/powder-s+xml';

    /**
     * Media type application/problem+json
     *
     * The canonical model for problem details is a JSON object. When serialised as a JSON document, that format is
     * identified with the "application/problem+json" media type.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7807
     * @see https://datatracker.ietf.org/doc/html/rfc7807#section-3
     */
    public const APPLICATION_PROBLEM_JSON = 'application/problem+json';

    /**
     * Media type application/problem+xml
     *
     * Some HTTP-based APIs use XML as their primary format convention. Such APIs MAY express problem details using
     * the format defined in this appendix.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7807
     * @see https://datatracker.ietf.org/doc/html/rfc7807#appendix-A
     */
    public const APPLICATION_PROBLEM_XML = 'application/problem+xml';

    /**
     * Media type application/rdf+json
     *
     * An RDF Graph consists of a set of RDF triples, each triple consisting of a subject, a predicate and an
     * object. An RDF/JSON document serializes such a set of RDF triples as a series of nested data structures. A
     * conforming RDF/JSON document consists of a single JSON object called the root object. Each unique subject in
     * the set of triples is represented as a key in the root object. No key may appear more than once in the root
     * object. The value of each root object key is a further JSON object whose keys are the URIs of the predicates
     * occurring in triples with the given subject. These keys are known as predicate keys. No predicate key may
     * appear more than once within a single object. The value of each predicate key is an array of JSON objects
     * representing the object of each serialized triple.
     *
     * @see https://webconcepts.info/specs/W3C/TR/json-rdf
     * @see https://www.w3.org/TR/rdf-json/#overview-of-rdf-json
     */
    public const APPLICATION_RDF_JSON = 'application/rdf+json';

    /**
     * Media type application/rdf+xml
     *
     * RDF is a language designed to support the Semantic Web, by facilitating resource description and data
     * exchange on the Web. RDF provides common structures that can be used for interoperable data exchange and
     * follows the W3C design principles of interoperability, evolution, and decentralization. While the RDF data
     * model can be serialized in many ways, the W3C has defined the RDF/XML syntax to allow RDF to be serialized in
     * an XML format. The application/rdf+xml media type allows RDF consumers to identify RDF/XML documents so that
     * they can be processed properly.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/3870
     * @see https://tools.ietf.org/html/rfc3870#section-1
     */
    public const APPLICATION_RDF_XML = 'application/rdf+xml';

    /**
     * Media type application/rfc+xml
     *
     * This document updates the specification for the Internet media type "application/rfc+xml" from the one in I-D
     * draft-reschke-xml2rfc.  The following is to be registered with IANA.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/hoffman-xml2rfc
     * @see https://datatracker.ietf.org/doc/html/draft-hoffman-xml2rfc#section-6.1
     */
    public const APPLICATION_RFC_XML = 'application/rfc+xml';

    /**
     * Media type application/samlassertion+xml
     *
     * This document defines a MIME media type for use with the XML serialization of SAML (Security Assertion Markup
     * Language) assertions.
     *
     * @see https://webconcepts.info/specs/OASIS/standard/saml-bindings-2.0-os
     * @see https://docs.oasis-open.org/security/saml/v2.0/saml-bindings-2.0-os.pdf#page=40
     */
    public const APPLICATION_SAMLASSERTION_XML = 'application/samlassertion+xml';

    /**
     * Media type application/samlmetadata+xml
     *
     * This document defines a MIME media type  for use with the XML serialization of Security Assertion Markup
     * Language metadata.
     *
     * @see https://webconcepts.info/specs/OASIS/standard/saml-metadata-2.0-os
     * @see https://docs.oasis-open.org/security/saml/v2.0/saml-metadata-2.0-os.pdf#page=37
     */
    public const APPLICATION_SAMLMETADATA_XML = 'application/samlmetadata+xml';

    /**
     * Media type application/scim+json
     *
     * The "application/scim+json" media type is intended to identify JSON structure data that conforms to the SCIM
     * protocol and schema specifications.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7644
     * @see https://datatracker.ietf.org/doc/html/rfc7644#section-8.1
     */
    public const APPLICATION_SCIM_JSON = 'application/scim+json';

    /**
     * Media type application/secevent+jwt
     *
     * This specification registers the "application/secevent+jwt" media type, which can be used to indicate that
     * the content is a SET. SETs MAY include this media type in the "typ" header parameter of the JWT representing
     * the SET to explicitly declare that the JWT is a SET. This MUST be included if the SET could be used in an
     * application context in which it could be confused with other kinds of JWTs.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8417
     * @see https://datatracker.ietf.org/doc/html/rfc8417#section-2.3
     */
    public const APPLICATION_SECEVENT_JWT = 'application/secevent+jwt';

    /**
     * Media type application/senml+cbor
     *
     * SenML is defined by a data model for measurements and simple meta-data about measurements and devices. The
     * data is structured as a single array that contains a series of SenML Records which can each contain
     * attributes such as an unique identifier for the sensor, the time the measurement was made, the unit the
     * measurement is in, and the current value of the sensor.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-core-senml
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-core-senml#section-6
     */
    public const APPLICATION_SENML_CBOR = 'application/senml+cbor';

    /**
     * Media type application/senml+exi
     *
     * SenML is defined by a data model for measurements and simple meta-data about measurements and devices. The
     * data is structured as a single array that contains a series of SenML Records which can each contain
     * attributes such as an unique identifier for the sensor, the time the measurement was made, the unit the
     * measurement is in, and the current value of the sensor.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-core-senml
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-core-senml#section-8
     */
    public const APPLICATION_SENML_EXI = 'application/senml+exi';

    /**
     * Media type application/senml+json
     *
     * SenML is defined by a data model for measurements and simple meta-data about measurements and devices. The
     * data is structured as a single array that contains a series of SenML Records which can each contain
     * attributes such as an unique identifier for the sensor, the time the measurement was made, the unit the
     * measurement is in, and the current value of the sensor.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-core-senml
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-core-senml#section-5
     */
    public const APPLICATION_SENML_JSON = 'application/senml+json';

    /**
     * Media type application/senml+xml
     *
     * SenML is defined by a data model for measurements and simple meta-data about measurements and devices. The
     * data is structured as a single array that contains a series of SenML Records which can each contain
     * attributes such as an unique identifier for the sensor, the time the measurement was made, the unit the
     * measurement is in, and the current value of the sensor.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-core-senml
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-core-senml#section-7
     */
    public const APPLICATION_SENML_XML = 'application/senml+xml';

    /**
     * Media type application/sgml
     *
     * Use the Application/SGML media-type for SGML text entities that are not appropriate for Text/SGML.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/1874
     * @see https://datatracker.ietf.org/doc/html/rfc1874#section-2.2
     */
    public const APPLICATION_SGML = 'application/sgml';

    /**
     * Media type application/soap+xml
     *
     * This specification defines the media type "application/soap+xml" which can be used to identify SOAP 1.2
     * message envelopes that have been serialized with XML 1.0.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/3902
     * @see https://datatracker.ietf.org/doc/html/rfc3902#section-1
     */
    public const APPLICATION_SOAP_XML = 'application/soap+xml';

    /**
     * Media type application/sql
     *
     * The Structured Query Language (SQL) has been in use for over 30 years with various types of database
     * technologies.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6922
     * @see https://datatracker.ietf.org/doc/html/rfc6922#section-3
     */
    public const APPLICATION_SQL = 'application/sql';

    /**
     * Media type application/sru+xml
     *
     * An XML schema for the SRU response. SRU is a protocol, and the media type sru+xml pertains specifically to
     * the default SRU response. The SRU response may be supplied in any of a number of suitable schemas, RSS, ATOM,
     * for example, and the client identifies the desired format in the request, hence the need for a media type.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6207
     * @see https://datatracker.ietf.org/doc/html/rfc6207#section-6
     */
    public const APPLICATION_SRU_XML = 'application/sru+xml';

    /**
     * Media type application/tracking-status+json
     *
     * For each tracking status resource, an origin server MUST provide a valid representation using the
     * application/tracking-status+json media type. This media type consists of a status object serialized as JSON.
     *
     * @see https://webconcepts.info/specs/W3C/TR/tracking-dnt
     * @see https://www.w3.org/TR/tracking-dnt/#status-representation
     */
    public const APPLICATION_TRACKING_STATUS_JSON = 'application/tracking-status+json';

    /**
     * Media type application/trig
     *
     * A TriG document allows writing down an RDF Dataset in a compact textual form. It consists of a sequence of
     * directives, triple statements, graph statements which contain triple-generating statements and optional blank
     * lines. Comments may be given after a # that is not part of another lexical token and continue to the end of
     * the line.
     *
     * @see https://webconcepts.info/specs/W3C/TR/trig
     * @see https://www.w3.org/TR/trig/#sec-trig-intro
     */
    public const APPLICATION_TRIG = 'application/trig';

    /**
     * Media type application/vcard+xml
     *
     * The MIME media type for use with vCard-in-XML data.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6351
     * @see https://datatracker.ietf.org/doc/html/rfc6351#section-8.2
     */
    public const APPLICATION_VCARD_XML = 'application/vcard+xml';

    /**
     * Media type application/vnd.apple.mpegurl
     *
     * The "application/vnd.apple.mpegurl" media type identifies Playlist files used by HTTP Live Streaming. The
     * format of the Playlist files is derived from the M3U playlist file format and inherits two tags from that
     * earlier file format: EXTM3U and EXTINF.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8216
     * @see https://datatracker.ietf.org/doc/html/rfc8216#section-4
     */
    public const APPLICATION_VND_APPLE_MPEGURL = 'application/vnd.apple.mpegurl';

    /**
     * Media type application/vnd.health+json
     *
     * An API Health Response Format (or, interchangeably, "health check response") uses the format described in RFC
     * 8259 and has the media type "application/vnd.health+json". Its content consists of a single mandatory root
     * field ("status") and several optional fields.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/inadarei-api-health-check
     * @see https://datatracker.ietf.org/doc/html/draft-inadarei-api-health-check#section-3
     */
    public const APPLICATION_VND_HEALTH_JSON = 'application/vnd.health+json';

    /**
     * Media type application/webpush-options+json
     *
     * The user agent includes the public key of the application server when requesting the creation of a push
     * subscription. The public key is then added to the request to create a push subscription. The push
     * subscription request is extended to include a body. The body of the request is a JSON object. A "vapid"
     * member is added to this JSON object, containing the public key on the P-256 curve, encoded in the
     * uncompressed form and base64url encoded.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-webpush-vapid
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-webpush-vapid#section-4
     */
    public const APPLICATION_WEBPUSH_OPTIONS_JSON = 'application/webpush-options+json';

    /**
     * Media type application/xhtml+xml
     *
     * This specification defines an abstract language for describing documents and applications, and some APIs for
     * interacting with in-memory representations of resources that use this language. The second concrete syntax is
     * the XHTML syntax, which is an application of XML. This specification defines the latest version of the XHTML
     * syntax, known as "XHTML 5.1".
     *
     * @see https://webconcepts.info/specs/W3C/TR/html
     * @see https://www.w3.org/TR/html/introduction.html#html-vs-xhtml
     */
    public const APPLICATION_XHTML_XML = 'application/xhtml+xml';

    /**
     * Media type application/xliff+xml
     *
     * XLIFF is the XML Localization Interchange File Format designed by a group of multilingual content publishers,
     * software providers, localization service providers, localization tools providers and researchers. It is
     * intended to give any multilingual content owner a single interchange file format that can be understood by
     * any localization provider, using any conformant localization tool.
     *
     * @see https://webconcepts.info/specs/OASIS/standard/xliff-core-v2.1
     * @see https://docs.oasis-open.org/xliff/xliff-core/v2.1/xliff-core-v2.1.html#mediaType
     */
    public const APPLICATION_XLIFF_XML = 'application/xliff+xml';

    /**
     * Media type application/xml
     *
     * The media types application/xml or text/xml, or a more specific media type, SHOULD be used for XML document
     * entities.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7303
     * @see https://datatracker.ietf.org/doc/html/rfc7303#section-4.1
     */
    public const APPLICATION_XML = 'application/xml';

    /**
     * Media type application/xml-dtd
     *
     * The media types application/xml-external-parsed-entity or text/xml-external-parsed-entity SHOULD be used for
     * XML external parsed entities.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7303
     * @see https://datatracker.ietf.org/doc/html/rfc7303#section-4.1
     */
    public const APPLICATION_XML_DTD = 'application/xml-dtd';

    /**
     * Media type application/xml-external-parsed-entity
     *
     * The media type application/xml-dtd SHOULD be used for XML external DTD subsets.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7303
     * @see https://datatracker.ietf.org/doc/html/rfc7303#section-4.1
     */
    public const APPLICATION_XML_EXTERNAL_PARSED_ENTITY = 'application/xml-external-parsed-entity';

    /**
     * Media type application/xml-patch+xml
     *
     * The Internet media type for an XML Patch Document is application/xml-patch+xml.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7351
     * @see https://datatracker.ietf.org/doc/html/rfc7351#section-3
     */
    public const APPLICATION_XML_PATCH_XML = 'application/xml-patch+xml';

    /**
     * Media type application/yaml
     *
     * YAML is a data serialization format that is widely used on the Internet.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-httpapi-yaml-mediatypes
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-httpapi-yaml-mediatypes#section-2.1
     */
    public const APPLICATION_YAML = 'application/yaml';

    /**
     * Media type application/zlib
     *
     * The 'application/zlib' media type describes a block of data that is compressed using zlib compression. The
     * data is a stream of bytes as described in RFC 1950.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6713
     * @see https://datatracker.ietf.org/doc/html/rfc6713#section-2
     */
    public const APPLICATION_ZLIB = 'application/zlib';

    /**
     * Media type font/collection
     *
     * ISO/IEC 14496-22 "Open Font Format" (OFF) specification being developed by ISO/IEC SC29/WG11.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8081
     * @see https://datatracker.ietf.org/doc/html/rfc8081#section-4.4.4
     */
    public const FONT_COLLECTION = 'font/collection';

    /**
     * Media type font/otf
     *
     * ISO/IEC 14496-22 "Open Font Format" (OFF) specification being developed by ISO/IEC SC29/WG11.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8081
     * @see https://datatracker.ietf.org/doc/html/rfc8081#section-4.4.3
     */
    public const FONT_OTF = 'font/otf';

    /**
     * Media type font/sfnt
     *
     * Note that "font/sfnt" is an abstract type from which the (widely used in practice) "font/ttf" and "font/otf"
     * types are conceptually derived. Use of "font/sfnt" is likely to be rare in practice.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8081
     * @see https://datatracker.ietf.org/doc/html/rfc8081#section-4.4.1
     */
    public const FONT_SFNT = 'font/sfnt';

    /**
     * Media type font/ttf
     *
     * ISO/IEC 14496-22 "Open Font Format" (OFF) specification being developed by ISO/IEC SC29/WG11.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8081
     * @see https://datatracker.ietf.org/doc/html/rfc8081#section-4.4.2
     */
    public const FONT_TTF = 'font/ttf';

    /**
     * Media type font/woff
     *
     * WOFF is used by web browsers, often in conjunction with HTML and CSS.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8081
     * @see https://datatracker.ietf.org/doc/html/rfc8081#section-4.4.5
     */
    public const FONT_WOFF = 'font/woff';

    /**
     * Media type font/woff2
     *
     * WOFF 2.0 is used by web browsers, often in conjunction with HTML and CSS. WOFF 2.0 is an improvement on WOFF
     * 1.0.  The two formats have different Internet Media Types and different @font-face formats, and they may be
     * used in parallel.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8081
     * @see https://datatracker.ietf.org/doc/html/rfc8081#section-4.4.6
     * 
     * The primary purpose of the WOFF2 format is to efficiently package fonts linked to Web documents by means of
     * CSS @font-face rules. WOFF 2.0 is an improvement on WOFF 1.0. The two formats have different Internet Media
     * Types and may be used in parallel.
     *
     * @see https://webconcepts.info/specs/W3C/TR/WOFF2
     * @see https://www.w3.org/TR/2018/REC-WOFF2-20180301/#FileStructure
     */
    public const FONT_WOFF2 = 'font/woff2';

    /**
     * Media type image/jpeg
     *
     * JPEG File Interchange Format is a minimal file format which enables JPEG bitstreams to be exchanged between a
     * wide variety of platforms and applications. This minimal format does not include any of the advanced features
     * found in the TIFF JPEG specification or any application specific file format. Nor should it, for the only
     * purpose of this simplified format is to allow the exchange of JPEG compressed images.
     *
     * @see https://webconcepts.info/specs/ISO/IEC/10918-5
     * @see https://www.iso.org/obp/ui/#iso:std:iso-iec:10918:-5
     */
    public const IMAGE_JPEG = 'image/jpeg';

    /**
     * Media type image/png
     *
     * PNG (Portable Network Graphics) is an extensible file format for the lossless, portable, well-compressed
     * storage of raster images. PNG provides a patent-free replacement for GIF and can also replace many common
     * uses of TIFF. Indexed-color, grayscale, and truecolor images are supported, plus an optional alpha channel.
     * Sample depths range from 1 to 16 bits. PNG is designed to work well in online viewing applications, such as
     * the World Wide Web, so it is fully streamable with a progressive display option. PNG is robust, providing
     * both full file integrity checking and simple detection of common transmission errors. Also, PNG can store
     * gamma and chromaticity data for improved color matching on heterogeneous platforms.
     *
     * @see https://webconcepts.info/specs/W3C/TR/PNG
     * @see https://www.w3.org/TR/PNG/#A-Media-type
     */
    public const IMAGE_PNG = 'image/png';

    /**
     * Media type image/webp
     *
     * WebP is a Resource Interchange File Format (RIFF) based image file format which supports lossless and lossy
     * compression as well as alpha (transparency) and animation.  It covers use cases similar to JPEG, PNG and the
     * Graphics Interchange Format (GIF).
     *
     * @see https://webconcepts.info/specs/IETF/I-D/zern-webp
     * @see https://datatracker.ietf.org/doc/html/draft-zern-webp#section-1
     */
    public const IMAGE_WEBP = 'image/webp';

    /**
     * Media type message/bhttp
     *
     * This document defines a simple format for representing an HTTP message, either request or response. This
     * allows for the encoding of HTTP messages that can be conveyed outside of an HTTP protocol. This enables the
     * transformation of entire messages, including the application of authenticated encryption.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-httpbis-binary-message
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-httpbis-binary-message#section-8
     */
    public const MESSAGE_BHTTP = 'message/bhttp';

    /**
     * Media type message/http
     *
     * The message/http type can be used to enclose a single HTTP request or response message, provided that it
     * obeys the MIME restrictions for all "message" types regarding line length and encodings.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7230
     * @see https://datatracker.ietf.org/doc/html/rfc7230#section-8.3.1
     */
    public const MESSAGE_HTTP = 'message/http';

    /**
     * Media type message/ohttp-req
     *
     * HTTP message encapsulation uses HPKE for request and response encryption. An Encapsulated Request is
     * comprised of a length-prefixed key identifier and a HPKE-protected request message. HPKE protection includes
     * an encapsulated KEM shared secret (or enc), plus the AEAD-protected request message.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-ohai-ohttp
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-ohai-ohttp#section-7.1
     */
    public const MESSAGE_OHTTP_REQ = 'message/ohttp-req';

    /**
     * Media type message/ohttp-res
     *
     * HTTP message encapsulation uses HPKE for request and response encryption. Responses are bound to responses
     * and so consist only of AEAD-protected content.
     *
     * @see https://webconcepts.info/specs/IETF/I-D/ietf-ohai-ohttp
     * @see https://datatracker.ietf.org/doc/html/draft-ietf-ohai-ohttp#section-7.2
     */
    public const MESSAGE_OHTTP_RES = 'message/ohttp-res';

    /**
     * Media type multipart/form-data
     *
     * The media-type multipart/form-data follows the rules of all multipart MIME data streams as outlined in RFC
     * 2046. In forms, there are a series of fields to be supplied by the user who fills out the form. Each field
     * has a name. Within a given form, the names are unique.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/2388
     * @see https://datatracker.ietf.org/doc/html/rfc2388#section-3
     */
    public const MULTIPART_FORM_DATA = 'multipart/form-data';

    /**
     * Media type multipart/multilingual
     *
     * A 'multipart/multilingual' message will have a number of message parts: exactly one multilingual preface, one
     * or more language message parts, and zero or one language-independent message part. The details of these are
     * described below.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8255
     * @see https://datatracker.ietf.org/doc/html/rfc8255#section-3
     */
    public const MULTIPART_MULTILINGUAL = 'multipart/multilingual';

    /**
     * Media type multipart/x-mixed-replace
     *
     * When a resource with the type multipart/x-mixed-replace is to be loaded in a browsing context, the user agent
     * must parse the resource using the rules for multipart types.
     *
     * @see https://webconcepts.info/specs/W3C/TR/html
     * @see https://www.w3.org/TR/html/browsers.html#page-load-processing-model-for-multipartx-mixed-replace-resources
     */
    public const MULTIPART_X_MIXED_REPLACE = 'multipart/x-mixed-replace';

    /**
     * Media type text/csv
     *
     * The comma separated values format (CSV) has been used for exchanging and converting data between various
     * spreadsheet programs for quite some time.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/4180
     * @see https://datatracker.ietf.org/doc/html/rfc4180#section-1
     * 
     * This memo updates the text/csv media type defined in RFC 4180 by defining URI fragment identifiers for
     * text/csv MIME entities.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7111
     * @see https://datatracker.ietf.org/doc/html/rfc7111#section-1
     */
    public const TEXT_CSV = 'text/csv';

    /**
     * Media type text/ecmascript
     *
     * This memo describes media types for the JavaScript and ECMAScript programming languages. The most widely
     * supported media type in use is text/javascript; all others are considered historical and obsolete aliases of
     * text/javascript.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/9239
     * @see https://datatracker.ietf.org/doc/html/rfc9239#section-6.2.1
     */
    public const TEXT_ECMASCRIPT = 'text/ecmascript';

    /**
     * Media type text/event-stream
     *
     * Defines a media type for representing an event stream for Server-Sent Events.
     *
     * @see https://webconcepts.info/specs/W3C/TR/eventsource
     * @see https://www.w3.org/TR/eventsource/#text-event-stream
     */
    public const TEXT_EVENT_STREAM = 'text/event-stream';

    /**
     * Media type text/grammar-ref-list
     *
     * The body of the RECOGNIZE method of the MRCP protocol may contain a list of grammar URIs specified in content
     * of media type 'text/grammar-ref-list'. This type defines a list of grammar URIs and allows each grammar URI
     * to be assigned a weight in the list.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6768
     * @see https://datatracker.ietf.org/doc/html/rfc6787#section-9.9
     */
    public const TEXT_GRAMMAR_REF_LIST = 'text/grammar-ref-list';

    /**
     * Media type text/html
     *
     * This specification defines an abstract language for describing documents and applications, and some APIs for
     * interacting with in-memory representations of resources that use this language. The first such concrete
     * syntax is the HTML syntax. This is the format suggested for most authors. It is compatible with most legacy
     * Web browsers. This specification defines the latest version of the HTML syntax, known as "HTML 5.1".
     *
     * @see https://webconcepts.info/specs/W3C/TR/html
     * @see https://www.w3.org/TR/html/introduction.html#html-vs-xhtml
     */
    public const TEXT_HTML = 'text/html';

    /**
     * Media type text/javascript
     *
     * This memo describes media types for the JavaScript and ECMAScript programming languages. The most widely
     * supported media type in use is text/javascript; all others are considered historical and obsolete aliases of
     * text/javascript.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/9239
     * @see https://datatracker.ietf.org/doc/html/rfc9239#section-6.1.1
     */
    public const TEXT_JAVASCRIPT = 'text/javascript';

    /**
     * Media type text/markdown
     *
     * This document registers the text/markdown media type for use with Markdown, a family of plain-text formatting
     * syntaxes that optionally can be converted to formal markup languages such as HTML.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7763
     * @see https://datatracker.ietf.org/doc/html/rfc7763
     */
    public const TEXT_MARKDOWN = 'text/markdown';

    /**
     * Media type text/plain
     *
     * This memo updates the text/plain media type defined in RFC 2046  by defining URI fragment identifiers for
     * text/plain MIME entities. This makes it possible to refer to parts of a text/plain MIME entity. Such parts
     * can be identified by either character position or range, or by line position or range. Integrity checking
     * information can be added to a fragment identifier to make it more robust, enabling applications to detect
     * changes of the entity.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/5147
     * @see https://datatracker.ietf.org/doc/html/rfc5147#section-1
     */
    public const TEXT_PLAIN = 'text/plain';

    /**
     * Media type text/sgml
     *
     * The Text/SGML media-type can be employed when the contents of the SGML entity is intended to be read by a
     * human and is in a readily comprehensible form.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/1874
     * @see https://datatracker.ietf.org/doc/html/rfc1874#section-2.1
     */
    public const TEXT_SGML = 'text/sgml';

    /**
     * Media type text/vcard
     *
     * The text/vcard MIME content type (hereafter known as "vCard") contains contact information, typically
     * pertaining to a single contact or group of contacts. The content consists of one or more lines in the format
     * given below.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/6350
     * @see https://datatracker.ietf.org/doc/html/rfc6350#section-3
     */
    public const TEXT_VCARD = 'text/vcard';

    /**
     * Media type text/vtt
     *
     * The WebVTT (Web Video Text Tracks) format is intended for marking up external text track resources. The main
     * use for WebVTT files is captioning or subtitling video content.
     *
     * @see https://webconcepts.info/specs/W3C/TR/webvtt
     * @see https://www.w3.org/TR/webvtt1/#introduction
     */
    public const TEXT_VTT = 'text/vtt';

    /**
     * Media type text/xml
     *
     * If an XML document - that is, the unprocessed, source XML document - is readable by casual users, text/xml is
     * preferable to application/xml. MIME user agents (and web user agents) that do not have explicit support for
     * text/xml will treat it as text/plain, for example, by displaying the XML MIME entity as plain text.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/3023
     * @see https://datatracker.ietf.org/doc/html/rfc3023#section-3.1
     */
    public const TEXT_XML = 'text/xml';

    /**
     * Media type text/xml-external-parsed-entity
     *
     * If an XML external parsed entity - that is, the unprocessed, source XML entity - is readable by casual users,
     * text/xml-external-parsed-entity is preferable to application/xml-external-parsed-entity. MIME user agents
     * (and web user agents) that do not have explicit support for text/xml-external-parsed-entity will treat it as
     * text/plain, for example, by displaying the XML MIME entity as plain text.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/3023
     * @see https://datatracker.ietf.org/doc/html/rfc3023#section-3.3
     */
    public const TEXT_XML_EXTERNAL_PARSED_ENTITY = 'text/xml-external-parsed-entity';
}
