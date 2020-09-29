<?php

class ViewMsg {

    private string $title = "";
    private string $msg = "";
    private string $author = "";

    /**
     * ViewMsg constructor.
     * @param string $title
     * @param string $Date
     * @param string $msg
     * @param string $author
     */
    public function __construct(string $title, string $Date, string $msg, string $author)
    {
        $this->title = $title;
        $this->Date = $Date;
        $this->msg = $msg;
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->Date;
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
    public function getAuthor(): string
    {
        return $this->author;
    }




}