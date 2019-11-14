<?php 

class Model
{
	public $db;
	public function __construct()
	{
		//echo "this is model";	
	$this->db = new mysqli("localhost","root","","mvc_14_nov"); 
    }

    public function insert($table,$data)
    {

    	//print_r($data);

    	$key = implode('`,`',array_keys($data));
    	//echo $key;
    	$val =  implode("','",array_values($data));

    	$sql = "INSERT INTO `$table` (`$key`) VALUES ('$val')";
    	return $this->db->query($sql);
    }

    public function select($table)
    {
    	$sql = "SELECT * FROM `$table`";
    	$ex =  $this->db->query($sql);
    	//mysqlifetch_object
    	//fetch_array
    	//fetch_assoc

    	while($res = mysqli_fetch_object($ex))
    	{
    		$r[] = $res;
    	}
    	return $r;


    }


}




?>