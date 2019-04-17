<?php

namespace KarlosCabral\Http\Controllers;

use KarlosCabral\Contact;
use Illuminate\Http\Request;
use DB;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = DB::table('contacts')->get();
        if(isset($contacts) && !empty($contacts))
        {
            return view('dashboard.contact.show_contacts',['contacts'=>$contacts]);

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.contact.add_contact');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data =array(
            'full_name' => $request->full_name,
            'email' =>$request->email,
            'phone' =>$request->phone, 
            'gender' =>$request->gender, 
            'phone_2_select' =>$request->phone_2_select,
            'phone_2' =>$request->phone_2, 
            'phone_3_select' =>$request->phone_3_select, 
            'phone_3' =>$request->phone_3, 
            'tab1_address' =>$request->tab1_address, 
            'tab1_additional_address' =>$request->tab1_additional_address, 
            'tab1_suburb' =>$request->tab1_suburb, 
            'tab1_city' =>$request->tab1_city, 
            'tab1_state_select' =>$request->tab1_state_select, 
            'tab1_address_type_select' =>$request->tab1_address_type_select, 
            'tab1_note' =>$request->tab1_note,                                    
                                           
            'tab2_address' =>$request->tab2_address, 
            'tab2_additional_address' =>$request->tab2_additional_address, 
            'tab2_suburb' =>$request->tab2_suburb, 
            'tab2_city' =>$request->tab2_city, 
            'tab2_state_select' =>$request->tab2_state_select, 
            'tab2_address_type_select' =>$request->tab2_address_type, 
            'tab2_note' =>$request->tab2_note, 
            
            'tab3_address' =>$request->tab3_address, 
            'tab3_additional_address' =>$request->tab3_additional_address, 
            'tab3_suburb' =>$request->tab3_suburb, 
            'tab3_city' =>$request->tab3_city, 
            'tab3_state_select' =>$request->tab3_state_select, 
            'tab3_address_type_select' =>$request->tab3_address_type, 
            'tab3_note' =>$request->tab3_note, 
 
            'tab4_address' =>$request->tab4_address, 
            'tab4_additional_address' =>$request->tab4_additional_address, 
            'tab4_suburb' =>$request->tab4_suburb, 
            'tab4_city' =>$request->tab4_city, 
            'tab4_state_select' =>$request->tab4_state_select, 
            'tab4_address_type_select' =>$request->tab4_address_type, 
            'tab4_note' =>$request->tab4_note, 
                                           
                                     
            'po_address_type' =>$request->po_address_type, 
            'po_dob' =>$request->po_dob, 
            'voter_title' =>$request->voter_title, 
            'voter_zone' =>$request->voter_zone, 
            'voter_section' =>$request->voter_section, 
            'voter_doi' =>$request->voter_doi, 
            'user_email' =>$request->user_email, 
            'user_password' =>$request->user_password,
         ); 
        $result = DB::table('contacts')->insert($data);
        if($result)
        {
         \Session::flash('key', ['class'=>'success','message'=>'Congratulations! Contact Added  Successfully']);
        return redirect()->route('contact.show');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \KarlosCabral\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \KarlosCabral\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if($id)
        $contact = DB::table('contacts')->where('id', $id)->get();
        if(isset($contact) && !empty($contact))
        {
            return view('dashboard.contact.edit_contact',['contact'=>$contact]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \KarlosCabral\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       if(($_POST) && isset($id))
        {
            $data = array(
                'id'=>$id,
                'full_name'=>($request->full_name),
             );

             //create object of contact model and call to update function
             $result = Contact::updateSingleContact($data);

             if($result)
             {
                \Session::flash('key', ['class'=>'success','message'=>'Congratulations! Contact Updated  Successfully']);
                return redirect()->route('contact.show');
             }

             \Session::flash('key', ['class'=>'success','message'=>'Congratulations! Contact Does Not Deleted  Successfully']);
            return redirect()->route('contact.show');

        }
               
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \KarlosCabral\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        if($id)
        {
             DB::table('contacts')->where('id', $id)->delete();
             \Session::flash('key', ['class'=>'success','message'=>'Congratulations! Contact Deleted  Successfully']);
            return redirect()->route('contact.show');
        }
        
    }
}
