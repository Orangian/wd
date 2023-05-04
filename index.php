<?php
$directory = '/Users/24sayahit/Documents/wd-1';


function seefiles($d) {
    if(is_dir($d)) {
        foreach ( array_values(array_diff(scandir($d), array('..'))) as $f ) {
            if(is_dir($f)) {
                $di[] = $f;
                $di[] = array($this->$di, seefiles($f));
            } else {
                $fi[] = $f;
            }
        }
        return $di;
    } else {
        return false;
    }
}

function scanAllDir($dir) {
    $result = [];
    foreach(scandir($dir) as $filename) {
      if ($filename[0] === '.') continue;
      $filePath = $dir . '/' . $filename;
      if (is_dir($filePath)) {
        foreach (scanAllDir($filePath) as $childFilename) {
          $result[] = $filename . '/' . $childFilename;
        }
      } else {
        $result[] = $filename;
      }
    }
    return $result;
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

$transversed = pretty_dump(seefiles($directory));

?>

<?= $transversed ?>








<!-- https://github.com/lorenzos/Minixed/tree/master -->