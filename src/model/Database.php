<?php
declare (strict_types = 1);
namespace Unc\Model;

class Database
{
    const DSN = 'mysql:host=localhost;dbname=unc';
    const USER = 'root';
    const PASSWORD = '';
    private static $db = null;

    public static function getDb(): PDO
    {
        if (self::$db === null) {
            self::$db = new PDO(self::DSN, self::USER, self::PASSWORD);
        }

        return self::$db;
    }
}