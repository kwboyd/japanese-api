<?php

namespace App\Http\Controllers;

use App\Particle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class ParticleController extends Controller
{
  public function index () {
    // GET /particles
    // list
    $particles = Particle::all();
    return Response::json($particles);
  }
  public function create (Request $request) {
    // POST /particles
    // create new particle
    Particle::create($request->all());
    return Response::json(['created' => true]);
  }
  public function show ($id) {
    // GET /particles/$id
    $particle = Particle::find($id);
    return Response::json($particle);
  }
  public function update (Request $request, $id) {
    // PUT /particles/$id
    // update a single particle
    $particle = Particle::find($id);
    $particle -> update($request->all());
    return Response::json(['updated' => true]);
  }
  public function destroy ($id){
    // DELETE /particles/$id
    $particle = Particle::find($id);
    $particle->delete();
    return Response::json(['deleted' => true]);
  }
}
