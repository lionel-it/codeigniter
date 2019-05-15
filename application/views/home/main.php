<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
<style>
*{ margin: 0px; padding: 0px;}
body{ width: 780px; margin: 0px auto;}
#top{ background: orange; color:white; height: 100px; line-height: 100px; font-weight: bold; text-align: center;}
#footer{ background: black; color:white; height: 30px; line-height: 30px; font-weight: bold; text-align: center;}
#content{ padding: 5px;}
</style>
</head>
 
<body>
    <?php
      echo $this->load->view($header,'', TRUE); 
      echo $this->load->view($content,'', TRUE); 
      echo $this->load->view($footer,'', TRUE); 
    ?>
</body>
</html>