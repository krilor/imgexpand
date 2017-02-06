<?php
//use PHPUnit\Framework\TestCase;

class ImgexpandTest extends PHPUnit_Framework_TestCase {



 function test_identify_classname_positive() {
   $obj = new ImgExpand();
   // replace this with some actual testing code
   $this->assertTrue( $obj->isExpandableImage( 'test imgexpand not is true' ) );
 }

 function test_identify_classname_negative() {
   $obj = new ImgExpand();
   // replace this with some actual testing code
   $this->assertFalse( $obj->isExpandableImage( 'test imgexpands not is true' ) );
 }
}

?>
