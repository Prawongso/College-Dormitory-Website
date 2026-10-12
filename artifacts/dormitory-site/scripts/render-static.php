<?php
declare(strict_types=1);

$workspaceRoot = dirname(__DIR__, 3);
$pagePath = $workspaceRoot . '/dormitory/index.php';
$outputDirectory = dirname(__DIR__) . '/dist/public';
$assetSourceDirectory = $workspaceRoot . '/dormitory/assets';

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

if (!is_dir($assetSourceDirectory)) {
    throw new RuntimeException("Dormitory image assets not found: {$assetSourceDirectory}");
}

$assetOutputDirectory = $outputDirectory . '/assets';
if (!is_dir($assetOutputDirectory) && !mkdir($assetOutputDirectory, 0775, true) && !is_dir($assetOutputDirectory)) {
    throw new RuntimeException("Could not create asset output directory: {$assetOutputDirectory}");
}

$assetCount = 0;
foreach (glob($assetSourceDirectory . '/*') ?: [] as $assetPath) {
    if (!is_file($assetPath)) {
        continue;
    }

    $assetOutputPath = $assetOutputDirectory . '/' . basename($assetPath);
    if (!copy($assetPath, $assetOutputPath)) {
        throw new RuntimeException("Could not copy dormitory asset: {$assetPath}");
    }
    $assetCount++;
}

if ($assetCount === 0) {
    throw new RuntimeException("No dormitory image assets found in {$assetSourceDirectory}");
}

fwrite(STDOUT, "Rendered dormitory page to {$outputPath} and copied {$assetCount} assets.\n");
