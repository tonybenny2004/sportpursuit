<?php
/**
 * File Containig the Index 
 *
 * @category Codetest
 * @package  Testcode
 * @author   @tonybenny2004 <tonybenny2004@gmail.com>
 * @version  1.0.0
 */
require __DIR__ . '/vendor/autoload.php';
use \Codetest\Csvread;
$obj = new Csvread();
$records = $obj->getRecords();
foreach ($records as $offset => $record) {
    //$offset : represents the record offset
    print('<pre>');
    var_export($record); //returns something like
    print('</pre>');
     
}

?>