<?php 
date_default_timezone_set("Asia/Kolkata");
echo date('A')."<br>";  // it will display either AM or PM
echo date('B')."<br>";
echo date('c')."<br>";   // YYYY-MM-DD:T:HH:MM:SS:TIMEZONE OFFSET
echo date('d')."<br>";//date
echo date('D')."<br>";//day of a weak
echo date('e')."<br>";// time zone
echo date('F')."<Br>";// month of the year in full text format
echo date('g')."<br>";  //hour in 12 hour format
echo date('G')."<br>";// hour in 24 hour format
echo date('h')."<br>"; // hour in 12 hour format with leading zero
echo date('H')."<br>";// hour in 24 hour format with leading zero
echo date('i')."<br>";//minute with leading zero.
echo date("I")."<br>";// 1 if daylight saving is enabled otherwise 0
echo date("j")."<br>";// day of month
echo date("l")."<br>";// day of a weak in full text format
echo date("m")."<br>";//month of the year in 2 digit format
echo date("M")."<br>";//month in three character abbreviated format
echo date("n")."<br>";//month without leading zero
echo date("o")."<br>";
echo date("O")."<br>";//difference between current time and GMT.
echo date("r")."<br>";
echo date("s")."<br>";//second with leading zero
echo date("S")."<br>";
echo date("t")."<br>";//total number of a day in month
echo date("T")."<br>";//Timezone in three character format..
echo date("U")."<br>";//Total number of seconds from January 1, 1970
echo date("w")."<br>";//day of a week as a single digit
echo date("W")."<br>";
echo date("y")."<br>";//year in two digit format
echo date("Y")."<br>";//year in 4 digit format
echo date("z")."<br>";//day of the year as a number
echo date("Z")."<br>";//offset of the current timezone in second.

$today=getdate();
print_r($today);

echo "<br>";
if(checkdate(30, 2, 2012)==1){
	    echo "its valid date";
}
else
{
	echo "its invalid date";
}



?>