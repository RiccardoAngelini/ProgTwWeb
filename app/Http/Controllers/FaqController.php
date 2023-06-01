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
     protected $_faqModel;
 
     public function __construct() {
         $this->_faqModel = new Faq;
     }

    public function index(Request $faq)
    {
         $faq = $this->_faqModel->orderFaq();
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
         $faq =  $this->_faqModel->getFaq();
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

             return redirect('faq')->with('status', 'FAQ creata con successo!');
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
     public function edit($id)
     {
       
         $faq = $this->_faqModel->findFaq($id);
        //  $faq = Faq::where('faq_Id', $faq_Id);
         return view('adminfaq.edit', ['faq' => $faq]);
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function  update($id, Request $request){
        
        $validator = Validator::make($request -> all(),[

            'question' => 'required',
            'answer' => 'required',
        ]);
        if($validator -> passes()){
            $faq = $this->_faqModel->findFaq($id);
            $faq ->question = $request->question;
            $faq ->answer = $request->answer;
            $faq ->save();
            return redirect('faq')->with('status', 'FAQ modificata con sucesso!');
        }else{
            return redirect()->route('adminfaq.edit', $id)->withErrors($validator)->withInput();
        }
     }
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
      {
         $faq = $this->_faqModel->findorfailFaq($id);
         $faq -> delete();
         return redirect()->route('faq.index')->with('status', 'Faq cancellata con sucesso!');
     }
}
