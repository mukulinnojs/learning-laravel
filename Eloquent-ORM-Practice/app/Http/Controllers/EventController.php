<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function addevent(Request $req)
    {

        $validated = $req->validate([
            'title' => 'required | string | max:255',
            'location' => 'required | string | max:255',
            'date' => 'required | date '
        ]);

        $title = $req->title;
        $location = $req->location;
        $date = $req->date;

        $res = Event::insert([
            'title' => $title,
            'location' => $location,
            'date' => $date
        ]);
        if ($res) {

            echo "Data added successfully";
        } else {
            return "Failed to save event";
        }
    }

    public function fetchevents()
    {
        $res = Event::all();
        if ($res) {
            return view('welcome', ['data' => $res]);
        }
    }

    public function deleteevent(string $id)
    {
        $res = Event::where('id', $id)->delete();
        if ($res) {
            return "Deleted Successfully";
        }
    }
    public function editevent(string $id)
    {
        $res = Event::find($id);

        if ($res) {
            // echo $res;
            return view('edit', ['data' => $res]);
        } else {
            return "Failed To fetch Product";
        }
    }
    public function updateevent(Request $req)
    {
        $validated = $req->validate(
            [
                'title' => 'required | string | max:255',
                'location' => 'required | string | max:255',
                'date' => 'required | date '
            ]
        );

        $id = $req->id;
        $title = $req->title;
        $location = $req->location;
        $date = $req->date;

        $res = Event::where('id', $id)->update(
            [

                'title' => $title,
                'location' => $location,
                'date' => $date
            ]
        );

        if ($res) {
            return redirect(url('/'));
        } else {
            return "Failed To update";
        }
    }

}
