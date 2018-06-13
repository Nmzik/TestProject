<?php	
$jsonData = @file_get_contents("http://api.youtube6download.top/api/?id=$id");
$links = json_decode($jsonData,TRUE); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>YouTube в MP3 PHP Скрипт</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
  function validatebeforesubmit(thisform) {
  var yout = thisform.ytlink.value;
  if(yout==null || yout == "")
     {
     alert("Please Enter the Youtube Video URL");
     thisform.ytlink.focus();
     return false;
     }
  return true;
  }   
  </script>
</head>
<body>

</body>
</html>