
<?php 

include "header.php";




if ($_SERVER["REQUEST_METHOD"] == "POST" ){
	[$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$page_title = $_POST["page_title"];
	$publisher_title = $_POST["publisher_title"];
	$page_title = $_POST["page_title"];
	$publication_year = $_POST["publication_year"];
	$publication_month = $_POST["publication_month"];
	$medium = $_POST["Medium"];
	$publication_day = $_POST["publication_day"];
	$year_accessed = $_POST["year_accessed"];
	$month_accessed = $_POST["month_accessed"];
	$day_accessed = $_POST["day_accessed"];
	$website_title = $_POST["website_title"];
	$format = $_POST['format'];
	$_SERVER = NULL;
	$form = "";


	$MLA = "";
	$APA = "";

	$first_name_inital = substr($first_name, 0, 1);

	$MLA = $MLA . $last_name . ", ". $first_name . ". " .  ' "' . $page_title . "." . "" .  '" ' .  '<i>' . 
	$publisher_title . '</i>' .  ',' . ' ' . $publication_day . " " .  $publication_month .  " ". $publication_year . "." .  " " . $medium . "."  . " " . $day_accessed . " " . $month_accessed . " " . $year_accessed;


	$APA =  $APA . $last_name . ", ". $first_name_inital . " (". $publication_month . ", " . $publication_day. ", " . $publication_year . ") " . $page_title  ; 

}
else{
	header("Location: auto_citations.php");
}


echo" 
<p class='basic-greyp'> <b>MLA:</b> ".  $MLA . " </p>
<p class='basic-greyp'> <b>APA:</b>" . $APA . "</p>


</body>
</html>";


$output = NULL;

?>