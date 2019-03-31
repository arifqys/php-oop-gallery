<?php

class Gallery {

    private $directory = 'img';
	private $files = array();

    public function load() {
        $directory = dir($this->directory);
        while ($item = $directory->read()) {
            if (strpos($item, '.')) {
                $this->files[] = $item;
            }
        }
        $directory->close();
    }

	public function render() {
		echo('<div class="row">');
		foreach ($this->files as $file) {
			$image = $this->directory .'/' .$file;
			echo('<div class="col-md-4"><div class="card"><img src="' .htmlspecialchars($image) .'" class="card-img-top"></div></div>');
		}
		echo('</div>');
	}

}