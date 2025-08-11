Write a script to create XML file named “Teacher.xml”. 
<Department> 
<Computer Science> 
<Teacher Name>…</Teacher Name> 
<Qualification>….</Qualification> 
<Subject Taught>…</Subject Taught> 
<Experience>…</Experience> 
</Computer Science> 
</Department> 
Store the details of 5 teachers who are having qualification as NET

<?xml version="1.0" encoding="UTF-8"?>
<Teachers>
    <Department>
        <ComputerScience>
            <Teacher>
                <TeacherName>John Doe</TeacherName>
                <Qualification>NET</Qualification>
                <SubjectTaught>Data Structures</SubjectTaught>
                <Experience>10 years</Experience>
            </Teacher>
            <Teacher>
                <TeacherName>Jane Smith</TeacherName>
                <Qualification>NET</Qualification>
                <SubjectTaught>Algorithms</SubjectTaught>
                <Experience>8 years</Experience>
            </Teacher>
            <Teacher>
                <TeacherName>Robert Brown</TeacherName>
                <Qualification>NET</Qualification>
                <SubjectTaught>Database Management</SubjectTaught>
                <Experience>12 years</Experience>
            </Teacher>
            <Teacher>
                <TeacherName>Lisa White</TeacherName>
                <Qualification>NET</Qualification>
                <SubjectTaught>Operating Systems</SubjectTaught>
                <Experience>9 years</Experience>
            </Teacher>
            <Teacher>
                <TeacherName>Mark Johnson</TeacherName>
                <Qualification>NET</Qualification>
                <SubjectTaught>Computer Networks</SubjectTaught>
                <Experience>11 years</Experience>
            </Teacher>
        </ComputerScience>
    </Department>
</Teachers>
