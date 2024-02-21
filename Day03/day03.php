
<?php
function testInput($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = $passwordErr = $confirmPasswordErr = "";
$name = $email = $gender = $comment = $website = $password = $confirmPassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['name'])) {
        $nameErr = "Name is required";
    } else {
        $name = testInput($_POST['name']);
        if (!preg_match("/^[a-zA-Z- ']*$/", $name)) {
            $nameErr = "Only Letters and white space allowed";
        }
    }
    if (empty($_POST['email'])) {
        $emailErr = "Email is required";
    } else {
        $email = testInput($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }

    }
    if (empty($_POST['gender'])) {
        $genderErr = "Gender is required";
    } else {
        $gender = testInput($_POST['gender']);
    }
    if (empty($_POST['comment'])) {
        $commentErr = "";
    } else {
        $comment = testInput($_POST['comment']);
    }
    if (empty($_POST['website'])) {
        $websiteErr = "Website is required";
    } else {
        $website = testInput($_POST["website"]);
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
            $websiteErr = "Invalid URL";
        }
    }
    if (empty($_POST["password"]) || (preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $_POST["password"]) === 0)) {
        $passwordErr = "Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit";
    } else {
        $password = $_POST["password"];
    }
    if (empty($_POST["confirm-password"]) || ($_POST['confirm-password'] !== $_POST['password'])) {
        $confirmPassword = "Password doesn't match";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class=" mx-auto">
        <form class="max-w-sm mx-auto" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>"   >
        <div>
        <div>
    <label for="username-error" class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500">Your name</label>
    <input name="name" type="text" value="<?php echo $name ?>" id="username-error" class=" <?php echo $nameErr ? 'border bg-red-50 border-red-500' : 'border  bg-gray-50' ?>  text-sm rounded-lg block w-full p-2.5">
    
    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
    <?php
if ($nameErr) {?>
      <span class="font-medium">Oops!</span> <?php echo $nameErr ?></p></span>
      <?php }
?>

        Email : <input value="<?php echo $email; ?>" class="border  border-gray-800  rounded-md" type="text" name="email" >
        <span class="error">* <?php echo $emailErr; ?> </span>
        </div>
        <div>
        Webiste : <input value="<?php echo $website ?>" class="border border-gray-800  rounded-md" type="text" name="website" >
        <span class="error">* <?php echo $websiteErr; ?> </span>
        </div>
        <div>
            <label for="">Comment</label><br>
        <textarea class="border border-gray-800  rounded-md"  name="comment" rows="4" cols="50">
            <?php echo $comment  ?>
        </textarea>
        <span class="error">* <?php echo $commentErr; ?> </span>

        </div>
        <div>
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">
        <span class="error">* <?php echo $genderErr; ?> </span>
        </div>
        <div>
            <Label for="password" >Password</Label>
            <input value="<?php echo $email ?>" type="text" class="border border-gray-800  rounded-md" name="password">
            <span class="error">* <?php echo $passwordErr; ?> </span>
        </div>
        <div>
            <Label for="password" >Confirm Password</Label>
            <input value="<?php echo $email ?>" type="text" class="border border-gray-800  rounded-md" name="confirm-password">
            <span class="error">* <?php echo $confirmPassword; ?> </span>
        </div>
        <input type="submit" name = "submit" value ="Submit" >
    </form>
    </div>
</body>
</html>