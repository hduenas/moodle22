<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = $_SERVER["DB1_HOST"];
$CFG->dbname    = $_SERVER["DB1_NAME"];
$CFG->dbuser    = $_SERVER["DB1_USER"];
$CFG->dbpass    = $_SERVER["DB1_PASS"] ;
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbsocket' => 0,
);

$CFG->wwwroot   = 'http://moodle22.pagodabox.com';
$CFG->dataroot  = '/var/www/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

$CFG->passwordsaltmain = 'Oo<Dha:2j[V&z;qMgHrImyZl';

require_once(dirname(__FILE__) . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!