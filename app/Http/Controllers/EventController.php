<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\Request;

class EventController extends Controller
{
    // User Area Methods
    public function show()
=======
class EventController extends Controller
{
    public function show($id)
>>>>>>> 690d8aa (Selesai fitur CRUD Event sesuai Modul 5)
    {
        return view('event-detail');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function ticket()
    {
        return view('ticket');
    }
<<<<<<< HEAD

    // Admin Area Method
    public function indexAdmin()
    {
        return view('admin.events');
    }
}
=======
}
>>>>>>> 690d8aa (Selesai fitur CRUD Event sesuai Modul 5)
