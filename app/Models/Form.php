<?php

namespace App\Models;


use Carbon\Carbon;

class Form
{
    private $userName;
    private $userTel;
    private $userEmail;
    private $text;
    private $userFileName;
    private $userFilePath;
    private $userFileMime;

    /**
     * @return mixed
     */
    public function getUserFileName()
    {
        return $this->userFileName;
    }

    /**
     * @param mixed $userFileName
     */
    public function setUserFileName($userFileName)
    {
        $this->userFileName = $userFileName;
    }

    /**
     * @return mixed
     */
    public function getUserFilePath()
    {
        return $this->userFilePath;
    }

    /**
     * @param mixed $userFilePath
     */
    public function setUserFilePath($userFilePath)
    {
        $this->userFilePath = $userFilePath;
    }

    /**
     * @return mixed
     */
    public function getUserFileMime()
    {
        return $this->userFileMime;
    }

    /**
     * @param mixed $userFileMime
     */
    public function setUserFileMime($userFileMime)
    {
        $this->userFileMime = $userFileMime;
    }

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

}
