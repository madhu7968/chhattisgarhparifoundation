<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;
use App\Http\Models\UserDetails;
use App\Http\Models\ContactUs;
use App\Http\Models\MemberDetails;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function index(){
	    return view('index');	
    }
    public function registrationView(){
	    return view('registration');	
    }
    public function registration(){
        $fullName=Input::get('fullName');    
        $fname=Input::get('fname');    
        $mobileno=Input::get('mobileno');    
        $aadharno=Input::get('aadharno');    
        $post=Input::get('post');    
        $amount=Input::get('amount');    
        $user_ref_id=Input::get('user_ref_id');    
        $state=Input::get('state');    
        $bank_name=Input::get('bank_name');    
        $branch=Input::get('branch');    
        $pan_number=Input::get('pan_number');    
        $mname=Input::get('mname');    
        $dob=Input::get('dob');    
        $gender=Input::get('gender');    
        $village=Input::get('village');    
        $district=Input::get('district');    
        $postcode=Input::get('postcode');    
        $ifsc_code=Input::get('ifsc_code');    
        $account_number=Input::get('account_number'); 
        

        //member details
        $member_name1=Input::get('member_name1');    
        $relation1=Input::get('relation1');    
        $age1=Input::get('age1');    
        $aadhar_number1=Input::get('aadhar_number1');

        $member_name2=Input::get('member_name2');    
        $relation2=Input::get('relation2');    
        $age2=Input::get('age2');    
        $aadhar_number2=Input::get('aadhar_number2'); 

        $member_name3=Input::get('member_name3');    
        $relation3=Input::get('relation3');    
        $age3=Input::get('age3');    
        $aadhar_number3=Input::get('aadhar_number3'); 

        $member_name4=Input::get('member_name4');    
        $relation4=Input::get('relation4');    
        $age4=Input::get('age4');    
        $aadhar_number4=Input::get('aadhar_number4');
        
        $member_name5=Input::get('member_name5');    
        $relation5=Input::get('relation5');    
        $age5=Input::get('age5');    
        $aadhar_number5=Input::get('aadhar_number5');

        $check_aadhar_number = new UserDetails;
        $aadhar_existing = $check_aadhar_number::where('user_aadhar_number',$aadharno)->get();

        if (count($aadhar_existing) > 0) {
            return view('user-exist');
        }else{
            $user_details = new UserDetails;
            $user_details->user_name=$fullName;
            $user_details->user_m_name=$mname;
            $user_details->user_f_name=$fname;
            $user_details->user_dob=$dob;
            $user_details->amount=$amount;
            $user_details->user_ref_id=$user_ref_id;
            $user_details->user_gender=$gender;
            $user_details->user_mob_number=$mobileno;
            $user_details->user_aadhar_number=$aadharno;
            $user_details->user_village=$village;
            $user_details->user_post=$post;
            $user_details->user_dist=$district;
            $user_details->user_state="chhattisgarh";
            $user_details->user_pin_code=$postcode;
            $user_details->user_bank_name=$bank_name;
            $user_details->user_ifsc_code=$ifsc_code;
            $user_details->user_branch_name=$branch;
            $user_details->user_acc_no=$account_number;
            $user_details->user_pan_no=$pan_number;
            $user_details->user_status=0;
            $user_details->save();
    
    
            $get_latest_userdetails = new UserDetails;
            $user_details_obj = $get_latest_userdetails::orderBy('id','DESC')->get()->first();
            $user_id = $user_details_obj->id;
    
            $member_details = new MemberDetails;
            $member_details->user_id = $user_id;
            $member_details->member_name1 = $member_name1;
            $member_details->relation1 = $relation1;
            $member_details->age1 = $age1;
            $member_details->aadhar_number1 = $aadhar_number1;
    
            if($member_name2 != null && $relation2 != null && $age2 != null && $aadhar_number2 != null){
                $member_details->member_name2 = $member_name2;
                $member_details->relation2 = $relation2;
                $member_details->age2 = $age2;
                $member_details->aadhar_number2 = $aadhar_number2;
            }
            if($member_name3 != null && $relation3 != null && $age3 != null && $aadhar_number3 != null){
                $member_details->member_name3 = $member_name3;
                $member_details->relation3 = $relation3;
                $member_details->age3 = $age3;
                $member_details->aadhar_number3 = $aadhar_number3;
            }
            if($member_name4 != null && $relation4 != null && $age4 != null && $aadhar_number4 != null){
                $member_details->member_name4 = $member_name4;
                $member_details->relation4 = $relation4;
                $member_details->age4 = $age4;
                $member_details->aadhar_number4 = $aadhar_number4;
            }
            if($member_name5 != null && $relation5 != null && $age5 != null && $aadhar_number5 != null){
                $member_details->member_name5 = $member_name5;
                $member_details->relation5 = $relation5;
                $member_details->age5 = $age5;
                $member_details->aadhar_number5 = $aadhar_number5;
            }
           $member_details->save();
           return view('registration-successful')->with('user_id',$user_id);
        }


    }


    public function contactus(){
        $name=Input::get('name');    
        $email=Input::get('email');    
        $subject=Input::get('subject');    
        $message=Input::get('message');   
        
        $contact_us = new ContactUs;
        $contact_us->name = $name;
        $contact_us->email = $email;
        $contact_us->subject = $subject;
        $contact_us->message = $message;
        $contact_us->save();
        $message = "Message Send Successfully.";
        return view('contact')->with('success',$message);
        
    }
}
