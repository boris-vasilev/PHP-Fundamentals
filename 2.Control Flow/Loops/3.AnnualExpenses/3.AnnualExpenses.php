<?php
$currentYear=date("Y");
if (isset($_GET["nyears"])) {
    $yearExpensesList;
    $nyears=$_GET["nyears"];
    for($yearCount=$nyears;$yearCount>0;$yearCount--){
        $year=$currentYear-$yearCount;
        for($i=1;$i<=12;$i++){
            
            $yearExpensesList["$year"][$i]=rand(0,999);
        }
        $yearExpensesList["$year"][13]=array_sum($yearExpensesList["$year"]);
    }
}
include "3.AnnualExpenses_frontend.php";
?>