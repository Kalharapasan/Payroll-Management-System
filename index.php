<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PMS</title>
    <link rel="stylesheet" href="css.css" type="text/css">
</head>
<body bgcolor="#808080">

    <center><img src="./Img/logo.png">
        <b><font color="white" style ="font-size:60"> Payroll Management Systems </font></b>

    </center>

    <hr size=5 color = "white">

    <div>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <table class="style1">
                <tr>
                    <td>Employee Name:</td>
                    <td><input type="text" name = "employee" style="width: 300px">
                    </td>
                    <td>Post Code:</td>
                    <td><input type="text" name = "postcode" style="width: 300px">
                    </td>
                </tr>

                <tr>
                    <td>Address:</td>
                    <td><input type="text" name = "address" style="width: 300px">
                    </td>
                    <td>Gender:</td>
                    <td>
                        Male<input type="radio" value="m" name="g" value="<?php echo $m; ?>" onfocus="this.value=''">
                        Female<input type="radio" value="f" name="g" value="<?php echo $g; ?>" onfocus="this.value=''">
                    </td>
                </tr>
            </table>

            <table class="style1">
                <tr>
                    <td>
                        <table bgcolor="808080">
                            <tr>
                                <td>Reference No:</td>
                                <td><input type="text" name = "referenceno" style="width: 400px"></td>
                            </tr>

                            <tr><td>Employer:</td>
                                <td><input type="text" name = "employer" style="width: 400px"></td>
                            </tr>

                            <tr><td>Emp Address:</td>
                                <td><input type="text" name = "empaddress" style="width: 400px"></td>
                            </tr>

                        </table>
                    </td>
                </tr>
            </table>

            

    </div>



</body>
</html>
