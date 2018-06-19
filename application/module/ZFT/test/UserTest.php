<?php

namespace ZFTest;

use ZFT\User;

use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

class UserTest extends AbstractHttpControllerTestCase
{
    public function testCanCreateUserObject()
    {
        $user = new User();
        $this->assertInstanceOf(User::class, $user);
    }
}
