<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = User::all(); // show the all users data
        // $users = User::find(3);  // use the find method to show the single data id->3 // ->return array 
        // $users = User::find(3,['email','name']); // return the array only email and name
        // $users = User::find([3,4],['email','name']); // return the 3,4 id email and name

        // use the count method
            //   $users = User::count();
        // use the min method
            //   $users = User::min('age');
        // use the max method
            //   $users = User::max('age');    
        // use the sum method
            // $users = User::sum('age');  
              
        //use the get method
            // $users= User::where('city','Delhi')->where('age','>',60)->get();
        // use the Where method
            // $users = User::where([
            //     ['city','Delhi'],
            //     ['age','>',50]
            // ])->get();
        //use the OrWhere method
            // $users = User::where('city','Delhi')->orWhere('age','>',50)->get();

        // use the where in method but use Count;
            //  $users = User::where('city','Delhi')->orWhere('age','>',50)->count();
            //  return $users;

        // use the where new method  ->whereColumn 
            // $users = User::whereCity('Delhi ')
            //             ->whereAge(52) 
            //             ->select('name','email as User Email') // rename the email column name
            //             // ->toRawSql();  // use the show sql query
            //             ->ddRawSql();  // use the show sql query
            //return $users;

        // use the First method (show the data in first)
            // $users = User::whereCity('Delhi')->first();
            // return $users;    


        // use the Not operator
             // $users = User::where('Age','<>',31)->get();
        // Use the WhereNot method
            // $users = User::whereNot('Age',31)->get();

        // use the WhereBetween method
             //  $users = User::whereBetween('Age',[40,60])->get();
        // use the WhereNotBetween method
            //   $users = User::whereNotBetween('Age',[40,60])->get();
        // use the WhereIn method
            // $users = User::whereIn('city',['Surat','Delhi'])->get();
        // use the WhereNotIn method
            // $users = User::whereNotIn('city',['Surat','Delhi'])->get();
            
        $users = User::all();
        return view('welcome', compact('users'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
