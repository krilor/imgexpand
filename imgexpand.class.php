<?php

class ImgExpand {

  /**
   * Test if a string contains the imgexpand class
   *
   * @param string $str Text string that contains class
   *
   * @return boolean Returns True if the string contains the class, else False
   */
  public function isExpandableImage( $str ){
    return preg_match( "/ imgexpand /", $str ) == 1;
  }

}
