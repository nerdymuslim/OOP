<?php

class Files
{
    public $fileHandler; //to hold the file.
    public $fileName;
    public $fileSize;
    public $content; // to the content of the file
    public $fileFound; //boolean prop to see if the file is found or not
    //logical flow is to have constructor first and the the other methods and then the destructor
    public function __construct($filename)
    {
        $this->fileHandler = null;
        $this->fileFound = false;

        //check if the file exists
        if (file_exists($filename)) {
            //is this a file?
            if (is_file($filename)) {
                $this->fileFound = true;
            }
        }
        if ($this->fileFound) {
            //fopen you will need the filename and the mode you are opening it .
            /*
            mode	description
r   open for reading (The file must exist)
w	open for writing (creates file if it doesn't exist). Deletes content and overwrites the file.
a	open for appending (creates file if it doesn't exist)
r+	open for reading and writing (The file must exist)

            */
            $this->fileHandler = fopen($filename, "r");
            $this->filesize = filesize($filename);
        }
    }
    public function getContent()
    {
        //method gets the content 
        if ($this->fileFound) {
            //if file is found we can do something about it .
            //for fread you have two parameters one is the handler and the other is the filesize.
            $content = fread($this->fileHandler, $this->filesize);
            return $content . PHP_EOL;
        } else {
            return "No Files Found" . PHP_EOL;
        }
    }
    public function __destruct()
    {
        if ($this->fileFound) {
            fclose($this->fileHandler);
            echo "File is Closed";
        }
    }
}
$file = new Files("classwork.txt");
echo $file->getContent();
