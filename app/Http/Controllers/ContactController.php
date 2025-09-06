<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
   public function store(Request $request)
    {
        // التحقق من البيانات
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'subject' => 'required|string|max:150',
            'message' => 'required|string',
        ]);

        // حفظ الرسالة في قاعدة البيانات
        $contact = Contact::create($validated);

        // إرسال الإيميل
        Mail::to("black.lionmenswaer@gmail.com")->send(new ContactMail($contact));

        return redirect()->back()->with('success', 'تم إرسال رسالتك بنجاح، وسنقوم بالرد قريباً 👌');
    }
}
