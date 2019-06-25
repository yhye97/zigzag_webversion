<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
function alert($msg , $url = '') {
    $CI = &get_instance();
    echo "<meta http-equiv=\"content-type\" content=\"text/html; charset=" . $CI -> config -> item('charset') . "\">";
 
    echo "
        <script type='text/javascript'>
            alert('" . $msg . "');
            location.replace('" . $url . "');
        </script>
    ";
    exit ;
}
 
// 창 닫기
function alert_close($msg) {
    $CI = &get_instance();
    echo "<meta http-equiv=\"content-type\" content=\"text/html; charset=" . $CI -> config -> item('charset') . "\">";
 
    echo "<script type='text/javascript'> alert('" . $msg . "'); window.close(); </script>";
    exit ;
}
 
function alert_only($msg, $exit = TRUE) {
    $CI = &get_instance();
    echo "<meta http-equiv=\"content-type\" content=\"text/html; charset=" . $CI -> config -> item('charset') . "\">";
 
    echo "<script type='text/javascript'> alert('" . $msg . "'); </script>";
 
    if ($exit)
        exit ;
}
 
function replace($url = '/') {
    echo "<script type='text/javascript'>";
    if ($url)
        echo "window.location.replace('" . $url . "');";
    echo "</script>";
    exit ;
}
 

