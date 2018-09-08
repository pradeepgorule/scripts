<?php

$search = '<script async="async" src="stats.js"></script><script async="async" src="https://forums.190slgroup.com/stats.js"></script>';
$dir = 'C:\wamp\www\pradeep\y2k9\mar';
$files = scandir($dir,1);
foreach ($files as $lines){
    if(strlen($lines) > 3 && strpos($lines, '.php') !== false){
        $readfile = fopen('C:\wamp\www\pradeep\y2k9\mar/'.$lines, 'r');

        while(!feof($readfile)) {
            $contents = fgets($readfile);
            if(strpos($contents, $search) !== false)
                echo $lines.'<br>';
        }
        fclose($readfile);
    }
}
?>