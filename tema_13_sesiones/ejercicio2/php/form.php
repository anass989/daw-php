<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Ejercicio 2</title>
</head>
<body>
        
    <div class="form-wrapper">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <h1>Sign Up</h1>

            <label for="username">
                Enter your username: 
            </label>

            <input type="text" name="uid"  placeholder="" <?php if(isset($_POST['uid'])) {echo "value={$_POST['uid']}"; } ?>>
            <span class="error"><?php echo $errors['wrong_uid'];?></span>

            <label for="password">
                Enter your password: 
            </label>
            <input type="password" name="password">
            <span class="error"><?php echo $errors['wrong_password'];?></span>

            <label for="password-repeat">
                Repeat Password: 
            </label>
            <input type="password" name="password_repeat">
            <span class="error"><?php echo $errors['wrong_password_repeat'];?></span>

            <label for="password-repeat">
                Email: 
            </label>
            <input type="email" name="email" <?php if(isset($_POST['email'])) { echo "value={$_POST['email']}"; } ?>>
            <span class="error"><?php echo $errors['wrong_email'];?></span>

            <label for="gender">
                Gender:
                <input type="radio" name="gender" value="male" <?php if(isset($_REQUEST['gender']) && $_REQUEST['gender'] === 'male') { echo "checked"; } ?>> Male
                <input type="radio" name="gender" value="female" <?php if(isset($_REQUEST['gender']) && $_REQUEST['gender'] === 'female') { echo "checked"; } ?>> Female
                <input type="radio" name="gender" value="other" <?php if(isset($_REQUEST['gender']) && $_REQUEST['gender'] === 'other') { echo "checked"; } ?>> Other
            </label>
            <span class="error"><?php echo $errors['wrong_gender'];?></span>

            <label for="language">
                Language:
            </label>
            <select name="language">
                <option name="language" value="none"> Choose a Language </option>
                <option name="language" value="english" <?php if(isset($_REQUEST['language']) && $_REQUEST['language'] === 'english') { echo "selected"; } ?>>English</option>
                <option name="language" value="spanish" <?php if(isset($_REQUEST['language']) && $_REQUEST['language'] === 'spanish') { echo "selected"; } ?>>Spanish</option>
                <option name="language" value="portuguese" <?php if(isset($_REQUEST['language']) && $_REQUEST['language'] === 'portuguese') { echo "selected"; } ?>>Portuguese</option>
            </select>
            <span class="error"><?php echo $errors['wrong_language'];?></span>
            <span class="error"><?php echo $errors['error'];?></span>

            <input type="submit" name="submit" value="submit" class="btn">
            <input type="submit" name="submit" value="reset" class="btn">
        </form>
    </div>

</body>
</html>