<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $isView;

    /**
     * Controller constructor. Check Accept
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $accept = $request->header('Accept');

        $this->isView = ends_with($accept,'html');
    }


    /**
     * List info
     *
     * @return mixed
     */
    public function index()
    {
        $result = array();

        if($this->isView) {
            return view('welcome', $result);
        } else {
            return response()->json($result);
        }
    }


}
