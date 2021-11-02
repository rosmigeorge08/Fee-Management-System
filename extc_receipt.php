<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <style>
            body{
                background: #fff;
            }

            .receipt{
                padding-top: 10px;
                padding-left: 50px;
                padding-right: 50px;
                margin-top: 25px ;
                width: 1250px;
                height: 550px;
                border: 2px solid #999;
                border-radius: 10px;
                margin-left: 10px;
            }

            table, td, tr{
                padding-top: 10px;
                padding-bottom: 10px;
                padding-left: 50px;
                padding-right: 50px;
                border: 2px solid #999;
                margin: 25px 0;
                table-layout: fixed;
                width: 80%;
                margin: auto;
            }

            .btn6{
                margin-bottom: 10px;
                border-radius: 20px;
                padding: 5px;
                margin-left: 95%;
                background-color: transparent; 
                color: #1E6091; 
                border: 2px solid #1E6091;
            }

            .btn6:hover {
                background: #1E6091;
                color: #fff;
            }
        </style>
    </head>

    <body>
        <div class="receipt">
            <h1><b>Fee Report</b></h1>
            <hr>
            <br>
            <?php
            include 'connection.php';
            $sid=$_GET['id'];
            $sql = "SELECT * FROM payextc where id=$sid";
            $result=mysqli_query($conn,$sql);
            if(!$result)
            {
                echo "Error : ".$sql."<br>".mysqli_error($conn);
            }
            $rows=mysqli_fetch_assoc($result);
            ?>

            <h3 style="text-align: center;">Student Information</h3>
            <table>
                <tr>
                    <td style="font-weight: bold;">Roll Number</td>
                    <td><?php echo $rows['id'] ?></td>
                    <td style="font-weight: bold;">Name</td>
                    <td><?php echo $rows['name'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Contact</td>
                    <td><?php echo $rows['contact'] ?></td>
                    <td style="font-weight: bold;">Email ID</td>
                    <td><?php echo $rows['email'] ?></td>
                    
                </tr>
                <tr>
                    <td style="font-weight: bold;">Department</td>
                    <td>EXTC</td>
                    <td style="font-weight: bold;">Joining Date</td>
                    <td><?php echo $rows['joindate'] ?></td>
                </tr>
            </table>
            <br><br>
            <h3 style="text-align: center;">Fee Information</h3>
            <table>
                <tr>
                    <td style="font-weight: bold;">Date</td>
                    <td style="font-weight: bold;">Paid</td>
                    <td style="font-weight: bold;">Remark</td>
                </tr>
                <tr>
                    <td><?php echo $rows['datetime'] ?></td>
                    <td><?php echo $rows['paid'] ?></td>
                    <td><?php echo $rows['remark'] ?></td>
                </tr>
            </table>
            <br>
            <button type="button" class="btn6" onclick="window.print()">Print</button>
        </div>
    </body>
</html>
