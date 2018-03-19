<?php
function show_error($message) {
    echo "<div class='error'>$message</div>";
}
if(!empty($_POST)) {
    foreach ($_POST as $key => $value) {
        if(empty($value)) {
            show_error("$key cannot be empty.");
            $error = true;
            break;
        }
        switch($key) {
            case 'StaffNumber': 
                if(!preg_match('/^[0-9]{4}$/', $value)) {
                    show_error("Staff number must consist of 4 digits only.");
                    $error = true;
                }
                break;
            case 'Name': 
                if(!preg_match('/^([a-z]|[A-Z]|\s)*$/', $value)) {
                    show_error("Name can only contain alphabet and space.");
                    $error = true;
                }
                break;
            case 'Email': 
                if(!preg_match('/^.*@{1}.*$/', $value)) {
                    show_error("Email must contain alliance(@) symbol.");
                    $error = true;
                    }
                break;
            case 'Phone': 
                if(!preg_match('/^01[0-9]-[0-9]{7}[0-9]?$/', $value)) {
                    show_error("Phone number must be in the format of XXX-XXXXXXX");
                    $error = true;
                }
                break;
        }
    }
    if(!$error) {
        header("Location: se_1500181_insert.php");
        session_start();
        $_SESSION['formData'] = $_POST;
        die;
    }
}
?>
<html>
<head>
    <style>
        /*Required style*/
        h1 {
            text-align:  center;
            font-family: Arial;
            font-size:   30px;
        }
        label {
            font-family: Verdana;
            font-size: 18px;
        }
        /* Extra style */
        form {
            text-align: center;
        }
        .error {
            color: red;
            text-align:  center;
        }
    </style>
</head>
<body>
    <h1>E-Form</h1>
    <form action='se_1500181_form.php' method='POST'>
        <label for='_staffNo'>Staff Number:</label>
        <input id='_staffNo' type='text' name='StaffNumber' value='<?php echo $_POST["StaffNumber"]?>'><br/>
        <label for='_name'>Name:</label>           
        <input id='_name' type='text' name='Name' value='<?php echo $_POST["Name"]?>'><br/>
        <label for='_email'>Email:</label>         
        <input id='_email' type='text' name='Email' value='<?php echo $_POST["Email"]?>'><br/>
        <label for='_phone'>Phone:</label>         
        <input id='_phone' type='text' name='Phone' value='<?php echo $_POST["Phone"]?>'><br/>
        <br/>
        <input type='submit' value='Submit'>
    </form>
</body>
</html>