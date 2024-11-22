<?php

namespace App\Http\Controllers\Backend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('backend.dashboard');
    }

    public function contact()
    {
        $title = 'Yêu cầu liên hệ';
        $contacts = Contact::latest()->get();
        return view('backend.contact.contact', compact('title', 'contacts'));
    }

    public function UpdateEmail(Request $request)
    {
        $credentials = Validator::make(
            $request->all(),
            [
                'email' => 'required|email',
            ],
            __('request.messages'),
            [
                'email' => 'Email',
            ]
        );

        $envFile = base_path('.env');
        $envContent = file_get_contents($envFile);

        $envContent = preg_replace("/^MAIL_TO=.*/m", "MAIL_TO={$credentials->validated()['email']}", $envContent);

        File::put($envFile, $envContent);

        return response()->json(['status' => true, 'message' => 'Cập nhật thành công']);
    }

    public function deleteContact(string $id)
    {
        $contact = Contact::find($id);

        if (!$contact) {
            return response()->json(['status' => false, 'message' => 'Không tìm thấy']);
        }

        $contact->delete();

        return response()->json(['status' => true, 'message' => 'Xóa thành công']);
    }
}
