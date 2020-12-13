<?php

class DB
{
	public const TABLE_GOODS = 'goods';
	
	private static $instance;
	
	private static $config = [
		'host' => 'localhost',
		'user' => 'root',
		'pwd' => 'root',
		'DB' => 'dz4',
	];
	
	private $link;
	
	public static function getInstance()
	{
		if (self::$instance === null) {
			self::$instance = new self();
		}
		return self::$instance;
	}
	
	public function getTableDataCount($tableName)
	{
		try {
		return $this->link
		->query("SELECT COUNT(*) FROM {$tableName}")
		->fetchColumn();
		} catch (Throwable $e) {
			return "Фигня какая-то";
		}
		
	}
	
	
	public function getTableDataPart($tableName, int $from, int $limit)
	{
		try {
		return $this->link
		->query("SELECT * FROM {$tableName} LIMIT {$from}, {$limit}")
		->fetch_all(MYSQLI_ASSOC);
		} catch (Throwable $e) {
			return null;
		}
		
	}
	
	public function getTableData($tableName)
	{
		try {
		return $this->link
		->query("SELECT * FROM {$tableName}")
		->fetch_all(MYSQLI_ASSOC);
		} catch (Throwable $e) {
			return null;
		}
		
	}
	
	public function getById($tableName, $id)
	{
		try {
		return $this->link
		->query("SELECT * FROM {$tableName} WHERE id =" . $id)
		->fetch_assoc();
		} catch (Throwable $e){
			return null;
		}
	}
	
	private function __construct()
	{
		$this->link = mysqli_connect(
			self::$config['host'],
			self::$config['user'],
			self::$config['pwd'],
			self::$config['DB']
		);
		if ($this->link === false) {
			die ('Не удалось подклюиться в БД');
		}
	}
	private function __clone()
	{
		
	}
	
	private function __wakeup()
	{
		
	}
}
