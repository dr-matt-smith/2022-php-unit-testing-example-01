<?php
namespace TudublinTest;

use PHPUnit\Framework\TestCase;
use Tudublin\Author;

//--------------------------------------------
// type 1 tests = TYPE_1 = Constructor / Getters / Setters
//--------------------------------------------
class Type1_ConstructGetSetTest extends TestCase
{
    public function testTYPE_1_01_ConstructorCanCreateObject()
    {
        // Arrange
        $book = new Author('');

        // Act

        // Assert
        $this->assertNotNull($book);
    }

    public function testTYPE_1_02_GetNameAfterConstruction()
    {
        // Arrange
        $book = new Author('Matt Smith');
        $expectedResult = 'Matt Smith';

        // Act
        $result = $book->getName();

        // Assert
        $this->assertSame($expectedResult, $result);
    }

    public function testTYPE_1_03_GetNameAfterSetName()
    {
        // Arrange
        $book = new Author('some other name');
        $book->setName('Joe Murphy');
        $expectedResult = 'Joe Murphy';

        // Act
        $result = $book->getName();

        // Assert
        $this->assertSame($expectedResult, $result);
    }

}
