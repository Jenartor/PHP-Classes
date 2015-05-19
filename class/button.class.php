<?php

/*
 * This file was created by Jenartor
 * Copyright (c) by Jenartor
 */
    class button{
        var $id;        
        var $name;
        var $title;
        var $css_class;
        var $action;
        var $button;
       
        public function __construct($id, $name, $title, $css_class="standard", $action="") {
            $this->id = $id;
            $this->name = $name;
            $this->title = $title;
            $this->css_class = $css_class;
            $this->action = $action;
        }
        
        public function draw_button() {
            $this->button = "<input type=\"submit\" id=\"".$this->id."\" name=\"".$this->name."\" class=\"".$this->css_class."\" onclick=\"".$this->action."\" value=\"".$this->title."\">";
            return $this->button;
        //    echo    "<input type=\"submit\" id=\"".$this->id."\" name=\"".$this->name."\" class=\"".$this->css_class."\" onclick=\"".$this->action."\" value=\"".$this->title."\">";
        }
    }

