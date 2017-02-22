<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
include_once ~/db_connect/db_config.php;
include_once ~/db_connect/verify_password.php;
include_once ~/db_connect/delete_account.php;
include_once ~/db_connect/create_account.php;

final class BackendTest extends TestCase
{
    
    public function testVerifyPasswordReturnsTrueWhenCorrect(): void
    {
        $email = 'correct@test.com';
        $password = 'correctTest';
        createAccount($email, $password, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
        $result = verifyPassword($email, $password);
        deleteAccount($email);
        $this->assertEquals($result, true);
    }

    public function testVerifyPasswordReturnsFalseWhenIncorrect(): void
    {
        $email = 'incorrect@test.com';
        $correctPassword = 'correctTest';
        $incorrectPassword = 'incorrectTest';
        createAccount($email, $correctPassword, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
        $result = verifyPassword($email, $incorrectPassword);
        deleteAccount($email);
        $this->assertEquals($result, false);
    }
}
