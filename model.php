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

    public function delete($table,$where)
    {
        foreach ($where as $key => $value) {
            
            $con = "`$key` = '$value'";
        }


          $sql = "DELETE FROM `$table` WHERE $con";
          return $exe = $this->db->query($sql);
    }

    public function select_where(string $table,array $where)
    {
            foreach ($where as $key => $value) {
               $con = "`$key` = '$value'";
            }

        $sql = "SELECT * FROM `$table` WHERE $con";
        $exe = $this->db->query($sql);
        while($res = mysqli_fetch_object($exe))
        {

            $r[] = $res;

        }
        return $r;

    }


    public function update($table,$data,$where)
    {
        $set_value = "";
        foreach ($data as $key => $value) {
            $set_value = $set_value."`$key` = '$value' ,";
        }

        $set_value = rtrim($set_value,',');

         foreach ($where as $key => $value) {
               $con = "`$key` = '$value'";
            }

       // echo $set_value;

         $sql = "UPDATE `$table` SET $set_value WHERE $con";
         return  $exe = $this->db->query($sql);

    }


}




?>