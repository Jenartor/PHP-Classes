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

