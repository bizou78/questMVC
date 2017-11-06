<?php
/**
 * Created by PhpStorm.
 * User: bizou
 * Date: 26/10/17
 * Time: 22:28
 */
namespace Model;

class Quest {

    private $quest_id;
    private $quest_name;
    private $quest_course;
    private $quest_score;

    /**
     * @param mixed $quest_id
     */
    public function setQuestId($quest_id)
    {
        $this->quest_id = $quest_id;
    }

    /**
     * @param mixed $quest_name
     */
    public function setQuestName($quest_name)
    {
        $this->quest_name = $quest_name;
    }

    /**
     * @param mixed $quest_course
     */
    public function setQuestCourse($quest_course)
    {
        $this->quest_course = $quest_course;
    }

    /**
     * @param mixed $quest_score
     */
    public function setQuestScore($quest_score)
    {
        $this->quest_score = $quest_score;
    }

    /**
     * @return mixed
     */
    public function getQuestId()
    {
        return $this->quest_id;
    }

    /**
     * @return mixed
     */
    public function getQuestName()
    {
        return $this->quest_name;
    }

    /**
     * @return mixed
     */
    public function getQuestCourse()
    {
        return $this->quest_course;
    }

    /**
     * @return mixed
     */
    public function getQuestScore()
    {
        return $this->quest_score;
    }

}