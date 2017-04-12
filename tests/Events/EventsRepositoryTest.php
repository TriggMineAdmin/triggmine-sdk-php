<?php 

/**
*  Corresponding Class to test EventsRepository class
*
*  @author TriggMine
*/
class EventsRepositoryTest extends PHPUnit_Framework_TestCase{
	
  /**
  * Just check if the EventsRepository has no syntax error 
  */
  public function testIsThereAnySyntaxError(){
	$var = new TriggMineSDK\Events\EventsRepository;
	$this->assertTrue(is_object($var));
	unset($var);
  }
  
  /**
  * Just check if the GetEventUrl has no syntax error 
  */
//   public function testGetEventUrl(){
// 	$var = new TriggMineSDK\Events\EventsRepository;
// 	$this->assertTrue($var->GetEventUrl("hey") == 'Hello World');
// 	unset($var);
//   }
  
}