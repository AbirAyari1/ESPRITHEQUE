<?php 
include "../../config1.php";

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) {
		
		$id = $_POST['id'];
		$que = $_POST['que'];
		$option1 = $_POST['option1'];
		$option2 = $_POST['option2'];
		$option3 = $_POST['option3'];
		$option4 = $_POST['option4'];
		$ans = $_POST['ans'];
		$userans = $_POST['userans'];

		

		// write the update query
		$sql = "UPDATE `quizc` SET `id`='$id',`que`='$que',`option1`='$option1',`option2`='$option2',`option3`='$option3',`option4`='$option4',`ans`='$ans',`userans`='$userans' WHERE `id`='$id'";

		// execute the query
		$result = $conn->query($sql);

		if ($result == TRUE) {
			header("Location:ajout.php") ; 
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	// write SQL to get user data
	$sql = "SELECT * FROM `quizc` WHERE `id`='$id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$id = $row['id'];
		$que = $row['que'];
		$option1 = $row['option1'];
		$option2 = $row['option2'];
		$option3 = $row['option3'];
		$option4 = $row['option4'];
		$ans = $row['ans'];
		$userans = $row['userans'];

		}

	?>

		</body>
		</html>




	<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view.php page
		header('Location: view.php');
	}

}
?>