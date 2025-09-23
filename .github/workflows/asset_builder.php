<?php
if ($argc < 3) {
    echo "Usage: php script.php <extension_version> <cart_version>\n";
    exit(1);
}

$extensionVersion = $argv[1];
$cartVersion = $argv[2];
$rootDir = dirname(__DIR__, 2);
$githubDir = "$rootDir/.github";
$assetsDir = dirname($rootDir).'/assets';

if (!is_dir($assetsDir)) {
    mkdir($assetsDir, 0777, true);
}

$directories = array_filter(glob("$rootDir/*"), 'is_dir');

foreach ($directories as $dir) {
    $dirname = basename($dir);
    if ($dirname === '.github') {
        continue;
    }

    $newDir = "$assetsDir/$dirname";

    if (!is_dir("$githubDir/fish")) {
        echo "Error: Missing .github/fish directory.\n";
        exit(1);
    }

    exec("cp -r $githubDir/fish $newDir");
    echo "Copied .github/fish to $newDir\n";

    $extensionPath = "$newDir/code/extensions/$dirname";
    mkdir(dirname($extensionPath), 0777, true);
    exec("cp -r $dir $extensionPath");
    echo "Copied $dir to $extensionPath\n";

    $packageXml = "$newDir/package.xml";
    if (file_exists($packageXml)) {
        $content = file_get_contents($packageXml);
        $content = str_replace('fish', $dirname, $content);
        $content = preg_replace('/<version>.*?<\/version>/', "<version>$extensionVersion</version>", $content);
        $content = preg_replace('/<cartversions>.*?<item>.*?<\/item>.*?<\/cartversions>/s', "<cartversions><item>$cartVersion</item></cartversions>", $content);
        file_put_contents($packageXml, $content);
        echo "Updated version in $packageXml\n";
    }

    $configXmlPaths = glob("$extensionPath/config.xml");
    foreach ($configXmlPaths as $configXml) {
        if (file_exists($configXml)) {
            $content = file_get_contents($configXml);
            $content = preg_replace('/<version>.*?<\/version>/', "<version>$extensionVersion</version>", $content);
            $content = preg_replace('/<cartversions>.*?<item>.*?<\/item>.*?<\/cartversions>/s', "<cartversions><item>$cartVersion</item></cartversions>", $content);
            file_put_contents($configXml, $content);
            echo "Updated version in $configXml\n";
        }
    }
    exec("cp -r ".$rootDir."/insertBaseDescriptions.php ".$extensionPath."/insertBaseDescriptions.php");
}

echo "Done!\n";
