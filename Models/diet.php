<?php
	include_once __DIR__ . '/../inc/all.php';
/**
 * 
 */
class Food {
	
	public static function Blank()
	{
		return array('id'=>null,'Name'=>null,'Calories'=>null,'Fat'=>null,'Carbs'=>null,'Fiber'=>null,'Time'=>date(strtotime('tomorrow')));
	}
	
	public static function Get($id=null)
	{
		$sql = "	SELECT E.*, T.Name as T_Name
					FROM Food E 
		";
		if($id){
			$sql .= " WHERE E.id=$id ";
			$ret = FetchAll($sql);
			return $ret[0];
		}else{
			return FetchAll($sql);			
		}
	}
	
		static public function Save(&$row)
		{
			$conn = GetConnection();
			
			$row2 = escape_all($row, $conn);
			$row2['Time'] = date( 'Y-m-d H:i:s', strtotime( $row2['Time'] ) );
			if (!empty($row['id'])) {
				$sql = "Update Food
							Set Name='$row2[Name]', Calories='$row2[Calories]',
								Fat='$row2[Fat]', Carbs='$row2[Carbs]', Fiber='$row2[Fiber]', Time='$row2[Time]'
						WHERE id = $row2[id]
						";
			}else{
				$sql = "INSERT INTO Food
						(Name, Calories, Fat, Carbs, Fiber, Time, created_at, UserId)
						VALUES ('$row2[Name]', '$row2[Calories]', '$row2[Fat]', '$row2[Carbs]', '$row2[Fiber]', '$row2[Time]', Now(), 3 ) ";				
			}
			
			
			//my_print( $sql );
			
			$results = $conn->query($sql);
			$error = $conn->error;
			
			if(!$error && empty($row['id'])){
				$row['id'] = $conn->insert_id;
			}
			
			$conn->close();
			
			return $error ? array ('sql error' => $error) : false;
		}
		
		static public function Delete($id)
		{
			$conn = GetConnection();
			$sql = "DELETE FROM Food WHERE id = $id";
			//echo $sql;
			$results = $conn->query($sql);
			$error = $conn->error;
			$conn->close();
			
			return $error ? array ('sql error' => $error) : false;
		}
		
		static public function Validate($row)
		{
			$errors = array();
			if(empty($row['Name'])) $errors['Name'] = "is required";
			if(empty($row['Calories'])) $errors['Calories'] = "is required";
			
			if($row['Carbs'] >= 30) $errors['Carbs'] = "must be less than 30";
			if(empty($row['Carbs'])) $errors['Carbs'] = "is required";
			
			return count($errors) > 0 ? $errors : false ;
		}
}