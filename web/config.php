<?php

//pathes
// file and directory name are automaticly generated. In special cases, you change it here.
$global['htmlroot']                     = str_replace(dirname(str_replace('\\','/',strtolower($_SERVER['DOCUMENT_ROOT'])."/dummy")),"",dirname(str_replace('\\','/',strtolower(__FILE__))))."/"; // {BASEDIR} for HTML, etc.
$global['script_root']                  = dirname(str_replace('\\','/',__FILE__));	// serverside path or $DOCUMENT_ROOT
$global['include_path']                 = $global['script_root']."/includes/";		// main directory which contains all classes

// database
$database['dbtype'] = "mysql";
include_once($global['include_path']."class.db.".$database['dbtype'].".php");
final class UglyLauncherDB extends dbclass
{
  protected $server     = "localhost";
  protected $user       = "minestar_wiki";
  protected $password   = "werJmiNYMGSg";
  protected $newlink	= true;
  protected $database   = "minestar_wiki";
  protected $charset    = "utf8";
  
  public function __construct()
  {
    parent::__construct();
  }
}
