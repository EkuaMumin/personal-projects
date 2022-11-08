<?php

use PDOWrapper\Connection;

require('../includes/Connection.php');
$db = new Connection('localhost', 'jackofallfades', 'root', '');
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style2.css">

</head>
<body>

<div class="container">

   <div class="admin-product-form-container">

      <form action="addjob.php" method="post" enctype="multipart/form-data">
         <h3>add a new job</h3>
         <input type="text" placeholder="Enter job title" name="job_title" class="box">
         <input type="text" placeholder="Enter job qualifications" name="qualifications" class="box">
        <input type="textarea" placeholder="Enter job description" name="description" class="box">
       
         <input type="submit" class="btn" name="add_job" value="add job">
      </form>

   </div>

   <div class="product-display">
       <form action="admin_delete.php" method="post">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>Job Title</th>
            <th>Qualifications</th>
            <th>Job Description</th>
            <th>action</th>
         </tr>
         </thead>
         <?php
            $select = $db->query("SELECT * FROM JobProfile");
            foreach ($select as $row) {
         ?>
         <tr>
             <td><?php echo $row['JobTitle']; ?></td>
            <td><?php echo $row['JobField']; ?></td>
            <td><?php echo $row['Description']; ?>-</td>
            <td>
               <a href="admin_update.php?edit=<?php echo $row['JobID']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>

                <input type="hidden" name="deleteid" value="<?php echo $row['JobID']; ?>">
                  <button type ="submit"name="delete" class="btn" ><i class="fas fa-trash"></i> delete </button>
            </td>
         </tr>
      <?php } ?>
       </table></form>
   </div>

</div>


</body>
</html>