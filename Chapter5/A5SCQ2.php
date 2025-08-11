Write a PHP script to accept following XML file 
<subject> 
<subject code>BCA 245</subject code> 
<subject name> Web Technology Laboratory </subject name> 
</subject> 
Store data of 5 subjects as display subject code of Wen Technology Laboratory. 

<?php
$xmlData = '<?xml version="1.0" encoding="UTF-8"?>
<subjects>
    <subject>
        <code>BCA 101</code>
        <name>Computer Fundamentals</name>
    </subject>
    <subject>
        <code>BCA 202</code>
        <name>Data Structures</name>
    </subject>
    <subject>
        <code>BCA 245</code>
        <name>Web Technology Laboratory</name>
    </subject>
    <subject>
        <code>BCA 310</code>
        <name>Database Management Systems</name>
    </subject>
    <subject>
        <code>BCA 410</code>
        <name>Operating Systems</name>
    </subject>
</subjects>';

// Save XML data to a file
file_put_contents("subjects.xml", $xmlData);

echo "XML file created successfully.<br><br>Finding Subject Code for 'Web Technology Laboratory':<br>";

// Load XML file
$xml = simplexml_load_file("subjects.xml");
foreach ($xml->subject as $subject) {
    if (trim($subject->name) == "Web Technology Laboratory") {
        echo "Subject Code: " . $subject->code . "<br>";
    }
}
?>
