<?php
$g=$_GET['gpa'];
$s=$_GET['studyLevel'];

if(isset($_GET['submit'])){
    if (isset($g) && isset($s)) {
        if($s == "jsc" || $s == "ssc" || $s == "hsc"){
            if ($g ==5 ) {
                echo "<b>Congratulations! You have got A+. Remember, success is a consequences, must not be a goal.</b>";
            } 
            elseif ($g >= 4 && $g <5 ) {
                echo "<b>You have been passed with grade 'A'. Forget the mistakes, Remember the lessons</b>";
            }
            elseif ($g >= 3 && $g <4) {
                echo "<b>You have been passed with grade 'A-'. Forget the mistakes, Remember the lessons</b>";
            }
            elseif ($g >= 2 && $g <3) {
                echo "<b>You have been passed with grade 'B'. Forget the mistakes, Remember the lessons</b>";
            }
            elseif ($g >= 1 && $g <2) {
                echo "<b>You have been passed with grade 'D'. Forget the mistakes, Remember the lessons</b>";
            }
            elseif ($g >=0 && $g <1) {
                echo "<b>Sorry, you have to try again. Better luck next time. Remember, Failure is the pillar of success</b>";
            }
            else{
                echo "<b>You have provided wrong grade point.</b>";
            }
        }
        elseif($s == "graduation" || $s == "masters"){
            if ($g ==4 ) {
                echo "<b>Congratulations! You have got A+. Remember, success is a consequences, must not be a goal.</b>";
            } 
            elseif ($g >= 3.75 && $g <4 ) {
                echo "<b>You have been passed with grade 'A'. Forget the mistakes, Remember the lessons</b>";
            }
            elseif ($g >= 3.5 && $g <3.75 ) {
                echo "<b>You have been passed with grade 'A-'. Forget the mistakes, Remember the lessons</b>";
            }
            elseif ($g >= 3 && $g <3.5) {
                echo "<b>You have been passed with grade 'B+'. Forget the mistakes, Remember the lessons</b>";
            }
            elseif ($g >= 2 && $g <3) {
                echo "<b>You have been passed with grade 'C'. Forget the mistakes, Remember the lessons</b>";
            }
            elseif ($g >= 1 && $g <2 ) {
                echo "<b>You have been passed with grade 'D'. Forget the mistakes, Remember the lessons</b>";
            }
            elseif ($g >=0 && $g <1) {
                echo "<b>Sorry, you have to try again. Better luck next time. Remember, Failure is the pillar of success</b>";
            }
            else{
                echo "<b>You have provided wrong grade point.</b>";
            }
        }
    }
    else{
        echo "Empty input field!";
    }
}
else{
    echo "Form doesn't work.";
}

?>