<?php  // Totara configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'totaralms';
$CFG->dbuser    = 'root';
$CFG->dbpass    = 'pass';
$CFG->prefix    = 'totara_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbsocket' => 0,
);

$CFG->wwwroot   = 'http://pulse.mqspectrum.com:8088/totaralms';
$CFG->dataroot  = 'D:\\\\totara252\\totaralmsdata';
$CFG->admin     = 'admin';
$CFG->opensslcnf = 'C:/xampp/apache/bin/openssl.cnf';

$CFG->directorypermissions = 0777;

require_once(dirname(__FILE__) . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
