<?php

namespace KarlosCabral\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use KarlosCabral\Role;
use KarlosCabral\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware( ['role:Super Admin' or 'role:Admin'] );
    }
    public function AddUser()
    {
        return view('user.AddUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function AddUserRequest(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required|string|max:50',
            'role'     => 'required|string|in:Admin,Staff',
            'status'   => 'required|string|in:Active,Blocked',
            'email'    => 'required|string|email|max:50|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'picture'  =>  'max:2024|mimes:jpeg,jpg,png'
        ]);
        $user = new User([
            'name'      => $request['name'],
            'status'    => $request['status'],
            'email'     => $request['email'],
            'password'  => Hash::make($request['password']),
        ]);

        if ($request->hasFile('picture'))
        {
            $photo = $request->picture;
            $path = '/storage/Profile_images/';
            $name = $request['email'].'-'.$photo->getClientOriginalName();
            $photo->move(public_path().$path , $name);
            $user->picture = $path.$name;
        }

        $user->save();


        $role = Role::where('name',$request->role)->first();
        $user->attachRole($role);

        $user = $user->toArray();

        $user['link'] = URL::to('/login');

        $user['Password'] = $request['password'] ;


        Mail::send('Emails.AddUser', $user, function($message) use ($user){
            $message->from('contato@karloscabral.com.br' , 'Karlos Cabral');
            $message->to($user['email']);
            $message->subject('Karlos Cabral - Membership You\'re now Part of KarlosCabral Management System' );
        });
        $request->session()->flash('Success',$user['name'].' adicionado com sucesso!');
        return redirect()->to('AddUser');
    }

    public function ManageUsers()
    {
        if(Auth::user()->hasRole('Super Admin'))
        {
            $users= User::all();
        }
        else
        {
              $users = User::where('email','!=' ,'contato@karloscabral.com.br')->get();
        }

        return view('user.ManageUsers')->with(compact('users'));
    }



    public  function ManageUser($action , User $user)
    {
        return View::make('user.UserProfile')->with(compact('user','action'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update_info(User $user,Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:55'],
            'position' => ['required', 'string', 'max:55'],
        ]);

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
    public function update_password(User $user, Request $request)
    {
        $this->validate($request,[
            'current_password' => 'required|string|min:6',
            'password'         => 'required|string|min:6|confirmed',
        ]);

        if ( !Hash::check($request->current_password , $user->password)) {
            $request->session()->flash('Current_Password_Error', 'Sua senha atual está incorreta.');
            return back();
        } else {
            $user->password = Hash::make($request->password);
            $user->save();
            $request->session()->flash('Current_Password_Success', 'Sua senha foi atualizada com sucesso!');
            return redirect('/MyProfile');
        }
    }

    public function update_status($status,User $user)
    {
        if (!$user->hasRole('Super Admin')) {
            $user->status = $status;
            $user->save();
            session()->flash('Success', $user->name .'  '.$status. ' atualizado com sucesso!');
            return redirect()->back();
        }
        session()->flash('fail', $user->name . ' é Super Admin e não pode ter seu status alterado.');
        return redirect()->back();
    }

    public function delete_user(User $user)
    {
        if (!$user->hasRole('Super Admin')) {
            if (file_exists(public_path() . $user->picture)) {
                @unlink(public_path() . $user->picture);
            }
            $user->delete();
            session()->flash('Success', $user->name . ' apagado com sucesso!');
            return redirect()->back();
        }
        session()->flash('fail', $user->name . ' é Super Admin e não pode ser apagado.');
        return redirect()->back();
    }
}
