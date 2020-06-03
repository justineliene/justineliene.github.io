function check(){

	var question1 = document.quiz.question1.value;
	var question2 = document.quiz.question2.value;
	var question3 = document.quiz.question3.value;
	var question4 = document.quiz.question4.value;
	var question5 = document.quiz.question5.value;
	var question6 = document.quiz.question6.value;
	var question7 = document.quiz.question7.value;
	var question8 = document.quiz.question8.value;
	var question9 = document.quiz.question9.value;
	var question10 = document.quiz.question10.value;
	var correct = 0;


	if (question1 == "Athens") {
		correct++;
}
	if (question2 == "Gagarin") {
		correct++;
}	
	if (question3 == "Liver") {
		correct++;
}
	if (question4 == "Blue") {
		correct++;
}
	if (question5 == "Telescope") {
		correct++;
}
	if (question6 == "Aluminium") {
		correct++;
}
	if (question7 == "Mercury") {
		correct++;
}
	if (question8 == "Diamond") {
		correct++;
}
	if (question9 == "5") {
		correct++;
}
	if (question10 == "Corona") {
		correct++;
}
	
	var pictures = ["win.gif", "meh.gif", "lose.gif"];
	var messages = ["Great job!", "That's quite fine", "You really need to study harder"];
	var score;

	if (correct <= 3) {
		score = 2;
	}

	if (correct > 3 && correct <= 7) {
		score = 1;
	}

	if (correct > 7) {
		score = 0;
	}

	document.getElementById("after_submit").style.visibility = "visible";
	document.getElementById("message").innerHTML = messages[score];
	document.getElementById("number_correct").innerHTML = "You`ve got " + correct + " correct answers.";
	document.getElementById("picture").src = pictures[score];
	}