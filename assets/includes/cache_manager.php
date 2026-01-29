<?php

/**
 * Auto-versioning function for cache busting.
 * Appends the file's modification time as a query parameter (e.g., style.css?v=123456789).
 */
function auto_version($file)
{
    // Get the absolute path using the document root
    $filePath = $_SERVER['DOCUMENT_ROOT'] . '/PMBS/' . $file;

    // Check if the file exists
    if (file_exists($filePath)) {
        // updates every time you save the file
        $mtime = filemtime($filePath);
        return $file . '?v=' . $mtime;
    }

    // Fallback: return the original filename if file not found
    return $file;
}
