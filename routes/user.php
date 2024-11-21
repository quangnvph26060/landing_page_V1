<?php

use App\Models\{
    Contact,
    SessionFour,
    SessionOne,
    SessionTwo,
    Title,
    SessionSeven,
    SessionThree,
    SessionEight,
    SessionNine,
    SessionTen
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $sessionOne  = SessionOne::first();
    $sessionTwo  = SessionTwo::first();
    $sessionThree = SessionThree::first();
    $sessionFour = SessionFour::first();
    $titleSix = Title::where('type', 'six')->with([
        'images'
        => function ($query) {
            $query->orderBy('id', 'desc');
        }
    ])->first();

    $sessionSeven  = SessionSeven::find(1);
    $sessionEight  = SessionEight::find(1);
    $titleEight = Title::where('type', 'eight')->with([
        'images'
        => function ($query) {
            $query->orderBy('id', 'desc');
        }
    ])->first();
    $sessionNine = SessionNine::find(1);
    $types = ['five_dots_one', 'five_dots_two'];
    $titles = [];

    foreach ($types as $type) {
        $titles[$type] = Title::where('type', $type)
            ->with(['images' => function ($query) {
                $query->orderBy('id', 'desc');
            }])
            ->first();
    }

    $sessionTen = SessionTen::find(1);



    return view('frontend.layouts.master', compact(
        'sessionOne',
        'sessionTwo',
        'sessionThree',
        'sessionFour',
        'titleSix',
        'sessionSeven',
        'sessionEight',
        'titleEight',
        'sessionNine',
        'titles',
        'sessionTen'
    ));
})->name('home');

Route::post('/', function (Request $request) {
    $validator = Validator::make(
        $request->all(),
        [
            'name' => 'required',
            'phone' => ['required', 'regex:/^0[0-9]{9}$/'],
            'email' => 'required|email',
            'address' => 'required',
            'note' => 'required',

        ],
        __('request.messages'),
        [
            'name' => 'Tên',
            'email' => 'Email',
            'address' => 'Địa chỉ',
            'phone' => 'Số điện thoại',
            'note' => 'Ghi chú',
        ]
    );

    if ($validator->fails()) {
        return response()->json(['status' => false, 'message' => $validator->errors()->first()]);
    }

    // Kiểm tra nếu số điện thoại đã gửi liên hệ trong vòng 5 phút trước
    $recentContact = Contact::where('phone', $validator->validated()['phone'])
        ->where('created_at', '>=', Carbon::now()->subMinutes(5))
        ->first();

    if ($recentContact) {

        return response()->json([
            'status' => false,
            'message' => 'Bạn đã gửi liên hệ trong vòng 5 phút trước. Vui lòng chờ thêm.',
        ]);
    }

    Contact::updateOrCreate(
        ['phone' => $validator->validated()['phone']],
        [
            'name' => $validator->validated()['name'] ?? null,
            'email' => $validator->validated()['email'] ?? null,
            'address' => $validator->validated()['address'] ?? null,
            'note' => $validator->validated()['note'] ?? null,
            'created_at' => Carbon::now(),
        ]
    );


    return response()->json(['status' => true, 'message' => 'Chúng tôi sẽ liện hệ với bạn trong thời gian sắp tới.']);
});
