<!DOCKTYPE html>
<html>
    <head>
        <title>Login</title>
        <style>
        *{margin: 0;padding: 0;}

        body{
            background-color: 000000;
            color: #008000;
        }

        .div1 {
            margin-left: 20%;
            text-align: center;
        }

        .div2 {
            margin-left: 20%;
            text-align: center;
        }

        .div3 {
            margin-top: 10%;
            width: 100%;
            display: flex;
        }

        .space{
            padding: 10px 10px 10px 10px;
            margin: 10px 10px 10px 10px;

        }


        </style>
    </head>
    <body>
        <div class="div3">
            <div class="div2">
            <h1 class="space">Test if server is up!</h1>
            <form action="" method="GET">
                <select name="connect_to" class="space">
                    <option value="admin1">Admin1</option>
                    <option value="admin2">Admin2</option>
                    <option value="admin3">Admin3</option>
                </select>
                <button class="space" style="padding: 10px 20px 10px 20px;" type="submit" name="submit">CHECK</button>
            </form>
            <?php
            if (isset($_GET['submit'])){
            $command=$_GET['connect_to']; 
            if ($_GET['connect_to']=='admin1'){
                echo "<h3 style='color: red;padding-top: 10px;'>Down!</h3>";
            }
            else if ($_GET['connect_to']=='admin3'){
                echo "<h3 style='color: red;padding-top: 10px;'>Down!</h3>";
            }
            else{
            $cmd="ping -c 2 $command";
            echo "<h3 style='padding-top: 10px;'>Connection Successful!</h3>";
            $output=shell_exec($cmd); 
            echo "<pre>$output</pre>"; 
            }
            }
            ?>
            </div>
            <div class="div1">
            <h1 class="space">Admin Login</h1>
            <form action="login.php" method="POST">
                <input class="space" type="text" name="name" placeholder="name" required>
                <br>
                <input class="space" type="password" name="password" placeholder="password" required>
                <br>
                <button class="space" style="padding: 10px 20px 10px 20px;" type="submit" name="Login">LOGIN</button>
            </form>
            <?php 
            if (isset($_POST['Login']) && $_POST['name']!="" && $_POST['password']!=""){
                $name=$_POST['name'];
                $password=$_POST['password'];
                if ($name=='admin2' && $password=='itsAsecret'){
                    echo "<h3 style='padding-top: 10px;'>Login Successful</h3>";
                }
                else{
                    echo "<h3 style='color: red;padding-top: 10px;'>Invalid Credentials</h3>";
                }
            }
            ?> 
            </div>
        </div>
    </body>
</html>

