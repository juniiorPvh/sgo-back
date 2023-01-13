<?php namespace App\Http\Controllers\API;

use App\Orquestra;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;

class OrquestraController extends BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orquestras = Orquestra::all();
        return $this->sendResponse($orquestras->toArray(), 'Orquestras retrieved successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();


        $validator = Validator::make($input, [
            'name' => 'required',
            'email' => 'required'
        ]);


        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }


        $product = Orquestra::create($input);


        return $this->sendResponse($product->toArray(), 'Orquestra created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orquestra = Orquestra::find($id);


        if (is_null($orquestra)) {
            return $this->sendError('Orquestra not found.');
        }


        return $this->sendResponse($orquestra->toArray(), 'Orquestra retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orquestra $orquestra)
    {
        $input = $request->all();


        $validator = Validator::make($input, [
            'name' => 'required',
            'email' => 'required'
        ]);


        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $orquestra->name = $input['name'];
        $orquestra->acronyms = $input['acronyms'];
        $orquestra->address = $input['address'];
        $orquestra->email = $input['email'];
        $orquestra->phone = $input['phone'];
        $orquestra->photo = $input['photo'];
        $orquestra->dt_end = $input['dt_end'];

        $orquestra->save();


        return $this->sendResponse($orquestra->toArray(), 'Orquestra updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orquestra $orquestra)
    {
        $orquestra->delete();

        return $this->sendResponse($orquestra->toArray(), 'Orquestra deleted successfully.');
    }

}