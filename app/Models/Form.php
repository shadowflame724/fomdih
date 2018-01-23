<?php

namespace App\Models;


use Carbon\Carbon;

class Form
{
    private $userName;
    private $userTel;
    private $userEmail;
    private $text;
    private $userFile;
    private $createdAt;
    private $type;

    /**
     * @return mixed
     */
    public function getType()
    {
        if($this->type == 'request-form'){
            return 'Заявка';
        }elseif($this->type == 'tender-form'){
            return 'Тендер';
        }else{
            return '';
        }
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     *
     */
    public function setCreatedAt()
    {
        $this->createdAt = Carbon::now()->toFormattedDateString();
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getUserTel()
    {
        return $this->userTel;
    }

    /**
     * @param mixed $userTel
     */
    public function setUserTel($userTel)
    {
        $this->userTel = $userTel;
    }

    /**
     * @return mixed
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * @param mixed $userEmail
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getUserFile()
    {
        return $this->userFile;
    }

    /**
     * @param mixed $userFile
     */
    public function setUserFile($userFile)
    {
        $this->userFile = $userFile;
    }

}
