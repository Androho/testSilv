<?php
$dir = "pics_silv";
$sub_dir = "";
$skip = array('.', '..');
$files = scandir($dir);
$sub_files;


foreach ($files as $file) {
    if (!in_array($file, $skip))
        $sub_files=scandir($dir.'/'.$file);
    if (!in_array($sub_files,$skip))
        $sub_dir=$dir.'/'.$file.'/'.$sub_files[2];
        echo '<div class="col-md-3 col-sm-4 col-xs-6">
      <img class="img-fluid" src="'.$sub_dir.'"/>
  </div>';
//        echo($file. '<br />');
   }
