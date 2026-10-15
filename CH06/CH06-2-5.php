<?php
function printHeader() {
    echo"<h3>SID:C113181111</h3>";
    echo"<h3>Name:Daily</h3>";
    echo"<h3>EX04</h3>";
}
printHeader();
$test = 15;
var_dump( $test );
unset($test);
var_dump( $test );
