<?php

declare(strict_types=1);

namespace CryptoScytheHttp;

/**
 * Class ContentCodings
 *
 * @see https://webconcepts.info/concepts/http-content-coding/
 * @see https://www.iana.org/assignments/http-parameters/http-parameters.xhtml#content-coding
 */
final class ContentCodings {
    /**
     * Content coding aes128gcm
     *
     * The "aes128gcm" HTTP content coding indicates that a payload has been encrypted using Advanced Encryption
     * Standard (AES) in Galois/Counter Mode (GCM) as identified as AEAD_AES_128_GCM in RFC 5116. The
     * AEAD_AES_128_GCM algorithm uses a 128 bit content encryption key.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/8188
     * @see https://datatracker.ietf.org/doc/html/rfc8188#section-2
     */
    public const AES128GCM = 'aes128gcm';

    /**
     * Content coding br
     *
     * This specification defines a lossless compressed data format that compresses data using a combination of the
     * LZ77 algorithm and Huffman coding, with efficiency comparable to the best currently available general-purpose
     * compression methods.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7932
     * @see https://datatracker.ietf.org/doc/html/rfc7932
     */
    public const BR = 'br';

    /**
     * Content coding compress
     *
     * The "compress" coding is an adaptive Lempel-Ziv-Welch (LZW) coding that is commonly produced by the UNIX file
     * compression program "compress". A recipient SHOULD consider "x-compress" to be equivalent to "compress".
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7230
     * @see https://datatracker.ietf.org/doc/html/rfc7230#section-4.2.1
     */
    public const COMPRESS = 'compress';

    /**
     * Content coding deflate
     *
     * The "deflate" coding is a "zlib" data format containing a "deflate" compressed data stream that uses a
     * combination of the Lempel-Ziv (LZ77) compression algorithm and Huffman coding.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7230
     * @see https://datatracker.ietf.org/doc/html/rfc7230#section-4.2.2
     */
    public const DEFLATE = 'deflate';

    /**
     * Content coding exi
     *
     * The content-coding value "exi" is registered with the Internet Assigned Numbers Authority (IANA) for use with
     * EXI. Protocols that can identify and negotiate the content coding of XML information independent of its media
     * type, SHOULD use the content coding "exi" (case-insensitive) to convey the acceptance or actual use of EXI
     * encoding for XML information.
     *
     * @see https://webconcepts.info/specs/W3C/TR/exi
     * @see https://www.w3.org/TR/exi/#contentCoding
     */
    public const EXI = 'exi';

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

    /**
     * Content coding identity
     *
     * An "identity" token is used as a synonym for "no encoding" in order to communicate when no encoding is
     * preferred.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7231
     * @see https://datatracker.ietf.org/doc/html/rfc7231#section-5.3.4
     */
    public const IDENTITY = 'identity';

    /**
     * Content coding pack200-gzip
     *
     * The Pack200 format can decrease the size of a Java application by a factor of seven to nine, compared with an
     * equivalent JAR containing uncompressed ("stored") class files. By contrast, using the zip DEFLATE algorithm
     * integral to JAR and ZIP archives gains a factor of two.
     *
     * @see https://webconcepts.info/specs/JCP/JSR/200
     * @see https://www.jcp.org/en/jsr/detail?id=200
     */
    public const PACK200_GZIP = 'pack200-gzip';

    /**
     * Content coding x-compress
     *
     * The "compress" coding is an adaptive Lempel-Ziv-Welch (LZW) coding that is commonly produced by the UNIX file
     * compression program "compress". A recipient SHOULD consider "x-compress" to be equivalent to "compress".
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7230
     * @see https://datatracker.ietf.org/doc/html/rfc7230#section-4.2.1
     */
    public const X_COMPRESS = 'x-compress';

    /**
     * Content coding x-gzip
     *
     * The "gzip" coding is an LZ77 coding with a 32-bit Cyclic Redundancy Check (CRC) that is commonly produced by
     * the gzip file compression program. A recipient SHOULD consider "x-gzip" to be equivalent to "gzip".
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7230
     * @see https://datatracker.ietf.org/doc/html/rfc7230#section-4.2.3
     */
    public const X_GZIP = 'x-gzip';
}
