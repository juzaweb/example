<?php
/**
 * JUZAWEB CMS - Laravel CMS for Your Project
 *
 * @package    juzaweb/cms
 * @author     The Anh Dang
 * @link       https://juzaweb.com
 * @license    GNU V2
 */

namespace Juzaweb\Example\Tests\Feature;

use Juzaweb\Tests\TestCase;

class IndexTest extends TestCase
{
    public function testIndex()
    {
        $response = $this->get('/admin-cp/example');

        $response->assertStatus(200);
    }
}
