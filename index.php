<?php

include("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Quiz Application</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        .quiz-button {
            transition: transform 0.2s ease-in-out;
        }
        .quiz-button:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="text-center">
        <h1 class="text-3xl font-semibold mb-4">Simple Quiz Application 🤔</h1>
        <div class="mb-4">
            <p class="text-lg"><?php
             $query = "SELECT * FROM tbl_javascript where id = 1";
             $result = mysqli_query($con,$query);
             $row = mysqli_num_rows($result);
              if ($row > 0) {
                while ($output = mysqli_fetch_assoc($result)) { ?>
                    <?php echo $output['question']; ?> 
               <?php }} else {echo 'No questions found'."<br>";} ?>
               <br>
            <input type="radio" name="option" value="A. myVariable" id="myVariable">
            <label for="myVariable" class="ml-2"><?php
             $query = "SELECT * FROM tbl_javascript where id = 1";
             $result = mysqli_query($con,$query);
             $row = mysqli_num_rows($result);
              if ($row > 0) {
                while ($output = mysqli_fetch_assoc($result)) { ?>
                    <?php echo $output['A']; ?> 
               <?php }} else {echo 'No questions found'."<br>";} ?></label><br>
            <input type="radio" name="option" value="2myVariable" id="2myVariable">
            <label for="2myVariable" class="ml-2"><?php
             $query = "SELECT * FROM tbl_javascript where id = 1";
             $result = mysqli_query($con,$query);
             $row = mysqli_num_rows($result);
              if ($row > 0) {
                while ($output = mysqli_fetch_assoc($result)) { ?>
                    <?php echo $output['B']; ?> 
               <?php }} else {echo 'No questions found'."<br>";} ?></label><br>
            <input type="radio" name="option" value="_myVariable" id="_myVariable">
            <label for="_myVariable" class="ml-2"><?php
             $query = "SELECT * FROM tbl_javascript where id = 1";
             $result = mysqli_query($con,$query);
             $row = mysqli_num_rows($result);
              if ($row > 0) {
                while ($output = mysqli_fetch_assoc($result)) { ?>
                    <?php echo $output['C']; ?> 
               <?php }} else {echo 'No questions found'."<br>";} ?></label><br>
            <input type="radio" name="option" value="$myVariable" id="myVariable">
            <label for="$myVariable" class="ml-2"><?php
             $query = "SELECT * FROM tbl_javascript where id = 1";
             $result = mysqli_query($con,$query);
             $row = mysqli_num_rows($result);
              if ($row > 0) {
                while ($output = mysqli_fetch_assoc($result)) { ?>
                    <?php echo $output['D']; ?> 
               <?php }} else {echo 'No questions found'."<br>";} ?></label><br>
        </div>
        <button onclick="submitAnswer()" class="quiz-button bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md focus:outline-none">
            Submit
        </button>
         <!-- New button for next page -->
         <a href="page2.php">
            <button onclick="goToNextPage()" class="quiz-button bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md mt-4 focus:outline-none">
                Go to Next Page
            </button>
        </a>
        <p id="result" class="mt-4 text-lg font-semibold"></p>
        <!-- Countdown Timer -->
        <p id="timer" class="mt-4 text-lg font-semibold"></p>
    </div>
    <script>
       // let timer; // Variable to store the timer
        // Function to start the countdown timer
       // function startTimer(duration, display) {
           // let timer = duration, minutes, seconds;
         //   setInterval(function () {
           //     minutes = parseInt(timer / 60, 10)
         //       seconds = parseInt(timer % 60, 10);

           //     minutes = minutes < 10 ? "0" + minutes : minutes;
             //   seconds = seconds < 10 ? "0" + seconds : seconds;

               // display.textContent = minutes + ":" + seconds;

               // if (--timer < 0) {
                 //   timer = duration;
                   // submitAnswer(); // Automatically submit the answer when the timer runs out
              //  }
           // }, 1000);
       // }

        // Function to submit the answer
        // function submitAnswer() {
        //     const correctAnswer = "2myVariable";
        //     const userAnswer = document.querySelector("input:checked").value;

        //     if (correctAnswer === userAnswer) {
        //         document.getElementById('result').textContent = "Correct! 🎉";
        //     } else {
        //         document.getElementById('result').textContent = "Incorrect! 😢";
        //     }
        // }

        // document.addEventListener("DOMContentLoaded", function () {
        //     const twentyMinutes = 60 * 1, // 20 minutes in seconds
        //         display = document.querySelector('#timer');
        //     startTimer(twentyMinutes, display);
        // });
    </script>
</body>
</html>
