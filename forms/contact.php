 <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "contact";

        $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn) {
            die("Sorry we failed to connect: " . mysqli_connect_error());
        } else {
            // echo "Connection was successful<br>";
           
            $sql = "INSERT INTO `contactus` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                // echo "The record has been inserted successfully!";
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Thank You! your entry has been submitted successfully,i will be in touch.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            } else {
                // echo "The record has not inserted successfully because of this error ----->" . mysqli_error($conn);
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> We are facing some technical issue, your entry is not submitted successfully! We regret the inconvinience caused.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            }
        }
    }
    ?>
