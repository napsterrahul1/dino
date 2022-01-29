<?php

namespace App\Http\Controllers;

use App\Profiles;
use App\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{

    public function index()
    {
        $user = auth()->user();
        if($user->role_id ==1){
            return view('doctor.index');
        }else{
            return view('dashboard.patient');
        }

    }

    public function search_patient(Request $request)
    {
        $patient = DB::table('profile')->where(function($query) use ($request) {

            if(isset($request->email)){
                $query->where('email','like', '%' .$request->email.'%');
            }
            if(isset($request->phone)){
                $query->where('mno','like', '%' .$request->phone.'%');
            }
            if($request->first){
                $query->where('fname','like', '%' .$request->first.'%');
            }
            if(isset($request->last)){
                $query->where('lname','like', '%' .$request->last.'%');
            }
        })->get();

        return view('doctor.search_patient',compact('patient'));
    }

    public function add_patient(Request $request)
    {

        if($request->post()){

            $check = User::where('email',$request->email)->first();
            if(!$check){
                $user = new User();
                $user->role_id = 2;
                $user->email = $request->email;
                $user->first_name = $request->fname;
                $user->phone = $request->cnumber;
                $user->last_name = $request->lname;
                $user->password = Hash::make($request->cnumber);
                $user->save();
                $u_id= $user->id;

                $checkprofile = DB::table('profile')->where('user_id',$u_id)->first();
                $params = $request->all();
//                $params =  $request->except(['_token','id']);
                if($checkprofile){
                    $profile=  DB::table('profile')->where('user_id',$u_id)->update($params);
                }else{
//                    $profile = DB::table('profile')->insert($params);
                    $profile =  DB::insert('INSERT INTO profile (user_id,fname,mname,lname,religion,sex,age,ffname,mfname,mstatus,mnotimes,blgrp,wt,ht,lnumber,mno,email,address,pincode,city,state,country,reffered_by) values ("' . $u_id . '","' . $request->fname . '","' . $request->mname . '","' . $request->lname . '","' . $request->religion . '","' . $request->sex . '","' . $request->age . '","' . $request->fathname. '","' . $request->mothname . '","' . $request->martial . '","' . $request->times . '","' . $request->bloodgrp . '","' . $request->weight . '","' . $request->height . '","' . $request->lnumber . '","' . $request->cnumber . '","' . $request->email . '","' . $request->addr . '","' . $request->pin . '","' . $request->city . '","' . $request->state . '","' . $request->country . '","' . $request->ref . '")');
                }
            }else{
                $u_id = $check->id;
            }

            if ($u_id) {
                self::insertBlankEntry($u_id,"complaint");
                self::insertBlankEntry($u_id,"disease");
                self::insertBlankEntry($u_id,"mental");
//                self::insertBlankEntry($u_id,"appetite");
                self::insertBlankEntry($u_id,"thirst");
                self::insertBlankEntry($u_id,"case_analysis");
//                self::insertBlankEntry($u_id,"food");
//                self::insertBlankEntry($u_id,"bowels");
//                self::insertBlankEntry($u_id,"urine");
                self::insertBlankEntry($u_id,"perspiration");
//                self::insertBlankEntry($u_id,"sleep");
                self::insertBlankEntry($u_id,"thermo");
//                self::insertBlankEntry($u_id,"sensitivity");
                self::insertBlankEntry($u_id,"addictions");
//                self::insertBlankEntry($u_id,"speed");
//                self::insertBlankEntry($u_id,"birthmark_g");
                self::insertBlankEntry($u_id,"birthhistory");
                self::insertBlankEntry($u_id,"preganacy");
                self::insertBlankEntry($u_id,"milestone");
                self::insertBlankEntry($u_id,"vaccination");
//                self::insertBlankEntry($u_id,"nature");
//                self::insertBlankEntry($u_id,"childhood");
//                self::insertBlankEntry($u_id,"school");
//                self::insertBlankEntry($u_id,"college");
//                self::insertBlankEntry($u_id,"work");
//                self::insertBlankEntry($u_id,"traumatic");
//                self::insertBlankEntry($u_id,"relation");
//                self::insertBlankEntry($u_id,"sexual");
                self::insertBlankEntry($u_id,"specific_mental");
                self::insertBlankEntry($u_id,"women");


                $arr = array('msg' => true, 'error' => false);
                $jsn = json_encode($arr);
                return redirect('add-patient')->with('success','Entry Stored');
            } else {

            }
        }
        $user = [];
        return view('doctor.add_patient',compact('user'));
    }

    public function insertBlankEntry($user_id, $table_name) {
        $check = DB::table($table_name)->where('user_id',$user_id)->first();
        if(!$check){
            DB::table($table_name)->insert(
                ['user_id' => $user_id]
            );
        }
    }

    public function new_users(Request $request)
    {
        $users = User::where('id','!=',1)->get();
        return view('doctor.new_users',compact('users'));
    }
     public function follow_ups(Request $request)
    {
        $user = auth()->user();
        if($user->role_id ==2){
            $pid = $user->id;
        }else if($request->id){
            $pid = $request->id;
        }else{
            $pid = '';
        }

        $user = [];
        if($pid == ''){
            $data = DB::table('feedback')
                ->join('profile', 'feedback.user_id', '=', 'profile.user_id')
                ->select('feedback.*', 'profile.fname')
                ->get();
        }else{
            $data = DB::table('feedback')
                ->join('profile', 'feedback.user_id', '=', 'profile.user_id')
                ->select('feedback.*', 'profile.fname')
                ->where('feedback.user_id',$pid)
                ->get();
        }
//        $qry = DB::table('select a.*,b.* from feedback as a INNER JOIN profile as b ON a.user_id  where  a.user_id=b.user_id AND a.user_id = "'.$pid.'"'); //set select query
        return view('doctor.follow_ups',compact('data','pid'));
    }
    public function medicine_requests(Request $request)
    {
        $user = auth()->user();
        if($user->role_id ==2){
            $pid = $user->id;
        }else if($request->id){
            $pid = $request->id;
        }else{
            $pid = '';
        }

        $data = [];
        if($request->post()){
//            $qry = DB::table('INSERT INTO order_medicine (user_id,date_of_order,email_id,medi_description,paidstatus,disaptchstatus)values("' . $uid . '","' . $tdate .'","' . $oemailid .'","' . $odescription.'","' . $opaid.'","' . $odispatch.'")');

        }

        if($pid == ''){
            $data = DB::table('order_medicine')
                ->join('profile', 'order_medicine.user_id', '=', 'profile.user_id')
                ->select('order_medicine.*', 'profile.fname')
                ->get();
        }else{
            $data = DB::table('order_medicine')
                ->join('profile', 'order_medicine.user_id', '=', 'profile.user_id')
                ->select('order_medicine.*', 'profile.fname')
                ->where('order_medicine.user_id',$pid)
                ->get();
        }
//
        return view('doctor.medicine_requests',compact('data'));
    }
    public function deletemedicine($id){
        $data = DB::table('order_medicine')
            ->where('oid',$id)
            ->delete();
        return redirect()->back();
    }
    public function deletefeedback($id){
        $data = DB::table('feedback')
            ->where('oid',$id)
            ->delete();
        return redirect()->back();
    }
    public function change_password(Request $request)
    {
        if($request->post()){

            $request->validate([
                'current_password' => ['required', new MatchOldPassword],
                'new_password' => ['required'],
                'new_confirm_password' => ['same:new_password'],
            ]);

            User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

//            dd('Password change successfully.');
            return redirect()->back();

//            $qry = DB::table('INSERT INTO order_medicine (user_id,date_of_order,email_id,medi_description,paidstatus,disaptchstatus)values("' . $uid . '","' . $tdate .'","' . $oemailid .'","' . $odescription.'","' . $opaid.'","' . $odispatch.'")');

        }

        $user = [];
        return view('doctor.change_password',compact('user'));
    }

    public function caseanalysis(Request $request)
    {
        if ($request->post('case_id')) {
            $case_id = $request->case_id;
            $journey = $request->journey;
            $param = [
                'user_id' => $request->uid,
                'misam' => $request->miasmfrom,
                'af' => $request->af,
                'disposition' => $request->disposition,
                'will' => $request->will,
                'intellect' => $request->intellect,
                'moral' => $request->morals,
                'memory' => $request->memory,
                'emotional_reaction' => $request->emotional,
                'sessitiv' => $request->sensitive,
                'speed' => $request->speed,
                'gthermal' => $request->thermal,
                'gthirst' => $request->thirst,
                'gside' => $request->side,
                'sun' => $request->sun,
                'noise' => $request->noise,
                'strong_odour' => $request->strong,
                'touch' => $request->touch,
                'smell' => $request->smell,
                'hearing' => $request->hearing,
                'taste' => $request->taste,
                'vision' => $request->vision,
                'anypqr' => $request->physical,
                'drug_history' => $request->drug,
                'investigation' => $request->investigation,
                'rubric_taken' => $request->rubrics,
                'remedies' => $request->remedies,
                'remedies_reason' => $request->reasons,
                'patDate' => $request->patDate
            ];
            $profile = DB::table('case_analysis')->where('case_id', $case_id)->update($param);
            if ($case_id) {
                for ($i = 0; $i < count($journey); $i++) {
                    if ($journey[$i]->journey_id == "0") {
                        $param = [
                            'journey_layer' => $journey[$i]->journey_layer,
                            'journey_dieases' => $journey[$i]->journey_dieases,
                            'journey_miasm' => $journey[$i]->journey_miasm,
                            'case_id' => $case_id
                        ];
                        $profile1 = DB::table('case_journey')->where('journey_id', $journey[$i]->journey_id)->insert($param);
                    } else {
                        $param = [
                            'journey_layer' => $journey[$i]->journey_layer,
                            'journey_dieases' => $journey[$i]->journey_dieases,
                            'journey_miasm' => $journey[$i]->journey_miasm
                        ];
                        $profile1 = DB::table('case_journey')->where('journey_id', $journey[$i]->journey_id)->update($param);
                    }
                }
                $arr = "Case Analysis data saved successfully";
                return redirect()->back()->with('success', $arr);
            }
        }

            $user = auth()->user();
            if ($user->role_id == 2) {
                $pid = $user->id;
            } else if ($request->id) {
                $pid = $request->id;
            } else {
                $pid = '';
            }


            if ($pid == '') {
                $data = DB::table('case_analysis')
                    ->leftJoin('case_journey', 'case_journey.case_id', '=', 'case_analysis.case_id')
                    ->where('case_analysis.user_id', '=', $pid)
                    ->select('case_analysis.*', 'case_analysis.*')
                    ->first();
            } else {
                $data = DB::table('case_analysis')
                    ->leftJoin('case_journey', 'case_journey.case_id', '=', 'case_analysis.case_id')
                    ->where('case_analysis.user_id', '=', $pid)
                    ->select('case_analysis.*', 'case_analysis.*')
                    ->first();
            }

           $profile = Profiles::where('user_id',$user->id)->first();


            return view('doctor.case', compact('data', 'pid','user','profile'));
    }

    public function history(Request $request)
    {
        if($request->post('user_id')){
            $param =  $request->except(['_token','id']);
            $profile = Profiles::where('user_id',$request->user_id)->update($param);
        }
        $user = auth()->user();
        if($user->role_id ==2){
            $pid = $user->id;
        }else if($request->id){
            $pid = $request->id;
        }else{
            $pid = '';
        }
        if($pid==''){
            $data = [];
        }else{
            $data = DB::table('profile')->where('user_id',$pid)->first();
        }
        return view('doctor.history',compact('pid','data'));
    }

    public function complaint(Request $request)
    {
        if($request->post('complain')){
            $param =  $request->except(['_token','id']);
            $param['user_id'] = $request->user_id;
            if($request->complaint_id){
                $profile = DB::table('complaint')->where('complaint_id',$request->complaint_id)->update($param);
            }else{
                $profile = DB::table('complaint')->insert($param);
            }
           return redirect()->back();
        }

        $user = auth()->user();
        if($user->role_id ==2){
            $pid = $user->id;
        }else if($request->id){
            $pid = $request->id;
        }else{
            $pid = '';
        }
//        $data = [];

        if($pid==''){
            $data = DB::table('complaint')->get();
        }
        else{
            $data = DB::table('complaint')->where('user_id',$pid)->get();
//            DB::table('select a.*,b.profile_id,b.fname,b.mname,b.lname,b.age,b.sex from complaint as a INNER JOIN profile as b ON a.user_id where a.user_id = "'.$pid.'" AND a.user_id=b.user_id'); //set select query
        }

        return view('doctor.complaint',compact('pid','data'));
    }
    public function prescription(Request $request)
    {
        if($request->post('prescription')){
            $param =  $request->except(['_token','id']);
            $param['user_id'] = $request->user_id;
            if($request->prescription_id){
                $profile = DB::table('prescription')->where('prescription_id',$request->prescription_id)->update($param);
            }else{
                $profile = DB::table('prescription')->insert($param);
            }
            return redirect()->back();
        }

        $user = auth()->user();
        if($user->role_id ==2){
            $pid = $user->id;
        }else if($request->id){
            $pid = $request->id;
        }else{
            $pid = '';
        }
        if($pid==''){
            $data = DB::table('prescription')->get();
        }
        else{
            $data = DB::table('prescription')->where('user_id',$pid)->get();
       }
        return view('doctor.prescription',compact('pid','data'));
    }
    public function testimonials(Request $request)
    {
        $user = auth()->user();
        if($user->role_id ==2){
            $pid = $user->id;
        }else if($request->id){
            $pid = $request->id;
        }else{
            $pid = '';
        }
        if($request->post()) {
//            $data = DB::table('INSERT INTO  testimonial (user_id,dateofpost,test_description) values ("' . $uid . '","' . $tdate . '","' . $test . '")');
        }
        $data = [];
//        $data = DB::table('select a.*,b.* from testimonial as a INNER JOIN profile as b ON a.user_id  where  a.user_id=b.user_id AND a.user_id = "'.$pid.'"'); //set select
        return view('doctor.testimonials',compact('pid','data'));
    }

    public function makeup(Request $request)
    {
        if($request->post('disease_id')){
            $param =  $request->except(['_token','id']);

//            $param['user_id'] = $request->id;
            if($request->disease_id){
                $profile = DB::table('disease')->where('disease_id',$request->disease_id)->update($param);
            }
            return redirect()->back();
        }
        $user = auth()->user();
        if($user->role_id ==2){
            $pid = $user->id;
        }else if($request->id){
            $pid = $request->id;
        }else{
            $pid = '';
        }

        if($pid==''){
            $data = DB::table('disease')->first();
        }
        else{
            $data = DB::table('disease')->where('user_id',$pid)->first();
        }
        return view('doctor.makeup',compact('pid','data'));
    }

    public function general(Request $request)
    {

        if($request->post('physical_id')){
            $param =  $request->except(['_token','id']);


//            $param['user_id'] = $request->id;
            if($request->physical_id){
                $profile = DB::table('physical')->where('physical_id',$request->physical_id)->update($param);
            }
            return redirect()->back();
        }

        $user = auth()->user();
        if($user->role_id ==2){
            $pid = $user->id;
        }else if($request->id){
            $pid = $request->id;
        }else{
            $pid = '';
        }

        if($pid==''){
            $data = '';
        }
        else{
            $data = DB::table('physical')->where('user_id', $pid)->first();
        }
        return view('doctor.general',compact('pid','data'));
    }

    public function save_followups(Request $request){
        if($request->post('feedback_id')){
            $param =  $request->except(['_token','id']);
//            $param['user_id'] = $request->id;
            if($request->feedback_id){
                $profile = DB::table('feedback')->where('feedback_id',$request->feedback_id)->update($param);
            }
            return redirect()->back();
        }
    }
    public function ajax_form(Request $request){
        if($request->get('value')){

//            $param['user_id'] = $request->id;
            if($request->id == 'paid'){
                $profile = DB::table('order_medicine')->where('oid',$request->value)->update(['paidstatus'=>$request->status]);
            }else{
                $profile = DB::table('order_medicine')->where('oid',$request->value)->update(['disaptchstatus'=>$request->status]);
            }
            return response()->json(['message'=>'success']);
        }
    }

    public function birth(Request $request)
    {
         if($request->post('birthhistory_id')){
             $param =  $request->except(['_token','id']);
//            $param['user_id'] = $request->id;
             if($request->birthhistory_id){
                 $profile = DB::table('birthhistory')->where('birthhistory_id',$request->birthhistory_id)->update($param);
             }
             return redirect()->back();
         }
        $user = auth()->user();
        if($user->role_id ==2){
            $pid = $user->id;
        }else if($request->id){
            $pid = $request->id;
        }else{
            $pid = '';
        }
        if($pid==''){
            $data = '';
        }
        else{
            $data = DB::table('birthhistory')->where('user_id', $pid)->first();
        }
        return view('doctor.birth',compact('pid','data'));
    }
    public function does(Request $request)
    {
        $user = auth()->user();
        if($user->role_id ==2){
            $pid = $user->id;
        }else if($request->id){
            $pid = $request->id;
        }else{
            $pid = '';
        }
        $data = [];
//                $qry = DB::table('select * from  birthhistory');
//            }
//        else{
//
//        $qry = DB::table('select a.*,b.* from  profile as a INNER JOIN birthhistory as b ON a.user_id where a.user_id = "'.$pid.'" AND a.user_id=b.user_id'); //set select query
//        }
        return view('doctor.do',compact('pid','data'));
    }

    public function mother(Request $request)
    {
        if($request->post('preganacy_id')){
            $param =  $request->except(['_token','id']);
//            $param['user_id'] = $request->id;
            if($request->preganacy_id){
                $profile = DB::table('preganacy')->where('preganacy_id',$request->preganacy_id)->update($param);
            }
            return redirect()->back();
        }
        $user = auth()->user();
        if($user->role_id ==2){
            $pid = $user->id;
        }else if($request->id){
            $pid = $request->id;
        }else{
            $pid = '';
        }
        if($pid==''){
            $data = '';
        }
        else{
            $data = DB::table('preganacy')->where('user_id', $pid)->first();
        }
        return view('doctor.mother',compact('pid','data'));
    }



    public function milestone(Request $request)
    {
        if($request->post('milestone_id')){
            $param =  $request->except(['_token','id']);
//            $param['user_id'] = $request->id;
            if($request->milestone_id){
                $profile = DB::table('milestone')->where('milestone_id',$request->milestone_id)->update($param);
            }
            return redirect()->back();
        }
        $user = auth()->user();
        if($user->role_id ==2){
            $pid = $user->id;
        }else if($request->id){
            $pid = $request->id;
        }else{
            $pid = '';
        }
        if($pid==''){
            $data = '';
        }
        else{
            $data = DB::table('milestone')->where('user_id', $pid)->first();
        }

        return view('doctor.milestone',compact('pid','data'));
    }

    public function vaccination(Request $request)
    {
        if($request->post('vaccination_id')){
            $param =  $request->except(['_token','id']);
//            $param['user_id'] = $request->id;
            if($request->vaccination_id){
                $profile = DB::table('vaccination')->where('vaccination_id',$request->vaccination_id)->update($param);
            }
            return redirect()->back();
        }
        $user = auth()->user();
        if($user->role_id ==2){
            $pid = $user->id;
        }else if($request->id){
            $pid = $request->id;
        }else{
            $pid = '';
        }
        if($pid==''){
            $data = '';
        }
        else{
            $data = DB::table('vaccination')->where('user_id', $pid)->first();
        }
        return view('doctor.vaccination',compact('pid','data'));
    }

    public function mental(Request $request)
    {
        if($request->post('mental_id')){
            $param =  $request->except(['_token','id']);
//            $param['user_id'] = $request->id;
            if($request->mental_id){
                $profile = DB::table('mental')->where('mental_id',$request->mental_id)->update($param);
            }
            return redirect()->back();
        }
        $user = auth()->user();
        if($user->role_id ==2){
            $pid = $user->id;
        }else if($request->id){
            $pid = $request->id;
        }else{
            $pid = '';
        }
        if($pid==''){
            $data = '';
        }
        else{
            $data = DB::table('mental')->where('user_id', $pid)->first();
        }
        return view('doctor.mental',compact('pid','data'));
    }

    public function mental1(Request $request)
    {
        if($request->post('smm_id')){
            $param =  $request->except(['_token','id','sensitive']);
            $param['sensitive'] = implode(',', $request->sensitive);
//                dd($param);
//            $param['user_id'] = $request->id;
            if($request->smm_id){
                $profile = DB::table('specific_mental')->where('smm_id',$request->smm_id)->update($param);
            }
            return redirect()->back();
        }
        $user = auth()->user();
        if($user->role_id ==2){
            $pid = $user->id;
        }else if($request->id){
            $pid = $request->id;
        }else{
            $pid = '';
        }
        if($pid==''){
            $data = '';
        }
        else{
            $data = DB::table('specific_mental')->where('user_id', $pid)->first();
        }
//            $qry = DB::table('select a.*,b.* from specific_mental as a INNER JOIN profile as b ON a.user_id where a.user_id = "'.$pid.'" AND a.user_id=b.user_id'); //set select query
        return view('doctor.mental1',compact('pid','data'));
    }


}
