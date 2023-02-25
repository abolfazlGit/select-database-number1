<?php

//code in controller

use Illuminate\Support\Facades\DB;
class user extends controller {
    public function index()
    {
        $results = DB::select('select * from users where id = :id', ['id' => 1]);
    }
}
