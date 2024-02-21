<?php
$name = $email = $website = $gender = $comment = $password = $confirmPassword = "";
$nameErr = $emailErr = $websiteErr = $genderErr = $commentErr = $passwordErr = $confirmPasswordErr = "";

function testInput($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
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
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="container mx-auto ">
        <div class="mt-11 ">

            <?php
if (!empty($name) && !empty($email) && !empty($gender) && !empty($password) && empty($confirmPassword)) {?>
            <div class="flex justify-center items-center my-10">
                <div id="toast-simple"
                    class="flex items-center w-full max-w-xs p-4 space-x-4 rtl:space-x-reverse text-gray-500 bg-white divide-x rtl:divide-x-reverse divide-gray-200 rounded-lg shadow border border-green-400"
                    role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-green-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                    </svg>

                    <div class="ps-4 text-sm font-normal ">Login Success</div>
                </div>
            </div>
            <?php }
?>
            <form class=" shadow p-5 rounded-md max-w-lg mx-auto " method="POST"
                action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" class="">
                <h3 class="text-center text-3xl font-semibold font-mono ">Login Form</h3>
                <div class="mb-6">
                    <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 ">Name
                    </label>
                    <input name="name" value="<?php echo $name; ?>" type="text" id="default-input"
                        class="<?php echo $nameErr ? 'border bg-red-200 border-red-600' : 'bg-gray-50 border border-gray-300' ?>  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <?php
if ($nameErr) {?>
                    <span class="text-red-600 block ml-1">*<?php echo $nameErr ?></span>
                    <?php }
?>
                </div>
                <div class="mb-6">
                    <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 ">Email
                    </label>
                    <input name="email" value="<?php echo $email ?>" type="text" id="default-input"
                        class="<?php echo $emailErr ? 'border bg-red-200 border-red-600' : 'bg-gray-50 border border-gray-300' ?> text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <?php
if ($emailErr) {?>
                    <span class="text-red-600 block ml-1">*<?php echo $emailErr ?></span>
                    <?php }
?>
                </div>
                <div class="mb-6">
                    <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 ">Website
                    </label>
                    <input name="website" value="<?php echo $website ?>" type="text" id="default-input"
                        class="<?php echo $websiteErr ? 'border bg-red-200 border-red-600' : 'bg-gray-50 border border-gray-300' ?> text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <?php
if ($websiteErr) {?>
                    <span class="text-red-600 block ml-1">*<?php echo $websiteErr ?></span>
                    <?php }
?>
                </div>
                <div class="mb-6">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Your
                        comment</label>
                    <textarea id="message" rows="4" name="comment"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                        placeholder="Write your thoughts here...">
                        <?php echo $comment ?>
                    </textarea>
                </div>
                <div class="mb-6 flex justify-center items-center">
                    <input type="radio" <?php if (isset($gender) && $gender == "Male") {
    echo "checked";
}
?> name="gender" value="Male" class="w-4 h-4 mx-5 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">Male
                    <input type="radio" <?php if (isset($gender) && $gender == "Female") {
    echo "checked";
}
?> name="gender" value="Female"
                        class="w-4 h-4 mx-5 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">Female
                    <input type="radio" <?php if (isset($gender) && $gender == "Other") {
    echo "checked";
}
?> name="gender" value="Other" class="w-4 h-4 mx-5 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">other

                </div>
                <?php
if ($genderErr) {?>
                <span class="text-red-600 block ml-1">*<?php echo $genderErr ?></span>
                <?php }
?>

                <div class="mb-6">
                    <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 ">Password
                    </label>
                    <input name="password" value="<?php echo $password ?>" type="text" id="default-input"
                        class="<?php echo $passwordErr ? 'border bg-red-200 border-red-600' : 'bg-gray-50 border border-gray-300' ?> text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <?php
if ($passwordErr) {?>
                    <span class="text-red-600 block ml-1"><?php echo $passwordErr ?></span>
                    <?php }
?>
                </div>
                <div class="mb-6">
                    <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 ">Confirm Password
                    </label>
                    <input name="confirm-password" type="text" id="default-input"
                        class="<?php echo $confirmPassword ? 'border bg-red-200 border-red-600' : 'bg-gray-50 border border-gray-300' ?> text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <?php
if ($confirmPassword) {?>
                    <span class="text-red-600 block ml-1"><?php echo $confirmPassword ?></span>
                    <?php }
?>
                </div>
                <div class="flex items-center justify-center">
                    <input type="submit" name="submit" value="submit"
                        class="border p-1 border-blue-400 bg-blue-600 text-white rounded-md w-full hover:bg-gray-100 hover:text-black">
                </div>
            </form>

        </div>
    </div>
</body>

</html>