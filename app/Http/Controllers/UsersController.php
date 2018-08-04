<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use DataTables;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function __invoke(Request $request)
    {
        
        $users = User::select(['id','name','email','address', 'created_at','updated_at']);
        $sort = $request->query('sort');
        
        $dataTables = DataTables::of($users);
        if ($sort) {
            //Todo need a better way to do this
            $sort = explode('|', $request->query('sort'));
           
            $dataTables->order(function($query) use ($sort) { $query->orderBy($sort[0], $sort[1]);});
        }

        return $dataTables->make();
    }
}