<?php



namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use App\Services\Contracts\AuthServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
 
    protected $userAuth;




    public function __construct( AuthServiceInterface $userAuth )
    {
    
        $this->userAuth = $userAuth;
     
        
    }
    // Método para mostrar la vista de chat
    public function index(Request $request)
    {

        $user = $this->userAuth->getAuthenticatedUser();

        if (!$user) {
            return redirect()->route('login')->withErrors(['error' => 'Debe iniciar sesión para acceder a esta página.']);
        }

        // Obtener los IDs de los usuarios con los que has intercambiado mensajes
        $userIds = Message::where('sender_id', Auth::id())
                          ->pluck('recipient_id')
                          ->merge(Message::where('recipient_id', Auth::id())->pluck('sender_id'))
                          ->unique();

        // Obtener solo los usuarios que tienen mensajes contigo y cargar su perfil
        $users = User::with('profile') // Cargar el perfil de cada usuario
                     ->whereIn('id', $userIds)
                     ->get();

        $selectedUserId = $request->input('user_id'); // Obtener el ID del usuario seleccionado
        
        // Cargar mensajes solo si hay un usuario seleccionado
        $messages = [];
        if ($selectedUserId) {
            $messages = Message::where(function($query) use ($selectedUserId) {
                $query->where('sender_id', $selectedUserId)
                      ->where('recipient_id', Auth::id());
            })->orWhere(function($query) use ($selectedUserId) {
                $query->where('sender_id', Auth::id())
                      ->where('recipient_id', $selectedUserId);
            })->with(['sender', 'sender.profile']) // Cargar el remitente y su perfil
            ->get();
        }
        
        return view('chat', compact('users', 'messages', 'selectedUserId'));
    }
    


    // Método para enviar un mensaje
    public function sendMessage(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
            'recipient_id' => 'required|exists:users,id'
        ]);

        $message = Message::create([
            'sender_id' => Auth::id(),
            'recipient_id' => $request->recipient_id,
            'message' => $request->message,
        ]);

        return response()->json($message);
    }

    // Método para obtener los mensajes entre usuarios
    public function getMessages($recipient_id)
    {
        $messages = Message::where(function($query) use ($recipient_id) {
            $query->where('sender_id', $recipient_id)
                  ->where('recipient_id', Auth::id());
        })->orWhere(function($query) use ($recipient_id) {
            $query->where('sender_id', Auth::id())
                  ->where('recipient_id', $recipient_id);
        })->with('sender') // Asegúrate de incluir el remitente
        ->get();
    
        return response()->json($messages);
    }
    public function getNewMessagesCount()
{
    $userId = Auth::id();
    $users = User::all(); // O filtra según tus necesidades
    $counts = [];

    foreach ($users as $user) {
        $counts[$user->id] = Message::where('recipient_id', $user->id)
                                     ->where('is_read', false)
                                     ->count();
    }

    return response()->json($counts);
}

    
}



