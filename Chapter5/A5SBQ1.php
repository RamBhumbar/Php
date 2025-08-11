. Create a XML file which gives details of students admitted for different courses in Your 
College. Course names can be 
a. Arts 
b. Science 
c. Commerce 
d. Management 
Elements in each course are in following format. 
<Course> 
<Level>…</Level> 
<Intake Capacity>…</Intake Capacity> 
</Course> 
Save the file with “Course.xml” 

<?xml version="1.0" encoding="UTF-8"?>
<Courses>
    <Course>
        <Name>Arts</Name>
        <Level>Undergraduate</Level>
        <IntakeCapacity>60</IntakeCapacity>
    </Course>
    <Course>
        <Name>Science</Name>
        <Level>Undergraduate</Level>
        <IntakeCapacity>80</IntakeCapacity>
    </Course>
    <Course>
        <Name>Commerce</Name>
        <Level>Undergraduate</Level>
        <IntakeCapacity>70</IntakeCapacity>
    </Course>
    <Course>
        <Name>Management</Name>
        <Level>Postgraduate</Level>
        <IntakeCapacity>50</IntakeCapacity>
    </Course>
</Courses>
