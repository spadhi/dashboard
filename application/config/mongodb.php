<?php 
// Codeigniter access check, remove it for direct use
if( !defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

/**
 * Configuration file for the MongoDB driver
 *
 * @author      Carlos Cessa <carlos@bitslice.net>
 * @author_url  http://www.bitslice.net
 */

/*
| -------------------------------------------------------------------
| MONGODB CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access mongodb.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|   ['mongo_host']             The hostname of the database server
|   ['mongo_port']             The port of the database server
|   ['mongo_user']             The username used to connect to the database
|   ['mongo_pass']             The password used to connect to the database
|   ['mongo_db']               The name of the database you want to connect to
|   ['mongo_replicaset']       Wether the connection is being made to a replicaset or not
|   ['mongo_slave_ok']         Allow to run read queries on slave servers for performance
|   ['mongo_write_timeout']    The time to wait for the server in milliseconds
|   ['mongo_ensure_replicas']  The number of replicas to wait for when writing data
|   ['mongo_update_all']       Update all the docs matching a criteria or just the first one
|   ['mongo_remove_all']       Remove all the docs matching a criteria or just the first one
|   ['mongo_use_upsert']       Create a new document when updating a non-existent one
|   ['mongo_expand_dbrefs']    Decide to autamagically expand any DBRefs while running queries
'hostname' => 'ds047692.mongolab.com:47692',
	'username' => 'heroku_w8dn2z47',
	'password' => '2a7s406f707c39rp8c0t5jlruk',
	'database' => 'heroku_w8dn2z47',
*/
// $config['mongo_host']            = 'ds047692.mongolab.com';
// $config['mongo_port']            = 47692;
// $config['mongo_user']            = 'test_w8dn2z47';
// $config['mongo_pass']            = 'test';
// $config['mongo_db']              = 'heroku_w8dn2z47';
$config['mongo_host']            = 'ds039860.mongolab.com';
$config['mongo_port']            = 39860;
$config['mongo_user']            = 'test_w8dn2z47';
$config['mongo_pass']            = 'test';
$config['mongo_db']              = 'dashboard';
$config['mongo_replicaset']      = FALSE;
$config['mongo_slave_ok']        = FALSE;
$config['mongo_write_timeout']   = 5000;
$config['mongo_ensure_replicas'] = 0;
$config['mongo_update_all']      = TRUE;
$config['mongo_remove_all']      = TRUE;
$config['mongo_use_upsert']      = TRUE;
$config['mongo_expand_dbrefs']   = TRUE;

// $config['default']['mongo_hostbase'] = 'ds047692.mongolab.com:47692';
// 
// //Database Name
// $config['default']['mongo_database'] = 'heroku_w8dn2z47';
$config['default']['mongo_hostbase'] = 'ds039860.mongolab.com:39860';

//Database Name
$config['default']['mongo_database'] = 'dashboard';


//DB Username - by default, it is empty 
$config['default']['mongo_username'] = 'test_w8dn2z47';

//DB Password - by default, it is empty 
$config['default']['mongo_password'] = 'test';

/* End of file mongodb.php */
/* Location: ./{APPLICATION}/config/mongodb.php */