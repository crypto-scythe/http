# PHP convenience classes for HTTP header fields, status codes and media types

Classes with constants for convenient usage. The data source is the JSON output from https://webconcepts.info
which provides extensive information about the underlying concepts including links to specifications of all
provided header fields, status codes and media types.

## Installation with Composer
```shell
composer require crypto_scythe/http
```

## Class contents

### Example for `AuthenticationSchemes`

```php
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
```

### Example for `CacheDirectives`

```php
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
```

### Example for `ContentCodings.php`

```php
/**
 * Content coding gzip
 *
 * The "gzip" coding is an LZ77 coding with a 32-bit Cyclic Redundancy Check (CRC) that is commonly produced by
 * the gzip file compression program. A recipient SHOULD consider "x-gzip" to be equivalent to "gzip".
 *
 * @see https://webconcepts.info/specs/IETF/RFC/7230
 * @see https://datatracker.ietf.org/doc/html/rfc7230#section-4.2.3
 */
public const GZIP = 'gzip';
```

### Example for `ForwardedParameters`

```php
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
```

### Example for `HeaderFields.php`

```php
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
```

### Example for `LinkRelations`

```php
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
```

### Example for `MediaTypes`

```php
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
```

### Example for `Preferences`

```php
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
```

### Example for `RangeUnits`

```php
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
```

### Example for `RequestMethods`

```php
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
```

### Example for `StatusCodes`

```php
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
```

### Example for `TransferCodings`

```php
/**
 * Transfer coding chunked
 *
 * The chunked transfer coding wraps the payload body in order to transfer it as a series of chunks, each with
 * its own size indicator, followed by an OPTIONAL trailer containing header fields.  Chunked enables content
 * streams of unknown size to be transferred as a sequence of length-delimited buffers, which enables the sender
 * to retain connection persistence and the recipient to know when it has received the entire message.
 *
 * @see https://webconcepts.info/specs/IETF/RFC/7230
 * @see https://datatracker.ietf.org/doc/html/rfc7230#section-4.1
 */
public const CHUNKED = 'chunked';
```

### Example Usage

```php
use CryptoScythe\Http\HeaderFields;
use CryptoScythe\Http\MediaTypes;
use CryptoScythe\Http\StatusCodes;

header(
    sprintf(
        '%s: %s',
        HeaderFields::CONTENT_TYPE,
        MediaTypes::APPLICATION_JSON,
    ),
    true,
    StatusCodes::STATUS_200,
);
```
