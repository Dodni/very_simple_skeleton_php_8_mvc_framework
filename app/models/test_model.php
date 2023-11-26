<?php
class TestModel {
    
    public function connectToDatabase() {
        $connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        // Ellenőrzés, hogy a kapcsolat létrejött-e vagy sem
        if ($connection->connect_error) {
            echo "Sikertelen adatbáziskapcsolat: " . $connection->connect_error;
        } else {
            echo "Sikeresen kapcsolódva az adatbázishoz!";
        }

        // Var_dump a kapcsolat állapotával
        // var_dump($connection);

        // Visszatérési érték a kapcsolat állapotával
        return $connection;
    }
}
?>
