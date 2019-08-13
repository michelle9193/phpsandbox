<?php
    // Check for posted data
    // if(filter_has_var(INPUT_POST, 'data')){
    //     echo 'Data found';
    // } else {
    //     echo 'No data';
    // }

    if(filter_has_var(INPUT_POST, 'data')){
        $email = $_POST['data'];

        // Remove illegal characters 
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email.'<br>';

        if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
            echo 'Email is valid';
        } else {
            echo 'Email is not valid';
        }
    }
?>

<form method="post"action="<?php echo $_SERVER['PHP_SELF']; ?>" >
    <input type="text" name="data">
    <button type="submit">Submit</button>
</form>