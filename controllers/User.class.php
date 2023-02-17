<?php
	class User extends Controller {
		private $mahasiswaModel;
		public function __construct() {
			$this->mahasiswaModel = $this->loadModel('UserModel');
		}

		public function create() {
			$this->loadView('create', array());
		}
		
		public function create_process() {
			session_start();
			echo isset($_SESSION['registrasi']);
			$username = $_POST['username'];
			$password = $_POST['password'];
			$namaLengkapUser = $_POST['namaLengkapUser'];
			$tanggal_lahir = $_POST['tanggal_lahir'];
			$hp = $_POST['hp'];
			$email = $_POST['email'];
			$this->mahasiswaModel->insert($username, $password, $namaLengkapUser, $tanggal_lahir, $hp, $email);
			header('Location: index.php');
		}

		public function selectOnlyRealName() {
    			session_start();
			$data = $this->mahasiswaModel->selectOnlyRealName($_SESSION['session_username']);
			$result = mysqli_fetch_row($data);
			$_SESSION['session_realname'] = implode($result);
			header("location: index.php");
		}

		public function login() {
    			session_start();
			$username = $_POST['usernameInput'];
			$password = $_POST['passwordInput'];
			$data = $this->mahasiswaModel->login($username, $password);
			$result = mysqli_num_rows($data);
			if($result > 0) {
    				$_SESSION['session_username'] = $username;
    				header("location: access.php?controller=User&function=selectOnlyRealName");
			} else {
    				$_SESSION['session_username'] = "failed!";
    				header("location: login.php");
			}
		}
		
		public function redirectToRead() {
			header("Location: access.php?controller=User&function=read");
		}
		
		public function readUser() {
			$data['query'] = $this->mahasiswaModel->selectAll();
			$this->loadView('readUser', $data);
		}

		public function search_member() {
 		   	session_start();
			$search = $_POST['searchbar_member'];
			$kategori = $_POST['select_kategori'];
			$data_result = $data['query'] = $this->mahasiswaModel->selectBySomething($kategori, $search);
			$result = mysqli_num_rows($data_result);
			if ($result == 0) {
				$_SESSION['result_search'] = "not found";
			} else {
				$_SESSION['result_search'] = $result;
			}
			$this->loadView('readUser', $data);
		}
		
		public function update() {
		}

		public function update_process() {
		}
		
		public function delete() {
			$username = $_GET['username'];
			$this->mahasiswaModel->delete($username);
			header('Location: access.php?controller=User&function=readUser');
		}
	}