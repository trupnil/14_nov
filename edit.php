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

<?php include 'navbar.php';  ?>


<div class="container">
  <h2>Edit form</h2>

  <?php   foreach ($data as $key => $value) { ?>
  

  <form  method="POST"  >
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $value->users_email ?>" >
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pwd" value="<?php echo $value->users_password ?>" >
    </div>
     <div class="form-group">
      <label for="pwd">Hobbies:</label>
        <?php $hby = explode(',',$value->users_hobbies);
        //print_r($hby);

          ?>
      <input type="checkbox" name="chk[]" <?php if(in_array('cricket',$hby)) { echo "checked";  }    ?>  value="cricket"> CRICKET
      <input type="checkbox" name="chk[]" <?php if(in_array('pubg',$hby)) { echo "checked";  }    ?> value="pubg"> PUBG
      <input type="checkbox" name="chk[]" <?php if(in_array('snooker',$hby)) { echo "checked";  }    ?> value="snooker"> SNOOKER
    
    </div>
   
    <button type="submit" name="submit" class="btn btn-primary">UPDATE</button>
  </form>


  <?php   }  ?>

</div>

</body>
</html>
