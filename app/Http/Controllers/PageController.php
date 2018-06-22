<?php

namespace App\Http\Controllers;
use Session;
use Mapper;
use Charts;
use App\AQIdata;
use App\Location;
use App\User;
use DB;
use Hash;
use Auth;

use App\Http\Requests;
use Illuminate\Http\Request;

class PageController extends Controller
{
  public function getIndex(){
    $locations = Location::all(['id', 'locate']);
    return view('page.homepage', compact('locations'));
  }

  public function getTest() {
    $items = AQIdata::where('id_track',1)->take(5)->get();
    print_r($items);
    return view('page.test', compact('aqi_tracks'));
  }

  public function getSearch(){
    return view('page.search');
  }

  public function getLogin(){
    return view('page.login');
  }

  public function getSignup(){
    return view('page.signup');
  }

  public function postSignup(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                'name'=>'required',
                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'email.unique'=>'Email đã có người sử dụng',
                'password.required'=>'Vui lòng nhập password',
                're_password.same'=>'Mật khẩu không giống nhau',
                'password.min'=>'Mật khẩu ít nhất 6 ký tự',
                'password.max'=>'Mật khẩu không quá 20 ký tự'

            ]);
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->re_password = Hash::make($req->re_password);
        $user->save();
        return redirect()->back()->with('success','Tạo tài khoản thành công');
    }

  public function postLogin(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:20'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu ít nhất 6 ký tự',
                'password.max'=>'Mật khẩu không quá 20 ký tự'
            ]);
        $credentials = array('email'=>$req->email,'password'=>$req->password);
        if(Auth::attempt($credentials)){
            return redirect()->back()->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
        }
        else{
            return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
        }
    }

  public function getLogout(){
        Auth::logout();
        return redirect()->route('homepage');
    }

  public function survey(){
        return view('admin.pages.survey');
    }
    public function table(){
        $user = User::select('id','name','level','created_at')->orderBy('id','DESC')->get()->toArray();
        return view('admin.pages.tables',compact('user','book'));
    }
    public function form(){
        return view('admin.pages.form');
    }
    public function calendar(){
        return view ('admin.pages.calendar');
    }

  public function gmaps(){
    $locations = DB::table('locations')->get();
    return view('gmaps', compact('locations'));
  }

  public function chart()
      {
        $result = DB::table('aqi_tracks')
                    ->where('id_tracks','=','1')
                    ->orderBy('id', 'ASC')
                    ->get();
        return response()->json($result);
      }
}

?>