<?php
session_start();

$target_dir = "uploads/";
$newfilename = $target_dir.$_SESSION["id"] . '.png';


// requested file's name
$file_name = $newfilename;

// make sure it's a file before doing anything
if(is_file($file_name))
{
  // required for IE
  if(ini_get('zlib.output_compression')) { ini_set('zlib.output_compression', 'Off'); }

  // get the file mime type using the file extension
  switch(strtolower(substr(strrchr($file_name,'.'),1)))
  {
      case 'pdf': $mime = 'application/pdf'; break;
      case 'zip': $mime = 'application/zip'; break;
      case 'jpeg':$mime = 'image/png'; break;
      case 'jpg': $mime = 'image/jpg'; break;
      case 'png':
      default: $mime = 'application/force-download';
  }
  header('Pragma: public');   // required
  header('Expires: 0');       // no cache
  header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
  header('Cache-Control: private',false);
  header('Content-Type: '.$mime);
  header('Content-Disposition: attachment; filename="'.basename($file_name).'"');
  header('Content-Transfer-Encoding: binary');
  header('Content-Length: '.filesize($file_name));    // provide file size
  readfile($file_name);       // push it out
}

?>

?>