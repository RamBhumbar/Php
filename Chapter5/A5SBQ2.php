
Write PHP script to generate an XML code in the following format 
<?xml version=1.0”?> 
<ABC College> 
<Computer Application Department> 
<Course> BCA(Science) </Course> 
<Student Strength > 80</Student Strength> 
<Number of Teachers>12</Number of Teachers> 
</ABC College> 
</Computer Application Department> 

<?php
// Generate XML format using PHP
$xml = new SimpleXMLElement('<?xml version="1.0"?><ABC_College></ABC_College>');

$department = $xml->addChild('Computer_Application_Department');
$course = $department->addChild('Course', 'BCA(Science)');
$studentStrength = $department->addChild('Student_Strength', '80');
$numberOfTeachers = $department->addChild('Number_of_Teachers', '12');

// Save and display XML output
Header('Content-type: text/xml');
echo $xml->asXML();
?>
