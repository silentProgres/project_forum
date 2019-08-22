<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        
        .login  {
            margin-top:200px;
        }

        table   {
            border:1px solid #ccc;
            padding: 15px;
        }

    </style>
</head>
<body>
    <?php
        if($this->session->flashdata('msg')){
            echo $this->session->flashdata('msg');
        }
    ?>
    <form action="<?=base_url('/login/cek_login')?>" method="post">
        <center>
        <div class="login">
            <table>
                <tr>
                    <td align="center"><h1>Login</h1> <hr> </td>
                </tr>
                <tr> <td><input type="text" name="username" placeholder="masukan email/username"></td></tr>
                <tr><td><input type="password" name="password" placeholder="masukan Password"></td></tr>
                <tr><td><input type="submit" value="Masuk"></td></tr>
            </table>
        </div>
        </center>
    </form>
</body>
</html>