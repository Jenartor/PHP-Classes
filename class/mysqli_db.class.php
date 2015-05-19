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

    class DB extends mysqli{
        # The given Hostname
        var $dbhost;
        # The given Username
        var $dbuser;
        # The given Password
        var $dbpasswd;
        # The given Database
        var $dbdatbase;
        
        public function __construct($host, $user, $passwd, $database) {
            $this->dbhost = $host;
            $this->dbuser = $user;
            $this->dbpasswd = $passwd;
            $this->dbdatbase = $database;
            @parent::__construct($this->dbhost, $this->dbuser, $this->dbpasswd, $this->dbdatbase);
            if (mysqli_connect_errno()){
                printf("<h4>Connection failed: %s</h4>\n", mysqli_connect_error());
                exit();
            }
        }
        
        /**
         * Executes the given query
         * 
         * @access public
         * @param string $query the query to execute
         * 
         */
        public function do_query($query) {
            try {
                if (!$this->query($query)){
                    throw new Exception($this->error);
                }
            } catch (Exception $e) {
                print ($e->getMessage());
            }
        }
    }
