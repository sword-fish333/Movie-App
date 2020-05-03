<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ViewMoviesTest extends TestCase
{
    /**@test*/
    public function test_the_main_page_shows_correct_info(){

        $response=$this->get(route('movies.index'));
        $response->assertSuccessful();
        $response->assertSee('Popular movies');
    }
}
