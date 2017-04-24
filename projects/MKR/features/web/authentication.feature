Feature: Use the admin dashboard
  In order to use admin dashboard features
  As an administrative user
  I need to be able to use the admin dashboard

  Background:
    Given there is an admin user "admin" with password "admin"
      | username | plain_password | enabled |
      | admin    | admin          | yes     |

    Scenario: Log in with username and password
      Given I am on "/login/"
      When I fill in the following:
        | Username | admin |
        | Password | admin |
      And I press "Sign in"
      Then I should be on "/login/../admin/admin.php"
      And I should see "Furniture"

      Scenario: Log in with bad credentials
        Given I am on "/login/"
        When I fill in the following:
          | Username | admin |
          | Password | bar   |
        And I press "Sign in"
        Then I should be on "/login/checklogin.php"
        And I should see "Vale kasutajatunnus või parool!"

        Scenario: Bypass login
          Given I am on "/login/"
          When I fill in the following:
            | Username | ' or 1-- |
            | Password | lolok    |
          And I press "Sign in"
          Then I should be on "/login/checklogin.php"
          And I should see "Vale kasutajatunnus või parool!"
