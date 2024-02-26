    <?php
    $uploadOk = 0;
    date_default_timezone_set('Asia/Yangon');
    $time = date('h:i');
    $date = date('Y-M-D');
    if (isset($_POST['submit']) ) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
        // var_dump($target_file);
        $uploadOk = 1;
        //make jpg.png small
        $imgeFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // var_dump($imgeFileType);

        $check = getimagesize($_FILES['fileToUpload']['tmp_name']);

        // var_dump($check);
        if ($check !== false) {
            // echo "File is an image . " . $check['mime'] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image";
            $uploadOk = 0;
        }
        // check file size
        if ($_FILES['fileToUpload']['size'] > 500000) {
            echo "Sorry, Your file is too larage";
            $uploadOk = 0;
        }
        //allow certain fiile format
        if ($imgeFileType != "jpg" && $imgeFileType != "png" && $imgeFileType != "jpeg" && $imgeFileType != "gif"
        ) {
            echo " Sorry , only JPG,JPEG , PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        //check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry , your file was not uploaded . ";
        } else {
            if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
                $success =  "The file " . htmlspecialchars(basename($_FILES['fileToUpload']['name']) . "has been uploaded . ");
                $image = fopen('image_folder.txt', "a");
                //put data into txt
                fwrite($image, $target_file . "\n");
                fclose($image);
            } else {
                echo "Sorry There was an error uploading your file";
            }
        }
        //read the file first
    }if(isset($_POST['delete'])){
        fopen('image_folder.txt','w');
        $uploadOk = 2;
        $deleteMes = "Item has been deleted";
   
    }
    $imagesData = fopen('image_folder.txt', "r") or die('File not found');
        $images = [];
        //file shi tamay while loop pat
        while (!feof($imagesData)) {
            $images[] = fgets($imagesData);
        }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Day 05</title>
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body>
        <div class="container mx-auto">
        <?php  if($uploadOk === 1) { ?>
            <div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
        </svg>
        <span class="sr-only">Check icon</span>
    </div>
    <div class="ms-3 text-sm font-normal"><?php echo $success;  ?></div>
       <?php }elseif($uploadOk === 2) { ?>
        
        <div id="toast-danger" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
        </svg>
        <span class="sr-only">Error icon</span>
    </div>
    <div class="ms-3 text-sm font-normal"><?php echo $deleteMes; ?></div>
    
</div> <?php } ?>
    
</div>
     
            <form class="shadow p-5 my-3 rounded-lg max-w-lg mx-auto" action="upload.php" method="POST" enctype="multipart/form-data">
         <div class="flex justify-between">
         <h5 class="font-semibold font-mono text-right">Local Time : <?php echo $time;  ?></h5>
         <h5 class="font-semibold font-mono text-right">Date : <?php echo $date;  ?></h5>
         </div>
            <h5>Select image to upload </h5>
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="multiple_files">Upload  files</label>
    <input name="fileToUpload"    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="multiple_files" type="file" require >
        <input type="submit" value="Upload Image" name="submit" class="rounded-md border border-gray-200 p-2 bg-black text-white my-4" >

            </form>
        <div class="container mx-auto   ">
        
        <h4 class="text-center my-5">Display Uploaded Image</h4>
            <?php  if(count($images) > 0) { ?>
                <div class="mb-5">
                <form action="upload.php" method="POST">
                <input type="submit" name="delete" value="Delete all" class="border p-2 bg-red-500 text-white rounded-md" >

                </form>
             </div>
             <?php  }  ?>
             
            <div class="grid grid-cols-3 gap-3">
            <?php
                if(count($images) > 0) {
                    foreach ($images as $image) { ?>
                
                        <div class="max-w-sm  rounded-lg  dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                    <img class="rounded-t-lg" src="<?php echo $image; ?>" alt="" />
                    </a>
                   
                        </div>
            <?php } 
                } ?>
            
            </div>
            </div>
    </body>
    </html>
