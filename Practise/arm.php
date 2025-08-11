

<?php
if(isset($_POST['submit']))
{
    $number=$_POST['number'];
    
    function isArmstrong($number) 
    {
    
        $numStr = (string)$number;
        $numDigits = strlen($numStr);
        
        $sum = 0;
        $temp = $number;
        while ($temp > 0) {
       
            $digit = $temp % 10;
            
           
            $sum += pow($digit, $numDigits);
            
            
            $temp = (int)($temp / 10);
        }
        return $sum == $number;
    }
    $number = 153;  

if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
}
?>
