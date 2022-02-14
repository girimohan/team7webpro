<?php
echo"<h2>Checking if the file exists or not</h2>";
if(file_exists("read1.php")){
    echo("File exist!");
}
else{
    echo"File not found!"."<br>";
    echo("Create a new file");
    $newfile = fopen('file.txt','a') or die ("failed to create a file");
    $txt = "hello world this is something. <br>";
    fwrite($newfile, $txt);
    fclose($newfile);
}

?>