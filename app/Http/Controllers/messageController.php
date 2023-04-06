<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\Controller;

use App\Models\message;
use Illuminate\Http\Request;
use Mail;
use Auth;
class messageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages=message::all();
        return view('admin.message.viewmessages',compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'first_name'=>'required',
            'last_name'=>'required',
            'subject'=>'required|max:255',
            'email'=>'required|email',
            'phone'=>'required|numeric|max:10|min:10',
            'message'=>'required'
        ]);
        // dd(Auth::user()->email);
        $message=new message();
        if($request->hasFile('file')){
            $filename=$request->file->getClientOriginalName();
            $request->file->storeAs('files',$filename);
            $message->file=$filename;
        }
        $message->first_name=$request->first_name;
        $message->last_name=$request->last_name;
        $message->phone=$request->phone;
        $message->subject=$request->subject;
        $message->email=$request->email;
        $message->message=$request->message;
        $message->save();

        $mailData = [
            'name'  => $request->name,
            'subject'  => $request->subject,
            'email' => $request->email,
            'text'=>$request->message,
        ];
        $user['to']=$request->email;
        $user['from']='mangal12@sharewarenepal.com';
        Mail::send('frontend/mail',$mailData,function($message) use ($user) {
            $message->to($user['to']);
            $message->subject('Mail From Client');
        });
        Mail::send('frontend/mail_admin',$mailData,function($message) use ($user) {
            $message->to($user['from']);
            $message->subject('Mail From Client');
        });
        return redirect()->back()->with('message','message Sent Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function deletemessage($id){
        message::find($id)->delete();
        return redirect(route('viewmessages'))->with('message','Message Deleted Successfully');
    }

    public function viewamessage($id){
        $message=message::find($id);
        return view('admin.message.viewamessage',compact('message'));
    }
}
