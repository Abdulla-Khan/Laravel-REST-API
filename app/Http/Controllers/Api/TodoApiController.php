<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Persons;
use Illuminate\Http\Request;
use Validator;

class TodoApiController extends Controller
{
    public function index(){
        $todo =Persons::all();
        return response()->json([
            "status"=>200,
            "todo"=>$todo
        ]);
    }
    public function addData(Request $request){
 
            $validator = Validator:: make(
                $request->all(),[
                    "TodoItem"=>"required|string|max:191"
                ]
                );
                if($validator->fails()){
                      return response () ->json ([
                        
                        'status' => 422,
                        
                        'errors' => $validator->messages ()
                        
                        
                        
                      ], 422);
                }
                else{
                    $todo = Persons::create(
                      [  "TodoItem" => $request->TodoItem,]
                    );
                    if($todo){
                        return response()->json([
                            "status"=>200,
                            "message"=>"Item"
                        ],200);
                    }

                    else{
                        return response()->json([
                            "status"=>500,
                            "message"=>"Something Went Wrong"
                        ],500);
                        
                    }
                }
        
    }
    public function show($id){
        $todo =Persons::find($id);
        if($todo){
            return response()->json([
                "status"=>200,
                "todo"=>$todo
            ],200);
        }
        else{
            return response()->json([
                "status"=>404,
                "message"=>"Not Found"
            ],404);
        }


    }
    public function update(Request $request,int $id){
        $validator = Validator:: make(
            $request->all(),[
                "TodoItem"=>"required|string|max:191"
            ]
            );
            if($validator->fails()){
                  return response () ->json ([
                    
                    'status' => 422,
                    
                    'errors' => $validator->messages ()
                    
                    
                    
                  ], 422);
            }
            else{
        $todo =Persons::find($id);

                $todo->update(
                  [  "TodoItem" => $request->TodoItem,]
                );
                if($todo){
                    return response()->json([
                        "status"=>200,
                        "message"=>"Item updated sucessfully"
                    ],200);
                }

                else{
                    return response()->json([
                        "status"=>404,
                        "message"=>"Item Not Found"
                    ],404);
                    
                }
            }
    
        
    }

    public function delete($id){
        $todo =Persons::find($id);
        if($todo){
            $todo->delete();
            return response()->json([
                "status"=>200,
                "message"=>"Item deleted sucessfully"
            ],200);
        }
        else{
            return response()->json([
                "status"=>404,
                "message"=>"Not Found"
            ],404);
        }
    }
}