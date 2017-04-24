<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @BeforeScenario
     *
     */
/*
    public function checkIfExists()
    {
        if (!exists('test')) {
            mkdir('test');
        }
        chdir('test');
    }*/

    /**
     * @Given there is an admin user :username with password :password
     */

    public function thereIsAnAdminUserWithPassword($username, $password)
    {

    }

}
