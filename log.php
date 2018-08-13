<html>
<head>
<title>log</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?PHP
$temp_path="C:/wamp/www/mikrotikLogMonitoring/";
$find1 = "script,info"; 
$find2 = "logged-in";
    
    $dir = $temp_path.'log/';
 
#####   1   ######    
     $files = glob($dir."*.txt");
    $output = "result.txt";
    foreach($files as $file) {
        $content = file_get_contents($file);
        file_put_contents($output, $content, FILE_APPEND);
    }
#####    2     #####
    
  
 $output2="result2.txt";
 $result2="";
 $file = fopen("$output","r");
while(!feof($file)){
   $stringData = fgets($file);//read a line on every itration

if ((strpos($stringData , $find1) !== false) && (strpos($stringData , $find2) !== false))
   {
      //  file_put_contents($output2, $stringData, FILE_APPEND);
      $result2.=$stringData;
    }
else {
       
    
     }

}
file_put_contents($output2, $result2, FILE_APPEND);
fclose($file);

    
?>

</body>
</html>

