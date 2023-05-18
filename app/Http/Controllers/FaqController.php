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

    public function index(Request $request)
    {
        // $faq = Faq::all();
        // return view('admin.faqs.index', [
        //     'faq' => $faq
        // ]);

            $faq = Faq::all();

            if(!empty($request->keword)){
                $faq = $faq->where('question', 'like', '%' .$request->keyword. '%');
            }
            // $faq = $faq->paginate(6);
            $data['faq'] = $faq;
            return view('admin.faqs.index', $data);

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
    // public function save(Request $request){
    //     $validator = Validator::make($request->all(),[
    //         'question' => 'required'
    //     ]);
    //     if($validator->passes()){

    //     }else{
    //         return response()->json([
    //             'status' = 0,
    //             'error' => $validator->errors()
    //         ]);
    //     }
    //}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
     {
        //  

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
    public function show()
    {
        

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
    public function update(Request $request, $faq_Id)
    {
        $faq =  Faq::find($faq_Id);
        $faq ->question = $request -> question;
        $faq ->answer = $request -> answer;
        $faq -> save();
        return redirect('index');
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
       if($faq == null){
        $faq =  $this ->Faq ->getFaqBuId($faq_Id)->first();
            return redirect(route('index'))->with('error', 'Faq non existe !');
       }else{
        $faq -> delete();
        return redirect(route('index'))->with('message', 'Faq eliminata corretamente');
       }
    }
}
