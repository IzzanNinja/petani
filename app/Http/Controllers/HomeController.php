<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Petani;
// use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    // {
    //     //lazy loading code
    //     // $user = User::all();
    //     // $Petanis = Petani::get();
    //     // foreach($Petanis as $x => $Petani){
    //     //     echo $Petani->user->name . '<br>';
    //     // }

    //     //eager laoding code
    //     // $Petanis = Petani::with('user')->get();
    //     // dd();
    //     // return view('home', compact('Petanis'));
    // }
{
    $users = User::all();
    $Petanis =Petani::get();
    // dd($todolists); //just for trying

    // foreach ($todolists as $x =>$todolist) {
    //     echo $todolist ->user->name . '<br>'; // user is public function in Todolist.php showing the relationship
    // } dd(); //but this is lazy loading
        // $Petis = Petani::with('user') ->get();an
        // $Petanis = Petani::with('user')->orderBy('id, 'desc')->paginate(20);
        $Petanis = Petani::with('user')->orderBy('id', 'desc')->paginate(20);

        return view('home', compact('Petanis'));
    }

    public function create(){
            return view('petani.create');

    }

    public function store(Request $request){

    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'due_date' => 'bail|required|date'
    ]);


            // 'due_date.required' => 'Sila masukkan tarikh akhir',
            // 'due_date.date' => 'Sila semak jenis data'


    // public function view(Request $request){


        $loggedUser = Auth::user();

        $Petani = new Petani();
        $Petani->title = $request->title;
        $Petani->description = $request->description;
        $Petani->user_id = Auth::user()->id;
        $Petani->due_date = $request->due_date;
        $Petani->created_at = Carbon::now();
        // $Petani->created_by = $loggedUser->id;
        $Petani->save();

        return redirect()->route('home')->with('success', 'Anda telah berjaya');


    }

    public function edit($id){
    $Petani = Petani::find($id);
    $users = user::all();
    return view('Petani.edit', compact('Petani', 'users'));
}

public function update(Request $request)
{
    $loggedUser = Auth::user();
    $Petani = Petani::find($request->PetaniId);
    $Petani->title = $request->title;
    $Petani->description = $request->description;
    $Petani->user_id = $request->author;
    $Petani->due_date = $request->due_date;
    $Petani->updated_at = Carbon::now();
    $Petani->updated_by = $loggedUser->id;
    $Petani->save();
    return redirect()->route('home');
}
public function delete($id){
    $Petani = Petani::find($id);
    $Petani->delete();
    return redirect()->route('home');
}
}
