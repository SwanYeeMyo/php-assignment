<?php 
 $title = $body = "";
 $titleErr = $bodyErr = "";

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
    <div>
        <form action="assignment.php" method="POST" class="max-w-lg p-3 rounded-md mx-auto" >
        <div class="mb-5">
    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your title</label>
    <input type="text" id="title" name="title"  value="<?php echo $title  ?>"  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required />
    </div>
    <?php 
             if($titleErr){ ?>
                <span class="text-red-600" ><?php echo $titleErr;  ?> </span>
           <?php }
    ?>
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
        <textarea id="message"  name="body" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment...">
            <?php echo $body  ?>
        </textarea>
        <?php 
            if($bodyErr){ ?>
                <span class="text-red-600" ><?php echo $bodyErr  ?> </span>
           <?php }
        ?>
        <div class="flex item-center justify-center
        
        ">
            <input type="button" value="Submit" class="bg-black  text-white p-1 rounded-md" >
        </div>

    </form>
    </div>
</body>
</html>
