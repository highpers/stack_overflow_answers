<!-- begin snippet: js hide: false console: true babel: null -->

<!-- language: lang-html -->

<?php
include('code.php');
?>
<html>

<head>
    <title> Search </title>
    <style>
        {
            background-color: whitesmoke;
        }

        input {
            width: 40%;
            height: 5%;
            border-radius: 05px;
            padding: 8px 15px 8px 15px;
            margin: 10px, 0px, 15px, 0px;
            box-shadow: 1px 1px 2px 1px grey;
        }
    </style>
</head>

<body>
    <center>
        <h1> Search From Database</h`enter code here`1>

            <form action="" method="post">
                Select Name for Search:
                <select name="id" placeholder="Enter ID to Search" /><br />
                <option value="">Select</option>
                <option value="1">Hero</option>
                <option value="2">Herione</option>
                <option value="3">Actor</option>
                <option value="4">Actress</option>
                </select><br />
                <input type="submit" name="search" value="Search Data-1">
            </form>
            <br>
            <br>
            <?php
            while ($row = mysqli_fetch_array($query_run)) {
            ?>

                <form action="" method="POST">
                    <input type="text" name="id" value="<?php echo $row['id'] ?> " />
                    <input type="text" name="name" value="<?php echo $row['name'] ?> " />
                    <input type="text" name="gender" value="<?php echo $row['gender'] ?> " />
                    <input type="text" name="Age" value="<?php echo $row['Age'] ?> " />
                    <input type="text" name="Address" value="<?php echo $row['Address'] ?> " />
                </form>
            <?php

            }
            ?>
            <form action="" method="post">
                Select Name for Search:
                <select name="id" placeholder="Enter ID to Search" /><br />
                <option value="">Select</option>
                <option value="1">Hero</option>
                <option value="2">Herione</option>
                <option value="3">Actor</option>
                <option value="4">Actress</option>
                </select><br />
                <input type="submit" name="search" value="Search Data-2">
            </form>
            <br>
            <br>
            <?php
            while ($row = mysqli_fetch_array($query_run)) {
            ?>
                <form action="" method="POST">
                    <input type="text" name="id" value="<?php echo $row['id'] ?> " />
                    <input type="text" name="name" value="<?php echo $row['name'] ?> " />
                    <input type="text" name="gender" value="<?php echo $row['gender'] ?> " />
                    <input type="text" name="Age" value="<?php echo $row['Age'] ?> " />
                    <input type="text" name="Address" value="<?php echo $row['Address'] ?> " />
                </form>
            <?php

            }
            ?>
    </center>
</body>

</html>

<!-- end snippet -->