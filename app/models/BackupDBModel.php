<?php 

final class BackupDBModel 
{
    
	private $db;
	public function __construct(){ 
		$this->db = new Database;
	}

    
    public function _backupDb(){
      /**
 * simple script to export mysql database(s) into zip file(s) containing individual tables
 *
 * @author Richtermeister
 */

//database access params
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "";

//uncomment and populate this variable to export only selected databases
//$databases = array("database1", "database2");

//these databases won't be exported, you can add to this list
$exclude_databases = array("mysql", "information_schema"); //those are system databases.

//this string is evaluated as timeformat and appended to the export filename
//use it to have separate exports for each day - or leave empty for to override files with every export
$date_postfix = "_%y-%m-%d"; //results in "database_2011-02-27.zip" (example)


// ~~~~~ no need to modify below this line ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

$con = mysql_connect($mysql_host, $mysql_user, $mysql_password);
if(false === $con)
{
  die("couldn't connect to database");
}

if(!isset($databases))
{
  //get a list of databases
  $sql = "SHOW DATABASES;";
  $result = mysql_query($sql);

  while($row = mysql_fetch_array($result))
  {
    if(in_array($row[0], $exclude_databases)) continue;
    $databases[] = $row[0];
  }
}

if(!count($databases))
{
  die("no databases to export.");
}

//start exporting databases
foreach($databases as $mysql_database)
{
  if(!mysql_select_db($mysql_database, $con))
  {
    echo (sprintf("couldn't select database %s", $mysql_database)).PHP_EOL;
    continue;
  }

  echo sprintf("exporting database: %s", $mysql_database).PHP_EOL;

  //see which tables we have
  $sql = "SHOW TABLES;";
  $result = mysql_query($sql);

  $tables = array();
  while($row = mysql_fetch_array($result))
  {
    $tables[] = $row[0];
  }

  if(!count($tables))
  {
    echo ("no tables to export").PHP_EOL;
    continue;
  }

  $dir = $mysql_database."_db_export_tmp";
  if(!is_dir($dir))
  {
    if(!mkdir($dir, 0775))
    {
      die(sprintf("couldn't create directory %s", $dir)); //would probably affect all databases
    }
  }

  //export each table individually
  foreach($tables as $table)
  {
    $filename = $dir.DIRECTORY_SEPARATOR.$table.".sql";
    if($mysql_password != "")
    {
      $cmd = sprintf("mysqldump -h %s -u %s -p%s %s %s > %s", $mysql_host, $mysql_user, $mysql_password, $mysql_database, $table, $filename);
    }
    else
    {
      $cmd = sprintf("mysqldump -h %s -u %s %s %s > %s", $mysql_host, $mysql_user, $mysql_database, $table, $filename);
    }
    echo sprintf("exporting table: %s", $table).PHP_EOL;
    system($cmd, $return);
    if(0 !== $return)
    {
      die(sprintf("could not execute command %s", $cmd));
    }
  }

  //zip it up
  $zip = new ZipArchive();

  //remove potential old file
  $zip_file = $mysql_database.strftime($date_postfix).".zip";
  if(file_exists($zip_file))
  {
    unlink($zip_file);
  }

  if(true !== $zip -> open($zip_file, ZipArchive::CREATE))
  {
    die(sprintf("Couldn't create zip archive %s", $zip_file)); //would probably affect other exports, quit script
  }

  $directory = realpath($dir);
  $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory), RecursiveIteratorIterator::SELF_FIRST);

  foreach ($files as $file)
  {
    $file = realpath($file);
    $zip -> addFile($file, str_replace($directory . DIRECTORY_SEPARATOR, '', $file));
  }

  $zip -> close();

  //remove sql directory
  foreach($files as $file)
  {
    unlink(realpath($file));
  }
  rmdir($dir);

  echo (sprintf("Database %s successfully backed up to %s", $mysql_database, $zip_file)).PHP_EOL;

} //end of database loop
    }
}