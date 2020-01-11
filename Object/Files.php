<?php

class Files
{
    public function displayContent($filename): bool
    { // the function is to display a file content and the return type is boolean 
        $result = true;
        try {
            echo "Read the Content of the file: $filename" . PHP_EOL;
            $content = file_get_contents($filename);
            echo "Displaying Content of the file: $filename" . PHP_EOL;
            echo $content;
        } catch (Exception $e) {
            $result = false;
        }
        return $result;
    }
}
$files1 = new Files();
$files1->displayContent("text.txt");
