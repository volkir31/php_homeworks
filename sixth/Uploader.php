<?php

class Uploader
{

    protected string $field;
    protected bool $uploaded = false;

    public function __construct(string $fieldName)
    {
        $this->field = $fieldName;
    }

    /**
     * checks if the file is uploaded
     * @return object
     */
    public function isUploaded(): object
    {
        if(0 === $_FILES[$this->field]['error']) {
            $this->uploaded = true;
        }
        return $this;
//        return 0 === $_FILES[$this->field]['error'];
    }

    /**
     * save uploaded file to directory
     * @return bool
     */
    public function upload(): bool
    {
        if ($this->uploaded) {
            $name = $_FILES[$this->field]['name'];
            move_uploaded_file($_FILES[$this->field]['tmp_name'], __DIR__ . "/files/$name");
            return true;
        }
        return false;
    }
}

$a = new Uploader('file');
$a->isUploaded()->upload();
header('location: /php_homeworks/sixth/index2.php');
