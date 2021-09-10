<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
        //
        public function getAccount()
        {
            return response()->json(Account::all(), 200);
        }

        public function getAccountById($id){
            $account = Account::find($id);
            if(is_null($account)){
                return response()->json(['message' => 'Account Not Found'], 404);
            }
            return response()->json($account::find($id), 200);
        }

        public function addAccount(Request $request){
            $account = Account::create($request->all());
            return response($account, 201);
        }

        public function updateAccount(Request $request, $id){
            $account = Account::find($id);
            if(is_null($account)){
                return response()->json(['message' => 'Account Not Found'], 404);
            }
            $account->update($request->all());
            return response($account, 200);
        }

        public function deleteAccount(Request $request, $id){
            $account = Account::find($id);
            if(is_null($account)){
                return response()->json(['message' => 'Account Not Found'], 404);
            }
            $account->delete();
            return response()->json(null, 204);
        }


}
