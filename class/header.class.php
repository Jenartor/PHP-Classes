<?php

/*
 * This file was created by Jenartor
 * Copyright (c) by Jenartor
 */

    class header{
        var $title;
        public function __construct($title){
            $this->title = $title;
        }
        
        public function make_header() {
            echo    "<!DOCTYPE html>".
                    "<html>".
                        "<head>".
                            "<meta charset=\"UTF-8\">".
                            "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>".
                            "<title>".$this->title."</title>";
                        "</head>";                  
        }
    }
