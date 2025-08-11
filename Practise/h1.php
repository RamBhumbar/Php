<html>
    <form method="POST">
    <label for="Name">Name</label>
    <input type="text" id="Name" name="Name" />
    <label for="Rollno">Rollno</label>
    <input type="text" id="Rollno" name="Rollno" />
    <input type="submit" value="submit">
    </form>
    
    </html>
    <?php

if($_SERVER["REQUEST_METHOD"]=="post")
{
$Name=$_POST["Name"];
$Rollno=$_POST["Rollno"];

echo $Name;
echo $Rollno;
}
?>