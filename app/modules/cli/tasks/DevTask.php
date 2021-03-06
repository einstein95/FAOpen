<?php
use FA\Phalcon\Cli\Task;
use Entity\User;
use Entity\Upload;

class DevTask extends Task
{
    /**
     * dev:deploy
     */
    public function deployAction()
    {
        if (FA_APPLICATION_ENV == "production")
            die('Not in a development environment!');

        // Create an admin user.
        $user = new User;
        $user->fromArray(array(
            'username'      => 'admin',
            'password'      => 'admin',
            'fullname'      => 'Local Administrator',
            'seeadultart'   => Upload::RATING_ADULT,
            'birthday'      => date('Y-m-d', strtotime('-21 years')),
            'regbdate'      => date('Y-m-d', strtotime('-21 years')),
            'email'         => 'info@furaffinity.net',
            'regemail'      => 'info@furaffinity.net',
            'access_level'  => User::LEGACY_ACL_ADMINISTRATOR,
        ));
        $user->save();

        $this->printLn('Local administrator account ("admin" / "admin") created!');
    }
}