<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return view('admin.contact.index', ['contacts' => Contact::latest()->paginate(20)]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('admin.contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        toast('Successfully Delete', 'success');
        return redirect()->route('admin.contact.index');
    }

    public function date_filter(){
        request()->validate([
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        if(request()->start_date > request()->end_date){
            toast('Invalid Date Formate!', 'error');
            return back();
        }
        $contacts =  Contact::whereBetween('created_at', [request()->start_date, request()->end_date])->paginate(20);
        return view('admin.contact.index', compact('contacts'));
    }
    //pagination
    public function pagination(){
            return view('admin.contact.search', ['contacts' => Contact::latest()->paginate(20)]);
    }

    //search
    public function search(){
        request()->validate([
            'search' => 'required',
        ]);

        $contacts = Contact::where('name', "like", '%' . request()->search .'%')->paginate(20);
        if($contacts->count() > 0){
            return view('admin.contact.index', compact('contacts'));
        }else{
            toast('No Data Found!', 'error');
             return view('admin.contact.index',compact('contacts'));
        }
    }
}
