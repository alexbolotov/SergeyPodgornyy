<?php

namespace Model\Utils;

class Transaction
{
    const DB_CONNECTION_NAME = 'framework';

    public static function beginTransaction()
    {
        return self::getConnection(self::DB_CONNECTION_NAME)->beginTransaction();
    }

    public static function commitTransaction()
    {
        return self::getConnection(self::DB_CONNECTION_NAME)->commit();
    }

    public static function rollbackTransaction()
    {
        return self::getConnection(self::DB_CONNECTION_NAME)->rollBack();
    }

    private static function getConnection($name)
    {
        return \Model\Driver\Engine::getConnection($name);
    }
}
