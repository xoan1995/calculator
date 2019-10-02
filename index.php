
<?php

ini_set('display_errors',0);

if( isset( $_REQUEST['Calculate'] ))

{

$operator=$_REQUEST['operator'];

if($operator=="+")

{

$add1 = $_REQUEST['fvalue'];

$add2 = $_REQUEST['lvalue'];

$res= $add1+$add2;

}

if($operator=="-")

{

$add1 = $_REQUEST['fvalue'];

$add2 = $_REQUEST['lvalue'];

$res= $add1-$add2;

}

if($operator=="*")

{

$add1 = $_REQUEST['fvalue'];

$add2 = $_REQUEST['lvalue'];

$res =$add1*$add2;

}

if($operator=="/")

{

$add1 = $_REQUEST['fvalue'];

$add2 = $_REQUEST['lvalue'];

try {
    if($add2==0){
        throw new Exception("Math error");
    }
    $res=$add1/$add2;
}
catch (Exception $e){
    $res=$e->getMessage();
}

}

if($_REQUEST['fvalue']==NULL && $_REQUEST['lvalue']==NULL)

{

echo "<script language=javascript> alert(\"Please Enter values.\");</script>";

}

else if($_REQUEST['fvalue']==NULL)

{

echo "<script language=javascript> alert(\"Please Enter First value.\");</script>";

}

else if($_REQUEST['lvalue']==NULL)

{

echo "<script language=javascript> alert(\"Please Enter second value.\");</script>";

}
}

?>

<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Simple calculator</h2>
<form>
    <fieldset>
        <legend>calculator</legend>
        First operand: <input type="text" name="fvalue" ">
        <br><br>
        Operator:
        <select name="operator" style="width: 63px">

            <option>+</option>

            <option>-</option>

            <option>*</option>

            <option>/</option>

        </select>
        <span class="error"></span>
        <br><br>
        Second Operand: <input type="text" name="lvalue">
        <br><br>
        <input type="submit" name="Calculate" value="Calculate" >
    </fieldset>
    <fieldset>
        <legend><h3>Result</h3></legend>
        <?php echo " $res"; ?>
    </fieldset>
</form>

</body>
</html>
