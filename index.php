<?php
$directory = '/Users/24sayahit/Documents/wd-1';
function recurse($value) {
    
}
function scanarama($dir) {
    //$topdir = array_values(array_diff(scandir($dir), array('..', '.')));
    $topdir = scandir($dir);
    foreach($topdir as &$filename) {
        $isdir = is_dir($filename);
        $dir = null ;
        if( is_dir($filename) != 1){
            $dir = "0";
            $filename = array($filename, is_dir($filename));
        } else {
            $dir = 1;
            $filename = array($filename, is_dir($filename), scanarama($filename));
        }
        
    }
    return $topdir;




}

function seefiles($d) {
    if(is_dir($d)) {
        $fs = glob( $d . '*', GLOB_MARK );
        $fs = scandir($fs);
        foreach ( $fs as $f) {
            $f = array($f, is_file($f), seefiles($f));
        }
        return $fs;
    }
}

function scawnDir($target) {

    if(is_dir($target)){

        $files = glob( $target . '*', GLOB_MARK ); //GLOB_MARK adds a slash to directories returned

        foreach( $files as $file )
        {
            scanDir( $file );
        }

        
    } 
}

function pretty_dump($arr, $d=1){
    if ($d==1) echo "<pre>";    // HTML Only
    if (is_array($arr)){
        foreach($arr as $k=>$v){
            for ($i=0;$i<$d;$i++){
                echo "\t";
            }
            if (is_array($v)){
                echo $k.PHP_EOL;
                Pretty_Dump($v, $d+1);
            } else {
                echo $k."\t".$v.PHP_EOL;
            }
        }
    }
    if ($d==1) echo "</pre>";   // HTML Only
}

$dirscanned = seefiles($directory);

$transversed = print_r($dirscanned);

?>

<?= $transversed ?>








<!-- https://github.com/lorenzos/Minixed/tree/master -->