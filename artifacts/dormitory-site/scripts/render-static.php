<?php
declare(strict_types=1);

$workspaceRoot = dirname(__DIR__, 3);
$pagePath = $workspaceRoot . '/dormitory/index.php';
$outputDirectory = dirname(__DIR__) . '/dist/public';

if (!is_file($pagePath)) {
    throw new RuntimeException("Dormitory page not found: {$pagePath}");
}

ob_start();
require $pagePath;
$html = ob_get_clean();

if ($html === false) {
    throw new RuntimeException('Could not render the dormitory page.');
}

if (!is_dir($outputDirectory) && !mkdir($outputDirectory, 0775, true) && !is_dir($outputDirectory)) {
    throw new RuntimeException("Could not create output directory: {$outputDirectory}");
}

$outputPath = $outputDirectory . '/index.html';
if (file_put_contents($outputPath, $html, LOCK_EX) === false) {
    throw new RuntimeException("Could not write static page: {$outputPath}");
}

fwrite(STDOUT, "Rendered dormitory page to {$outputPath}\n");
