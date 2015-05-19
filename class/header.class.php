<?php

/*
 * Copyright (C) 2015 Jenartor
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
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
