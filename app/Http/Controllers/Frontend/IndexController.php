<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscribe;
use App\Models\Contact;
use App\Models\CSRActivities;
use App\Models\ServicesDetails;
use App\Models\ManagingTeams;
use App\Models\News;
use App\Models\ProjectDetails;
use App\Models\SisterConcern;
use Carbon\Carbon;
use Validator;

class IndexController extends Controller
{


  public function Subscribe(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'email' => 'required|string|lowercase|email|max:255'
    ]);
    if ($validator->passes()) {
      $Subscribe = new Subscribe;
      $Subscribe->email = $request->email;
      $Subscribe->save();
      return response()->json([
        'status' => 200,
        'message' => 'Subscribe Successfully'
      ]);
    }
    return response()->json([
      'status' => '500',
      'error' => $validator->messages()
    ]);
  } //
  public function SubscribeList()
  {
    $subscribe = Subscribe::all();
    return view('backend.subscribe.subscribe', compact('subscribe'));
  } //
  public function SubscribeDelete($id)
  {
    Subscribe::findOrFail($id)->delete();
    $notification = array(
      'message' => 'Subscribe Successfully Deleted',
      'alert-type' => 'info'
    );
    return redirect()->back()->with($notification);
  } //
  public function ContactUs()
  {
    return view('frontend.contact_us.contact');
  }
  public function chooseUsDetails()
  {
    return view('frontend.choose-us.choose-us');
  }
  public function ContactStore(Request $request)
  {
    Contact::insert([
      'name' => request('name'),
      'email' => request('email'),
      'number' => request('phone'),
      'service_name' => request('service_name'),
      'company_name' => request('company_name'),
      'message' => request('message'),
      'created_at' => Carbon::now(),
    ]);
    $notification = array(
      'message' => 'Thank you, ' . request('name') . '! Your message has been successfully received. We appreciate your communication.',
      'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);
  } //
  public function ContactList()
  {
    $contact = Contact::all();
    return view('backend.contact.contact_list', compact('contact'));
  } //
  public function ContactDelete($id)
  {
    Contact::findOrFail($id)->delete();
    $notification = array(
      'message' => 'Contact Successfully Deleted',
      'alert-type' => 'info'
    );
    return redirect()->back()->with($notification);
  } //
  ///All Service
  public function ServiceDetails($id)
  {
    $data = ServicesDetails::findOrFail($id);
    return view('frontend.service.single_service', compact('data'));
  } //
  public function ProjectDetails($id)
  {
    $projectDetails = ProjectDetails::findOrFail($id);
    return view('frontend.project.single_project', compact('projectDetails'));
  } //
  ///Team
  public function AllTeam()
  {
    return view('frontend.team.all_team');
  }
  public function FrontendAbout()
  {
    return view('frontend.about.about');
  }
  public function AllService()
  {
    return view('frontend.service.service');
  }
  public function TeamDetails($id)
  {
    $teamDetails = ManagingTeams::findOrFail($id);
    return view('frontend.team.single_team', compact('teamDetails'));
  } //
  //Project
  public function AllProject()
  {
    return view('frontend.project.all_project');
  } //
  //404 page
  // public function Error404()
  // {
  //   return view('frontend.errors.404');
  // }
  // blog page function 
  public function blog()
  {
    return view('frontend.blog.blog-page');
  }
  public function blogDetails($id)
  {
    $blog = News::findOrFail($id);
    return view('frontend.blog.single-blog', compact('blog'));
  }
  // Sister Concern 
  public function sisterConcern()
  {
    return view('frontend.sister-concern.sister-concern');
  }
  public function sisterConcernDetails($id)
  {
    $sister = SisterConcern::findOrFail($id);
    return view('frontend.sister-concern.single_sister', compact('sister'));
  }
  // CSR Activities
  public function csrActivities()
  {
    return view('frontend.csr-activities.csr');
  }
  public function csrActivitiesDetails($id)
  {
    $csr = CSRActivities::findOrFail($id);
    return view('frontend.csr-activities.single-csr', compact('csr'));
  }
}
