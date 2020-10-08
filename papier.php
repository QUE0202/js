<?php
session_start();    //session start
  if(!isset($_SESSION['username']))     //if session not found redirect to homepage
  {
    header('location:login.php');
  }
    else{
      echo '<form action="game.php" method="post" />
            <input type="submit" name="user_choice" value="Rock"  <br /><br />
            <input type="submit" name="user_choice" value="Paper" <br /><br />
            <input type="submit" name="user_choice" value="Scissors" <br /><br />
            <input type="submit" name="form_submit" value="submit"/> 
            </form> ';
          }
?>


<?php
//if session not found redirect to homepage
if(!isset($_SESSION['username'])) {
    header('location:login.php');
    if($_POST['user_choice']) {
        $user_choice = $_POST['user_choice'];
        $Choosefrom= array('Rock', 'Paper', 'Scissors');
        $Choice= rand(0,2);
        $Computer=$Choosefrom[$Choice];
        if($user_choice == $Computer) {
            echo 'Player: '.$user_choice.' CPU: '.$Computer.'. Result: Win';
        } else {
            echo 'Player: '.$user_choice.' CPU: '.$Computer.'. Result: Lose';
        }
   }
}
?>