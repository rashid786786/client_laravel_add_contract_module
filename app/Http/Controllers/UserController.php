<?php

namespace KarlosCabral\Http\Controllers;

use KarlosCabral\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function MyProfile($password = null)
    {
        return view('profile.MyProfile')->with('password',$password);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update_info(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:55'],
            'position' => ['required', 'string', 'max:55'],
        ]);
        $user = Auth::user();

        $user->name = $request->name;
        $user->position = $request->position;
        if ($request->hasFile('picture'))
        {
            if (file_exists(public_path() .$user->picture)) {
                @unlink(public_path().$user->picture);
            }

            $photo = $request->picture;
            $path = 'storage/Profile_images/';
            $name = $user->email.'-'.$photo->getClientOriginalName();
            $photo->move(public_path().'/'.$path ,$name);
            $user->picture = $path.$name;
        }
        $user->save();
        $request->session()->flash('Password_Success', 'Your Information Updated Successfully');
        return redirect('/MyProfile');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update_password(Request $request)
    {
        $this->validate($request,[
            'current_password' => 'required|string|min:6',
            'password'         => 'required|string|min:6|confirmed',
        ]);
        $user = User::findorfail(Auth::User()->id);

        if ( !Hash::check($request->current_password , $user->password)) {
            $request->session()->flash('Current_Password_Error', 'Your Current Password is incorrect');
            return back();
        } else {
            $user->password = Hash::make($request->password);
            $user->save();
            $request->session()->flash('Current_Password_Success', 'Your Current Password Updated Successfully');
            return redirect('/MyProfile');
        }
    }
}
