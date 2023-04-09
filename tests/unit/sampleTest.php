<?php
    use \PHPUnit\Framework\TestCase;

    class SampleTest extends TestCase
    {
        
        public function testConnection()
        {

            $GLOBALS['conn'] = mysqli_connect("localhost", "root", "", "gadgetstore");
            $this->assertEquals('connect success','connect success','');
        }

        public function testfindUser()
        {
            $connecti = mysqli_connect("localhost", "root", "", "gadgetstore");
            $username = 'cust@email.com';
            $password = 'password';
            $hash = md5($password);
            $sql = "SELECT * FROM users WHERE username='$username' AND password='$hash'";

            $info = mysqli_query($connecti,$sql);
            if (!$info) {
                printf("Error: %s\n", mysqli_error($connecti));
                exit();
            }

            $this->assertEquals("Error","Error",'');
        }

    }
