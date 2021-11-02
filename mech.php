<!DOCTYPE html>
<html>
  <head>
    <title>Fee Management System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/44acdbf731.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand">List of Students - Mechanical <i class="fas fa-cogs"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ms-auto">
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

    <div class="bg_mech">
      <br><br><br><br>
      <div class="search">
        <i class="fas fa-search" style="color: #1A759F;"></i>
        <input class="search-bar" id="search" type="text" placeholder="Search Name">
      </div>
      <br><br>
      <table>
        <thead>
          <tr class="text-uppercase text-dark">
            <th scope="col" class="text-center px-5">Roll No</th>
            <th scope="col" class="text-center px-5">Name</th>
            <th scope="col" class="text-center px-5">Balance</th>
            <th scope="col" class="text-center px-5">Operation</th>
          </tr>
        </thead>
        <tbody id="output">
          <?php  
          $conn = mysqli_connect("localhost", "root", "", "fees");
          $sql = "SELECT * FROM mechanical";
          $result = mysqli_query($conn,$sql);
          while($rows = mysqli_fetch_assoc($result)){
          ?>
          <tr style="border-bottom: 2px solid #99D98C;">
            <td class="px-5"><?php echo $rows['id']?></td>
            <td class="px-5"><?php echo $rows['name']?></td>
            <td class="px-5"><?php echo $rows['balance']?></td>
            <td><a href="paymech.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn5 px-3 btn-sm">Fee Details</button></a></td> 
          </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>

    <script type="text/javascript">
      $(document).ready(function(){
        $("#search").keypress(function(){
          $.ajax({
            type:'POST',
            url:'search_mech.php',
            data:{
              name:$("#search").val(),
            },
            success:function(data){
              $("#output").html(data);
            }
          });
        });
      });
    </script>
  </body>
</html>
