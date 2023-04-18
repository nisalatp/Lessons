<?php
class DB{
    private static $server = 'localhost';
    private static $db = 'blogdb';
    private static $un = 'blogdb';
    private  static $pw = 'blogdb';

    public static function INSERT($qry)
    {
        $conn = new mysqli(self::$server, self::$un, self::$pw, self::$db);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        if ($conn->query($qry) === TRUE) {
            $conn->close();
            return TRUE;  
        } else {
            $conn->close();
           return $conn->error;
        }
        
    }

    public static function READ($qry)
    {
        $conn = new mysqli(self::$server, self::$un, self::$pw, self::$db);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $result = $conn->query($qry);
        $conn->close();

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }        
    }

    public static function UPDATE($table, $filter, $filter_value, $attribute, $new_value){

        $SQL = "UPDATE '".$table."' SET '".$attribute."' = '".$new_value."' WHERE '".$filter."' = '".$filter_value."'";




        
    }
}
?>