<?php

$students=[
    "001"=>[67,78,45,60,78],
    "002"=>[67,49,63,80,70],
    "003"=>[97,80,95,60,78],
    "004"=>[77,78,65,47,78],
    "005"=>[56,48,76,40,68]
];

$start=1;
while($start<=100)
{
echo $start. ",";
$start+=1;
}

$start=5;
while($start<=1500){
    echo $start . " ";
    $start+=5;
}
echo "<br>";
$start=1;
do{
if($start % 2==0)
    echo $start. " ";
$start+=1;
}while($start<=100);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <?php
                    foreach($students as $id=>$marks)
                    {
                        echo "<tr>";
                        echo "<td>$id</td>";
                        $total=0;
                        foreach($marks as $mark)
                        {
                            $total+=$mark;
                            if($mark<60)
                            {
                                echo "<td class='bg-danger'>$mark</td>";
                            }
                            else
                                echo "<td>$mark</td>";
                        }
                        $average=$total/count($marks);
                        /*
                        if($average<60)
                        {
                            echo "<td class='bg-warning'>$average</td>";
                        }
                        else
                        {
                            echo "<td>$average</td>";
                        }*/
                        switch ($average<60)
                        {
                            case true:
                                echo "<td class='bg-warning'>$average</td>";break;
                            default:
                                echo "<td >$average</td>";break;
                        }
                        /*
                        if($average >=80)
                        {
                            echo "<td>A</td>";
                        }
                        else if($average>=75)
                        {
                            echo "<td>B</td>";
                        }
                        else if($average>=65)
                        {
                            echo "<td>C</td>";
                        }
                        else if($average>=50)
                        {
                            echo "<td>D</td>";
                        }
                        else
                        {
                            echo "<td>F</td>";
                        }*/
                        switch(true){
                            case ($average>=80):
                                echo "<td>A</td>";break;
                            case ($average>=75 && $average<80):
                                echo "<td>B</td>";break;
                            case ($average>=65):
                                echo "<td>C</td>";break;
                            case ($average>=50):
                                echo "<td>D</td>";break;
                            default:
                                echo "<td>F</td>";break;                            

                        }
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>
    </div>
    <div class="container">
        <div class="row">

        </div>
    </div>
    
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>