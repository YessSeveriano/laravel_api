<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{ 
            $users=User::all();
    return response()->json(['status'=>true,'users'=>$users,200]);
}
catch(\Exception $e){
    return response()->json(['status'=>false, 'message'=>'Error internal server'], 500);
}
       
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
        //Crea un usuario
        //Validamos que los datos pasen 
        $validator= Validator::make($request->all(),[
            'name'=>'required',
            'email' =>'required|email',
            'password' =>'required|min:6'
        ]);
        if($validator->fails()){
            return response()->json(['status'=>false,'message'=>$validator->errors(),422]);
        }
        try{
            $user= User::create($request->all());
            return response ()->json(['status'=>true,'message'=>'User created successfully', 'user'=>$user],201);
        }
        catch (\Exception $e){
            return response ()->json(['status'=>false,'message'=>'Error Internal Server'],201);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
