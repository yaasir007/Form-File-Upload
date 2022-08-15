<?php
    include_once 'db.inc.php';

    if (isset($_POST['submit'])){

        $name = $_POST['name'];
        $age = $_POST['age'];
        $file = $_FILES['file'];

        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES[ 'file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];


        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end ($fileExt));
        $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                $fileNameNew = uniqid('', true).'.'.$fileActualExt;

                $fileDestination = '../uploads/'.$fileNameNew;
                $user_email = 'testing';
                $participation_number = rand(10000000,99999999);

                move_uploaded_file($fileTmpName, $fileDestination);

                //Inserting the information into the Database
                $sql = "INSERT INTO table_name (name, age, image_path, user_email, participation_number) VALUES ('$name', '$age', '$fileDestination', '$user_email', '$participation_number');";
                mysqli_query($conn, $sql);

                header('Location: ../index.php?formSuccess=true');

            } else {
                echo "Your File is too big!";
            }
        } else {
            echo "There was an error while uploading the file";
        }
    } else {
        echo "You cannot upload files of this type!";
    }
}
?>
