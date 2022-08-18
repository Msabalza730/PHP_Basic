<?php

// Not use a '$'

// oldest version
define("name", "Maryori"); // Option 1, NOT can change value
echo name;

// Actual version
const Name = 'Mar'; // Option 2
echo Name;


// Predetermined Constants
// __LINE__        // number of lines
// __FILE__        // route and name file
// __DIR__         // dir file
// __FUNCTION__    // name function
// __CLASS__       // class name
// __TRAIT__       // trait name
// __METHOD__      // method name
// __NAMESPACE__   // name of actual space
// ClassName::class //name class qualified