<?php

/**
 * Resources in PHP are generally a pointers to external resources: curl, process, fopen
 *
 * Streams are to give them common behaviour.
 */


/** Opens a file or network resource */
$fileStream = fopen("tmp/test", "w");
echo get_resource_type($fileStream); // stream

/**
 * Providing an argument with scheme 'scheme://' that's mean the PHP will look it up for supported protocol handlers/wrappers
 * like file://, php://, php://stdin, php://stdout, php://stderr, ssh2:// e.g.
 *
 * Mode can depend on chosen protocol handler/wrapper
 */
$fileStream = fopen("php://", "r");

/**
 * Writing data using streams
 *
 * - limited
 * - full
 */
$fileStream = fopen("/tmp/test", 'wb');
fwrite($fileStream, 'The quick brown fox jumps over the lazy dog.', 10); // only 10 bytes allowed to write in

$fileStream = fopen("/tmp/test", 'wb');
fwrite($fileStream, 'The quick brown fox jumps over the lazy dog.');

/**
 * Reading streams with fread()
 *
 * Usually for most streams read buffer is 8KiB but depends. In some case to local handler we can increase that value.
 */
fread($fileStream, 10); // writing and move pointer
ftell($fileStream); // current position of read pointer
fread($fileStream, 10); // writing and move pointer
ftell($fileStream);

/**
 * fseek() return read/write pointer of the opened file
 *
 * - cannot 'seek' a remote resource (can be checked in programmatic way - stream_get_meta_data())
 */

// Content: The quick brown fox jumps over the lazy dog\n
$fileStream = fopen("tmp/test", "r+");

fseek($fileStream, 4, SEEK_SET);
echo fread($fileStream, 5); // quick
echo ftell($fileStream); // 9

fseek($fileStream, 7, SEEK_CUR); // 9 + 7
echo ftell($fileStream); // 16
echo fread($fileStream, 3); // fox

fseek($fileStream, 7, SEEK_END); // 9 + 7
echo ftell($fileStream); // 49
echo fread($fileStream, 3); // ''

/**
 * file_get_contents()
 *
 * really flexible by passing context argument
 */
$context = stream_context_create(['http' => ['method' => 'POST']]);
file_get_contents('http://some-address-to-resource', context: $context);

/**
 * PSR-7 StreamInterface - https://www.php-fig.org/psr/psr-7/#13-streams
 *
 * Implementation by Guzzle package: https://github.com/guzzle/streams/blob/master/src/StreamInterface.php
 */























