<?php

//code in controller

use Illuminate\Support\Facades\DB;
class user extends controller {
    public function update()
    {
        $affected = DB::update(
            'update users set votes = 100 where name = ?',
            ['Anita']
        );
    }
}
