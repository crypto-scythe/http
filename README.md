# PHP convenience classes for HTTP header fields, status codes and media types

Classes with constants for convenient usage. The data source is the JSON output from https://webconcepts.info
which provides extensive information about the underlying concepts including links to specifications of all
provided header fields, status codes and media types.

## Installation with Composer
```shell
composer require crypto_scythe/http
```

## Class contents

### Example for `HeaderFields`

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

### Example for `StatusCodes.php`

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
