<?php

$servername = "localhost";
$username = "root";
$password = "toor";
$dbname = "WDDC2018";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT user.username, question.questionId, question.question, question.submitDate, answer.answer, answer.answerDate FROM ((question INNER JOIN answer ON question.questionId = answer.questionId) INNER JOIN user ON question.userId = user.userId);";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
     echo "<table align='center'><tr><th><b>Question Number</b></th><th><b>Name</b></th><th><b>Question</b></th><th><b>Date of Submition</b></th>";
    echo  "<th><b>Answers</b></th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["questionId"]. "</td><td>". $row["username"]. "</td><td>" . $row["question"] . "</td><td>". $row["submitDate"] ."</td><td>";
        echo "". $row["answer"] . " | Submited on " . $row["answerDate"];
        echo "</td></tr>";
    }
     echo "</table>";
     echo "<p id='answerSet'></p>";
} else {
    echo "0 results";
}

$conn->close();

?>
