<?php 
angular.module('myApp', ['ngAnimate']);

angular.module('myApp')
.controller('myController', function ($scope) {
  
  $scope.maincourse = [
    { 'id' :  1, 'category' : "Tuscan Tomato Bread Soup with Steameded Mussels", 'description' : "There are many versions of bread soup; this one, based on traditional peasant fare, is as thick as a bread pudding.",   'price' :   2.99, 'qty' : 1 },
    { id :  2, category : "Mushroom Risotto", description : "A plateful of buttery risotto with the goodness of mushrooms. A healthy bowl of mushroom risotto has benefits more than you can think.",   price :   2.99, qty : 1},
    { id :  3, category : "Gourmet Mushroom Risotto",   description : "Authentic Italian-style risotto cooked the slow and painful way, but oh so worth it. Complements grilled meats and chicken",     price :   6.99, qty : 1 },
    { id :  4, category : "Tender Italian Baked Chicken",   description : "Flavorful and moist baked chicken.",       price :  12.99, qty : 1 },
    { id :  5, category : "Pesto Pasta",        description : "Easy to make, but full of flavor! Good hot or cold.",          price :  1.95, qty : 1 },
    { id :  6, category : "Spinach Lasagna III",        description : "Fresh spinach and plenty of ricotta, Romano and mozzarella make this a cheesy and hearty dish. This lasagna ca",            price :  1.95, qty : 1 },
    { id :  7, category : "Spaghetti Aglio e Olio", description : "No two spaghetti aglio e olio recipes are alike, but this one is pretty true to the",  price :  1.28, qty : 1 },
    { id :  8, category : "Manicotti", description : "Delicious! Serve with a crispy salad and garlic bread, and you'll have a dish your family will love! The kids like to help",  price :  3.2, qty : 1 },
    { id :  9, category : "Tilapia Scaloppine",         description : "I often eat at Macaroni Grill and order their Pollo Scaloppine. I thought I mig",        price : 1.20, qty : 1 },
    { id : 10, category : "Prune and Olive Chicken",         description : "My version of chicken parmesan is a little different than what they do in the",        price : 2.2, qty : 1 },
    { 'id' : 11, 'category' : "Chicken Parmesan",         'description' : "A taste of the Mediterranean in one delicious baked chicken dish.",        'price' : 1.22, 'qty' : 2 }
  ];
  $scope.Starter = [
    { id :  1, category : "Oyster Mushrooms", description : "In this elegant salad, he tosses lightly sautéed oyster mushrooms with arugula and tops them with thin slices of prosciutto and Pecorino Toscano.",   price :   2.99, qty : 1 },
    { id :  2, category : "Crostini with Ricotta", description : "Figs and salami are assertive ingredients to pair together on a little crostini, yet the result is subtle, delicate and delicious.",   price :   2.99, qty : 1},
    { id :  3, category : "Stracciatella soup",   description : "Fresh parsley and lemon add extra zing to flavoursome chicken stock to produce a simple Italian soup",     price :   6.99, qty : 1 },
    { id :  4, category : "Sardines al saor",   description : "Grilled sardines, caramelised onions and toasted pine nuts are ready to be scooped up with slices of ciabatta bread ",       price :  12.99, qty : 1 },
    { id :  5, category : "Arancini cakes",        description : "Mixed with breadcrumbs and parmesan then fried to crisp perfection, these are a real midweek treat.",          price :  1.95, qty : 1 },
    { id :  6, category : "Burrata",        description : "Roasted tomatoes and a gorgeous ball of fresh, creamy burrata cheese is the taste of summer in a simple starter.",            price :  1.95, qty : 1 },
    { id :  7, category : "Russell’s asparagus", description : "Food writer Russell Norman finds his inspiration in Italy’s beautiful cities and this bruschetta recipe, with asparagus and mint, reflects everything he loves about Italian cuisine",  price :  1.28, qty : 1 }
  ];

   $scope.breakfast = [
    { id :  1, category : "Italian Brunch Torte", description : " breakfast bake with a salad of mixed greens and tomato wedges",   price :   2.99, qty : 1 },
    { id :  2, category : "Baked Eggs & Sausage", description : " robust casserole of eggs, Italian sausage and fire-roasted tomatoes in bowls with warm, crusty rolls spread with butter.",   price :   2.99, qty : 1},
    { id :  3, category : "Italian Cloud Eggs",   description : "Drop egg yolks on nests of whipped Italian-seasoned egg whites, then bake in a cast-iron skillet.",     price :   6.99, qty : 1 },
    { id :  4, category : "Veggie Sausage Strata",   description : "As a retired home economics teacher, I've made quite a few recipes through the years.",       price :  12.99, qty : 1 },
    { id :  5, category : "Calico Pepper Frittata",        description : " red and green peppers and use the stovetop instead of the oven.",          price :  1.95, qty : 1 },
    { id :  6, category : "Mascarpone-Mushroom Frittata Stack",        description : "delicious egg dish to the table, I always get oohs and aahs! It looks impressive but is quite easy to prepare.",price :  1.95, qty : 1 },
    { id :  7, category : "Frittata Florentine", description : "brunchy meals like this gorgeous Italian omelet. Lucky for us, it’s loaded with ingredients we tend to have at the ready.",  price :  1.28, qty : 1 }
  ];

   $scope.desert = [
    { id :  1, category : "Cotta with Blackberries", description : "This delicately sweet and tangy panna cotta from Top Chef winner Brooke Williamson is the perfect way to showcase plump summer fruits.",   price :   2.99, qty : 1 },
    { id :  2, category : "Strawberry Gelato", description : "To guarantee homemade gelato’s luscious consistency and purity of flavor, Jon Snyder suggests thickening gelato with cornstarch rather than eggs.",   price :   2.99, qty : 1},
    { id :  3, category : "Mixed-Nut-Milk Panna Cotta",   description : "These delicate custards are a great way to showcase the subtle, nutty flavor of homemade nut milk.",     price :   6.99, qty : 1 },
    { id :  4, category : "Chocolate-and-Pistachio Biscotti",   description : "Kevin Sbraga varies these wonderful nutty biscotti, sometimes dipping them in melted dark chocolate for an extra layer of flavor.",       price :  12.99, qty : 1 },
    { id :  5, category : "Fresh Blueberry Compote",        description : "Using sweet corn in a creamy, silky panna cotta makes for an unexpected and delicious summer dessert.",          price :  1.95, qty : 1 },
    { id :  6, category : "Pumpkin-Gingersnap Tiramisù",        description : "Pumpkin pie meets tiramisù, with layers of pumpkin-mascarpone custard and gingersnaps brushed with Calvados syrup.",price :  1.95, qty : 1 },
    { id :  7, category : "Creamy Rose Panna Cotta", description : "Erin Eastland’s supereasy and beautiful dessert isn’t just garnished with rose petals—it’s also accented with rose syrup.",  price :  1.28, qty : 1 }
  ];
  
  $scope.cart = [];
  
  var findItemById = function(items, id) {
    return _.find(items, function(item) {
      return item.id === id;
    });
  };
  
  $scope.getCost = function(item) {
    return item.qty * item.price;
  };

  $scope.addItem = function(itemToAdd) {
    var found = findItemById($scope.cart, itemToAdd.id);
    if (found) {
      found.qty += itemToAdd.qty;
    }
    else {
      $scope.cart.push(angular.copy(itemToAdd));}
  };
  
  $scope.getTotal = function() {
    var total =  _.reduce($scope.cart, function(sum, item) {
      return sum + $scope.getCost(item);
    }, 0);
    console.log('total: ' + total);
    return total;
  };
  
  $scope.clearCart = function() {
    $scope.cart.length = 0;
  };
  
  $scope.removeItem = function(item) {
    var index = $scope.cart.indexOf(item);
    $scope.cart.splice(index, 1);
  };
  
});
?>