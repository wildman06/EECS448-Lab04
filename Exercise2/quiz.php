<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
//access the global array called $_POST to get the values they select
if(isset($_POST["q1"])&& isset($_POST["q2"]) && isset($_POST["q3"]) && isset($_POST["q4"]) && isset($_POST["q5"]))
{
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];
}

//Checking and displaying stats
$count = 0;

if($q1 == "In a funeral pyre")
{
$count++;
}
if($q2 == "Sand")
{
$count++;
}
if($q3 == "Valyrian Steel")
{
$count++;
}
if($q4 == "Lady")
{
$count++;
}
if($q5 == "Bronn")
{
$count++;
}
 echo "<h2>Game of Thrones Quiz Answers</h2>";
echo "Correct Answers: " . $count . "/5<br>"; 
echo "Grade: ". (($count/5)*100) . "%<br><br>";

//dsiplaying questions, including the submission answer and the correct answer.

echo "Question 1: How did Daenaerys Targaryen hatch her dragons?";
echo "<br>You answered: " . $q1;
echo "<br>Correct answer: In a funeral pyre<br><br>"; 

echo "Question 2: What is the only thing that can put out the weapon Wildfire?";
echo "<br>You answered: " . $q2;
echo "<br>Correct answer: Sand<br><br>"; 

echo "Question 3: The only substances that can take down White Walkers are DragonGlass and" ;
echo "<br>You answered: " . $q3;
echo "<br>Correct answer: Valyrian Steel<br><br>"; 

echo "Question 4: Which Stark family direwolf was killed in retaliation for an attack on Prince Joffrey?";
echo "<br>You answered: " . $q4;
echo "<br>Correct answer: Lady<br><br>"; 

echo "Question 5: Who shoots the flaming arrow that subsequently destroy's Stannis' fleet in Blackwater Bay?";
echo "<br>You answered: " . $q5;
echo "<br>Correct answer: Bronn<br><br>"; 


?>
