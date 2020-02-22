<?php
	include 'Database.php';
	include 'Session.php';
	Session::init();
	$table = "tbl_student";
	$db = new Database();

	if (isset($_REQUEST['action']) && !empty($_REQUEST['action'])) {
		if ($_REQUEST['action'] == 'add') {
			$studentData = array(
				'name' => $_POST['name'],
				'email' => $_POST['email'],
				'phone' => $_POST['phone']
			);
			$insert = $db->insert($table, $studentData);

			if ($insert) {
				$msg = "Data inserted Successfully";
			} else {
				$msg = "Data inserted Failed";
			}
			
			Session::set('msg', $msg);
			$home_url = '../index.php';
			header('Location: ' .$home_url); 

		} elseif ($_REQUEST['action'] == 'edit') {
			$id = $_POST['id'];
			if (!empty($id)) {
				$studentData = array(
					'name'  => $_POST['name'],
					'email' => $_POST['email'],
					'phone' => $_POST['phone']
				);
				$table 		= "tbl_student";
				$condition  = array('id' => $id);
				$update 	= $db->update($table, $studentData, $condition);

				if ($update) {
					$msg = "Data updated Successfully";
				}else {
					$msg = "Data updated Failed";
				}
				Session::set('msg', $msg);
				$home_url = '../index.php';
				header('Location: ' .$home_url); 
			}
		}elseif ($_REQUEST['action'] == 'delete'){
				$id = $_GET['id'];
				if (!empty($id)) {
					$table 		= "tbl_student";
					$condition  = array('id' => $id);

					$delete 	= $db->delete($table, $condition);

					if ($delete) {
						$msg = "Data deleted Successfully";
					}else {
						$msg = "Data deleteds Failed";
					}
					Session::set('msg', $msg);
					$home_url = '../index.php';
					header('Location: ' .$home_url); 
				}
		}
	}











	?>