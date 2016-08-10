<?php

// __DIR__ is a *magic constant* with the directory path containing this file.
// This allows us to correctly require_once Model.php, no matter where this file is being required from.
require_once __DIR__ . '/Model.php';

class User extends Model
{
    /** Insert a new entry into the database */
    protected function insert()
    {   
        // @TODO: Use prepared statements to ensure data security
        $sql= 'INSERT INTO users (name, password, email)
            VALUES (:name, :password, :email)';
        $stmt = self::$dbc->prepare($sql);
        $this->execute($stmt);
        $this->attributes['id'] = self::$dbc->lastInsertId();
       
    }

    /** Update existing entry in the database */
    protected function update()
    {
        // @TODO: Use prepared statements to ensure data security
        $sql= 'UPDATE users SET (name = :name, password = :password, email = :email)
            WHERE id = :id';
        $stmt = self::$dbc->prepare($sql);
        $this->execute($stmt);
        
    }

    private function execute($stmt)
    {
        //Duplicate code from insert/update methods moved more cleaner code base.
        $stmt->bindValue(':name', $this->attributes['name'], PDO::PARAM_STR);
        $stmt->bindValue(':password', $this->attributes['password'], PDO::PARAM_STR);
        $stmt->bindValue(':email', $this->attributes['email'], PDO::PARAM_STR);
        $stmt->execute();
        
    }

    /**
     * Find a single record in the DB based on its id
     *
     * @param int $id id of the user entry in the database
     *
     * @return User An instance of the User class with attributes array set to values from the database
     */
    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();

        // @TODO: Create select statement using prepared statements
        $sql= 'SELECT * FROM users WHERE id = :id';
        $stmt = self::$dbc->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        // @TODO: Store the result in a variable named $result
        $didExec = $stmt->execute();
        if ($didExec)
        {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        // The following code will set the attributes on the calling object based on the result variable's contents
        $instance = null;
        if ($result) 
        {
            $instance = new static($result);
        }
        return $instance;
    }

    /**
     * Find all records in a table
     *
     * @return User[] Array of instances of the User class with attributes set to values from database
     */
    public static function all()
    {
        self::dbConnect();
        $sql = 'SELECT * FROM users';
        $stmt = self::$dbc->prepare($sql);
        $didExec = $stmt->execute();
        if ($didExec)
        {
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $result;
        // @TODO: Learning from the find method, return all the matching records
    }
    public static function delete($id)
    {
        self::dbConnect();
        $sql = 'DELETE FROM users WHERE id = :id';
        $stmt = self::$dbc->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
}
