<?php
function removeBOM($filename) {
    $contents = file_get_contents($filename);
    $bom = pack('CCC', 0xEF, 0xBB, 0xBF);
    if (strncmp($contents, $bom, 3) === 0) {
        $contents = substr($contents, 3);
        file_put_contents($filename, $contents);
        echo "✅ BOM removed from: $filename\n";
    }
}

function scanFolder($dir) {
    foreach (scandir($dir) as $file) {
        if ($file === '.' || $file === '..') continue;
        $path = "$dir/$file";
        if (is_dir($path)) scanFolder($path);
        elseif (preg_match('/\.(php|html|js|css)$/', $file)) removeBOM($path);
    }
}

scanFolder(__DIR__);
echo "🎉 All files scanned and cleaned!\n";


// http://localhost/pmbs/remove_bom.php