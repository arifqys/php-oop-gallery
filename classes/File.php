<?php

class File {

    private $supportedFormats = ['image/png', 'image/jpeg', 'image/jpg', 'image/gif'];

    public function upload($image) {
        if (is_array($image)) {
            if (in_array($image['type'], $this->supportedFormats)) {
                move_uploaded_file($image['tmp_name'], 'img/' .$image['name']);
                echo ('<div class="alert alert-success" role="alert">File has been uploaded!</div>');
            }
            else {
                echo('<div class="alert alert-warning" role="alert">File format is not supported!</div>');
            }

        }
        else {
            echo('<div class="alert alert-warning" role="alert">No image is uploaded!</div>');
        }
    }
}

?>