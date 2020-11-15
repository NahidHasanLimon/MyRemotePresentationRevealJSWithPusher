<?php
class Session{public static function init(){session_start();}
	 
	 public static function set($key, $val){
	 	$_SESSION[$key] = $val;
	 }

	 public static function get($key){
	 	if (isset($_SESSION[$key])) {
	 		return $_SESSION[$key];
	 	} else {
	 		return false;
	 	}
	 }

	 public static function checkAdminOrUserLogin(){
	 	self::init();
	 	if (self::get("login") == true) {
	 		if (self::get("adminLogin") == true) {
	 			header("Location:/paradise/admin/index.php");
	 		}
	 		else if (self::get("employeeLogin") == true) {
	 			header("Location:/paradise/admin/employee/index.php");
	 		}
	 	}
	 }


	 public static function destroy(){session_destroy();header("Location:/paradise/admin/index.php");
	 }

	  public static function checkAdminSession(){
	 	self::init();
	 	if (self::get("adminLogin") == false) {self::destroy();header("Location:/paradise/admin/login.php");
	 	}
	 }
	 public static function checkEmployeeSession(){
	 	self::init();
	 	if (self::get("employeeLogin") == false) {
	 		self::destroy();
	 		header("Location:/paradise/admin/index.php");
	 	}
	 }
	 public static function unsetUser(){
	  // set("login",false);
	  unset($_SESSION['emp_id']);
	  unset($_SESSION['loggedRole']);
	  unset($_SESSION['last_name']);
	  
	 }
	  public static function unsetLoggedDetailsWithoutPhoto(){
	  	self::init();
	  unset($_SESSION['first_name']);
	  unset($_SESSION['last_name']);
	  unset($_SESSION['email']);
	  
	 }
	  public static function unsetLoggedDetailsWithPhoto(){
	  	self::init();
	  unset($_SESSION['first_name']);
	  unset($_SESSION['last_name']);
	  unset($_SESSION['email']);
	  unset($_SESSION['photo']);
	  
	 }
	  public static function checkAdminLogin(){
		 	self::init();
		 	if (self::get("adminLogin") == true) {
		 		header("Location:/paradise/admin/admin/index.php");
		 	}
		 	else{
		 		header("Location:/paradise/admin/index.php");
		 	}
		 } 
	  public static function checkAdminRolePermission(){
		 	// self::init();
		 	if (self::get("loggedRole") != 2 && self::get("loggedRole") !=3 ) {
		 		header("Location:/paradise/admin/admin/404.php");
		 	}
		 } 
		   public static function checkAdminRole_2_3_Permission(){
		 	// self::init();
		 	if (self::get("loggedRole") != 2 && self::get("loggedRole") !=3 ) {
		 		header("Location:/paradise/admin/admin/404.php");
		 	}
		 } 
		  public static function checkAdminRole_2_Permission(){
		 	// self::init();
		 	if (self::get("loggedRole") != 2 ) {
		 		header("Location:/paradise/admin/admin/404.php");
		 	}
		 } 
		 public static function checkAdmin_3_RolePermission(){
		 	// self::init();
		 	if (self::get("loggedRole") != 3 ) {
		 		header("Location:/paradise/admin/admin/404.php");
		 	}
		 } 
		 public static function checkAnyAdmin_RolePermission(){
		 	// self::init();
		 	if (self::get("loggedRole") != 2 && self::get("loggedRole") !=3 && self::get("loggedRole") !=1 ) {
		 		header("Location:/paradise/admin/404.php");
		 	}
		 }
}

?>