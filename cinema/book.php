<?php
session_start();
if (!isset($_SESSION['email'])) {
    echo 'the session is empty';
    header('Location: /cinema/user-login.php');
}
require_once('config.php');


if (isset($_POST['book-ticket'])) {
    $seat_no    =   $_POST['seat_no'];
    $date    =   $_POST['date'];
    $time    =   $_POST['time'];
    $screen    =   $_POST['screen'];
    $movie    =   $_POST['movie'];
    $email =    $_SESSION['email'];

    $sql = "UPDATE tickets set availabilty_status = 'NOT AVAILABLE' where movie_id = '$movie' and seat_no = '$seat_no' and time = '$time' and date = '$date'";
    $sql_ticket_id = "SELECT ticket_id from tickets where movie_id = '$movie' and screen='$screen' and seat_no = '$seat_no' and time = '$time' and date = '$date'";
    $sql_user_id = "SELECT `user_id` from users where email='$email'";


    $ticketResult = $conn->query($sql_ticket_id);
    $ticket_id = null;

    if ($ticketResult->num_rows > 0) {
        // output data of each row
        while ($ticket = $ticketResult->fetch_assoc()) {
            $ticket_id = $ticket["ticket_id"];
        }
    }


    $userResult = $conn->query($sql_user_id);
    $user_id = null;

    if ($userResult->num_rows > 0) {
        // output data of each row
        while ($user = $userResult->fetch_assoc()) {
            $user_id = $user['user_id'];
        }
    }

    if (mysqli_query($conn, $sql)) {
        echo "Update Successfully";
        echo '<br / >';
    } else {
        echo "Ticket";
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // for booking
    $sql_booking = "Insert into bookings(`ticket_id`,`user_id`,`email`,`payment_status`) values( $ticket_id , $user_id  , '$email'   , 'NOT PAID' )";
    if (mysqli_query($conn, $sql_booking)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql_booking . "<br>" . $conn->error;
    }
}
