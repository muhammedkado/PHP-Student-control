<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <div id='mother'></div>
    <form method="POST">
        <!-- Control Panal -->
    <aside>
    <div id='div'>
            <img src="" alt="logo">
            <h3>admin penal</h3>
            <label for="id" > Student ID</label>
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
            <button name="add" >Add student</button>
            <button name="del" >delete student</button>
        </div>
    </aside>
    <main>
        <table id='tbl'>
            <tr>
            <td> Student ID</td>
            <td> Student Name</td>
            <td> Student Address</td>


            </tr>


        </table>
        
    </main>

    </form>
</body>
</html>