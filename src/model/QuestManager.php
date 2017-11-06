<?php
/**
 * Created by PhpStorm.
 * User: bizou
 * Date: 26/10/17
 * Time: 22:28
 */

namespace Model;

class QuestManager {

    public function prepareGetAllQuests(){

        $statement = "SELECT * FROM quest";

        return $statement;

    }

}