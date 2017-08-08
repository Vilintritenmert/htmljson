<?php

namespace App\Http\Controllers;

use App\Http\Requests\TabletSaveRequest;
use App\Tablet;
use Illuminate\Http\Request;

class NarcoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tablets = Tablet::paginate();

        if (request()->wantsJson()) {
            return response()->json($tablets, 200);
        } else {
            return view('narcos.index', array('tablets' => $tablets));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tablet = new Tablet;

        return View('narcos.edit', ['tablet' => $tablet]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TabletSaveRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(TabletSaveRequest $request)
    {
        $filtred_input           = array_only($request->all(), ['title', 'description', 'recipe', 'count', 'in_stock']);
        $filtred_input['recipe'] = array_key_exists('recipe', $filtred_input);

        $tablet = Tablet::create($filtred_input);

        if (request()->wantsJson()) {
            return response()->json($tablet, 201);
        } else {
            return response()->redirectToRoute('narcos.show', ['id' => $tablet->id])->with('message', 'Success Created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tablet = Tablet::findOrFail($id);

        if (request()->wantsJson()) {
            return response()->json($tablet, 200);
        } else {
            return View('narcos.show', ['tablet' => $tablet]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tablet = Tablet::findOrFail($id);

        return View('narcos.edit', array(
                'tablet' => $tablet
            )
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TabletSaveRequest|Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(TabletSaveRequest $request, $id)
    {
        $filtred_input           = array_only($request->all(), ['title', 'description', 'recipe', 'count', 'in_stock']);
        $filtred_input['recipe'] = array_key_exists('recipe', $filtred_input);

        $tablet = Tablet::FindOrFail($id);
        $tablet->update($filtred_input);

        if (request()->wantsJson()) {
            return response()->json($tablet, 201);
        } else {
            return response()->redirectToRoute('narcos.show', ['id' => $tablet->id])->with('message', 'Updated');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tablet = Tablet::findOrFail($id);
        $tablet->delete();

        if (request()->wantsJson()) {
            return response()->json(['message' => 'Deleted'], 204);
        } else {
            return redirect()->route('narcos.index')->with('message','Deleted');
        }
    }
}
