
<?php

// Step 1: Define the PropertyInterface
interface PropertyInterface {
    public function setProperty($property, $value);  // Set the value of a property
    public function getProperty($property);         // Get the value of a property
}

// Step 2: Define the HomeInterface
interface HomeInterface {
    public function setHasApartment($bool);   // Set whether the home has an apartment
    public function getHasSociety();          // Get whether the home has society
}

// Step 3: Implement the PropertyInterface and HomeInterface in the Bunglow class
class Bunglow implements PropertyInterface, HomeInterface {
    private $properties = [];  // Associative array to store properties
    private $hasGarden;        // Boolean for garden property
    private $hasApartment;     // Boolean for apartment property
    private $hasSociety;       // Boolean for society property

    // Implement setProperty() from PropertyInterface
    public function setProperty($property, $value) {
        $this->properties[$property] = $value;
    }

    // Implement getProperty() from PropertyInterface
    public function getProperty($property) {
        if (isset($this->properties[$property])) {
            return $this->properties[$property];
        } else {
            return null;  // Property does not exist
        }
    }

    // Implement setHasApartment() from HomeInterface
    public function setHasApartment($bool) {
        $this->hasApartment = $bool;
    }

    // Implement getHasSociety() from HomeInterface
    public function getHasSociety() {
        return $this->hasSociety;
    }

    // Method to set whether the bunglow has a garden
    public function setHasGarden($bool) {
        $this->hasGarden = $bool;
    }

    // Method to get if the bunglow has a garden
    public function getHasGarden() {
        return $this->hasGarden;
    }

    // Display details of the bunglow (for testing purposes)
    public function displayDetails() {
        echo "Bunglow Details: <br>";
        echo "Has Garden: " . ($this->getHasGarden() ? 'Yes' : 'No') . "<br>";
        echo "Has Apartment: " . ($this->hasApartment ? 'Yes' : 'No') . "<br>";
        echo "Has Society: " . ($this->getHasSociety() ? 'Yes' : 'No') . "<br>";

        echo "Properties: <br>";
        foreach ($this->properties as $property => $value) {
            echo "$property: $value<br>";
        }
    }
}

// Step 4: Create a Bunglow object and set various properties
$bunglow = new Bunglow();

// Set properties using the setProperty method
$bunglow->setProperty('Size', '5000 sqft');
$bunglow->setProperty('Location', 'Green Valley');
$bunglow->setProperty('Number of Bedrooms', 5);

// Set additional attributes using the home interface
$bunglow->setHasApartment(true);
$bunglow->setHasSociety(true);
$bunglow->setHasGarden(true);

// Display details of the bunglow
$bunglow->displayDetails();

?>
