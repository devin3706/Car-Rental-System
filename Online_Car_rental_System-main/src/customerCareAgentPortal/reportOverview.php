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
        <link rel="stylesheet" href="../styles/reportOverview.css">
    </head>
    <body>

        <div class="filters">
            <ul>
              <li><a href="http://localhost/rentacar.lk/src/employeePortal/reportOverview.php">overview</a></li>
              <li><a href="#">view all</a></li>
              <li><a href="#">issue reports</a></li>
            </ul>
          </div>

  
    <div class="repots">
       
        <div class="new-reports report-responsive">
          <div class="reports-header">
            <h1>new reports</h1>
          </div>
  
         
          <div class="report-card">
            <div class="report-card-details">
              <p>type:Rental cancelation</p>
              <p>Date: 31/05/2023</p>
            </div><br>
  
            <div class="report-card-title">
              <p>Title: Rental cancelation</p>
            </div>
          </div>
  
          <div class="report-card">
            <div class="report-card-details">
              <p>type: Vehicle breakdown</p>
              <p>Date: 01/06/2023</p>
            </div><br>
  
            <div class="report-card-title">
              <p>Title: Vehicle breakdown</p>
            </div>
          </div>
  
          <div class="report-card">
            <div class="report-card-details">
              <p>type: Early cancellation</p>
              <p>Date: 03/06/2023</p>
            </div><br>
  
            <div class="report-card-title">
              <p>Title: Accident</p>
            </div>
          </div>
  
          <div class="report-card">
            <div class="report-card-details">
              <p>type: Rental period Extension</p>
              <p>Date: 05/06/2023</p>
            </div><br>
  
            <div class="report-card-title">
              <p>Title: Rental Period Extension</p>
            </div>
          </div>
          
        </div>
  
        
        <div class="ongoing-reports report-responsive">
          <div class="reports-header">
            <h1>ongoing reports</h1>
          </div>
  
          
          <div class="report-card">
            <div class="report-card-details">
              <p>type:Rental Period Early Termination</p>
              <p>Date: 08/06/2023</p>
            </div><br>
  
            <div class="report-card-title">
              <p>Title:Early Termination</p>
            </div>
          </div>
  
          <div class="report-card">
            <div class="report-card-details">
              <p>type:Rental Cancelation</p>
              <p>Date: 09/06/2023</p>
            </div><br>
  
            <div class="report-card-title">
              <p>Title:Rental cancellation</p>
            </div>
          </div>
          
        </div>
  
        
        <div class="monthly-reports report-responsive">
          <div class="reports-header">
            <h1>monthly reports</h1>
          </div>
  
          
          <div class="report-summery-card">
            <div class="report-summery-card-details">
              <p>new report</p>
              <p>4</p>
            </div>
          </div>
  
          <div class="report-summery-card">
            <div class="report-summery-card-details">
              <p>ongoing report</p>
              <p>2</p>
            </div>
          </div>
  
          <div class="report-summery-card">
            <div class="report-summery-card-details">
              <p>finished report</p>
              <p>16</p>
            </div>
          </div>
  
          <div class="report-summery-card">
            <div class="report-summery-card-details">
              <p>issud report</p>
              <p>5</p>
            </div>
          </div>
          
        </div>
      </div>

    </body>
</html>