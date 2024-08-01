<?php
require_once("../inc/config.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RentACar.lk - Employee Portal</title>
        <link rel="stylesheet" href="../styles/employeeHeader.css">
    </head>
    <body>
        <div class="header-cont">
            <header>
                <a href="http://localhost/rentacar.lk/src/customerCareAgentPortal/reportOverview.php"><img src="../images/logo.png" alt="logo" id="logo"></a>
                </script>
                <input type="button" id="login-btn" value="Login">
                <script type="text/javascript">
                    document.getElementById("login-btn").onclick = function () {
                        location.href = "http://localhost/rentacar.lk/src/customerPortal/customerLogin.php";
                    };
                </script>
                <span style="display:inline-block;float:right;font-size:35px;height:46px;padding:10px 30px;">Customer Care Agent Portal<span style="font-size:40px;"> |</span></span>
            </header>
        </div>

        <div class="nav-bar-container">
            <ul class="nav-bar">
                <div class="nav-option1">
                    <a href="http://localhost/rentacar.lk/src/customerCareAgentPortal/reportOverview.php"><li>Overview</li></a>
                </div>
                <div class="nav-option2">
                    <a href="http://localhost/rentacar.lk/src/customerCareAgentPortal/contactDetailView.php"><li>Contact Requests</li></a>
                </div>
                <div class="nav-option3">
                    <a href="http://localhost/rentacar.lk/src/customerCareAgentPortal/recieveEmpNotice.php"><li>Notices</li></a>
                </div>
                <div class="nav-option4">
                    <a href="http://localhost/rentacar.lk/src/customerCareAgentPortal/employeeAccount.php"><li>My Account</li></a>
                </div>
                <div class="nav-option5">
                    <a href="http://localhost/rentacar.lk/src/customerCareAgentPortal/reportOverview.php"><li>#</li></a>
                </div>
            </ul>
        </div>
    </body>
</html>


<!DOCTYPE html>
<html>
    <head>
        <title>RentACar.lk - Employee Portal</title>
        <link rel="stylesheet" href="../styles/contactDetailView.css">
    </head>
    <body>

   
          <center>
        <h2>Contact us details<h2>
      
        <div id="tbl-wrapper">
  <table id="tbl">
<table id="tbl">
    <tr><th class="col1">Contact ID</th>
        <th class="col1">Name</th>
        <th class="col1">Email</th>
        <th class="col1">Contact number</th>
        <th class="col1">Message</th>
        <th class="col2">View</th>
        <th class="col3">Edit</th>
        <th class="col4">Delete</th>

    </tr>

<?php
 $sql="select*from contactus";
 $result=$conn->query($sql);
  if($result->num_rows>0)
  {
    while($row=$result->fetch_assoc())

    {
      echo"<tr>
      <td>".$row["contact_id"]."</td>
      <td>".$row["name"]."</td>
      <td>".$row["email"]."</td>
      <td>".$row["contactno"]."</td>
      <td>".$row["message"]."</td>";
     
   
    echo "<td><a href='viewDetails.php?id=".$row['contact_id']."'><input class='view-button' type='submit' value='View'></a></td>";
    echo "<td><a href='editDetails.php?id=".$row['contact_id']."'><input class='edit-button' type='submit' value='Edit'></a></td>";
    echo "<td><a href='deleteDetails.php?id=".$row['contact_id']."'><input class='delete-button' type='submit' value='Delete'></a></td>
    </tr>";

}
    
}
else{
    echo"Empty Rows";
}

  echo"</table>";

?>
  
  
</div>

</table>
</div>

    </center>
       
    </body>

    </body>
</html>

