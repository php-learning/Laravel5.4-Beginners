<?php

namespace Tests\Unit;

use App\Metier\MetierArticle;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);


    }

    public function testAddMetierArticleOK()
    {
        $metier = new MetierArticle();
        $countBegin = count($metier->all());
        $this->assertTrue($metier->add("zerty", "qerteghre"));
        $this->assertTrue($countBegin != $metier->all());
        $this->assertTrue(($countBegin + 1) == count($metier->all()));

    }

    public function testAddMetierArticleTitreNUll()
    {
        $metier = new MetierArticle();
        $this->assertFalse($metier->add(null, "qerteghre"));
    }
}
