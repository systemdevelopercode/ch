<?php
//DATABASE SETTINGS

    //HOST
    $url='localhost';

    //MYSQL_USER
    $username='root';

    //MYSQL_PWD
    $password='';

    //CONNECT
    $conn=mysqli_connect($url,$username,$password,);

    //CHECK CONNECTION TO DATABASE SERVER
    if(!$conn){
        die('Could not Connect My mysqli:' .mysqli_error("Database Connection Error"));
    }
    
    //SELECT DATABASE
    mysqli_select_db($conn,"ch_training_z");

    /*
    class MySQLDBConnection{
        function __construct($server,$user,$pwd){
            $this.server=$server;
            $this.user=$user;
            $this.pwd=$pwd;
            $this.connection=null;
            $this.database="";
            $this.connected=False;
        }
        function connect(){
            //if not connected connect() and return connection else return connection
            if($this.connected=False){
                $this.connection=mysqli_connect($server,$user,$pwd);
                if($this.connection){
                    $this.connected=True
                    return  $connection;
                }         
            }
            else{
                return $this.connection
            }      
        }
        function select_database($database){
            $this.database=$database;
            if(this.connected)
            $status=mysqli_select_db($this.database)
        }
    }

    **/
	
?>