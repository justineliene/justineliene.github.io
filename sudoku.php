<?php require_once("other.php");
    $sql = "SELECT id, row1, row2, row3, row4, row5, row6, row7, row8, row9 FROM sudokutasks";
    $res = $conn->query($sql);
    if ($res){
        $i=0;
        while ($res->num_rows>$i){
            $row = $res->fetch_object();
            $id = $row -> id;
            $mas[0]=$row -> row1;
            $mas[1]=$row -> row2;
            $mas[2]=$row -> row3;
            $mas[3]=$row -> row4;
            $mas[4]=$row -> row5;
            $mas[5]=$row -> row6;
            $mas[6]=$row -> row7;
            $mas[7]=$row -> row8;
            $mas[8]=$row -> row9;
            $mas[9]=$id;
            $tasks[$i]=$mas;
            $i++;
        } 
    } else {
        echo "duuuude?";
    }
    $sql = "SELECT id, row1, row2, row3, row4, row5, row6, row7, row8, row9 FROM sudokuanswers";
    $res = $conn->query($sql);
    if ($res){
        $i=0;
        while ($res->num_rows>$i){
            $row = $res->fetch_object();
            $id = $row -> id;
            $mas[0]=$row -> row1;
            $mas[1]=$row -> row2;
            $mas[2]=$row -> row3;
            $mas[3]=$row -> row4;
            $mas[4]=$row -> row5;
            $mas[5]=$row -> row6;
            $mas[6]=$row -> row7;
            $mas[7]=$row -> row8;
            $mas[8]=$row -> row9;
            $mas[9]=$id;
            $answers[$i]=$mas;
            $i++;
        } 
    } else {
        echo "duuuude?";
    }
    $task = rand(0,($i-1));
    if(isset($_POST['submit'])){
        $cell1_1 = $_POST['cell1_1']; 
        $cell1_2 = $_POST['cell1_2']; 
        $cell1_3 = $_POST['cell1_3']; 
        $cell1_4 = $_POST['cell1_4'];  
        $cell1_5 = $_POST['cell1_5']; 
        $cell1_6 = $_POST['cell1_6']; 
        $cell1_7 = $_POST['cell1_7']; 
        $cell1_8 = $_POST['cell1_8']; 
        $cell1_9 = $_POST['cell1_9']; 
        $cell2_1 = $_POST['cell2_1']; 
        $cell2_2 = $_POST['cell2_2']; 
        $cell2_3 = $_POST['cell2_3']; 
        $cell2_4 = $_POST['cell2_4'];  
        $cell2_5 = $_POST['cell2_5']; 
        $cell2_6 = $_POST['cell2_6']; 
        $cell2_7 = $_POST['cell2_7']; 
        $cell2_8 = $_POST['cell2_8']; 
        $cell2_9 = $_POST['cell2_9']; 
        $cell3_1 = $_POST['cell3_1']; 
        $cell3_2 = $_POST['cell3_2']; 
        $cell3_3 = $_POST['cell3_3']; 
        $cell3_4 = $_POST['cell3_4'];  
        $cell3_5 = $_POST['cell3_5']; 
        $cell3_6 = $_POST['cell3_6']; 
        $cell3_7 = $_POST['cell3_7']; 
        $cell3_8 = $_POST['cell3_8']; 
        $cell3_9 = $_POST['cell3_9']; 
        $cell4_1 = $_POST['cell4_1']; 
        $cell4_2 = $_POST['cell4_2']; 
        $cell4_3 = $_POST['cell4_3']; 
        $cell4_4 = $_POST['cell4_4'];  
        $cell4_5 = $_POST['cell4_5']; 
        $cell4_6 = $_POST['cell4_6']; 
        $cell4_7 = $_POST['cell4_7']; 
        $cell4_8 = $_POST['cell4_8']; 
        $cell4_9 = $_POST['cell4_9']; 
        $cell5_1 = $_POST['cell5_1']; 
        $cell5_2 = $_POST['cell5_2']; 
        $cell5_3 = $_POST['cell5_3']; 
        $cell5_4 = $_POST['cell5_4'];  
        $cell5_5 = $_POST['cell5_5']; 
        $cell5_6 = $_POST['cell5_6']; 
        $cell5_7 = $_POST['cell5_7']; 
        $cell5_8 = $_POST['cell5_8']; 
        $cell5_9 = $_POST['cell5_9']; 
        $cell6_1 = $_POST['cell6_1']; 
        $cell6_2 = $_POST['cell6_2']; 
        $cell6_3 = $_POST['cell6_3']; 
        $cell6_4 = $_POST['cell6_4'];  
        $cell6_5 = $_POST['cell6_5']; 
        $cell6_6 = $_POST['cell6_6']; 
        $cell6_7 = $_POST['cell6_7']; 
        $cell6_8 = $_POST['cell6_8']; 
        $cell6_9 = $_POST['cell6_9']; 
        $cell7_1 = $_POST['cell7_1']; 
        $cell7_2 = $_POST['cell7_2']; 
        $cell7_3 = $_POST['cell7_3']; 
        $cell7_4 = $_POST['cell7_4'];  
        $cell7_5 = $_POST['cell7_5']; 
        $cell7_6 = $_POST['cell7_6']; 
        $cell7_7 = $_POST['cell7_7']; 
        $cell7_8 = $_POST['cell7_8']; 
        $cell7_9 = $_POST['cell7_9']; 
        $cell8_1 = $_POST['cell8_1']; 
        $cell8_2 = $_POST['cell8_2']; 
        $cell8_3 = $_POST['cell8_3']; 
        $cell8_4 = $_POST['cell8_4'];  
        $cell8_5 = $_POST['cell8_5']; 
        $cell8_6 = $_POST['cell8_6']; 
        $cell8_7 = $_POST['cell8_7']; 
        $cell8_8 = $_POST['cell8_8']; 
        $cell8_9 = $_POST['cell8_9']; 
        $cell9_1 = $_POST['cell9_1']; 
        $cell9_2 = $_POST['cell9_2']; 
        $cell9_3 = $_POST['cell9_3']; 
        $cell9_4 = $_POST['cell9_4'];  
        $cell9_5 = $_POST['cell9_5']; 
        $cell9_6 = $_POST['cell9_6']; 
        $cell9_7 = $_POST['cell9_7']; 
        $cell9_8 = $_POST['cell9_8']; 
        $cell9_9 = $_POST['cell9_9']; 

        $the = $_POST['tasknumber'];
        if(($cell1_1.$cell1_2.$cell1_3.$cell1_4.$cell1_5.$cell1_6.$cell1_7.$cell1_8.$cell1_9)==$answers[$the][0]){
            $ch1=true;
        } else {
            $ch1=false;
        }

        if(($cell2_1.$cell2_2.$cell2_3.$cell2_4.$cell2_5.$cell2_6.$cell2_7.$cell2_8.$cell2_9)==$answers[$the][1]){
            $ch2=true;
        } else {
            $ch2=false;
        }

        if(($cell3_1.$cell3_2.$cell3_3.$cell3_4.$cell3_5.$cell3_6.$cell3_7.$cell3_8.$cell3_9)==$answers[$the][2]){
            $ch3=true;
        } else {
            $ch3=false;
        }

        if(($cell4_1.$cell4_2.$cell4_3.$cell4_4.$cell4_5.$cell4_6.$cell4_7.$cell4_8.$cell4_9)==$answers[$the][3]){
            $ch4=true;
        } else {
            $ch4=false;
        }

        if(($cell5_1.$cell5_2.$cell5_3.$cell5_4.$cell5_5.$cell5_6.$cell5_7.$cell5_8.$cell5_9)==$answers[$the][4]){
            $ch5=true;
        } else {
            $ch5=false;
        }

        if(($cell6_1.$cell6_2.$cell6_3.$cell6_4.$cell6_5.$cell6_6.$cell6_7.$cell6_8.$cell6_9)==$answers[$the][5]){
            $ch6=true;
        } else {
            $ch6=false;
        }

        if(($cell7_1.$cell7_2.$cell7_3.$cell7_4.$cell7_5.$cell7_6.$cell7_7.$cell7_8.$cell7_9)==$answers[$the][6]){
            $ch7=true;
        } else {
            $ch7=false;
        }

        if(($cell8_1.$cell8_2.$cell8_3.$cell8_4.$cell8_5.$cell8_6.$cell8_7.$cell8_8.$cell8_9)==$answers[$the][7]){
            $ch8=true;
        } else {
            $ch8=false;
        }

        if(($cell9_1.$cell9_2.$cell9_3.$cell9_4.$cell9_5.$cell9_6.$cell9_7.$cell9_8.$cell9_9)==$answers[$the][8]){
            $ch9=true;
        } else {
            $ch9=false;
        }
        if($ch1&&$ch2&&$ch3&&$ch4&&$ch5&&$ch6&&$ch7&&$ch8&&$ch9){
            ?> <script> alert('Congratulations! You did it!'); </script> <?php
        } else {
        ?> <script> alert('Uh, oh! You did something wrong. Maybe try another one!'); </script> <?php
        }
        header('sudoku.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Kursadarbs</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href ="style.css" rel ="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
        
    </head>
    <body>
        <div class="w3-top w3-hide-small">
            <div class="w3-bar w3-xlarge w3-black" id="myNavbar">
              <a href="#" class="w3-bar-item w3-button">HOME</a>
              <a href="zinas.html" class="w3-bar-item w3-button">DAILY NEWS</a>
              <a href="receptes.html" class="w3-bar-item w3-button">RECIPES</a>
              <a href="quote.html" class="w3-bar-item w3-button">QUOTES</a>
              <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-padding-large w3-button" title="More">ENTERTAINMENT <i class="fa fa-caret-down"></i></button>     
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                  <a href="sudoku.php" class="w3-bar-item w3-button">SUDOKU</a>
                  <a href="quiz.html" class="w3-bar-item w3-button">QUIZ</a>
                </div>
            </div>
          </div>
        </div>
        <div class="table">
            <form id="tr" method="post" action="sudoku.php">
                <div class="td" style="position:relative; top:100px; text-align:center;">
                    <input name="cell1_1" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][0],0,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell1_2" type="number" min="1" max="9" style="width:40px; height:40px;
                    <?php  $value=substr($tasks[$task][0],1,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell1_3" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][0],2,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> /> &nbsp;
                    <input name="cell1_4" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][0],3,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell1_5" type="number" min="1" max="9" style="width:40px; height:40px;
                    <?php  $value=substr($tasks[$task][0],4,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell1_6" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][0],5,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> /> &nbsp;
                    <input name="cell1_7" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][0],6,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell1_8" type="number" min="1" max="9" style="width:40px; height:40px;
                    <?php  $value=substr($tasks[$task][0],7,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell1_9" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][0],8,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> /> <br>
                    <input name="cell2_1" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][1],0,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell2_2" type="number" min="1" max="9" style="width:40px; height:40px;
                    <?php  $value=substr($tasks[$task][1],1,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell2_3" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][1],2,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> /> &nbsp;
                    <input name="cell2_4" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][1],3,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell2_5" type="number" min="1" max="9" style="width:40px; height:40px;
                    <?php  $value=substr($tasks[$task][1],4,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell2_6" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][1],5,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> /> &nbsp;
                    <input name="cell2_7" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][1],6,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell2_8" type="number" min="1" max="9" style="width:40px; height:40px;
                    <?php  $value=substr($tasks[$task][1],7,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell2_9" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][1],8,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> /> <br>
                    <input name="cell3_1" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][2],0,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell3_2" type="number" min="1" max="9" style="width:40px; height:40px;
                    <?php  $value=substr($tasks[$task][2],1,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell3_3" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][2],2,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> /> &nbsp;
                    <input name="cell3_4" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][2],3,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell3_5" type="number" min="1" max="9" style="width:40px; height:40px;
                    <?php  $value=substr($tasks[$task][2],4,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell3_6" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][2],5,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> /> &nbsp;
                    <input name="cell3_7" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][2],6,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell3_8" type="number" min="1" max="9" style="width:40px; height:40px;
                    <?php  $value=substr($tasks[$task][2],7,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell3_9" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][2],8,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> /> <br><br>
                    
                    <input name="cell4_1" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][3],0,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell4_2" type="number" min="1" max="9" style="width:40px; height:40px;
                    <?php  $value=substr($tasks[$task][3],1,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell4_3" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][3],2,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> /> &nbsp;
                    <input name="cell4_4" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][3],3,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell4_5" type="number" min="1" max="9" style="width:40px; height:40px;
                    <?php  $value=substr($tasks[$task][3],4,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell4_6" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][3],5,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> /> &nbsp;
                    <input name="cell4_7" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][3],6,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell4_8" type="number" min="1" max="9" style="width:40px; height:40px;
                    <?php  $value=substr($tasks[$task][3],7,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell4_9" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][3],8,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> /> <br>
                    <input name="cell5_1" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][4],0,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell5_2" type="number" min="1" max="9" style="width:40px; height:40px;
                    <?php  $value=substr($tasks[$task][4],1,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell5_3" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][4],2,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> /> &nbsp;
                    <input name="cell5_4" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][4],3,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell5_5" type="number" min="1" max="9" style="width:40px; height:40px;
                    <?php  $value=substr($tasks[$task][4],4,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell5_6" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][4],5,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> /> &nbsp;
                    <input name="cell5_7" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][4],6,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell5_8" type="number" min="1" max="9" style="width:40px; height:40px;
                    <?php  $value=substr($tasks[$task][4],7,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell5_9" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][4],8,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> /> <br>
                    <input name="cell6_1" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][5],0,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell6_2" type="number" min="1" max="9" style="width:40px; height:40px;
                    <?php  $value=substr($tasks[$task][5],1,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell6_3" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][5],2,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> /> &nbsp;
                    <input name="cell6_4" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][5],3,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell6_5" type="number" min="1" max="9" style="width:40px; height:40px;
                    <?php  $value=substr($tasks[$task][5],4,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell6_6" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][5],5,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> /> &nbsp;
                    <input name="cell6_7" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][5],6,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell6_8" type="number" min="1" max="9" style="width:40px; height:40px;
                    <?php  $value=substr($tasks[$task][5],7,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell6_9" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][5],8,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> /> <br><br>
                
                    <input name="cell7_1" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][6],0,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell7_2" type="number" min="1" max="9" style="width:40px; height:40px;
                    <?php  $value=substr($tasks[$task][6],1,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell7_3" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][6],2,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> /> &nbsp;
                    <input name="cell7_4" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][6],3,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell7_5" type="number" min="1" max="9" style="width:40px; height:40px;
                    <?php  $value=substr($tasks[$task][6],4,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell7_6" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][6],5,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> /> &nbsp;
                    <input name="cell7_7" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][6],6,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell7_8" type="number" min="1" max="9" style="width:40px; height:40px;
                    <?php  $value=substr($tasks[$task][6],7,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell7_9" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][6],8,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> /> <br>
                    <input name="cell8_1" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][7],0,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell8_2" type="number" min="1" max="9" style="width:40px; height:40px;
                    <?php  $value=substr($tasks[$task][7],1,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell8_3" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][7],2,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> /> &nbsp;
                    <input name="cell8_4" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][7],3,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell8_5" type="number" min="1" max="9" style="width:40px; height:40px;
                    <?php  $value=substr($tasks[$task][7],4,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell8_6" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][7],5,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> /> &nbsp;
                    <input name="cell8_7" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][7],6,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell8_8" type="number" min="1" max="9" style="width:40px; height:40px;
                    <?php  $value=substr($tasks[$task][7],7,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell8_9" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][7],8,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> /> <br>
                    <input name="cell9_1" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][8],0,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell9_2" type="number" min="1" max="9" style="width:40px; height:40px;
                    <?php  $value=substr($tasks[$task][8],1,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell9_3" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][8],2,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> /> &nbsp;
                    <input name="cell9_4" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][8],3,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell9_5" type="number" min="1" max="9" style="width:40px; height:40px;
                    <?php  $value=substr($tasks[$task][8],4,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell9_6" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][8],5,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> /> &nbsp;
                    <input name="cell9_7" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][8],6,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell9_8" type="number" min="1" max="9" style="width:40px; height:40px;
                    <?php  $value=substr($tasks[$task][8],7,1); if($value<>0){ ?> background-color: #EEE7E4; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> />
                    <input name="cell9_9" type="number" min="1" max="9" style="width:40px; height:40px;  
                    <?php  $value=substr($tasks[$task][8],8,1); if($value<>0){ ?> background-color: #EEE7E4 ; border: 1px solid #ccc;" value=<?php echo $value ?> readonly="true" <?php } else {?> " <?php }?> /> <br><br>
                    
                    <input type="hidden" name="tasknumber" value=<?php echo $task ?>>
                    <button name="submit">Check!</button>
                </div>
                
            </form>
        </div>
    </body>
    
</html>
<?php
    
?>


