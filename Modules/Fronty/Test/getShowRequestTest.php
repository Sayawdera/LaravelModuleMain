<?php

namespace App\Modules\Fronty\Test;

use Illuminate\Foundation\Testing\{RefreshDatabase, WithFaker};
use Tests\TestCase;

class getShowRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_get_frontys_request(): void
    {
        $response = $this->get('/YOUR URI');

        $response->assertStatus(200);

    }
}
