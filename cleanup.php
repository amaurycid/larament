<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Config;

$filesToRemove = [
    'README.md',
    'resources/images/users-table.png',
    'resources/images/tests.png',
    'resources/images/login-page.png',
    'resources/images',
    'stubs/rector.stub',
    'stubs/pint.stub',
    __FILE__,
];

foreach ($filesToRemove as $file) {
    if (file_exists($file)) {
        if (is_file($file)) {
            unlink($file);
        } elseif (is_dir($file)) {
            removeDirectory($file);
        }
    }
}

file_put_contents('README.md', '#'.Config::get('app.name'));

function removeDirectory(string $dir): bool
{
    if (! is_dir($dir)) {
        return false;
    }

    $files = array_diff(scandir($dir), [' . ', ' ..']);

    foreach ($files as $file) {
        $path = $dir.DIRECTORY_SEPARATOR.$file;

        if (is_dir($path)) {
            removeDirectory($path);
        } else {
            unlink($path);
        }
    }

    return rmdir($dir);
}
