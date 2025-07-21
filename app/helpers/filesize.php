<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

if (!function_exists('filesize_helper')) {

    /**
     * Returns a human-readable version of a file size.
     *
     * @param  int  $bytes
     * @param  int  $decimals
     * @return string
     */
    function filesize_helper($bytes,$decimals = 2)
    {
        Log::debug('filesize_helper called with arguments', compact('bytes', 'decimals'));
        if ($bytes < 0) {
            Log::debug('filesize_helper returning 0 B');
            return '0 B';
        }

        $units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
        $factor = (int) floor((strlen((string) $bytes) - 1) / 3);
        Log::debug('filesize_helper calculated factor to be', compact('factor'));

        $size = sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . " {$units[$factor]}";

        Log::debug('filesize_helper returning', compact('size'));
        return (string) $size;
    }
}
