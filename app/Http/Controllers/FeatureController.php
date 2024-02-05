<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Validator;

use  App\Design\Patterns\Repositories\SingleFeatureInterface;
use  App\Design\Patterns\Repositories\SingleFeatureRepository;

class FeatureController extends Controller
{
    public $interface;
    public $repository;
    public function __construct(SingleFeatureInterface $interface, SingleFeatureRepository $repository)
    {
        $this->interface  = $interface;
        $this->repository = $repository;
    }

    public function form()
    {
        return view('admin.pages.form.single-feature');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'icon' => 'required',
            'title' => 'required',
            'description' => 'required',

        ]);

        if ($validator->fails()) {

           $messages = $validator->messages();

                foreach ($messages->all() as $message)
                {
                    toastr()->error ( $message, 'Error');
                }

             return redirect()->back()->withInput();
       }

       try{
        $inputs = $request->all();
        $this->interface->create($inputs);
        toastr()->success(" Successfully Feature Added ");
        return redirect()->route('home');

        }
        catch(Exception $error){
        toastr()->error($error->getMessage());
        return redirect()->back();
        }

    }

    public function show()
    {
        $items = $this->interface->read();
        return view('admin.pages.table.single-feature',['items'=>$items]);
    }

    public function editForm($id)
    {
        $item = $this->interface->edit($id);
        return view('admin.pages.form.single-feature-edit',['item'=>$item]);
    }

    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'icon' => 'required',
            'title' => 'required',
            'description' => 'required',

        ]);

        if ($validator->fails()) {

           $messages = $validator->messages();

                foreach ($messages->all() as $message)
                {
                    toastr()->error ( $message, 'Error');
                }

             return redirect()->back()->withInput();
       }

       try{
        $inputs = $request->all();
        $this->interface->update($inputs,$id);
        toastr()->success("Successfully Feature Updated ");
        return redirect()->route('home');

        }
        catch(Exception $error){
        toastr()->error($error->getMessage());
        return redirect()->back();
        }

    }

    public function delete($id)
    {
        $this->interface->delete($id);
        return redirect()->route('home');
    }



}
