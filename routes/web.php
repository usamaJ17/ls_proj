<?php

use App\Http\Controllers\ProfileController;
use App\Models\Event;
use App\Models\UserEvent;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



Route::get('/', function () {
    return redirect()->route('login');
})->name('home');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/event_register', function (Request $req) {
        $event = Event::where('type',$req->type)->first();
        return view('event_regestration')->with(compact('event'));
    });
    Route::get('/dashboard', function () {
        $user_events = UserEvent::where('user_id',auth()->user()->id)->get();
        return view('dashboard')->with(compact('user_events'));
    })->name('dashboard');
    Route::get('/seminar', function () {
        $cards = Event::all();
        return view('seminar')->with(compact('cards'));

    })->name('seminar');
    Route::post('/register_event',function(Request $req){
        $find_event = UserEvent::where('user_id',auth()->user()->id)->where('event_id',$req->event_id)->first();
        if($find_event){
            return redirect()->route('dashboard')->with('error', 'Event already registered by you.');
        }
        $event = new UserEvent();
        $event->user_id = auth()->user()->id;
        $event->event_id = $req->event_id;
        $event->save();
        return redirect()->route('dashboard')->with('success', 'Event registered successfully.');
    })->name('register_event');
});

require __DIR__.'/auth.php';
