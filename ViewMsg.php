<?php

declare(strict_types=1);

class ViewMsg
{

    private string $fname;
    private string $lname;
    private string $msg;
    private string $errMsg;

    /**
     * ViewMsg constructor.
     * @param string $fname
     * @param string $lname
     * @param string $msg
     * @param string $errMsg
     */
    public function __construct(string $fname, string $lname, string $msg, string $errMsg)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->msg = $msg;
        $this->errMsg = $errMsg;
    }
    //GETTERS

    /**
     * @return string
     */
    public function getFname(): string
    {
        return $this->fname;
    }

    /**
     * @return string
     */
    public function getLname(): string
    {
        return $this->lname;
    }

    /**
     * @return string
     */
    public function getMsg(): string
    {
        return $this->msg;
    }

    /**
     * @return string
     */
    public function getErrMsg(): string
    {
        return $this->errMsg;
    }

    //SETTER

    /**
     * @param string $errMsg
     */
    public function setErrMsg(string $errMsg): void
    {
        $this->errMsg = $errMsg;
    }

}

if (!isset($_POST["fname"])) {
    echo $errMsg = "<p class=\"bg-danger\">" . $errMsg = "Firs name is required!" . "</p>";
}

if (isset($_POST["fname"])) {
    echo $_POST["fname"] . "&nbsp;";
}

if (!isset($_POST["lname"])) {
    echo $errMsg = "<p class=\"bg-danger\">" . $errMsg = "Last name is required!" . "</p>";
}

if (isset($_POST["lname"])) {
    echo $_POST["lname"] . "<br>";
}

if (!isset($_POST["msgBox"])) {
    echo $errMsg = "<p class=\"bg-danger\">" . $errMsg = "Message is required!" . "</p>";
}

if (isset($_POST["msgBox"])) {
    echo $_POST["msgBox"];
}
