<?php

class Database {

	private static $dbh;
	private static $driver = 'mysql:dbname=exercises;host=127.0.0.1';
	private static $user = 'root';
	private static $pass	= '';
	private static $instance = null;

	private function __construct() {
		try {
			self::$dbh = new PDO(self::$driver, self::$user, self::$pass);
			self::$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$dbh->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
			self::$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		} catch (Exception $e) {
			die('An error has occured: ' . $e->getMessage());
		}
	}

	public static function getInstance() {
		if (self::$instance == null) {
			self::$instance = new self;
		}
		return self::$instance;
	}

	public function query($sql) {
		return self::$dbh->query($sql);
	}

	public function fetch() {
		return self::$dbh->fetch();
	}

	public function fetchAll() {
		return self::$dbh->fetchAll();
	}

}