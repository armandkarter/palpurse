<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class FgvservizioController extends Controller
{
    // Contact
    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'user_message' => $request->message,
        ];

        Log::info('Tentative d\'envoi d\'email', $data);

        try {
            $recipients = [
               'admin@fgvservizio.com',
            'info.fgvservizio@gmail.com',
            ];

            Mail::send('email_contact', $data, function ($message) use ($data, $recipients) {
                $message->to($recipients)
                        ->subject('Nouveau contact - FGVSERVIZIO: ' . $data['name'])
                        ->from(config('mail.from.address') ?? 'admin@fgvservizio.com', 'FGVSERVIZIO');
            });

            Log::info('Email envoyé avec succès');
            return back()->with('success', __('messages.contact_success'));
        } catch (\Exception $e) {
            Log::error('Erreur lors de l\'envoi d\'email: ' . $e->getMessage());
            return back()->with('error', __('messages.contact_error'));
        }
    }

    // Demande de prêt
    public function sendLoanRequest(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:30',
            'email' => 'required|email',
            'type' => 'required|string|max:100',
            'amount' => 'required|numeric|min:1',
            'duration' => 'required|numeric|min:1',
        ]);

        $data = [
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'type' => $request->type,
            'amount' => $request->amount,
            'duration' => $request->duration,
        ];

        $recipients = [
            'admin@fgvservizio.com',
            'info.fgvservizio@gmail.com',
        ];

        try {
            foreach ($recipients as $recipient) {
                Mail::send('email_loan_request', $data, function ($message) use ($data, $recipient) {
                    $message->to($recipient)
                            ->subject('Nouvelle demande de prêt - FGVSERVIZIO')
                            ->from(config('mail.from.address') ?? 'admin@fgvservizio.com', 'FGVSERVIZIO');
                });
            }

            Log::info('Demande de prêt envoyée avec succès :', $data);
            return back()->with('success', __('messages.application_success'));
        } catch (\Exception $e) {
            Log::error('Erreur lors de l\'envoi de la demande : ' . $e->getMessage());
            return back()->with('error', __('messages.application_error'));
        }
    }
}
