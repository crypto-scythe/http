<?php

declare(strict_types=1);

namespace CryptoScythe\Http;

/**
 * Class TransferCodings
 *
 * @see https://webconcepts.info/concepts/http-transfer-coding/
 * @see https://www.iana.org/assignments/http-parameters/http-parameters.xhtml#transfer-coding
 */
final class TransferCodings {
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

    /**
     * Transfer coding compress
     *
     * The "compress" coding is an adaptive Lempel-Ziv-Welch (LZW) coding that is commonly produced by the UNIX file
     * compression program "compress". A recipient SHOULD consider "x-compress" to be equivalent to "compress".
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7230
     * @see https://datatracker.ietf.org/doc/html/rfc7230#section-4.2.1
     */
    public const COMPRESS = 'compress';

    /**
     * Transfer coding deflate
     *
     * The "deflate" coding is a "zlib" data format containing a "deflate" compressed data stream that uses a
     * combination of the Lempel-Ziv (LZ77) compression algorithm and Huffman coding.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7230
     * @see https://datatracker.ietf.org/doc/html/rfc7230#section-4.2.2
     */
    public const DEFLATE = 'deflate';

    /**
     * Transfer coding gzip
     *
     * The "gzip" coding is an LZ77 coding with a 32-bit Cyclic Redundancy Check (CRC) that is commonly produced by
     * the gzip file compression program. A recipient SHOULD consider "x-gzip" to be equivalent to "gzip".
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7230
     * @see https://datatracker.ietf.org/doc/html/rfc7230#section-4.2.3
     */
    public const GZIP = 'gzip';

    /**
     * Transfer coding identity
     *
     * The default (identity) encoding; the use of no transformation whatsoever. This content-coding is used only in
     * the Accept-Encoding header, and SHOULD NOT be used in the Content-Encoding header.
     *
     * @see https://webconcepts.info/specs/IETF/RFC/2616
     * @see https://datatracker.ietf.org/doc/html/rfc2616#section-3.6
     */
    public const IDENTITY = 'identity';

    /**
     * Transfer coding x-compress
     *
     * The "compress" coding is an adaptive Lempel-Ziv-Welch (LZW) coding that is commonly produced by the UNIX file
     * compression program "compress". A recipient SHOULD consider "x-compress" to be equivalent to "compress".
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7230
     * @see https://datatracker.ietf.org/doc/html/rfc7230#section-4.2.1
     */
    public const X_COMPRESS = 'x-compress';

    /**
     * Transfer coding x-gzip
     *
     * The "gzip" coding is an LZ77 coding with a 32-bit Cyclic Redundancy Check (CRC) that is commonly produced by
     * the gzip file compression program. A recipient SHOULD consider "x-gzip" to be equivalent to "gzip".
     *
     * @see https://webconcepts.info/specs/IETF/RFC/7230
     * @see https://datatracker.ietf.org/doc/html/rfc7230#section-4.2.3
     */
    public const X_GZIP = 'x-gzip';
}
