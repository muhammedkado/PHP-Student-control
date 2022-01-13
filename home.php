<?php
 #databas connect
$host="localhost";
$user="root";
$password="root";
$db="student1";
$conn=mysqli_connect($host,$user,$password,$db);
$select="select * from student ";
$r=mysqli_query($conn,$select) ;


                         #Buttun values

if(isset($_POST['id'])){
    $id=$_POST['id'];
}if(isset($_POST['name'])){
    $name=$_POST['name'];

}if(isset($_POST['addres'])){
    $addres=$_POST['addres'];
}

if(isset($_POST['add'])){
    $sqls="insert into student value($id,'$name','$addres')";
    $q=mysqli_query($conn,$sqls) ;                
    header("location:home.php");
}
if(isset($_POST['del'])){
 $sqls="delete from student where id=('$id')";
    $q=mysqli_query($conn,$sqls) ; 
    header("location:home.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Vollkorn&display=swap" rel="stylesheet">
    <title>Homepage</title>
    <style>
        body {
            background-color: whitesmoke;
            font-family: 'Vollkorn', serif;
           
        }

        #mother {
            width: 100%;
            font-size: 20px;



        }

        main {
            float: left;
            border: 1px solid grey;
            padding: 5px;
            color: aliceblue;
            background-color:silver ;
        }

        input {
            padding: 4px;
            border: 1.5px solid black;
            text-align: center;
            font-size: 17px;
            font-family: 'Vollkorn', serif;
        }

        aside {
            text-align: center;
            
            float: right;
            border:1px solid black;
            padding:10px;
            font-size: 20px;
            background-color:silver ;
            color:aliceblue;
        }
        #tbl{
            width: 890px;
            font-size: 20px;
            text-align: center;
        }
        #tbl th{
            background-color:silver;
            color:aliceblue;
            text-align: center;
            font-size:20px;
            padding:10px;

        }
        aside button{
            width:150px;
            padding: 2px;
            margin-top:20px;
            font-family: 'Tajawal', sans-serif;
            font-size:17px;
            font-weight:bold;
        }
    </style>
</head>

<body dir="">
    <div id='mother'></div>
    <form method="POST">
        <!-- Control Panal -->
        <aside>
            <div id='div'>
                <img src="./img/P1.png" alt="logo" width="80">
                <h3>admin panel</h3>
                <label for="id"> Student ID</label>
                <br>
                <input type="text" name="id" id='id'><br>
                <label for="name">Student Name</label>
                <br>
                <input type="text" name="name" id='name'>
                <br>
                <label for="addres">Student Address</label>
                <br>
                <input type="text" name="addres" id='addres'>
                <br><br>
                <button name="add">Add student</button>
                <button name="del">delete student</button>
            </div>
        </aside>
        <main>
            <table id='tbl'>
                <tr>
                    <th> Student ID</th>
                    <th> Student Name</th>
                    <th> Student Address</th>
                </tr>
                <?php
                
              while ($row=mysqli_fetch_array($r)){
                echo "<tr>";
                echo "<td>".$row['id'].'</td>';
                echo "<td>".$row['name'].'</td>';
                echo "<td>".$row['addres'].'</td>';
                echo '</tr>';
 
            
            }
                
                ?>


            </table>

        </main>

    </form>
</body>

</html>