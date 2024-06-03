<?php

if (isset($_POST['proceed'])) {



    $fullname = $_POST['fullname'];
    $area_of_interest = $_POST['area_of_interest'];
    $profession = $_POST['profession'];
    $portfolio_link = $_POST['portfolio_link'];
    $bio = $_POST['bio'];
    $why_participating = $_POST['why_participating'];
    $address = $_POST['address'];

    $randomNumber = rand();
    $img = $randomNumber . '.png';
    // Define the upload directories
    $photoDir = "uploads/photos/";
    $idDir = "uploads/id/";
    $cvDir = "uploads/cv/";



    // Ensure the directories exist
    if (!is_dir($photoDir)) {
        mkdir($photoDir, 0755, true);
    }
    if (!is_dir($idDir)) {
        mkdir($idDir, 0755, true);
    }
    if (!is_dir($cvDir)) {
        mkdir($cvDir, 0755, true);
    }

    // Define the file paths
    $photoPath = $photoDir . 'photo_'.$randomNumber . '_' . basename($_FILES['photo']['name']);
    $idPath = $idDir . 'Id-card_'.$randomNumber . '_' . basename($_FILES['id']['name']);
    $cvPath = $cvDir . 'CV_'. $randomNumber . '_' . basename($_FILES['cv']['name']);

    // Move the uploaded files to the directories
    if (
        move_uploaded_file($_FILES['photo']['tmp_name'], $photoPath) &&
        move_uploaded_file($_FILES['id']['tmp_name'], $idPath) &&
        move_uploaded_file($_FILES['cv']['tmp_name'], $cvPath)
    ) {
        
    } else {
        // Handle the error
        echo "Failed to upload files.";
    }


    require 'PHPMailerAutoload.php';


    $mail = new PHPMailer;

    //$mail->SMTPDebug = 4;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'live.smtp.mailtrap.io';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'api';                 // SMTP username
    $mail->Password = '6f46997db645604556c329aa656c127b';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom('mailtrap@demomailtrap.com', 'Related Human');
    $mail->addAddress('jwalker19950711@gmail.com');     // Add a recipient
    $mail->addReplyTo($email, 'Related Human');


    $photoFilename = pathinfo($photoPath, PATHINFO_BASENAME);
    $mail->addStringAttachment(file_get_contents($photoPath), $photoFilename);

    // Attach the back_id file
    $idFilename = pathinfo($idPath, PATHINFO_BASENAME);
    $mail->addStringAttachment(file_get_contents($idPath), $idFilename);
    // Attach the back_id file


    $cvFilename = pathinfo($cvPath, PATHINFO_BASENAME);
    $mail->addStringAttachment(file_get_contents($cvPath), $cvFilename);





    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'New Application';
    $mail->Body    = 'Full Name: ' . $fullname . '<br>' .
        $mail->Body    = 'Areas of Interest: ' . $area_of_interest . '<br>' .

        $mail->Body    = 'Profession: ' . $profession . '<br>' .
        $mail->Body    = 'links to your portfolio: ' . $portfolio_link . '<br>' .
        $mail->Body    = 'Bio: ' . $bio . '<br>' .
        $mail->Body    = 'Why do you want to participate in this challenge?: ' . $why_participating . '<br>' .
        $mail->Body    = 'Address: ' . $address . '<br>';



    if (!$mail->send()) {
        echo ("<script> alert('Message Fail, Please Try Again');</script>");
    } else {

  echo ("<script> alert('Submitted Successfully');</script>");    }



}
