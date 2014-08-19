<?php
$accessPath = realpath('.') . '\db\db_meeting.mdb';
include 'adodb5/adodb.inc.php';
$conn = ADONewConnection('access');
$conn->Pconnect("Driver={Microsoft Access Driver (*.mdb)}; Dbq=$accessPath");
$conn->execute('set names utf8');
?>
