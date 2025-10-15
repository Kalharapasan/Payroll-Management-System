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

                <td>
                    <table bgcolor="C0C0C0">
                        <tr>
                            <td>Tax Period:</td>
                            <td><input type="text" name = "taxperiod" style="width: 100px">
                            </td>
                        </tr>

                        <tr><td>Tax Code:</td>
                            <td><input type="text" name = "taxcode" style="width: 300px">
                            </td></tr>

                        <tr>
                            <td>Pay Date:</td>
                            <td><input type="text" name = "paydate" style="width: 400px">
                            </td>
                        </tr>

                        </tr>
                    </table>
                </td>
                </tr>
            </table>

            <table class="style1">
                <tr>
                    <td>Inner City Weighting:</td>
                    <td><input type="text" name = "innercity" style="width: 200px">
                    </td>
                    <td>Tax ToDate:</td>
                    <td><input type="text" name = "tax" style="width: 200px">
                    </td>
                    <td>Pension ToDate:</td>
                    <td><input type="text" name = "pension" style="width: 200px">
                    </td>
                </tr>

                <tr><td>Basic Salary:</td>
                    <td><input type="text" name = "basicsalary" style="width: 200px">
                    </td>
                    <td>Student ToDate:</td>
                    <td><input type="text" name = "studentref" style="width: 200px">
                    </td>
                    <td>NI Code:</td>
                    <td><input type="text" name = "nicode" style="width: 200px">
                    </td>
                </tr>

                <tr><td>Over Time:</td>
                    <td><input type="text" name = "overtime" style="width: 200px">
                    </td>

                    <td>Student Loan:</td>
                    <td><input type="text" name = "studentloan" style="width: 200px">
                    </td>

                    <td>NI Number:</td>
                    <td><input type="text" name = "ninumber" style="width: 200px">
                    </td>
                </tr>
            </table>
            </td>
            </td>
            </tr>

            <table class="style1">
                <tr><td>
                        <table bgcolor="808080">
                            <tr>
                                <td>NI Payment:</td>
                                <td><input type="text" name = "nipayment" style="width: 380px">
                                </td></tr>
                            <tr><td>Taxable Pay:</td>
                                <td><input type="text" name = "taxablepay" style="width: 380px">
                                </td></tr>

                            <tr><td>Pensionable Pay:</td>
                                <td><input type="text" name = "pensionablepay" style="width: 380px">
                                </td></tr>

                        </table></td>
                    <td><table bgcolor="C0C0C0">
                            <tr>
                                <td>Gross Pay:</td>
                                <td><input type="text" name = "grosspay" style="width: 400px">
                                </td></tr>
                            <tr><td>Deductions:</td>
                                <td><input type="text" name = "deduction" style="width: 400px">
                                </td></tr>

                            <tr><td>Net Pay:</td>
                                <td><input type="text" name = "netpay" style="width: 400px">
                                </td></tr>
                        </table></td></tr>
            </table>

            <table class="style1">
                <tr><td>
                        <table bgcolor="808080">
                            <tr>
                                <td>Reference Note:</td>
                                <td><textarea cols="73" rows="5" >
                </textarea></td>
                            </tr>
                        </table></td>

                    <td><table bgcolor="C0C0C0">
                            <tr>
                                <td>&nbsp;</td><td align="left" style="width: 400px">
                                    <input type="submit" value="Submit" name = "add" class='btn'></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td><td align="left" style="width: 400px">
                                    <input type="reset" value="Reset" name = 'reset' class='btn' onclick="reset();"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

            </table>

        </form>

    </div>



</body>
</html>
