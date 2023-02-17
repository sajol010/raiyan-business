<?php

namespace Tests\Unit;

use Carbon\Carbon;
use Tests\TestCase;

class TaxTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_tax_save()
    {
        $response = $this->post(route('tax.add'), [
            'phone'=>'217623',
            'nid'=>'286536712537',
            'building_name'=>'test',
            'holding_no'=>'test',
            'paying_year'=>Carbon::now(),
            'building_type'=>'test',
            'amount'=>100,
        ]);

        $response->assertCreated();
    }
}
