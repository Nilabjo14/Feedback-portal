<?php
session_start();
if(isset($_SESSION["id"])){
    //echo $_SESSION["id"];
}
$id=$_SESSION["id"];
$server='Localhost:3306';
$user='root';
$password='';
$database='SFdb';
$conc=new mysqli($server,$user,$password,$database);
$display=mysqli_query($conc,"SELECT * FROM training_details WHERE Email_id='$id'");
while($db_row=mysqli_fetch_array($display)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* General styles */

body {
  background-color: #f3f3f3;
  font-family: Futura, sans-serif;
}

.wrapper {
  margin: 24px 180px;
}

h1 {
  color: #716eb6;
  text-align: center;
}

/* Table styles */

table {
  border-collapse: collapse;
  border-spacing: 0;
}

td,
th {
  padding: 0;
  text-align: left;
}

td:first-of-type {
  padding-left: 36px;
  width: 66px;
}

.c-table {
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  background-color: #fff;
  border-radius: 4px;
  font-size: 12px;
  line-height: 1.25;
  margin-bottom: 24px;
  width: 100%;
}

.c-table__cell {
  padding: 12px 6px 12px 12px;
  word-wrap: break-word;
}

.c-table__header tr {
  color: #fff;
}

.c-table__header th {
  background-color: #716eb6;
  padding: 18px 6px 18px 12px;
}

.c-table__header th:first-child {
  border-top-left-radius:  4px;
}

.c-table__header th:last-child {
  border-top-right-radius: 4px;
}

.c-table__body tr {
  border-bottom: 1px solid rgba(113, 110, 182, 0.15);
}

.c-table__body tr:last-child {
  border-bottom: none;
}

.c-table__body tr:hover {
  background-color: rgba(113, 110, 182, 0.15);
  color: #272b37;
}

.c-table__label {
  display: none;
}

/* Mobile table styles */

@media only screen and (max-width: 768px) {

	table, thead, tbody, th, td, tr { 
		display: block; 
  }
  
  td:first-child { 
    padding-top: 24px;
  }

  td:last-child { 
    padding-bottom: 24px;
  }
  
  .c-table {
    border: 1px solid rgba(113, 110, 182, 0.15);
    font-size: 15px;
    line-break: 1.2;
  }

  .c-table__header tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
  
  .c-table__cell { 
    padding: 12px 24px;
		position: relative; 
    width: 100%;
    word-wrap: break-word;
  }

  .c-table__label {
    color: #272b37;
    display: block;
    font-size: 10px;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 6px;
    text-transform: uppercase;
  }

  .c-table__body tr:hover {
    background-color: transparent;
  }

  .c-table__body tr:nth-child(odd) {
    background-color: rgba(113, 110, 182, 0.04); 
  }
  
}
    </style>
    <script>
      (function() {
  var tableHeaders = document.getElementsByClassName("c-table__header");
  var tableCells = document.getElementsByClassName("c-table__cell");
  var span = document.createElement("span");

  for (var i = 0; i < tableCells.length; i++) {
    span = document.createElement("span");
    span.classList.add("c-table__label");
    tableCells[i].prepend(span);
  }

  var tableLabels = tableHeaders[0].getElementsByClassName("c-table__col-label");
  var spanMod = document.getElementsByClassName("c-table__label");

  for (var i = 0; i < tableLabels.length; i++) {
    for (var a = 0; a < tableCells.length; a++) {
      spanMod[a].innerHTML = tableLabels[i].innerHTML;
    }
  }

  var b = tableLabels.length;
  for (var a = 0; a < tableCells.length; a++) {
    spanMod[a].innerHTML = tableLabels[a%b].innerHTML;
  }
})();
    </script>
    <title>Details of User</title>
</head>
<body>
<div class="wrapper">
  <table class="c-table">
  <thead class="c-table__header">
    <tr>
      <th  class="c-table__col-label">Name</th>
        <th  class="c-table__col-label">Email_id</th>
        <th  class="c-table__col-label">Contact_No</th>
        <th  class="c-table__col-label">Branch</th>
        <th  class="c-table__col-label">Course</th>
        <th  class="c-table__col-label">Department</th>
        <th  class="c-table__col-label">Trainner Name</th>
    </tr>
  </thead>
  <tbody class="c-table__body">
    <tr>
        <td class="c-table__cell">
       <?php echo $db_row["Name"]; ?>
        </td>
        <td class="c-table__cell">
       <?php echo $db_row["Email_id"]; ?>
        </td>
        <td class="c-table__cell">
       <?php echo $db_row["Contact_No"]; ?>
        </td>
        <td class="c-table__cell">
       <?php echo $db_row["Branch"]; ?>
        </td>
        <td class="c-table__cell">
       <?php echo $db_row["Course"]; ?>
        </td>
        <td class="c-table__cell">
       <?php echo $db_row["Dept"]; ?>
        </td>
        <td class="c-table__cell">
       <?php echo $db_row["Trainner_name"]; ?>
        </td>
    </tr>
 <?php } 

?>
  </tbody>
</table>
</div>  
</body>
</html>