<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

/*
|--------------------------------------------------------------------------
| HydroServer Lite Sample Configuration File
|--------------------------------------------------------------------------
|
| To use this file for manually editing the configuration:
| (1) edit the $config['database_host'], $config['database_username'],
|              $config['database_name'] and $config['database_password']
| (2) rename this file to default.php.
| It provides configuration for the database and default options for some pages
| Developed by Rohit Khattar, GIS LAB - CAES at ISU
| Further edits made while at GIS Lab - BYU, Provo, Utah
 */
/*
|--------------------------------------------------------------------------
| MySQL connection settings
|--------------------------------------------------------------------------
 */
$config['database_host']     = 'mysql';
$config['database_username'] = 'root';
$config['database_name']     = 'hsl';
$config['database_password'] = 'password';
/*
|--------------------------------------------------------------------------
| Default Variables for Adding Site Controller
|--------------------------------------------------------------------------
 */
$config['default_datum']     = 'Unknown';
$config['default_spatial']   = 'Unknown';
$config['default_source']    = 'dsf';
$config['LocalX']            = 'NULL';
$config['LocalY']            = 'NULL';
$config['LocalProjectionID'] = 'NULL';
$config['PosAccuracy_m']     = 'NULL';
/*
|--------------------------------------------------------------------------
| Default Variables for Adding Data Values
|--------------------------------------------------------------------------
 */
$config['UTCOffset']             = '1';
$config['CensorCode']            = 'nc';
$config['QualityControlLevelID'] = '0';
$config['ValueAccuracy']         = 'NULL';
$config['OffsetValue']           = 'NULL';
$config['OffsetTypeID']          = 'NULL';
$config['QualifierID']           = '1';
$config['SampleID']              = 'NULL';
$config['DerivedFromID']         = 'NULL';
/*
|--------------------------------------------------------------------------
| Default Variables for Adding Variable
|--------------------------------------------------------------------------
 */
$config['default_varcode'] = 'sdf';
$config['time_support']    = '';
/*
|--------------------------------------------------------------------------
| Default Variables for Adding Source
|--------------------------------------------------------------------------
 */
$config['ProfileVersion'] = 'Unknown';
/*
|--------------------------------------------------------------------------
| Configuration for Names and home links
|--------------------------------------------------------------------------
 */
$config['homename']   = 'dsf'; //Name of your blog/Website homepage.
$config['homelink']   = 'sdf'; //Link of your blog/Website homepage
$config['orgname']    = 'dsf'; //Name of your organization
$config['HSLversion'] = '3.0'; //Name of your software version
/*
|--------------------------------------------------------------------------
| Default Language Settings
|--------------------------------------------------------------------------
 */
$config['lang'] = 'English';
/*
|--------------------------------------------------------------------------
| WaterOneFlow Services Settings
|--------------------------------------------------------------------------
 */
//Service code Settings
$config['auth_token']   = '';
$config['service_code'] = 'default';
$config['odm_service']  = 'http://his.cuahsi.org/ODMCV_1_1/ODMCV_1_1.asmx?wsdl';
/*
|--------------------------------------------------------------------------
| Enterprise Settings
|--------------------------------------------------------------------------
 */
$config['multiInstall'] = true;
/*
|--------------------------------------------------------------------------
| Header Settings
|--------------------------------------------------------------------------
 */
$config['headerPath'] = "";
/* End of file default.php */
/* Location: ./application/config/installations/default.php */