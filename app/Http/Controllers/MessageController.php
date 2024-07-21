<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Http\Requests\MessageRequest;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('website.blog.contact');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MessageRequest $request)
    {
        try {
            Message::create([
                'nom' => $request->nom,
                'email' => $request->email,
                'sujet' => $request->sujet,
                'user_message' => $request->user_message,
            ]);
    
            return back()->with('success', 'Votre message a été envoyé avec succès.');
        } catch (\Exception $e) {
            // En cas d'erreur, rediriger avec un message d'erreur
            return back()->with('error', 'Une erreur est survenue lors de l\'envoi du message.');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $message = Message::findOrFail($id); 
        return view('auth.messages.show', ['message' => $message]);  

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function newMessageCount()
    {
    $remainingMessagesCount = Message::where('is_read', false)->count();  // Assurez-vous de définir comment vous déterminez les nouveaux messages
    return response()->json(['remainingMessagesCount' => $remainingMessagesCount]);
    }





}
