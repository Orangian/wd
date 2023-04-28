<?php
$directory = '/Users/24sayahit/Documents/wd-1';

function scanarama($dir) {
    $rawdir = array_diff(scandir($dir), array('..', '.'));
    foreach($rawdir as &$tory) {
        $isdir = is_dir($tory);
        $tory = array($tory, if( is_dir($tory) != 1){return 0});
    }
    return $rawdir;
}
?>

<?= print_r(scanarama($directory)); ?>








<!-- https://github.com/lorenzos/Minixed/tree/master -->