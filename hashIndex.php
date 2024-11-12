<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form label input{
            padding:10px;
            display: flex;
            flex-direction: column;
            align-items:center;
            justify-content: center;
        }
        button{
            padding:10px;
        }
        input{
            margin:10px;
            font-size: 15px;
        }
        label{
            font-size: 20px;
        }
        button{
            margin-top:10px;
            font-size: 20px;
            background-color: black;
            color: white;
            border-radius: 5px;
        }
        select{
            font-size: 20px;
        }
    </style>
</head>
<body>
    <main>
        <form action="includes/formhandler.inc.php" method="post">
            <label>Name</label>
            <input type="text" name="username" placeholder="Username"><br>
            <label>Password</label>
            <input type="text" name="password" placeholder="Password"><br>
            <label>Email</label>
            <input type="email" name="email" placeholder="Email"><br>
            <button type="submit" name="submit">Submit</button>
        </form>

        <h2>Update Details</h2  >

        <form action="includes/userupdate.inc.php" method="post">
            <label>Name</label>
            <input type="text" name="username" placeholder="Username"><br>
            <label>Password</label>
            <input type="text" name="password" placeholder="Password"><br>
            <label>Email</label>
            <input type="email" name="email" placeholder="Email"><br>
            <button type="submit" name="submit">Update</button>
        </form>

        <h2>Delete Details</h2>

        <form action="includes/userdelete.inc.php" method="post">
            <label>Name</label>
            <input type="text" name="username" placeholder="Username"><br>
            <label>Password</label>
            <input type="text" name="password" placeholder="Password"><br>
            <button type="submit" name="submit">Delete</button>
        </form>

        <h3>Search Details</h3>
        <form action="search.php" method="post">
            <label>Search</label>
            <input type="text" name="search" placeholder="Search Name Here"><br>
            <button type="submit" name="submit">Search</button>
        </form>
    </main>

</body>
</html>