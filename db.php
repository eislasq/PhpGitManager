<?php
$DB = new PDO('sqlite:gitManager.sqlite3');

$DB->exec("CREATE TABLE IF NOT EXISTS users (
                    id INTEGER PRIMARY KEY, 
                    email TEXT, 
                    password TEXT,
                    activation_code TEXT)");