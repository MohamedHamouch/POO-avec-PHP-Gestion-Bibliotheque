# Gestion Bibliothèque avec POO en PHP

## 1. Qu’est-ce qu’une classe en POO et comment se crée-t-elle en PHP ?

Une classe est un modèle regroupant des propriétés (attributs) et des méthodes (comportements).

### Créer une classe :
```php
class Fruit {
  // code goes here...
}
```

### Exemple :
```php
class Car {
    public $brand;
    public $color;

    public function displayInfo() {
        echo "This car is a $this->brand in $this->color color.";
    }
}
```

---

## 2. Qu’est-ce qu’un objet et comment instancier un objet d’une classe ?

Les objets sont des instances concrètes créées à partir de cette classe. Ils représentent une entité concrète créée à partir du modèle (classe).

### Exemple :
```php
$myCar = new Car();

$myCar->brand = "Toyota";
$myCar->color = "Red";
```

---

## 3. Qu’est-ce qu’un attribut et comment le déclarer dans une classe PHP ?

Un attribut est une variable définie dans une classe, représentant une caractéristique de l’objet.

### Déclaration :
```php
class Car {
    public $brand;  // Attribut public
    private $engine; // Attribut privé
}
```

---

## 4. Qu’est-ce qu’une méthode et comment la définir dans une classe PHP ?

Une méthode est une fonction définie dans une classe, représentant une action ou un comportement.

### Définir une méthode :
```php
class Car {
    public function startEngine() {
        echo "Engine started.";
    }
}
```

---

## 5. Qu’est-ce que l’encapsulation et comment la mettre en œuvre dans PHP avec des getters et setters ?

L’encapsulation consiste à protéger les données en contrôlant leur accès à l’aide de modificateurs d’accès (private, protected, public). Les getters et setters permettent de lire et modifier les attributs privés.

### Exemple :
```php
class Car {
    private $brand;

    // Getter
    public function getBrand() {
        return $this->brand;
    }

    // Setter
    public function setBrand($brand) {
        $this->brand = $brand;
    }
}

$car = new Car();
$car->setBrand("Toyota");  // Modifie l'attribut privé
echo $car->getBrand();     // Lit l'attribut privé
```

---

## 6. Qu’est-ce que l’héritage en POO et comment une classe peut-elle hériter d’une autre en PHP ?

L’héritage permet à une classe d’utiliser les propriétés et méthodes d’une autre classe.

### Exemple :
```php
class Vehicle {
    public $type;

    public function describe() {
        echo "This is a $this->type.";
    }
}

class Car extends Vehicle {
    public $brand;

    public function describe() {
        echo "This is a $this->brand car.";
    }
}

$car = new Car();
$car->type = "vehicle";
$car->brand = "Toyota";
$car->describe(); // Affiche : This is a Toyota car.
```

---

## 7. Qu’est-ce que le polymorphisme et comment l’implémenter en PHP ?

Le polymorphisme permet d’utiliser une méthode commune avec un comportement différent selon la classe.

### Implémentations possibles :
- **Redéfinition de méthode (overriding)** : Une classe fille redéfinit une méthode de la classe parent.
- **Interfaces** : Une interface impose des méthodes à toutes les classes qui l’implémentent.

### Exemple de polymorphisme par redéfinition :
```php
class Animal {
    public function makeSound() {
        echo "Some generic sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Woof!";
    }
}

$dog = new Dog();
$dog->makeSound(); // Affiche : Woof!
