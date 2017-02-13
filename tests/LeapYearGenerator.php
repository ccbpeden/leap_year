<?php
    require_once "src/LeapYearGenerator.php";

    class LeapYearGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_checkLeapYear_false()
        {
            //Arange
            $test_LeapYearGenerator = new LeapYearGenerator;
            $input = 1993;

            //Act
            $result = $test_LeapYearGenerator->checkLeapYear($input);

            //Assert
            $this->assertEquals(false, $result);
        }
    }
?>
