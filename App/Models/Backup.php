<?php
/**
 * Created by PhpStorm.
 * User: Floca
 * Date: 16/08/15
 * Time: 11:44
 */

namespace App\Models;


class Backup extends AppModel
{
    public function exportDB()
    {
        $output = "-- PHP MySQL Dump\n--\n";
        $output .= "-- Generated: " . date("r", time()) . "\n";
        $output .= "-- PHP Version: " . phpversion() . "\n\n";
        $output .= "SET SQL_MODE=\"NO_AUTO_VALUE_ON_ZERO\";\n\n";
        // get all table names in db and stuff them into an array
        $tables = array();
        $stmt = $this->bdd->query("SHOW TABLES");
        while($row = $stmt->fetch(\PDO::FETCH_NUM))
        {
            $tables[] = $row[0];
        }
        // process each table in the db
        foreach($tables as $table)
        {
            $fields = "";
            $sep2 = "";
            $output .= "\n-- " . str_repeat("-", 60) . "\n\n";
            $output .= "--\n-- Table structure for table `$table`\n--\n\n";
            // get table create info
            $stmt = $this->bdd->query("SHOW CREATE TABLE $table");
            $row = $stmt->fetch(\PDO::FETCH_NUM);
            $output.= $row[1].";\n\n";
            // get table data
            $output .= "--\n-- Dumping data for table `$table`\n--\n\n";
            $stmt = $this->bdd->query("SELECT * FROM $table");
            while($row = $stmt->fetch(\PDO::FETCH_OBJ))
            {
                if($fields == "")
                {
                    $fields = "INSERT INTO `$table` (";
                    $sep = "";
                    // grab each field name
                    foreach($row as $col => $val){
                        $fields .= $sep . "`$col`";
                        $sep = ", ";
                    }
                    $fields .= ") VALUES";
                    $output .= $fields . "\n";
                }
                $sep = "";
                $output .= $sep2 . "(";
                foreach($row as $col => $val)
                {
                    $val = addslashes($val);
                    $search = array("\'", "\n", "\r");
                    $replace = array("''", "\\n", "\\r");
                    $val = str_replace($search, $replace, $val);
                    $output .= $sep . "'$val'";
                    $sep = ", ";
                }
                $output .= ")";
                $sep2 = ",\n";
            }
            $output .= ";\n";
        }
        return $output;
    }
}