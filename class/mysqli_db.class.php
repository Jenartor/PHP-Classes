<?php

/*
 * This file was created by Jenartor
 * Copyright (c) by Jenartor
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
