<?php

class Link {
    public $link, $name;

    public function __construct ($link, $name) {
        $this->link = $link;
        $this->name = $name;
    }

    public function fire() {
        return HTML::link($this->link, $this->name);
    }
}
