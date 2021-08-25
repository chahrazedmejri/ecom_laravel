<?php

namespace App\Http\Controllers;
use App\Models\ContactUS;
use Illuminate\Http\Request;
use Auth;
class ContactUsController extends Controller
{
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        
        $ContactUS = ContactUS::latest()->paginate(1000);

        return view('ContactUS.index', compact('ContactUS'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

   public function contactUS()
   {

    if(Auth::check()) 
    {
        return view('contact-us');


    }else
   
    {
        return view('auth.login')
        ->with('successcontact','Vous devez vous connecter pour terminer votre commande! ');
    }

   }
 
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */


   public function contactSaveData(Request $request)
   {
    
       $this->validate($request, [
        'name' => 'required',
        'tel' => 'required',
		'subject' => 'required',
        'email' => 'required|email',
        'message' => 'required'
        ]);
 
      ContactUS::create($request->all()); 
   
    \Mail::send('emails.contactus',
       array(
           'name' => $request->get('name'),
           'tel' => $request->get('tel'),
           'email' => $request->get('email'),
		   'subject' => $request->get('subject'),
           'user_message' => $request->get('message')
       ), function($message) use ($request)
   {
      $message->from('onlineinterviewquestions@gmail.com');
      $message->to('chahrazedmejri00@gmail.com', 'Admin')->subject($request->get('subject'));
   });
 
    return back()->with('success', 'Merci de nous avoir contacté!'); 
   }


   

   public function show($id)
   {
       $msgs = ContactUS::where('id',$id)->first();

       $contacts = ContactUS::latest()->paginate(255);

   return view('session_admin.show',compact('contacts'))->with('contacts',$msgs);
 
   } 
}