<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Led;

class LedController extends Controller
{
    public function aanuit(){
        $led = led::all()->first();

        if ($led->led_on == 'uit'){
            $led->led_on = 'aan';
        } else{
            $led->led_on = 'uit';
        }

        $led->save();
        return redirect('/');
    }
}
