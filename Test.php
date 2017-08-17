<?php
class Test{
  public function testAutoPass(){
     for($i=0;$i<100;$i++){
    echo "$i\n";
    }
  }
}
$object1 = new Test();
$object1->testAutoPass();
?>
