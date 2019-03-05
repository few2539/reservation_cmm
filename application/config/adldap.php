<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['account_suffix']		= 'ou=People,ou=st,dc=kmutt,dc=ac,dc=th';
$config['base_dn']				= 'dc=kmutt,dc=ac,dc=th';
$config['domain_controllers']	= array ("10.1.130.12");
$config['ad_username']			= 'cmm_manager';
$config['ad_password']			= '@431dkjsp$1';
$config['real_primarygroup']	= true;
$config['use_ssl']				= false;
$config['use_tls'] 				= false;
$config['recursive_groups']		= true;


/* End of file adldap.php */
/* Location: ./system/application/config/adldap.php */