<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class CommentController extends Controller{


	public function index(){
		$users=Http::get("http://localhost:8080/Comments")
		->json();
		dump($users);



		


	//return view("welcome", [ "users" => $users ,]);
	}
	public function affiche(){
		return view("Comment");
	}



	public function store(){


		$body=request("body");
		$userid=request("userid");
		$postid=request("postid");
		$date=request("date");


		//if($body!=null && $postid!=null && $userid!=null && $date!=null){

		$response=Http::post("http://localhost:8080/Comments", [
        "body" =>$body,
        "userId"=> $userid,
        "postId"=> $postid,
        "createdAt"=> $date,



		])->json();
		
		return $response;
		




	}
	 public function show() {
        $commentaire=Http::get("localhost:8080/CommentPost/6258a15f099715739caffe38");
        $commentaires=$commentaire->json();
        
        $user=Http::get('localhost:8080/Users');
        $users=$user->json();
        $result = Array();
        foreach ($commentaires as $a) {
            foreach ($users as $b) {
                if($a['userId'] ==  $b['id']) {
                    $result[] = array_merge($b,$a);
                }
            }
        }
       return view('Comment',['result'=>$result,]);
     }




}
