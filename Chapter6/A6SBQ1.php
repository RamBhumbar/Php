. Write a AJAX program to fetch information from XML file. The XML file looks like 
this: “cd_catalog.xml” [ Enter at least 10 records inXML file] 
CATALOG> 
<CD> 
<TITLE> </TITLE> 
<ARTIST> </ARTIST> 
<COUNTRY> </COUNTRY> 
<COMPANY> </COMPANY> 
<PRICE> </PRICE> 
<YEAR> </YEAR> 
</CD> 
</CATALOG> 

<!-- index.html -->
<!DOCTYPE html>
<html>
<head>
    <title>AJAX Fetch XML Data</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#fetchData").click(function(){
                $.ajax({
                    url: "cd_catalog.xml",
                    dataType: "xml",
                    success: function(data) {
                        let output = "<h2>CD Catalog</h2><ul>";
                        $(data).find("CD").each(function(){
                            let title = $(this).find("TITLE").text();
                            let artist = $(this).find("ARTIST").text();
                            let year = $(this).find("YEAR").text();
                            output += `<li><strong>${title}</strong> by ${artist} (${year})</li>`;
                        });
                        output += "</ul>";
                        $("#cdList").html(output);
                    }
                });
            });
        });
    </script>
</head>
<body>
    <button id="fetchData">Fetch CD Catalog</button>
    <div id="cdList"></div>
</body>
</html>

<!-- cd_catalog.xml -->
<?xml version="1.0" encoding="UTF-8"?>
<CATALOG>
    <CD>
        <TITLE>Empire Burlesque</TITLE>
        <ARTIST>Bob Dylan</ARTIST>
        <COUNTRY>USA</COUNTRY>
        <COMPANY>Columbia</COMPANY>
        <PRICE>10.90</PRICE>
        <YEAR>1985</YEAR>
    </CD>
    <CD>
        <TITLE>Hide your heart</TITLE>
        <ARTIST>Bonnie Tyler</ARTIST>
        <COUNTRY>UK</COUNTRY>
        <COMPANY>CBS Records</COMPANY>
        <PRICE>9.90</PRICE>
        <YEAR>1988</YEAR>
    </CD>
    <CD>
        <TITLE>Greatest Hits</TITLE>
        <ARTIST>Dolly Parton</ARTIST>
        <COUNTRY>USA</COUNTRY>
        <COMPANY>RCA</COMPANY>
        <PRICE>9.90</PRICE>
        <YEAR>1982</YEAR>
    </CD>
    <CD>
        <TITLE>Still got the blues</TITLE>
        <ARTIST>Gary Moore</ARTIST>
        <COUNTRY>UK</COUNTRY>
        <COMPANY>Virgin records</COMPANY>
        <PRICE>10.20</PRICE>
        <YEAR>1990</YEAR>
    </CD>
    <CD>
        <TITLE>Brothers in Arms</TITLE>
        <ARTIST>Dire Straits</ARTIST>
        <COUNTRY>UK</COUNTRY>
        <COMPANY>Vertigo</COMPANY>
        <PRICE>10.90</PRICE>
        <YEAR>1985</YEAR>
    </CD>
    <CD>
        <TITLE>Private Dancer</TITLE>
        <ARTIST>Tina Turner</ARTIST>
        <COUNTRY>USA</COUNTRY>
        <COMPANY>Capitol</COMPANY>
        <PRICE>8.90</PRICE>
        <YEAR>1983</YEAR>
    </CD>
    <CD>
        <TITLE>Red</TITLE>
        <ARTIST>Taylor Swift</ARTIST>
        <COUNTRY>USA</COUNTRY>
        <COMPANY>Big Machine</COMPANY>
        <PRICE>12.90</PRICE>
        <YEAR>2012</YEAR>
    </CD>
    <CD>
        <TITLE>Thriller</TITLE>
        <ARTIST>Michael Jackson</ARTIST>
        <COUNTRY>USA</COUNTRY>
        <COMPANY>Epic</COMPANY>
        <PRICE>14.90</PRICE>
        <YEAR>1982</YEAR>
    </CD>
    <CD>
        <TITLE>Abbey Road</TITLE>
        <ARTIST>The Beatles</ARTIST>
        <COUNTRY>UK</COUNTRY>
        <COMPANY>Apple</COMPANY>
        <PRICE>13.90</PRICE>
        <YEAR>1969</YEAR>
    </CD>
    <CD>
        <TITLE>The Dark Side of the Moon</TITLE>
        <ARTIST>Pink Floyd</ARTIST>
        <COUNTRY>UK</COUNTRY>
        <COMPANY>Harvest</COMPANY>
        <PRICE>15.90</PRICE>
        <YEAR>1973</YEAR>
    </CD>
</CATALOG>
