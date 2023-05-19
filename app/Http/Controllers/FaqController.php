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
         
         $faq = Faq::all();
         $faq = Faq::paginate(7);
         return view('admin.faqs.index', [
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
        return view('admin.faqs.create',[
             'faq' => $faq
         ]);
        return view('admin.faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
     {
        $faq = new Faq();
        $faq ->question = $request->question;
        $faq ->answer = $request->answer;
        $faq ->save();
        return redirect('index')->with('succes', 'La domanda è stato inserita');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($faq_Id)
    {
        $faq = Faq::find($faq_Id);
        if ($faq) {
            return view('show', [
                'faq' => $faq
            ]);
        } else {
            return redirect('index')->with('status', 'Fan non esiste');
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
       
        $faq = Faq::find($faq_Id);
        return view('admin.faq.edit', [
            'faq' => $faq,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function  update($faq_Id){
        $faq = Faq::find($faq_Id);
        return view('update', compact('faq'));
    }
    public function updatefaq(Request $request)
    {
        $request -> validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
        $faq = Faq::find($request->faq_id);
        $faq ->question = $request -> question;
        $faq ->answer = $request -> answer;
        $faq -> update();
        return redirect('index')->with('status', 'Faq aggiunta con sucesso.');

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($faq_Id)
     {
        $faq = Faq::find($faq_Id);
        if ($faq) {
            $faq -> delete();
            return redirect('index')->with('succes', 'Faq cancelata con sucesso.');
            $latestId = Faq::latest()->value('faq_Id');
            return view('index')->with('latestId', $latestId);
        } else {
            return redirect()-> back()->with('error', 'Faq non esiste.');
        }
        
        
    }
}
