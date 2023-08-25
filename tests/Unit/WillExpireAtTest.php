<?php
use App\Helpers\TeHelper;
use Carbon\Carbon;

class WillExpireAtTest extends TestCase
{
    public function testWillExpireAtMethod()
    {
        // Define your sample input data
        $dueDate = Carbon::parse('2023-09-10 10:00:00');
        $createdAt = '2023-09-01 10:00:00';

        // Call the willExpireAt method
        $willExpireAt = TeHelper::willExpireAt($dueDate, $createdAt);

        // Define your expected result, depending on your logic
        $expectedResult = Carbon::parse('2023-09-09 10:00:00');

        // Assert that the result is as expected
        $this->assertEquals($expectedResult, $willExpireAt);
    }
}
