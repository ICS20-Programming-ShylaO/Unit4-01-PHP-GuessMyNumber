  <?php
	// intializing constants and variables
  const MIN = 1;
  const MAX = 6;
  $userGuess = $_POST['user-guess'];
  $randomNumber = rand(MIN,MAX);

  // if userGuess == randomNumber, display "You got it right!"

if ($userGuess == $randomNumber) {
    
 echo 'You got it right!'; 

}

  // if userGuess != randomNumber, display "wrong guess, try again."
if ($userGuess != $randomNumber) {

    echo 'Wrong guess, try again.';
      
}
  
?>
