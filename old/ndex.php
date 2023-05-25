<?php
$directory = '/Users/24sayahit/Documents/wd-1/';

function panopticon($inputobject) {
    if(is_dir($inputobject)) {
        $objects = array();
        $initobject = array_values(array_diff(scandir($inputobject), array('.', '..')));
        foreach($initobject as $object) {
            array_push( $objects, array($object, is_dir($object), panopticon($object)) );
        }
        return $objects;
    } else {
        return array($inputobject, is_dir($inputobject));
    }
}

function seefiles($directory) {
    if(is_dir($directory)) {
        $objects = array();
        foreach ( array_values(array_diff(scandir($dirs), array('..','.'))) as $file ) {
            if(is_dir($file)) {
                array_push($dirs, $file, seefiles($f));
            } else {
                array_push($files, $file, seefiles($f));
            }
        }
        return $di;
    } else {
        return "";
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

$transversed = pretty_dump(panopticon($directory));

?>

<?= $transversed ?>








<!-- https://github.com/lorenzos/Minixed/tree/master -->