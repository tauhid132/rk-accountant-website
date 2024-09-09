<?php

namespace App\Http\Controllers;

use App\Models\ContactUsSubmission;
use Illuminate\Http\Request;

class ContactUsSubmissionController extends Controller
{
    public function submitContactUs(Request $request){
        ContactUsSubmission::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'message' => $request->message,
        ]);
        return back()->with('success', 'Thank you for your interest. We will contact you as soon as possible.');
    }
    public function viewSubmits(){
        return view('admin.contact-submissions');
    }
    public function getSubmits(){
        $data = ContactUsSubmission::all();
        return datatables($data)
        ->addIndexColumn()
        ->addColumn('created_at' , function($row){
            return $row->created_at->format('d-M-Y h:m:s');
        })
       
        ->addColumn('action', function($row){
            
            $btn = '<a class="btn btn-sm btn-warning" href="'.route('editBlog',$row->id).'"><i id="'.$row->id.'" class="fa fa-edit"></i> Edit</a> ';
            $btn = $btn.'<a class="btn btn-sm btn-danger delete_blog" id="'.$row->id.'"><i  class="fa fa-trash "></i> Delete</a>';
            return $btn;
        })
       
        ->rawColumns(['action' => 'action'])
        ->make(true);
    }
}
