<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Detail;
use App\Models\Inscription;
use App\Models\Field;
use App\Models\Place;
use App\Models\Team;
use App\Models\Contact;
use App\Models\User;
use App\Models\Theme;
use App\Models\Video;
use GuzzleHttp\Psr7\Response;
use App\Models\Promotion;
use App\Mail\Contactanos;
use App\Mail\Inscripcion;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function home()
    {
        $torneos = Event::all();

        //dd($torneos);
        return view('home',compact('torneos'));
    }

    public function details(Request $request)
    {        
      $evento = Event::find($request->id);
      $archivo = json_decode($evento->bases);
      $detalle = Detail::where('event_id', $request->id)->first();
      $participantes = Inscription::where('event_id',$request->id)->where('status',1)->get();
        return view('details',compact('evento','participantes','detalle','archivo'));
    }

  
    public function profile(Request $request)
    {
      
        return view('profile');
    }

    public function correo(Request $request)
    {
       $correo = new Contactanos($request);
        try {
            Mail::to('enviosgvp@gmail.com')->send($correo);
            return response()->json(['status' => true, 'msg' => "El correo fue enviado satisfactoriamente"]);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'msg' => "Hubo un error al enviar, inténtalo de nuevo más tarde."]);
        }
    }

    public function enviar(Request $request)
    { 
        $correo = new Inscripcion($request);
        try {    
            $usuario = Auth::user()->email;
            $imagen=$request->file("file"); 
            $extension = $imagen->getClientOriginalExtension();
            $filename  = 'documento-' . str::random(32) . '.' . $extension;
            $paths = Storage::putFileAs('public/vaucher',$imagen,$filename);
            $ruta = "/vaucher/".$filename;
         
            $inscripcion = Inscription::create([
                'event_id' => $request->evento,
                'apoderado' => $request->apoderado,
                'vinculo' => $request->vinculo,
                'imagen_url' => $ruta,
                'user_id' => $request->id,
                'equipo' => $request->equipo
            ]);
            Mail::to($usuario)->send($correo);
            return response()->json(['status' => true, 'msg' => 'Exito']); 
        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'msg' => 'Error:'.$th]);
        }    
    }

    public function about()
    {
        $nosotros = Field::all()->first();
        $equipo = Team::all();
        $temas = Theme::all();
        $videos = Video::all();
        $cargo = Place::all();
        $promocion = Promotion::all();
        return view('about',compact('nosotros','equipo','temas','videos','cargo','promocion'));
    }  

    public function contact()
    {
        $contacto = Contact::all()->first();
        return view('contact',compact('contacto'));
    }  
}
