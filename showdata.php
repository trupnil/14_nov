<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php  include 'navbar.php'; ?>
<div class="container">
  <h2>All users</h2>
            
  <table class="table">
    <thead>
      <tr>
        <th> Id </th>
        <th>Email</th>
        <th>Password</th>
        <th>Hobbies</th>
        <th> datetime </th>
        
      </tr>
    </thead>
    <tbody>
   <?php foreach ($data as $key => $value) { ?>
          
          <tr>
            <td> <?php echo $value->users_id ?> </td>
             <td> <?php echo $value->users_email ?> </td>
              <td> <?php echo $value->users_password ?> </td>
               <td> <?php echo $value->users_hobbies ?> </td>
                <td> <?php echo $value->datetime ?> </td>
          </tr>   

   <?php  }  ?>
     
    </tbody>
  </table>
</div>

</body>
</html>
