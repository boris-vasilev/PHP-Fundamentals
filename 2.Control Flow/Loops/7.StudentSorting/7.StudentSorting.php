<?php
class Student{
   public $firstName;
   public $secondName;
    public $examScore;
    public function __construct($first,$second,$exam){
        $this->firstName = $first;
        $this->secondName = $second;
        $this->examScore = $exam;
    }
}
if(isset($_GET['first'])&&isset($_GET['second'])&&isset($_GET['exam'])&&isset($_GET['sortby'])&&isset($_GET['order'])){
    $students;
//turning the first[] second[] and exam[] arrays into an array of Student objects to make things easier and more readable
    for($i = 0; $i<count($_GET['first']);$i++){
        $students[$i] = new Student($_GET['first'][$i],$_GET['second'][$i],$_GET['exam'][$i]);
    }
}
//using usort() to define our own sort so that we can sort an array of Student objects by their properties; changing order(of $a $b) to change asc/desc order
if($_GET['sortby']=='first'){
    if ($_GET['order']=='asc') {
        function cmp($a, $b)
        {
            return strcmp($a->firstName, $b->firstName);
        }
        usort($students, 'cmp');
    }else{
        function cmp($a, $b)
        {
            return strcmp($b->firstName, $a->firstName);
        }
        usort($students, 'cmp');
    }
}elseif ($_GET['sortby']=='second'){
    if ($_GET['order']=='asc') {
        function cmp($a, $b)
        {
            return strcmp($a->secondName, $b->secondName);
        }
        usort($students, 'cmp');
    }else{
        function cmp($a, $b)
        {
            return strcmp($b->secondName, $a->secondName);
        }
        usort($students, 'cmp');
    }
}elseif($_GET['sortby']=='exam'){
    if ($_GET['order']=='asc') {
        function cmp($a, $b)
        {
            return $a->examScore > $b->examScore;
        }
        usort($students, 'cmp');
    }else{
        function cmp($a, $b)
        {
            return $b->examScore > $a->examScore;
        }
        usort($students, 'cmp');
    }
}
include '7.StudentSorting_frontend.php';
?>