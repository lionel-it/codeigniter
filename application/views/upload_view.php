<?php
$upload=array(
    "name" => "img",
    "size" => "25",
);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Freetuts.net</title>
</head>
  
<body>
    <?php 
      $this->load->helper("text");
      $string = "Day la vi du ve word_limiter"; 
      $string = word_limiter($string, 4);
      // echo $string; // Day la vi du…
      $string = "Day la vi du ve character_limiter"; 
      $string = character_limiter($string, 9);
      // echo $string; Day la vi…
      $string = "Got damn it shit";
      $badword = array('damn', 'fuck', 'shit', 'funny');
      // echo $string = word_censor($string, $badword, '***'); //Got *** it ***
      $string = "Freetuts.net la website chia se kinh nghiem lap trinh";
      echo $string = highlight_phrase($string, "Freetuts.net", "<span style='color:red;'>", "</span>");
    ?>
    <?php
        if($errors != ""){
            echo $errors;
        }
        echo form_open_multipart(base_url()."upload/doupload");
        echo form_label("Avartar: ").form_upload($upload)."<br />";
        echo form_label(" ").form_submit("ok", "Upload");
        echo form_close();
    ?>
</body>
</html>