<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */

    public function index(Request $faq)
    {
         
         $faq = Faq::orderBy('faq_Id', 'DESC')->get();
         $faq = Faq::paginate(7);
         return view('adminfaq.listafaq', [
             'faq' => $faq
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         $faq =  Faq::all();
        return view('adminfaq.create',[ 'faq' => $faq]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
      public function store(Request $request)
      {
         $validator = Validator::make($request -> all(),[

             'question' => 'required',
             'answer' => 'required',
         ]);
         if($validator -> passes())
         {
              $faq = new Faq();
              $faq ->question = $request->question;
              $faq ->answer = $request->answer;
              $faq ->save();

             return redirect('faq.index')->with('success', 'FAQ creata con sucesso');
         } else {
              return redirect()->route('adminfaq.create')->withErrors($validator)->withInput();
         }
      }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit($faq_Id)
     {
       
         $faq = Faq::findOrFail($faq_Id);
         return view('adminfaq.edit', ['faq' => $faq]);
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function  update($faq_Id, Request $request){
        
        $validator = Validator::make($request -> all(),[

            'question' => 'required',
            'answer' => 'required',
        ]);
        if($validator -> passes()){
            $faq = Faq::find($faq_Id);
            $faq ->question = $request->question;
            $faq ->answer = $request->answer;
            $faq ->save();
            return redirect('adminfaq.index')->with('success', 'FAQ modificata con sucesso');
        }else{
            return redirect()->route('adminfaq.edit', $faq_Id)->withErrors($validator)->withInput();
        }
     }
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($faq_Id, Request $request)
      {
         $faq = Faq::findOrFail($faq_Id);
         $faq -> delete();
         return redirect()->route('adminfaq.index')->with('success', 'Faq cancelata con sucesso.');
     }
}
