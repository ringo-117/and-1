<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function form()
    {
        return view('contact-form');
    }

    public function confirm(Request $request)
    {
        $validated = $request->validate([
            'company' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'mail' => 'required|email',
            'telephone' => 'required|string',
            'message' => 'required|string',
            'privacy' => 'required'  // プライバシーポリシーの同意必須
        ]);

        return view('contact-confirm', ['data' => $request->all()]);
    }

    public function send(Request $request)
    {
        $data = $request->all();

        Mail::raw("会社名: {$data['company']}\n部署名: {$data['section']}\n名前: {$data['name']}\n所在地: {$data['location']}\nメール: {$data['mail']}\n電話番号: {$data['telephone']}\n業種: {$data['sector']}\nお問い合わせ内容: {$data['message']}", function ($message) use ($data) {
            $message->to('ameringo1226@gmail.com')
                    ->subject('お問い合わせがありました');
        });

        return redirect()->route('contact.thanks');
    }

    public function thanks()
    {
        return view('contact-thanks');
    }
}
