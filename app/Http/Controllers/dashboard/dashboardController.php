<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\BasicInformationForSite;
use App\Models\Career;
use App\Models\Contact;
use App\Models\HomeJoinUs;
use App\Models\JoinUs;
use App\Models\OrderCareers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class dashboardController extends Controller
{
    public function index()
    {

        return view('Dashboard.index');
    }

    public function userList()
    {
        //dd( Auth::guard('admin')->user()->name);
        $users = User::latest()->get();
        return view('Dashboard.users.listUser', compact('users'));
    }

    public function userAdd()
    {
        return view('Dashboard.users.addUser');
    }

    public function userEdit(User $user)
    {

        return view('Dashboard.users.editUser', compact('user'));
    }

    public function userUpdate(Request $request, User $user)
    {

        $data = $request->all();
        //dd($data);
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
        if ($request->post('password')) {
            $data['password'] = Hash::make($request->password);

        }

        $user->update($data);

        return redirect()->route('userList')->with('info', 'Update User Successfully');
    }

    public function profile()
    {

        $profile = Auth::guard('admin')->user();
        return view('Dashboard.profile.profile', compact('profile'));
    }

    public function adminprofile(Request $request, $id)
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
        $user = Admin::findOrFail($id);

        $user->update($data);

        return redirect()->back()->with('warning', 'Update User Successfully');
    }

    public function contactList()
    {

        $Contacts = Contact::latest()->get();
        return view('Dashboard.Contacts.List', compact('Contacts'));
    }

    public function contactListDelete(Contact $contact)
    {
        $contact->delete();
        return redirect()->back()->with('errors', 'Delete Contact');

    }

    public function careersList()
    {

        $Career = Career::with('user')->latest()->get();
//        dd($Career);
        return view('Dashboard.Careers.List', compact('Career'));
    }

    public function careerListDelete(Career $career)
    {

        Storage::disk('public')->delete($career->upload_cv);
        $career->delete();
        return redirect()->back()->with('errors', 'Delete Career');

    }

    public function faq()
    {

        return view('Dashboard.faq-3');
    }

    public function joinList()
    {

        $JoinUs = JoinUs::latest()->get();
        return view('Dashboard.JoinUs.List', compact('JoinUs'));
    }

    public function joinListDelete(JoinUs $joinUs)
    {

        $joinUs->delete();
        return redirect()->back()->with('errors', 'Delete Career');
    }

    public function basic_information_for_sites()
    {

        return view('Dashboard.basic_information_for_sites.add');
    }

    public function basic_information_for_sites_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|mimes:jpg,jpeg,png',
        ]);
        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $data = $request->all();

        $avatarpath = null;
        if ($request->hasFile('image')) {
            $avatarpath = $request->file('image')->storeAs(
                'images_home',
                $request->title . '.' . $request->file('image')->getClientOriginalExtension()
                ,
                'public'
            );
            // dd($request->file('profile_photo_path')->getClientOriginalExtension());
            $data['image'] = $avatarpath;
        }
        BasicInformationForSite::create($data);
        return redirect()->route('dashboard')->with('toast_success', 'Update User Successfully');
    }

    public function homeJoinAs()
    {
        return view('Dashboard.basic_information_for_sites.addHomeJoinUd');
    }

    public function homeJoinAs_store(Request $request)
    {
        HomeJoinUs::create($request->all());
        return redirect()->route('dashboard')->with('toast_success', 'Add  Successfully');
    }

    public function homeJoinAsList()
    {
        $datas = HomeJoinUs::all();
//        dd($data);
        return view('Dashboard.basic_information_for_sites.indexHomeJoinUd', compact('datas'));
    }

    public function homeJoinAsDelete(HomeJoinUs $homeJoinUs)
    {
        $homeJoinUs->delete();
        return redirect()->route('homeJoinAsList')->with('success', 'delete Successfully');
    }


    public function homeJoinAsEdit(HomeJoinUs $homeJoinUs)
    {
        return view('Dashboard.basic_information_for_sites.updateHomeJoinUd', compact('homeJoinUs'));

    }

    public function homeJoinAs_update(Request $request, HomeJoinUs $homeJoinUs)
    {
        $homeJoinUs->update($request->all());
        return redirect()->route('homeJoinAsList')->with('info', 'Update Home Join us  Successfully');
    }

    public function viewOrderCareer(Career $career)
    {
//        dd($career->toArray() ,Auth::guard('admin')->user()->id);
        $statusData = ['accept' => 'Accept', 'under review' => 'Under Review', 'denial' => 'Denial'];
        return view('Dashboard.orderCareer.add', compact('statusData', 'career'));
    }

    public function viewOrderCareerStore(Career $career, Request $request)
    {
        $admin_id = Auth::guard('admin')->user()->id;
        $user_id = $career->user_id;
        $career_id = $career->id;
        $status = $request->status;
        OrderCareers::with(['user', 'admin', 'career'])->updateOrCreate(['user_id' => $user_id],
            [
                'user_id' => $user_id,
                'admin_id' => $admin_id,
                'career_id' => $career_id,
                'status' => $status
            ]);
        return redirect()->route('careerList')->with('success', 'Added Successfully');
    }
}
