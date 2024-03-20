<?php
spl_autoload_register( function ( $class_name ) {
	include $class_name . '.php';
} );

$zoo = new Zoo();
$zoo->addAnimal( new Tiger( "Shirkan", 0, 300, 50, false, 10, 10 ) );
$zoo->addAnimal( new Tiger( "Sora", 0, 300, 50, true, 10, 10 ) );
$zoo->addAnimal( new Lion( "Mufasa", 0, 400, 100, false, 20, 20 ) );
$zoo->addAnimal( new Lion( "Namibi", 0, 390, 100, true, 20, 20 ) );
$zoo->addAnimal( new Rhino( "Henrik", 0, 1000, 400, false, 50 ) );
$zoo->addAnimal( new Rhino( "Amilia", 0, 990, 300, true, 50 ) );
// feed Animals
foreach ( $zoo->getAnimals() as $animal ) {
	while ( $animal->getWeight() < $animal->getMinWeight() ) {
		$animal->eat();
	}
}
