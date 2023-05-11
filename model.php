<?php
class Model {
	// Property declaration, in this case we are declaring a variable or handeler that points to the database connection, this will become a PDO object
	public $dbhandle;
	
	// Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
	public function __construct()
	{
		// Set up the database source name (DSN)
		$dsn = 'sqlite:./db/test1.db';
		
		// Then create a connection to a database with the PDO() function
		try {	
			// Change connection string for different databases, currently using SQLite
			$this->dbhandle = new PDO($dsn, 'user', 'password', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    													PDO::ATTR_EMULATE_PREPARES => false,
														));
			// $this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// echo 'Database connection created</br></br>';
		}
		catch (PDOEXception $e) {
			echo "I'm sorry. I'm afraid I can't connect to the database!";
			// Generate an error message if the connection fails
        	print new Exception($e->getMessage());
    	}
	}
	
	public function dbCreateTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE reference (Id INTEGER PRIMARY KEY, website TEXT, d TEXT)");
			return "Model_3D table is successfully created inside test1.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	
	public function dbInsertData()
	{
		try{
			$this->dbhandle->exec(
			   "INSERT INTO reference (Id, website, d) 
				VALUES (1, 'https://www.w3schools.com/default.asp', '2023-5-2'); " .
				"INSERT INTO reference (Id, website, d) 
				VALUES (2, 'https://fancyapps.com/fancybox/getting-started/', '2023-5-2'); ".
				"INSERT INTO reference (Id, website, d) 
				VALUES (3, 'https://github.com/martinwh', '2023-5-3'); ".
				"INSERT INTO reference (Id, website, d) 
				VALUES (4, 'https://canvas.sussex.ac.uk/courses/23366/modules', '2023-4-12'); ".
				"INSERT INTO reference (Id, website, d) 
				VALUES (5, 'https://getbootstrap.com//', '2023-4-10'); ");			
			return "X3D model data inserted successfully inside test1.db";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbGetData(){
		try{
			// Prepare a statement to get all records from the Model_3D table
			$sql = 'SELECT * FROM reference';
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up an array to return the results to the view
			$result = null;
			// Set up a variable to index each row of the array
			$i=-0;
			// Use PDO fetch() to retrieve the results from the database using a while loop
			// Use a while loop to loop through the rows	
			while ($data = $stmt->fetch()) {
				// Don't worry about this, it's just a simple test to check we can output a value from the database in a while loop
				// echo '</br>' . $data['x3dModelTitle'];
				// Write the database conetnts to the results array for sending back to the view
				$result[$i]['Id'] = $data['Id'];
				$result[$i]['website'] = $data['website'];
				$result[$i]['d'] = $data['d'];
			
				//increment the row index
				$i++;
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		// Close the database connection
		$this->dbhandle = NULL;
		// Send the response back to the view
		return $result;
	}
	
	//Method to simulate the model data
	public function model3D_info()
	{
		return array(
			'model_1' => 'Coke Can 3D Image 1',
			'ic1' => 'c1',

			'model_2' => 'Coke Can 3D Image 2',
			'ic2' => 'c2',

			'model_3' => 'Coke Can 3D Image 3',
			'ic3' => 'c3',

			'model_4' => 'Coke Can 3D Image 4',
			'ic4' => 'c4',

			'model_5' => 'Sprite Bottle 3D Image 1',
			'is1' => 's1',

			'model_6' => 'Sprite Bottle 3D Image 2',
			'is2' => 's2',

			'model_7' => 'Sprite Bottle 3D Image 3',
			'is3' => 's3',

			'model_8' => 'Sprite Bottle 3D Image 4',
			'is4' => 's4',

			'model_9' => 'Dr Pepper Cup 3D Image 1',
			'id1' => 'd1',

			'model_10' => 'Dr Pepper Cup 3D Image 2',
			'id2' => 'd2'
			,

			'model_11' => 'Dr Pepper Cup 3D Image 3',
			'id3' => 'd3',

			'model_12' => 'Dr Pepper Cup 3D Image 4',
			'id4' => 'd4'
		);
	}
}
?>