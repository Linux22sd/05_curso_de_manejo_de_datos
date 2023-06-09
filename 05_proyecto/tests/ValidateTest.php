<?php
use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase{
    public function test_email(){
        $email = Validate::email('alexloudog@hotmail.com');
        $this->assertTrue($email);
    }
    public function test_url(){
        $url = Validate::url('https://www.youtube.com/');
        $this->assertTrue($url);
    }
    public function test_password(){
        $password = Validate::password('Alex02_32');
        $this->assertTrue($password);
    }
}
?>