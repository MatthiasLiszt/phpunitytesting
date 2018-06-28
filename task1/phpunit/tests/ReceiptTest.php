<?php
namespace TDD\Test;
      // declare(strict_types=1);
      
use PHPUnit\Framework\TestCase; // imports PHPUnit core class called TestCase
use TDD\Receipt; // imports Receipt class
// Create Test Class

/*
* @covers TDD\Receipt
*/
class ReceiptTest extends TestCase {
  
  public function testTotal() {

      $Receipt = new Receipt(); // dummy object for testing    
      
      $input = [0, 2, 5, 8]; // put the inputs in its own array
      $output = $Receipt->total($input); 
      $this->assertEquals( // Built-in assertEquals() method for defining the test. It accepts three parameters
              3.75, // 1st param is expected value
              $output, // 2nd param is the $output variable
              'The average value should be 3.75' // 3rd param is a message displayed in case of failure
              );

  }


}

?>