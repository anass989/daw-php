<?php

    function output_game($chapter, $score, $attempts, $word, $guessed) {
        echo <<<EOD
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compat1ible" content="ie=edge">
            <link rel="stylesheet" href="css/style.css">
            <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
            <title>Hangman</title>
        </head>
EOD;

        echo '<body><div class="game-wrapper">';
            echo "<h2>$chapter</h2>";
            echo '<div class="content">';
                output_score($score, $attempts);
                output_word($word, $guessed);
            echo '</div>';
            output_letters($guessed);
        echo '</div></body>';
    }

    function output_word($word, $guessed) {
        echo '<div class="word-wrapper">';
        foreach (str_split($word) as $char) {
            if (in_array($char, $guessed) || !preg_match('/[a-z]/i', $char)) {
                echo $char;
            } elseif (!in_array($char, $guessed)) {
                echo "_ ";
            }
        }
        echo '</div>';
    }

    function output_intro() {
        echo <<<EOD
        <div class="intro-wrapper">
            <h2>Select a chapter:</h2>
            <form action="" method="get" class="form-chapter">
                <button type="submit" name="chapter" class="chapter" value="chapter 9">Chapter 9</button>
                <button type="submit" name="chapter" class="chapter" value="chapter 10">Chapter 10</button>
                <button type="submit" name="chapter" class="chapter" value="chapter 11">Chapter 11</button>
                <button type="submit" name="chapter" class="chapter" value="chapter 12">Chapter 12</button>
            </form>
        </div>
EOD;
    }

    function output_score($score, $attempts) {
        echo <<<EOD
        <div class="score-wrapper">
            <span>Score: $score</span>
            <span>Attempts: $attempts</span>
        </div>
EOD;

    }

    function output_letters($guessed) {
        $letters = range('a', 'z');
        echo '<form action="" method="" class="form-letters">';
        foreach ($letters as $letter) {
            if (in_array($letter, $guessed)) {
                echo <<<EOD
                <input type="submit" name="submit" class="input-letter" value="$letter" disabled />
EOD;
            } else {
                echo <<<EOD
                <input type="submit" name="submit" class="input-letter" value="$letter" />
EOD;
            }
        }
        echo '</form>';
    }

    function output_loss() {
        echo <<<EOD
        <div class="loss-wrapper">
            <span class="loss">You lost.</span>
            <form action="" method="get">
                <button type="submit" name="submit" class="btn-loss">Try again</button>
                <button type="reset" name="reset" class="btn-loss">Start over</button>
            </form>
        </div>
EOD;
    }
?>