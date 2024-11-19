<?php

namespace App\Http\Controllers\Backend\Config;

use App\Models\{
    Config, SessionOne
};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ConfigurationController extends Controller
{
    public function configuration()
    {
        $title = 'Cấu hình chung';
        return view('backend.config.config', compact('title'));
    }

    public function save(Request $request)
    {
        $data = Validator::make(
            $request->all(),
            [
                'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'favicon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

                'branch' => 'required',
                'address' => 'required',
                'hotline' => 'required',
                'email' => 'required',
                'website' => 'required',
                'copyright' => 'required',
                'script' => 'nullable',

                'title' => 'required',
                'map' => 'nullable',

                'title_seo' => 'required',
                'description_seo' => 'required',
                'keywords_seo' => 'required',
            ],
            __('request.messages'),
            [
                'logo' => 'Logo',
                'favicon' => 'Favicon',

                'branch' => 'Chi nhánh',
                'address' => 'Địa điểm',
                'hotline' => 'Hotline',
                'email' => 'Email',
                'website' => 'Website',
                'copyright' => 'Copyright',
                'script' => 'Script',

                'title_seo' => 'Tiêu đề seo',
                'description_seo' => 'Mô tả seo',
                'keywords_seo' => 'Từ khóa seo',
            ]
        );

        if ($data->fails()) {
            return response()->json(['errors' => $data->errors(), 'status' => false, 'message' => 'Dữ liệu không hợp lệ']);
        }

        $credentials = $data->validated();

        if ($request->hasFile('logo')) {
            $credentials['logo'] = saveImage($request, 'logo', 'logo');
        }

        if ($request->hasFile('favicon')) {
            $credentials['favicon'] = saveImage($request, 'favicon', 'favicon');
        }

        Config::updateOrCreate(['id' => 1], $credentials);

        return response()->json(['status' => true, 'message' => 'Cập nhật thành công']);
    }




    // ----------------------------------------------------------

    public function configSession(int $session)
    {
        switch ($session) {
            case 1:
                return $this->sessionOne();
            case 2:
                return $this->sessionTwo();
            case 3:
                return $this->sessionThree();
            case 4:
                return $this->sessionFour();
            case 5:
                return $this->sessionFive();
            case 6:
                return $this->sessionSix();
            case 7:
                return $this->sessionSeven();
            case 8:
                return $this->sessionEight();
            case 9:
                return $this->sessionNine();
            case 10:
                return $this->sessionTen();
            default:
                abort(404);
        }
    }

    public function postSession(Request $request, int $session)
    {
        switch ($session) {
            case 1:
                return $this->postSessionOne($request);
            case 2:
                return $this->postSessionTwo($request);
            case 3:
                return $this->postSessionThree($request);
            case 4:
                return $this->postSessionFour($request);
            case 5:
                return $this->postSessionFive($request);
            case 6:
                return $this->postSessionSix($request);
            case 7:
                return $this->postSessionSeven($request);
            case 8:
                return $this->postSessionEight($request);
            case 9:
                return $this->postSessionNine($request);
            case 10:
                return $this->postSessionTen($request);
            default:
                abort(404);
        }
    }

    public function sessionOne()
    {
        $title = 'Cấu hình session 1';
        $session  = SessionOne::first();
        return view('backend.config.session-one', compact('title', 'session'));
    }

    public function postSessionOne($request)
    {
        $data = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'excerpt' => 'required',
                'content' => 'required',
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'title_form' => 'required',
            ],
            __('request.messages'),
            [
                'title' => 'Tiêu đề',
                'excerpt' => 'Mô tả',
                'content' => 'Nội dung',
                'logo' => 'Logo',
                'image' => 'Hình ảnh',
                'title_form' => 'Tiêu đề form',
            ]
        );

        if ($data->fails()) {
            return response()->json(['errors' => $data->errors(), 'status' => false, 'message' => 'Dữ liệu không hợp lệ']);
        }

        $credentials = $data->validated();

        if ($request->hasFile('logo')) {
            deleteImage(SessionOne::find(1)->logo);
            $credentials['logo'] = saveImage($request, 'logo', 'logo');
        }

        if ($request->hasFile('image')) {
            deleteImage(SessionOne::find(1)->image);
            $credentials['image'] = saveImage($request, 'image', 'image');
        }

        SessionOne::updateOrCreate(['id' => 1], $credentials);

        return response()->json(['status' => true, 'message' => 'Cập nhật thành công']);
    }
}
