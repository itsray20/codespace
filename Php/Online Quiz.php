<!DOCTYPE html>
<html>
<head>
    <title>PHP Online Quiz</title>
</head>
<body>
    <h2>Online Quiz</h2>
    <form method="post" action="">
        <p>What is the capital of France?</p>
        <input type="radio" name="q1" value="Paris" required> Paris<br>
        <input type="radio" name="q1" value="London"> London<br>
        <input type="radio" name="q1" value="Berlin"> Berlin<br>
        <br>
        <p>What is 2 + 2?</p>
        <input type="radio" name="q2" value="3"> 3<br>
        <input type="radio" name="q2" value="4" required> 4<br>
        <input type="radio" name="q2" value="5"> 5<br>
        <br>
        <input type="submit" name="submitQuiz" value="Submit Quiz">
    </form>

    <?php
    if(isset($_POST['submitQuiz'])){
        $score = 0;

        if($_POST['q1'] == 'Paris'){
            $score++;
        }

        if($_POST['q2'] == '4'){
            $score++;
        }

        echo "Your Score: $score / 2";
    }
    ?>
</body>
</html>
