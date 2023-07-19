<?php 
class Auth
{
    public $user;
    public $pass;
    private static $cookie_user_name = 'USER';
    private static $cookie_pass_name = 'PASS';
    private static $post_user_name = 'user';
    private static $post_pass_name = 'password';

    private static $login_db = ['gabmagnus' => 'Coxinha0604',
                                'gremio2' => 'efvxVe93oqQb2mF',
                                'eumesmo' => 'KmljK!UCegOJuSN',
                                'jose' => 'R2GiEl6l4qZo6Rc'];

    
    public function logoutCleaner() {
        
        if (isset($_POST['logout'])) {
            if (isset($_COOKIE[self::$cookie_user_name])) {
                unset($_COOKIE[self::$cookie_user_name]);
                setcookie(self::$cookie_user_name, '', time() - 3600, '/');
            }
    
            if (isset($_COOKIE[self::$cookie_pass_name])) {
                unset($_COOKIE[self::$cookie_pass_name]);
                setcookie(self::$cookie_pass_name, '', time() - 3600, '/');
            }

            $this->pass = null;
            $this->user = null;
        } 
    }

    public function cookiePasswordCheck()
    {
        if (isset($_COOKIE[self::$cookie_pass_name])) {
            if (isset($_POST['submit'])) {
                $this->pass = $_POST[self::$post_pass_name];
            } else {
                $this->pass = $_COOKIE[self::$cookie_pass_name];
            }
        } else {
            if (isset($_POST['submit'])) {
                $this->pass = $_POST[self::$post_pass_name];
            } else {
            }
        }
    }


    public function cooieUserChecker()
    {
        if (isset($_COOKIE[self::$cookie_user_name])) {
            if (isset($_POST['submit'])) {
                $this->user = $_POST[self::$post_user_name];
            } else {
                $this->user = $_COOKIE[self::$cookie_user_name];
            }
        } else {
            if (isset($_POST['submit'])) {
                $this->user = $_POST[self::$post_user_name];
            } else {
            }
        }
    }

    public function loginAuth()
    {
        if ($this->user != null && $this->pass != null) {
            $userlwrcase = strtolower($this->user);
            $logindb = $this::$login_db;
            if (array_key_exists($userlwrcase, $logindb)) {
                if ($logindb[$userlwrcase] == $this->pass) {
                    if (isset($_POST['cookie-checker'])) {
                        setcookie('USER', $userlwrcase, time() + (60*60*24*30), '/');
                        setcookie('PASS', $logindb[$userlwrcase], time() + (60*60*24*30), '/');
                    }
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }   
        } else {
            return false;
        }
    }
}


?>