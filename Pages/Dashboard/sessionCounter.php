<?php

// Start the session
session_start();

// Check if the session has a "start_time" value
if (!isset($_SESSION['start_time'])) {
    // If not, set the start time to the current time
    $_SESSION['start_time'] = time();
}

// Calculate the elapsed time by subtracting the start time from the current time
$elapsed_time = time() - $_SESSION['start_time'];

// Output the elapsed time
echo "Your session has been active for $elapsed_time seconds.";

?>
 

  <?php

// Start the session
session_start();

// Check if the session has a "start_time" value
if (!isset($_SESSION['start_time'])) {
    // If not, set the start time to the current time
    $_SESSION['start_time'] = time();
}

// Calculate the elapsed time by subtracting the start time from the current time
$elapsed_time = time() - $_SESSION['start_time'];

// Output the elapsed time in JSON format
echo json_encode(['elapsed_time' => $elapsed_time]);

?>
<script>

  // Set the refresh interval (in seconds)
var refreshInterval = 1;

// Start the timer
setInterval(function() {
    // Send an Ajax request to the server to get the elapsed time
    $.ajax({
        url: 'C:/xampp/htdocs/FinalProject/PHP/users.php',
        dataType: 'json',
        success: function(response) {
            // Update the elapsed time on the page
            $('#elapsed-time').text(response.elapsed_time + ' seconds');
        }
    });
}, refreshInterval * 1000);

</script>