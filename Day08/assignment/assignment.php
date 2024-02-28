<?php
$title = $body = "";
$titleErr = $bodyErr = "";

require('sql.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['title'])) {
        $titleErr = 'Title is required';
    } else {
        $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
    }
    
    if (empty($_POST['body'])) {
        $bodyErr = 'Body is required';
    } else {
        $body = filter_var($_POST['body'], FILTER_SANITIZE_STRING);
    }
    if(!empty($_POST['title'] && !empty($_POST['body']) )){
        $query = $conn->prepare("INSERT INTO php_projects.form(title,body) VALUES (?,?)");
        $query->bind_param('ss',$title,$body,);
        $query->execute();
     
        
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
    <div>
        <form action="assignment.php" method="POST" class="max-w-lg p-3 shadow mt-16 rounded-md mx-auto">
            <h5 class="text-2xl text-center font-mono font-semibold">Login Form</h5>
            <div class="mb-5">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your title</label>
                <input type="text" id="title" name="title" value="<?php echo $title ?>" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="name@flowbite.com" />
                <?php if ($titleErr): ?>
                    <span class="text-red-600"><?php echo $titleErr; ?></span>
                <?php endif; ?>
            </div>
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
            <textarea id="message" name="body" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."><?php echo $body ?></textarea>
            <?php if ($bodyErr): ?>
                <span class="text-red-600"><?php echo $bodyErr; ?></span>
            <?php endif; ?>
            <div class="flex item-center justify-center my-5">
                <input type="submit" value="Submit" class="bg-black text-white p-2 rounded-md">
            </div>
        </form>
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-3 gap-5" >
                <?php
                $sql = "SELECT * FROM php_projects.form";
                $result = $conn->query($sql);
                if($result->num_rows > 0){ ?>
                  <?php  while($row = $result->fetch_assoc()){ ?>
                    <div class="shadow p-5 rounded-md my-5">
                    <div class="text-3xl mb-3"><?php echo  $row['title']  ?></div>
                    <div class="text-sm text-gray-400"><?php echo $row['body']  ?></div>

                    </div>
                  
                   <?php } ?>
              <?php  }
              $conn->close();
                ?>
            </div>
                    <?php   
                    if($result->num_rows == 0){
                        echo "<h4 class='text-xl font-mono my-5 text-center' >No Data for now !</h4>" ;
                    }
                    ?>
        </div>
    </div>
</body>
</html>
