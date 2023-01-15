<?php
$message_sent = false;
if (isset($_POST['email']) && $_POST['email'] != '') {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        //submit form
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $mealplan = $_POST['mealplan'];
        $extra = $_POST['desc'];
        $items = $_POST['items'];

        $to = 'preparedbycj@gmail.com';
        $subject = 'Meal Order Request';

        $body .= 'Name: ' . $name . "\r\n";
        $body .= 'Email: ' . $email . "\r\n";
        $body .= 'Phone #: ' . $phone . "\r\n";
        $body .= 'Meal Plan: ' . $mealplan . "\r\n";
        $body .- 'Items: ' . $items . "\r\n";
        $body .= 'Extra Notes: ' . $extra . "\r\n";
        $headers = "From: order@prepared.plus";
        mail($to, $subject, $body, $headers);

        $message_sent = true;
    }
}
if ($message_sent == true) {
    echo "<script type='text/javascript'>alert('Your message has been sent!');</script>";
    header("location: /order.html");
}

?>
