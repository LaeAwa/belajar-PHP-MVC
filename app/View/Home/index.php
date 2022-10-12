<html>
    <head>
        <body>
            <title><?= $model['tittle']?></title>
        </body>
        <h1><?= $model['content'] ?></h1>
        <h2><?= $model['tittle'] ?></h2>
        <table>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name= "firstName"></td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name= "firstName"></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></br>
                        <input type="button" value= "Login">
                    </td>
                </tr>
    </head>
</html>
