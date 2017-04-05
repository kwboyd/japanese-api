<?php

namespace App\Http\Controllers;

use App\Vocab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class VocabController extends Controller
{
      public function index () {
        // GET /vocabs
        // list
        $vocabs = Vocab::all();
        return Response::json($vocabs);
      }
      public function create (Request $request) {
        // POST /vocabs
        // create new vocab
        Vocab::create($request->all());
        return Response::json(['created' => true]);
      }
      public function show ($id) {
        // GET /vocabs/$id
        $vocab = Vocab::find($id);
        return Response::json($vocab);
      }
      public function update (Request $request, $id) {
        // PUT /vocabs/$id
        // update a single vocab
        $vocab = Vocab::find($id);
        $vocab -> update($request->all());
        return Response::json(['updated' => true]);
      }
      public function destroy ($id){
        // DELETE /vocabs/$id
        $vocab = Vocab::find($id);
        $vocab->delete();
        return Response::json(['deleted' => true]);
      }
}
