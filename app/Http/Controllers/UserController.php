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

        $users = User::simplepaginate(4); //-> use the simplepaginate method
        return view('home', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adduser');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required |string |max:16',
            'email' => 'required |email',
            'city' => 'required |string',
            'age' => 'required |numeric'
        ],[
            'name.required' => 'Please enter your User Name is required !',
            'name.string' => 'Please enter User Name Character Only !',
            'name.max' => 'Please enter max 16 character Only !',
            'email.required' => 'Please enter your User Email is required!',
            'email.email' => 'Please enter your valid User Email !',
            'city.required' => 'Please enter your City !',
            'city.string' => 'Please enter City Name is Character Only !',
            'age.required' => 'Please enter your Age is required!',
            'age.integer' => 'Please enter Age is numeric Only !',
        ]);

       // use the method one 
            // $user = new User();
            // $user->name = $request->name;
            // $user->email = $request->email;
            // $user->city = $request->city;
            // $user->age = $request->age;
            // $user->save();

        // use the method two (mass assignment)
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'city' => $request->city,
                'age' => $request->age
            ]);

       return redirect()->route('user.index')->with('status','New User Added Successfully !');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $users = User::find($id);
        return view('viewuser',compact('users'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $users = User::find($user->id);
         return view('updateuser',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
       $validate = $request->validate([
            'name' => 'required |string | max:16',
            'email' => 'required |email',
            'city' => 'required |string',
            'age' => 'required |numeric'
        ],[
            'name.required' => 'Please enter your User Name is required !',
            'name.string' => 'Please enter User Name Character Only !',
            'name.max' => 'Please enter max 16 character Only !',
            'email.required' => 'Please enter your User Email is required!',
            'email.email' => 'Please enter your valid User Email !',
            'city.required' => 'Please enter your City !',
            'city.string' => 'Please enter City Name is Character Only !',
            'age.required' => 'Please enter your Age is required!',
            'age.integer' => 'Please enter Age is Numeric Only !',
        ]);

        // use the method one

            // $user = User::find($id); 
            // $user->name = $request->name;
            // $user->email = $request->email;
            // $user->city = $request->city;
            // $user->age = $request->age;
            // $user->save();
        
        // use the method two (mass assignment)
            $user = User::whereId($id)
                ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'city' => $request->city,
                    'age' => $request->age
            ]);

            return redirect()->route('user.index')->with('status','User Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
        // use the method One
            $user = User::find($id);
            $user->delete();
        
        // use the Where method
            // User::where('email','rani@gmail.com')->delete();
        // use the method two
            // User::destroy($id);
        //delete multiple data
            // User::destroy([7,8]);
            //User::destroy(7,8);

        // use the truncate method
            // User::truncate(); -> delete all data

        return redirect()->route('user.index')->with('status','User Data Deleted Successfully !');

    }
}
