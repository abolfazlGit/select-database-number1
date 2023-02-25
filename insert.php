<?php

//code in controller

use Illuminate\Support\Facades\DB;
class user extends controller {
    public function index()
    {
        DB::insert('insert into users (id, name) values (?, ?)', [1, 'Marc']);

    }
}
