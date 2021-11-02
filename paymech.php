<?php
include 'connection.php';

if(isset($_POST['save']))
{
  $from = $_GET['id'];
  $paid = $_POST['paid'];
  $remark = $_POST['remark'];
  $datetime = $_POST['date'];

  $sql = "SELECT * from mechanical where id=$from";
  $query = mysqli_query($conn,$sql);
  $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

  if (($paid)<0)
  {
    echo '<script type="text/javascript">';
    echo "alert('Invalid Amount: Negative values cannot be paid!')";  // showing an alert box.
    echo '</script>';
  }

  elseif($paid > $sql1['balance']) 
  {
    echo '<script type="text/javascript">';
    echo "alert('Cannot accept more money')";  // showing an alert box.
    echo '</script>';
  }

  elseif($paid == 0)
  {
    echo "<script type='text/javascript'>";
    echo "alert('Invalid Amount: Zero cannot be transferred!')";
    echo "</script>";
  }

  else
  {
    $newbalance = $sql1['balance'] - $paid;
    $sql = "UPDATE mechanical set balance=$newbalance where id=$from";
    mysqli_query($conn,$sql);

    $student = $sql1['name'];
    $contact = $sql1['contact'];
    $email = $sql1['email'];
    $joindate = $sql1['joindate'];
    $sql = "INSERT INTO paymech(`id`,`name`,`contact`,`email`,`joindate`, `paid`, `remark`, `datetime`) VALUES ('$from','$student','$contact','$email','$joindate','$paid','$remark','$datetime')";
    $query=mysqli_query($conn,$sql);

    if($query)
    {
      echo "<script> alert('Fees has been updated');
      window.location='mech_record.php';
      </script>"; 
    }

    $newbalance = 0;
    $paid = 0;

  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/44acdbf731.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <style>
      body, html {
        height: 100%;
        margin: 0;
        font-family: 'Open Sans', sans-serif;
        color: #333333;
      }

      .box{
        background:linear-gradient(to bottom right,#9883C0,#A7B4C8);
        width: 600px;
        height: 350px;
        border: 4px solid #8A5DC0;
        padding: 30px;
        margin: auto; 
        align-content: center;
        border-radius: 25px;
      }

      .navbar{
        background: linear-gradient(to bottom, #184E77, #1E6091);
        color: lightyellow;
      }
      
      .tables{
        font-family: Arial, Helvetica, sans-serif;
        width: 60%; 
        border-right: 5px;
        margin: auto;
      }

      #tables th,#tables td {
        border-bottom: 1px solid black;
        padding: 8px;
        padding: 15px;
        text-align: left;
        border-right: 1px solid black;
        border-left: 1px solid black;
      }
      
      #tables th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color:#8A5DC0 ;
        color: #FBFBFB;
      }
      
      #label{
        color: #8A5DC0;
      }
    </style>
  </head>

  <body class="d-flex h-100 text-center" style="background: linear-gradient(to bottom left ,#BBD9F5,#A6ABD9);">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand">Transaction <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-coin" viewBox="0 0 16 16"><path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"/><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
        </svg></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="mech.php">Back <i class="fas fa-arrow-circle-left"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.html">Home <i class="fas fa-home"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="logout.php">Logout <i class="fas fa-sign-out-alt"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="d-flex w-100 h-100 p-3 mx-auto flex-column">
      <main class="px-3 mb-0">
        <div class="container" style="padding-top:80px">
          <?php
          include 'connection.php';
          $sid=$_GET['id'];
          $sql = "SELECT * FROM mechanical where id=$sid";
          $result=mysqli_query($conn,$sql);
          if(!$result)
          {
            echo "Error : ".$sql."<br>".mysqli_error($conn);
          }
          $rows=mysqli_fetch_assoc($result);
          ?>
          <div class="main">
            <div class="tables">
              <div class="th" >
                <div class="td">
                  <div class="table-responsive-sm" >
                    <table class="table2 mx-auto mb-3" id="tables">
                      <thead>
                        <tr class="text-uppercase text-dark">
                          <th class="text-center px-3">ID</th>
                          <th class="text-center px-3">Name</th>
                          <th class="text-center px-5">Contact</th>
                          <th class="text-center px-4">Balance</th>
                        </tr>
                      </thead>
                      <tr>
                        <td class="py-2 text-center"><?php echo $rows['id'] ?></td>                  
                        <td class="py-2 text-center"><?php echo $rows['name'] ?></td>
                        <td class="py-2 text-center"><?php echo $rows['contact'] ?></td>
                        <td class="py-2 text-center"><?php echo $rows['balance'] ?></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <br>
                  
            <div class="container-transfer">
              <form method="POST" name="tcredit" class="transfer-form validate-form"><br>
                <div class="box">
                  <label class="text-uppercase text-light fw-bold">Paid:</label>
                  <br>
                  <div class="wrap-input validate-input">
                    <input type="number" class="input" name="paid" placeholder = "Enter Amount paid" required>
                  </div>
                  <br>
                  <label class="text-uppercase text-light fw-bold">Date:</label><br>
                  <div class="wrap-input validate-input">
                    <input type="date" class="input" name="date" placeholder = "Date" required>
                    <br><br>
                  </div>
                  <label class="text-uppercase text-light fw-bold">Remark:</label>
                  <div class="wrap-input validate-input">
                    <input type="text" class="input" name="remark" placeholder = "Remark" required>
                  </div>
                  <br>
                  <div class="text-center" >
                    <button class="btn btn-light" name="save" type="submit" style="padding:10px 20px" style= "color: white"><b>Save</b></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </main>
    </div>
  </body>
</html>