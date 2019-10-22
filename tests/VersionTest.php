<?php

namespace Tests;

class VersionTest extends TestCase
{
    /**
     * Test version endpoint.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->getJson('/version');

        $response->assertStatus(200);
        $response->assertExactJson([
            'version' => $this->app->version(),
        ]);
    }
}
