<?php

class food{

    public function add(){

    }

    public static function fetch_type($db,$type){

        $sql ="SELECT food.* FROM food WHERE food.categories = :type";

        $stmt = $db->prepare($sql);
        $stmt->bindParam(':type', $type);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

?>