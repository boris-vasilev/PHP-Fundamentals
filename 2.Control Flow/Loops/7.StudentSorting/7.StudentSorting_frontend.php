<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!--Adding jQuery and Bootstrap-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>
<form >
    <table id="table" class="table">
  <thead>
    <tr>
      <th>First Name:</th>
      <th>Second Name:</th>
      <th>Exam Score:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
      <!--By using first[] second[] exam[] as names for our fields we create PHP arrays that contain -->
      <!--multiple records which are then handled by turning them into objects-->
      <!--IT IS A NICE TRICK! must remember it!-->
    <tr>
      <td><input type="text" name="first[]"/></td>
      <td><input type="text" name="second[]"/></td>
      <td><input type="text" name="exam[]"/></td>
      <td><button type="button" class="btn btn-primary delete">-</button></td>
    </tr>
  </tbody>
</table>
<button type="button" class="btn btn-primary add">+</button>
Sort by:
<select name="sortby" id="sortby">
    <option value="first">First name</option>
    <option value="second">Second name</option>
    <option value="exam">Exam score</option>
</select>
<select name="order" id="order">
    <option value="desc">Descending</option>
    <option value="asc">Ascending</option>
</select>
<input type="submit" name="submit" value="submit"/>
</form>
<script type="text/javascript">
    $(".add").on('click',function(){
        $("table tbody").append('<tr><td><input type="text" name="first[]"/></td><td><input type="text" name="second[]"/></td><td><input type="text" name="exam[]"/></td><td><button type="button" class="btn btn-primary delete">-</button></td></tr>');
    })
    
    var observeDOM = (function(){
    var MutationObserver = window.MutationObserver || window.WebKitMutationObserver,
        eventListenerSupported = window.addEventListener;

    return function(obj, callback){
        if( MutationObserver ){
            // define a new observer
            var obs = new MutationObserver(function(mutations, observer){
                if( mutations[0].addedNodes.length || mutations[0].removedNodes.length )
                    callback();
            });
            // have the observer observe foo for changes in children
            obs.observe( obj, { childList:true, subtree:true });
        }
        else if( eventListenerSupported ){
            obj.addEventListener('DOMNodeInserted', callback, false);
            obj.addEventListener('DOMNodeRemoved', callback, false);
        }
    };
})();

// Observe a specific DOM element:
observeDOM( document.getElementById('table') ,function(){ 
    $(".delete").on('click',function(){
        $(this).parents('tr').remove();
    })
});
</script>
<?php
 if(isset($students)){
     echo "<script>$('body').html('');</script>";
     echo "<table><th>First Name</th><th>Second Name</th><th>Exam Score</th>";
     foreach ($students as $student) {
         echo "<tr>
            <td>$student->firstName</td>
            <td>$student->secondName</td>
            <td>$student->examScore</td>
        </tr>";
     }
     echo "</table>";
 }
?>
</body>
</html>