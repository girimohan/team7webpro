<?php
echo"<h2>Checking if the file exists or not</h2>";
if(file_exists("html-website/about1.html")){
    echo("File exist!");
}
else{
    echo"File not found!"."<br>";
    echo("Create a new file <br>");
    $newfile = fopen('file.txt','w') or die ("Failed to create a file");
    $txt = "Hello all, we are team7 and team members are: Mohan, Joni and Edgar.";
    fwrite($newfile, $txt);
    fclose($newfile);

    echo "<hr><h2>Reading from a file </h2>"; 
    $fname = "file.txt";
    $handle = fopen($fname, "r");
    $cont = fread($handle, filesize($fname));
    echo $cont;
    fclose($handle);

    echo "<hr><h2> To read the defined number of characters from the file</h2>";
    $fh = fopen('file.txt', 'r') or die ("Failed to read file");
    $text = fread($fh, 10);
    fclose($fh);
    echo $text;
}
?>

<hr><h2>Simple File Upload System </h2>

<form enctype="multipart/form-data" action="upload.php" method="POST">
    Select file to upload: <input name="userfile" type="file" required><br>
    <input type="submit" value="Upload File" />
</form>

