<?php  // Totara configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '192.168.2.136';
$CFG->dbname    = 'totaralms';
$CFG->dbuser    = 'mysqlvendor1';
$CFG->dbpass    = 'P@ssw0rd';
$CFG->prefix    = 'totara_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbsocket' => 0,
);

$CFG->wwwroot   = 'http://www.heutagon.com/courses';
$CFG->dataroot  = 'D:\\moodle\\totara\\heutagon\\totaralmsdata';
$CFG->admin     = 'admin';
$CFG->opensslcnf = 'C:/Program Files (x86)/PHP/v5.4/extras/openssl.cnf'; 

$CFG->directorypermissions = 0777;

require_once(dirname(__FILE__) . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
