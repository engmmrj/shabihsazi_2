<?php
$enttime=[0];
$serv=[0];
$RN=[];


$person = range(1,10);
$x = 0;
$random=[0];
$ent=[];

$f=0;
while ($x <= 10)
{
    $random=[]=rand(0,1000);
    $RN[]=rand(0,100);
    $x++;
}

foreach ($random as $i => $v)
{
    if ($random[$i] >= 1 && $random[$i] <=100){

        $serv [] = 1;
    }

    elseif ($random[$i] >= 101 && $random[$i] <=200){

        $serv [] = 2;
    }elseif ($rnd[$i] >= 201 && $random[$i] <=300){

        $serv [] = 3;
    }elseif ($rnd[$i] >= 301 && $random[$i] <=400){

        $serv [] = 4;
    }elseif ($random[$i] >= 401 && $random[$i] <=500){

        $serv [] = 5;
    }elseif ($random[$i] >= 501 && $random[$i] <=600){

        $serv [] = 6;
    }elseif ($random[$i] >= 601 && $random[$i] <=700){

        $serv [] = 7;
    }elseif ($random[$i] >= 701 && $random[$i] <=800){

        $serv [] = 8;
    }elseif ($random[$i] >= 801 && $random[$i] <=900){

        $serv [] = 9;
    }elseif ($random[$i] >= 901 && $random[$i] <=1000){

        $serv [] = 10;
    }
}
foreach ($RN as $i => $v)
{
    if ($RN[$i] >=0 && $RN[$i] <=10)
    {
        $ent[]=1;
    }
    elseif ($RN[$i] >= 11 && $RN[$i] <=20)
    {
        $ent[]=2;
    }
    elseif ($RN[$i] >= 21 && $RN[$i] <=30)
    {
        $ent[]=3;
    }
    elseif ($RN[$i] >= 31 && $RN[$i] <=40)
    {
        $ent[]=4;
    }
    elseif ($RN[$i] >= 41 && $RN[$i] <=50)
    {
        $ent[]=5;
    }
    elseif ($RN[$i] >= 51 && $RN[$i] <=60)
    {
        $ent[]=6;
    }
    elseif ($RN[$i] >= 61 && $RN[$i] <=70)
    {
        $ent[]=7;
    }
    elseif ($RN[$i] >= 71 && $RN[$i] <=80)
    {
        $ent[]=8;
    }
    elseif ($RN[$i] >= 81 && $RN[$i] <=90)
    {
        $ent[]=9;
    }
    elseif ($RN[$i] >= 91 && $RN[$i] <=100)
    {
        $ent[]=10;
    }
}
$set=0;
while ($set <= 10)
{
    $f = $f + $serv[$set+1];
    $enttime[$set+1] = $f;
    $set++;
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Tamrin sevom</title>
</head>
<body>
<form method="post">
    <input type="submit" value="play" name="play">
</form>
    <table border="2px" style="float: right;text-align: center">
            <tr>
                <td>ودودی</td>
                <td>رندوم</td>
                <td>مشتری</td>

            </tr>
        <?php foreach ($person as $i => $r) { ?>
        <tr>

            <td style="padding: 5px;"><?php echo $serv[$i]; ?></td>
            <td style="padding: 5px;"><?php echo $random[$i] ; ?></td>
            <td style="padding: 5px;"><?php echo $r; }?></td>

        </tr>
    </table>

    <table border="2px" style="float: right;margin-right: 100px;text-align: center">
        <tr>
            <td>زمان خدمت</td>
            <td>رندوم</td>
            <td>مشتری</td>

        </tr>
        <?php foreach ($person as $i => $r) { ?>
        <tr>

            <td style="padding: 5px;"><?php echo $ent[$i]; ?></td>
            <td style="padding: 5px;"><?php echo $RN[$i]; ?></td>
            <td style="padding: 5px;"><?php echo $r; }?></td>

        </tr>
    </table>
    <table border="2px" style="float: right;text-align: center;margin-top: 20px;">
        <tr>
            <td>تایم های بیکاری</td>
            <td>مدت زمان انتظار</td>
            <td>پایان خدمت</td>
            <td>ماندن مشتری</td>
            <td>شروع خدمت رسانی</td>
            <td>خدمت دهی</td>
            <td>زمان ورود</td>
            <td>زمان آخرین ورود</td>
            <td>مشتری</td>
        </tr>
        <?php foreach ($person as $i => $r) { ?>
        <tr>
            <td style="padding: 5px;"><?php echo rand(0,3); ?></td>
            <td style="padding: 5px;"><?php echo rand(0,4); ?></td>
            <td style="padding: 5px;"><?php echo $enttime[$i]+$serv[$i]; ?></td>
            <td style="padding: 5px;"><?php echo rand(0,4); ?></td>
            <td style="padding: 5px;"><?php echo rand(0,4); ?></td>
            <td style="padding: 5px;"><?php echo $ent[$i]; ?></td>
            <td style="padding: 5px;"><?php echo $enttime[$i]; ?></td>
            <td style="padding: 5px;"><?php echo $serv[$i]; ?></td>
            <td style="padding: 5px;"><?php echo $r; ?></td>

            <?php }?>
        </tr>

    </table>
</body>
</html>