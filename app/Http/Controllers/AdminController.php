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
use App\Models\Message;
use App\Models\Theme;
use App\Models\Video;
use GuzzleHttp\Psr7\Response;
use App\Models\Promotion;
use App\Mail\Contactanos;
use App\Mail\Inscripcion;
use App\Mail\LibroReclamaciones;
use App\Models\Product;
use App\Models\Solution;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function home()
    {
        $torneos = Event::all();
        $datos = Solution::all()->first();
        $productos = Product::all();

        //dd($torneos);
        return view('home',compact('torneos','datos','productos'));
    }

    public function registrar(Request $request)
    {
         try {
            $tipo_doc="valor";
            if ($request->tipo_doc==1) {
                $tipo_doc = "DNI";
            }
            elseif ($request->tipo_doc==2) {
                $tipo_doc = "PASAPORTE";
            }
            
            $user = User::create([
                'name' => $request->name,
                'nick_name' => $request->nick_name,
                'tipo_doc' => $tipo_doc,
                'numero_doc' => $request->numero_doc,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                
            ]);

            Auth::login($user);

             return response()->json(['status' => true, 'msg' => 'Registrado con exito']); 
         } catch (\Throwable $th) {
             return response()->json(['status' => false, 'msg' => 'Error:'.$th->getMessage()]);
         }
        
    }

    public function verificacion(Request $request)
    {
        $mensajes = Message::all()->first();
        try {
            if ($request->tipo_doc == 0) {
                return response()->json(['status' => false, 'msg' => 'Selecciona Tipo Documento']);                 
            }
            elseif ($request->numero_doc == '') {
                return response()->json(['status' => false, 'msg' => 'Numero de documento es requerido']); 
            }
            elseif ($request->email == '') {
                return response()->json(['status' => false, 'msg' => 'Email es requerido']); 
            }
            elseif ($request->password == '') {
                return response()->json(['status' => false, 'msg' => 'Password es requerido']); 
            }
            elseif ($request->phone == '') {
                return response()->json(['status' => false, 'msg' => 'Telefono es requerido']); 
            }

            $tipo_doc="valor";
            if ($request->tipo_doc==1) {
                $tipo_doc = "DNI";
            }
            elseif ($request->tipo_doc==2) {
                $tipo_doc = "PASAPORTE";
            }

            $ruta = "https://mensajex.com/api/ChatBot/apisend";
            $limit = 6;
            $random = random_int(10 ** ($limit - 1), (10 ** $limit) - 1);

            Http::post($ruta, [
                "numero_celular" => $request->phone,
                "mensaje" => $mensajes->validar_phone_wpp . ' ' . $random,
                "ruta_imagen" => "",
            ]);

            return response()->json(['status' => true, 'msg' => $random]); 

        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'msg' => 'Error:'.$th->getMessage()]);
        }
        
    }

    public function details(Request $request)
    {    
        $datos = Solution::all()->first();
        $user = auth()->user();    
        $evento = Event::find($request->id);
        $archivo = json_decode($evento->bases);
        $detalle = Detail::where('event_id', $request->id)->first();
        $participantes = Inscription::where('event_id',$request->id)->where('status',1)->get();

        return view('details',compact('evento','participantes','detalle','archivo','user','datos'));
    }

    public function productoid(Product $product)
    {
        $datos = Solution::all()->first();
        return view('productid',compact('product','datos'));
    }

    public function reclamaciones()
    {
        $datos = Solution::all()->first();
        return view('libro-reclamaciones', compact('datos'));
    }
  
    public function profile(Request $request)
    {
        $datos = Solution::all()->first();
        return view('profile',compact('datos'));
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

    public function libro(Request $request)
    {
       $correo = new LibroReclamaciones($request);
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
            if ($request->gratis==0) {
                $imagen=$request->file("file"); 
                $extension = $imagen->getClientOriginalExtension();
                $filename  = 'documento-' . str::random(32) . '.' . $extension;
                $paths = Storage::putFileAs('public/vaucher',$imagen,$filename);
                $ruta = "/vaucher/".$filename;
            }
            else{
                $ruta = "";
            }
           
         
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
        $datos = Solution::all()->first();
        return view('about',compact('nosotros','equipo','temas','videos','cargo','promocion','datos'));
    }  

    public function contact()
    {
        $datos = Solution::all()->first();
        $contacto = Contact::all()->first();
        return view('contact',compact('contacto','datos'));
    }  
}
