<?php
session_start();
require_once('/var/www/html/cps_simple.php');

$base_url = '';

$connectionStrings = array(	
  'tcp://cloud-us-0.clusterpoint.com:9007',	
  'tcp://cloud-us-1.clusterpoint.com:9007',	
  'tcp://cloud-us-2.clusterpoint.com:9007',	
  'tcp://cloud-us-3.clusterpoint.com:9007',	
);

$admin_user = 'yashdbest01@gmail.com';
$admin_pass = 'vardhan0307';
$cpsConn = new CPS_Connection(new CPS_LoadBalancer($connectionStrings), 'localshopper', $admin_user, $admin_pass, 'document', '//document/id', array('account' => 100236));	

//$cpsConn->setDebug(true);

?>
