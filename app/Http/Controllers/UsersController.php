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
       
        $sort = $request->query('sort');
        
        $dataTables = DataTables::of(User::query());
        if ($sort) {
            //Todo need a better way to do this
            $sort = explode('|', $request->query('sort'));
           
            $dataTables->orderColumn('name', 'email asc');#->orderColumn($sort[0], implode(' ', $sort));
        }

        return $dataTables->make();
    }
}