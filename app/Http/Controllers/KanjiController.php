<?php

namespace App\Http\Controllers;

use App\Kanji;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class KanjiController extends Controller
{
      public function index () {
        // GET /kanjis
        // list
        $kanjis = Kanji::all();
        return Response::json($kanjis);
      }
      public function create (Request $request) {
        // POST /kanjis
        // create new kanji
        Kanji::create($request->all());
        return Response::json(['created' => true]);
      }
      public function show ($id) {
        // GET /kanjis/$id
        $kanji = Kanji::find($id);
        return Response::json($kanji);
      }
      public function update (Request $request, $id) {
        // PUT /kanjis/$id
        // update a single kanji
        $kanji = Kanji::find($id);
        $kanji -> update($request->all());
        return Response::json(['updated' => true]);
      }
      public function destroy ($id){
        // DELETE /kanjis/$id
        $kanji = Kanji::find($id);
        $kanji->delete();
        return Response::json(['deleted' => true]);
      }
}
