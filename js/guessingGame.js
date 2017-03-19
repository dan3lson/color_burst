$(document).ready(function() {
	// Ask the user for their name
	var name = prompt("Hello! What\'s your name?");
	// Get a random number between 1 and whatever number is provided
	var number = Math.floor((Math.random() * 10) + 1);
	// Ask the user for a number
	var guess = prompt(
	  name +
	  ", let\'s play a guessing game. Type in a number between 1 and 10."
	);
	// Check if the user got the number correct
	if (guess == number) {
	  alert(":) Awesome, your number " + guess + " is correct!");
	} else {
	  alert(":( Awww man, your number " + guess + " is not correct! It\'s actually " + number + ". q ");
	}
});
