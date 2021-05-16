<?php 
include "../../config1.php";

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) {
		$titre = $_POST['titre'];
		$id = $_POST['id'];
		$matiere = $_POST['matiere'];
		$annee = $_POST['annee'];
		

		// write the update query
		$sql = "UPDATE `cours` SET `titre`='$titre',`matiere`='$matiere',`annee`='$annee' WHERE `id`='$id'";

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
	$sql = "SELECT * FROM `cours` WHERE `id`='$id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$titre = $row['titre'];
			$matiere = $row['matiere'];
			$annee = $row['annee'];
			$password  = $row['password'];
			$gender = $row['gender'];
			$id = $row['id'];
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