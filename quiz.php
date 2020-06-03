<!DOCTYPE html>
<html>
<head>
<title>Kursadarbs</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href ="style.css" rel ="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src = "quizam.js"></script>
</head>

<body>
<!-- Sidebar (hidden by default) -->
<div class="w3-top w3-hide-small">
    <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
      <a href="kursadarbs.html" class="w3-bar-item w3-button">HOME</a>
      <a href="#myMap" class="w3-bar-item w3-button">DAILY NEWS</a>
      <a href="#menu" class="w3-bar-item w3-button">QUOTES</a>
      <a href="#about" class="w3-bar-item w3-button">RECIPES</a>
      <div class="w3-dropdown-hover w3-hide-small">
        <button class="w3-padding-large w3-button" title="More">ENTERTAINMENT <i class="fa fa-caret-down"></i></button>     
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
          <a href="#" class="w3-bar-item w3-button">SUDOKU</a>
          <a href="#quiz" class="w3-bar-item w3-button">QUIZ</a>
          <a href="#" class="w3-bar-item w3-button">TEST</a>
        </div>
    </div>
  </div>
  </div>
  <br><br>
  <h1 class="display-1">DAILY QUIZ</h1>

  <form methos="post" id="quiz" name="quiz">
    <p class = "questions">What is the capital of Greece?</p>
    <input type = "radio" id = "mc" name = "question1" value = "Larnaca"> Larnaca<br>
    <input type = "radio" id = "mc" name = "question1" value = "Rome"> Rome<br>
    <input type = "radio" id = "mc" name = "question1" value = "Athens"> Athens<br><br>

    <p class = "questions">	Who was the first man to fly around the earth with a spaceship?</p>
    <input type = "radio" id = "mc" name = "question2" value = "Armstrong"> Armstrong<br>
    <input type = "radio" id = "mc" name = "question2" value = "Gorbachov"> Gorbachov<br>
    <input type = "radio" id = "mc" name = "question2" value = "Gagarin"> Gagarin<br><br>

    <p class = "questions">	What is the organ that is affected when one is suffering from hepatitis?</p>
    <input type = "radio" id = "mc" name = "question3" value = "Liver"> Liver<br>
    <input type = "radio" id = "mc" name = "question3" value = "Heart"> Heart<br>
    <input type = "radio" id = "mc" name = "question3" value = "Galblatter"> Galblatter<br><br>

    <p class = "questions">What color is cobalt?</p>
    <input type = "radio" id = "mc" name = "question4" value = "Red"> Red<br>
    <input type = "radio" id = "mc" name = "question4" value = "Blue"> Blue<br>
    <input type = "radio" id = "mc" name = "question4" value = "Black"> Black<br><br>
    
    <p class = "questions">	Which device do we use to look at the stars?</p>
    <input type = "radio" id = "mc" name = "question5" value = "Binoculars"> Binoculars<br>
    <input type = "radio" id = "mc" name = "question5" value = "Magnifier"> Magnifier<br>
    <input type = "radio" id = "mc" name = "question5" value = "Telescope"> Telescope<br><br>

    <p class = "questions">What is the lightest existing metal?	</p>
    <input type = "radio" id = "mc" name = "question6" value = "Aluminium"> Aluminium<br>
    <input type = "radio" id = "mc" name = "question6" value = "Silicon"> Silicon<br>
    <input type = "radio" id = "mc" name = "question6" value = "Iron"> Iron<br><br>

    <p class = "questions">Which planet is nearest the sun?	</p>
    <input type = "radio" id = "mc" name = "question7" value = "Venus"> Venus<br>
    <input type = "radio" id = "mc" name = "question7" value = "Uranus"> Uranus<br>
    <input type = "radio" id = "mc" name = "question7" value = "Mercury"> Mercury<br><br>

    <p class = "questions">Which natural substance is the hardest?	</p>
    <input type = "radio" id = "mc" name = "question8" value = "Platinum"> Platinum<br>
    <input type = "radio" id = "mc" name = "question8" value = "Diamond"> Diamond<br>
    <input type = "radio" id = "mc" name = "question8" value = "Gold"> Gold<br><br>

    <p class = "questions">	How many eyes does a honeybee have?</p>
    <input type = "radio" id = "mc" name = "question9" value = "2"> 2<br>
    <input type = "radio" id = "mc" name = "question9" value = "4"> 4<br>
    <input type = "radio" id = "mc" name = "question9" value = "5"> 5<br><br>

    <p class = "questions">What is the most famous Mexican beer?</p>
    <input type = "radio" id = "mc" name = "question10" value = "Keo"> Keo<br>
    <input type = "radio" id = "mc" name = "question10" value = "Corona"> Corona<br>
    <input type = "radio" id = "mc" name = "question10" value = "Tuborg">Tuborg<br><br>
    
    <input name ="button" id = "button" type = "button" value = "I'm finished!" onclick = "check();">
  </form> 
<?php
if(isset($_POST['button'])){
  ?>
    <div id = "after_submit">
    <p id = "number_correct"></p>
    <p id = "message"></p>
    <img id = "picture">
    </div>
  <?php
} 
?>
</body>
</html>