<?php
namespace Tests\Unit;
use Tests\TestCase;
use App\Services\UtilityService;

class UtilityServiceTest extends TestCase
{
    public function test_count_words_valid()
    {
        $svc = new UtilityService();
        $result = $svc->countWords("My name is Salamanden");
        $this->assertEquals(4, $result);
    }

    public function test_count_words_multiple_spaces()
{
    $svc = new UtilityService();
    $result = $svc->countWords("halo     dunia     luas");
    $this->assertEquals(3, $result);
}

    public function test_count_words_empty()
    {
        $svc = new UtilityService();
        $result = $svc->countWords("");
        $this->assertEquals(0, $result);
    }

    public function test_km_to_miles_valid()
    {
        $svc = new UtilityService();
        $result = $svc->kilometersToMiles(10);
        $this->assertEquals(6.2, $result);
    }

    public function test_km_to_miles_invalid()
    {
        $svc = new UtilityService();
        $result = $svc->kilometersToMiles("sebelas");
        $this->assertEquals("Input tidak valid", $result);
    }

public function test_km_to_miles_zero()
{
    $svc = new UtilityService();
    $result = $svc->kilometersToMiles(0);
    $this->assertEquals(0, $result);
}

public function test_sha256_digest()
{
    $svc = new UtilityService();
    $result = $svc->sha256Digest("abc");
    $this->assertEquals(hash('sha256', 'abc'), $result);
}



public function test_md5_digest_changes()
{
    $svc = new UtilityService();
    $hash1 = $svc->md5Digest("abc");
    $hash2 = $svc->md5Digest("abcd");

    $this->assertNotEquals($hash1, $hash2);
}


    public function test_is_even_valid()
    {
        $svc = new UtilityService();
        $this->assertTrue($svc->isEven(10));
        $this->assertFalse($svc->isEven(7));
    }

    public function test_reverse_string()
    {
        $svc = new UtilityService();
        $result = $svc->reverseString("abc");
        $this->assertEquals("cba", $result);
    }


    public function test_calculate_square()
    {
        $svc = new UtilityService();
        $result = $svc->calculateSquare(5);
        $this->assertEquals(25, $result);
    }

 
    public function test_is_palindrome()
    {
        $svc = new UtilityService();
        $this->assertTrue($svc->isPalindrome("level"));
        $this->assertTrue($svc->isPalindrome("Kasur rusak"));
        $this->assertFalse($svc->isPalindrome("hello"));
    }

 
    public function test_get_first_word()
    {
        $svc = new UtilityService();
        $result = $svc->getFirstWord("Halo dunia luas");
        $this->assertEquals("Halo", $result);
    }

 public function test_is_even_invalid_input()
{
    $svc = new UtilityService();
    $this->assertEquals("Input tidak valid", $svc->isEven("abc"));
}

public function test_reverse_string_empty()
{
    $svc = new UtilityService();
    $this->assertEquals("", $svc->reverseString(""));
}

public function test_calculate_square_negative()
{
    $svc = new UtilityService();
    $this->assertEquals(16, $svc->calculateSquare(-4));
}

public function test_is_palindrome_case_insensitive()
{
    $svc = new UtilityService();
    $this->assertTrue($svc->isPalindrome("Level"));
}


public function test_get_first_word_only_spaces()
{
    $svc = new UtilityService();
    $this->assertEquals("", $svc->getFirstWord("     "));
}

public function test_sha256_length()
{
    $svc = new UtilityService();
    $this->assertEquals(64, strlen($svc->sha256Digest("abc")));
}


}
