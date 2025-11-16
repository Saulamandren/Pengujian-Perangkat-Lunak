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

    public function test_count_words_with_spaces()
{
    $svc = new UtilityService();
    $result = $svc->countWords("   hello world   ");
    $this->assertEquals(2, $result);
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

}
