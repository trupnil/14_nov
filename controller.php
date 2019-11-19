 <?php 
require 'model.php';

 class controller extends Model
 {
 	public function __construct()
 	{
 		parent::__construct();
 		// echo "<pre>";
 		// print_r($_SERVER['PATH_INFO']);
 		if($_SERVER['PATH_INFO'] == '/registration')
 		{
 			if(isset($_POST['submit']))
 			{
 				$email = $_POST['email'];
 				$password = $_POST['pwd'];
 				$hobbies = implode(',',$_POST['chk']);
 				
 				$data = [

 					"users_email" => $email,
 					"users_password" => $password,
 					"users_hobbies" => $hobbies 

 				];

 				$table  = "users";

 				$this->insert($table,$data);
 			}

 			include 'reg.php';
 		}


 		if($_SERVER['PATH_INFO'] == '/showdata') 
 		{
 			$table = "users";
 			$data =  $this->select($table);
 			// echo "<pre>";
 			// print_r($data);
 			include 'showdata.php';

 		}

 		//delete start
 		if($_SERVER['PATH_INFO'] == '/delete') 
 		{

 			$id = $_GET['id'];
 			//echo $id;
 			$where = ["users_id" => $id ];
 			$del =  $this->delete("users",$where);
 			if($del)
 			{

 				echo "deleted";
 				header('location:showdata');

 			}
 			else
 			{
 				echo "ERROR";
 			}
 		}
 		//end delete
 		if($_SERVER['PATH_INFO'] == '/edit')
 		{

 			$id = $_GET['id'];
 			$where = ['users_id' => $id];
 			$data =  $this->select_where("users",$where);
 			//print_r($data);

 			if(isset($_POST['submit']))
 			{
 				$email = $_POST['email'];
 				$password = $_POST['pwd'];
 				$hobbies = implode(',',$_POST['chk']);
 				
 				$data = [

 					"users_email" => $email,
 					"users_password" => $password,
 					"users_hobbies" => $hobbies 

 				];

 				$table  = "users";

 				$update  =  $this->update($table,$data,$where);	
 				if($update)
 				{	
 					header('location:showdata');

 				}
 				else
 				{
 					echo "Error";
 				}



 			}

 			include 'edit.php';
 		}



 	}
 }


 $obj = new controller;


 ?>