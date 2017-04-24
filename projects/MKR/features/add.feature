Feature: Product Admin Area
  In order to keep the data fresh
  As an admin user
  I need to be able to add/edit/delete products

  @javascript
  Scenario: Add to quantity
    Given I am on "/admin"
    When I press on "ELEMENDI_KLASS"
    And I wait 2
    Then I should see "Avaleht"