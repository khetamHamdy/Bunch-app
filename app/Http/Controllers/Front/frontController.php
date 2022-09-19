<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Traits\GlobalTrait;
use App\Models\Admin;
use App\Models\BasicInformationForSite;
use App\Models\Career;
use App\Models\CareerTranslation;
use App\Models\Contact;
use App\Models\HomeJoinUs;
use App\Models\JoinUs;
use App\Models\OrderCareers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Intl\Countries;

class frontController extends Controller
{
//    use GlobalTrait;
//
////    public $data;
////
////    public function __construct()
////    {
////        $this->data = $this->getAllData();
////    }

    public function index()
    {

        //dd($data);
        return view('Front.index');
    }

    public function about()
    {
        return view('Front.about');
    }

    public function careers()
    {
        $countries = Countries::getNames();
        $specialization = [
            'ios' => 'IOS',
            'assets end developer' => 'Back End Developer',
            'front end developer' => 'Front End Developer',
            'full stack developer' => 'Full Stack Developer',
            'filter' => 'Filter',
            'android' => 'Android',
            'design' => 'Design'
        ];
        return view('Front.careers', compact('specialization', 'countries'));
    }

    public function store_career(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($request->all(), [
            'fullName' => 'required|string|min:5',
            'specialization' => 'required|string',
            'upload_cv' => 'required|mimes:pdf',
            'email' => 'required|email',
            'Age' => 'required|int',
            'description' => 'required|string'

        ]);
        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $avatarpath = null;
        if ($request->hasFile('upload_cv')) {
            $avatarpath = $request->file('upload_cv')->storeAs(
                'upload_cv',
                $request->fullName . $request->specialization . '.' . $request->file('upload_cv')->getClientOriginalExtension()
                ,
                'public'
            );
            // dd($request->file('profile_photo_path')->getClientOriginalExtension());
            $data['upload_cv'] = $avatarpath;
        }
        $user = Auth::user();
//        $request->merge(
//            ['user_id' => $user_id]
//        );
        // dd($data);
        $user->Careers()->create($data);
//        Career::create($data);
        return redirect()->route('index.html')->with('success', 'Career Created Successfully!');

    }

    public function client()
    {
        return view('Front.clients');
    }

    public function contact()
    {
        return view('Front.contact');
    }

    public function store_contact(Request $request)
    {
        //dd($request->toArray());
        $data = $request->all();
        Contact::create($data);
        return redirect()->route('index.html')->with('success', 'Messages Created Successfully!');

    }

    public function join()
    {
        $projectTypes = [
            'web' => 'Web',
            'android' => 'Android',
            'ios' => 'IOS',
            'filter' => 'Filter',
            'design' => 'Design'
        ];
        $groupTypes = [
            'designer' => 'Designer',
            'developers web' => 'Developers Web',
            'developers ios' => 'developers ios',
            'developers android' => 'Developers Android',
            'developers filter' => 'Developers Filter'];
        $joinData = HomeJoinUs::all();
        return view('Front.join', compact('projectTypes', 'groupTypes', 'joinData'));
    }

    public function store_join(Request $request)
    {
        //dd($request->toArray());
        $data = $request->all();
        JoinUs::create($data);
        return redirect()->route('index.html')->with('success', 'Join Created Successfully!');

    }

    public function policy()
    {
        return view('Front.policy');
    }

    public function tearms()
    {
        return view('Front.tearms');
    }

    public function search(Request $request)
    {
        $search_w = $request->search;
        $search_c = Career::search($search_w)->paginate();
        $search_cr = CareerTranslation::search($search_w)->paginate();
        if ($search_cr->isEmpty() && $search_c->isEmpty()) {
            return redirect()->route('index.html')->with('warning', 'Not Found :  ' . $search_w);
        } else {
            return view('Front.search', compact('search_cr'));
        }


    }

    public function profileUser()
    {
        $profile = Auth::guard('web')->user();
        $dataOrderCareers=OrderCareers::where('user_id' ,$profile->id)->with('career')->first();
      //  dd($dataOrderCareers->toArray());

        return view('Front.User.index', compact('profile' , 'dataOrderCareers'));
    }

    public function profileUserUpdate(Request $request, $id)
    {

        $data = $request->all();
        $avatarpath = null;
        if ($request->hasFile('image')) {
            $avatarpath = $request->file('image')->storeAs(
                'images_users',
                $request->name . '_' . $request->email . '.' . $request->file('image')->getClientOriginalExtension()
                ,
                'public'
            );
            // dd($request->file('profile_photo_path')->getClientOriginalExtension());
            $data['image'] = $avatarpath;
        }
        $user = User::findOrFail($id);
        //dd($user , $data);
        $user->update($data);

        return redirect()->route('index.html')->with('warning', 'Update User Successfully');
    }

}
