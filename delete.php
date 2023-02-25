<?php

//code in controller
use Illuminate\Support\Facades\DB;
class user extends controller {
    public function index()
    {
        $deleted = DB::delete('delete from users where id = ? ' , [1]);

    }
}
