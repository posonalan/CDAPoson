<?php

/* connexion a la base de donnée */
class DbConnect
{ 
	private static $db;
	public static function getDb()
	{
		return DbConnect::$db;
	}
	public static function init()
	{
		try {
			self::$db = new PDO('mysql:host=localhost;port=3306;dbname=CDAPoson;charset=utf8', 'root', '');
		} catch (Exception $e) {
			die('Erreur : ' . $e->getMessage());
		}
	}
}
