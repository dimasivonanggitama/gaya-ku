<?php
	class UserModel extends Koneksi {
		public function selectAll() {
			return $this->mysqli->query("SELECT * FROM user");
		}

		public function selectById($username) {
			return $this->mysqli->query("SELECT * FROM user where username = '$username'");
		}
		
		public function selectBySomething($something, $username) {
			return $this->mysqli->query("SELECT * FROM user where $something = '$username'");
		}

		public function selectOnlyRealName($username) {
			return $this->mysqli->query("SELECT namaLengkapUser FROM user WHERE username = '$username'");
		}

		public function login($username, $password) {
			return $this->mysqli->query("SELECT * FROM user where username = '$username' AND password = '$password'");
		}

		public function delete($username) {
			return $this->mysqli->query("DELETE FROM user WHERE username = '$username'");
		}

		public function update($username, $password, $namaLengkapUser, $tanggal_lahir, $hp, $email, $namaToko) {
			return $this->mysqli->query("UPDATE user SET username = '$username', password = '$password', namaLengkapUser = '$namaLengkapUser', tanggal_lahir = '$tanggal_lahir', hp = '$hp', email = '$email', namaToko = '$namaToko' WHERE username = '$username'");
		}

		public function insert($username, $password, $namaLengkapUser, $tanggal_lahir, $hp, $email) {
			return $this->mysqli->query("INSERT INTO user (username, password, namaLengkapUser, tanggal_lahir, hp, email) VALUES ('$username', '$password', '$namaLengkapUser', '$tanggal_lahir', '$hp', '$email')");
		}
	}