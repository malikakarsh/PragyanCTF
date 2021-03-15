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
            <form action="" method="POST">
                <select name="connect_to" class="space">
                    <option value="admin1">Admin1</option>
                    <option value="admin2">Admin2</option>
                    <option value="admin3">Admin3</option>
                </select>
                <button class="space" style="padding: 10px 20px 10px 20px;" type="submit" name="submit">CHECK</button>
            </form>
            <?php
            if (isset($_POST['submit'])){
            $command=$_POST['connect_to']; 
            if ($_POST['connect_to']=='admin1'){
                echo "<h3 style='color: red;padding-top: 10px;'>Down!</h3>";
            }
            else if ($_POST['connect_to']=='admin3'){
                echo "<h3 style='color: red;padding-top: 10px;'>Down!</h3>";
            }
            else if (preg_match('/index.php/',$command) || preg_match('/index.html/',$command)){
                echo "";
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
            <form action="" method="POST">
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
                    echo "<table>
  <tr>
    <th>Date</th>
    <th>Log</th>
  </tr>
  <tr>
    <td>01/04/21</td>
    <td>eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJuYW1lIjoiYWRtaW4xIiwiYWRtaW4iOnRydWUsImp0aSI6ImYwZGQ2MjliLWNkNmItNGM4OC1iNzgzLWE0NjhjNDliZGRjNCIsImlhdCI6MTYxNTc2ODg4OSwiZXhwIjoxNjE1NzcyNDg5fQ.tJJJQEtDY37mpaKT1WPqcEsyB9136DWhxp1-LZlIDNg</td>
  </tr>
  <tr>
    <td>04/04/21</td>
    <td>eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJuYW1lIjoiYWRtaW4zIiwiYWRtaW4iOnRydWUsImp0aSI6ImM4YzhlOWZhLTQ4OTEtNGY5My05YmQ3LWIwNWNmNDc3MjNmZCIsImlhdCI6MTYxNTc2OTAyOCwiZXhwIjoxNjE1NzcyNjI4fQ.3OJdIdI_aAv7UvJg5iYJxa1tkalgQV-BJtxJEUvH774</td>
  </tr>
   <tr>
    <td>07/04/21</td>
    <td>eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJuYW1lIjoiYWRtaW4xIiwiYWRtaW4iOnRydWUsImp0aSI6ImYwZGQ2MjliLWNkNmItNGM4OC1iNzgzLWE0NjhjNDliZGRjNCIsImlhdCI6MTYxNTc2ODg4OSwiZXhwIjoxNjE1NzcyNDg5fQ.tJJJQEtDY37mpaKT1WPqcEsyB9136DWhxp1-LZlIDNg</td>
  </tr>
   <tr>
    <td>15/04/21</td>
    <td>eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJuYW1lIjoiYWRtaW4yIiwiYWRtaW4iOnRydWUsImp0aSI6IjViOTBlNTA3LWU4ZTMtNDdjYy1iY2QxLWZiZGI0ZDE2NzQ0NyIsImlhdCI6MTYxNTc2OTEwNywiZXhwIjoxNjE1NzcyNzA3fQ.KC4wOTtZpC2VtOMtN5BFn-6RvY7cYrBwr93ooGwlprg</td>
  </tr>
    <tr>
    <td>18/04/21</td>
    <td>eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJuYW1lIjoiaGFja2VyIiwiZmxhZyI6InBfY3Rme2NyNHp5X2NyeXB0MF8wbl93M2J9IiwianRpIjoiNWY2ZTIxNjEtZTMyNS00MzI4LTg0ZTctZGRkZWQwMWNiMjgwIiwiaWF0IjoxNjE1NzY5MjY3LCJleHAiOjE2MTU3NzI4Njd9.4kXjstpn1jIP8bqGm4FMxEV0LVWnxB4eqQh1JML94_k</td>
  </tr>
</table>";
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

