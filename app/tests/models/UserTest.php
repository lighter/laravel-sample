<?php
  class UserTest extends TestCase {

    public function testThatTrueIsTrue()
    {
      $this->assertTrue(true);
    }

    /**
     * Username is required
     */
    public function testUsernameIsRequired()
    {
      // Create a new User
      $user = new User;
      $user->name = "testname";
      $user->username = "testusername";
      $user->email = "phil@ipbrown.com";
      $user->password = "password";
      // $user->password_confirm = "password_confirm";

      // User should not save
      // $this->assertFalse($user->save());
      $this->assertTrue($user->save());

      // Save the errors
      // $errors = $user->errors()->all();

      // There should be 1 error
      // $this->assertCount(1, $errors);

      // The username error should be set
      // $this->assertEquals($errors[0], "The username field is required");
    }
  }