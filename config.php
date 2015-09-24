<?php  // Totara configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'moodle_ps';
$CFG->dbuser    = 'root';
$CFG->dbpass    = '';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbsocket' => 0,
);


$CFG->wwwroot   = 'http://localhost:8888/pasit/parenthesis/courses';
$CFG->dataroot  = 'C:\xampp\htdocs\pasit\sitedata_parenthesis\moodle';
$CFG->admin     = 'admin';
$CFG->root      = 'http://localhost:8888/pasit/parenthesis';
$CFG->dirroot	= 'C:xampp\htdocs\pasit\parenthesis\courses';

$CFG->directorypermissions = 0777;

$CFG->passwordsaltmain = '1{R{dW7t:-+)Ju#o+Y o9X4{7+b12v';

require_once(dirname(__FILE__) . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
