<form method ="post">
name: <input type="text" name="name" />
</form>
<?php
if($_POST)
{
    $name=$_POST['name'];
    echo $name;
}
?>