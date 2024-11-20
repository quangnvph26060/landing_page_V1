<?php

namespace App\Http\Controllers\Backend\Config;

use App\Models\{
    Config,
    Image,
    SessionOne,
    SessionSeven,
    SessionTwo,
    SessionSix,
    SessionThree,
    Title
    SessionEight,
    SessionNine
};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
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

    public function sessionTwo()
    {
        $title = 'Cấu hình session 2';
        $session  = SessionTwo::first();
        return view('backend.config.session-two', compact('title', 'session'));
    }

    public function postSessionTwo($request)
    {
        $data = Validator::make(
            $request->all(),
            [
                'titles' => 'required',
                'titles.*' => 'required',
                'contents' => 'required',
                'contents.*' => 'required',
                'images' => 'nullable',
                'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'descriptions' => 'required',
                'descriptions.*' => 'required',
            ],
            __('request.messages'),
            [
                'titles' => 'Tiêu đề',
                'titles.*' => 'Tiêu đề',
                'contents' => 'Nội dung',
                'contents.*' => 'Nội dung',
                'images' => 'Hình ảnh',
                'images.*' => 'Hình ảnh',
                'descriptions' => 'Mô tả',
                'descriptions.*' => 'Mô tả',
            ]
        );

        if ($data->fails()) {
            return response()->json(['errors' => $data->errors(), 'status' => false, 'message' => 'Dữ liệu không hợp lệ']);
        }

        $credentials = $data->validated();
        $session  = SessionTwo::find(1);
        if ($request->hasFile('images')) {
            $credentials['images'] = $session->images;
            $images = saveImages($request, 'images', 'images', 825, 550, true);

            foreach ($images as $key => $image) {
                deleteImage($session->images[$key]);
                $credentials['images'][$key] = $image;
            }
        }

        SessionTwo::updateOrCreate(['id' => 1], $credentials);

        return response()->json(['status' => true, 'message' => 'Cập nhật thành công']);
    }
    public function sessionThree()
    {
        $title = 'Cấu hình session 3';
        $session = SessionThree::first();
        return view('backend.config.session-three', compact('title', 'session'));
    }
    public function postSessionThree($request)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'blocks' => 'required|array|max:2',
            'blocks.*.description' => 'required|string',
            'blocks.*.image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'contents' => 'required|array|max:6',
            'contents.*' => 'required|string',
        ];
        $data = $request->validate($rules);
        if (!empty($data['blocks'])) {
            foreach ($data['blocks'] as $index => $block) {
                if (isset($block['image'])) {
                    foreach (SessionThree::first()->blocks as $block) {
                        deleteImage($block['image']);
                    }
                    $data['blocks'][$index]['image'] = saveImages($request, "blocks.{$index}.image", 'session-three', 613, 860);
                } else {
                    foreach (SessionThree::first()->blocks as $block) {
                        $data['blocks'][$index]['image'] = $block['image'];
                    }
                }
            }
        }
        $sessionThree = SessionThree::first();
        $sessionThree->update($data);
        return response()->json(['status' => true, 'message' => 'Cập nhật thành công']);
    }

    public function sessionFive()
    {
        $title = 'Cấu hình session 5';

        // Loại bỏ lặp logic, sử dụng array để xử lý nhiều loại
        $types = ['five_dots_one', 'five_dots_two'];
        $titles = [];

        foreach ($types as $type) {
            $titles[$type] = Title::where('type', $type)
                ->with(['images' => function ($query) {
                    $query->orderBy('id', 'desc');
                }])
                ->first();
        }
        // dd($titles);

        // Truyền dữ liệu vào view
        return view('backend.config.session-five', [
            'title' => $title,
            'title1' => $titles['five_dots_one'],
            'title2' => $titles['five_dots_two'],
        ]);
    }


    public function postSessionFive($request)
    {
        if ($request->has('id')) {
            $img = Image::find($request->id);
            deleteImage($img->image);
            $img->delete();

            return response()->json(['status' => true, 'message' => 'Xóa thành công']);
        }

        $data = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'title' => 'Tiêu đề',
                'file' => 'Hình ảnh',
            ]
        );

        if ($data->fails()) {
            return response()->json(['errors' => $data->errors(), 'status' => false, 'message' => 'Dữ liệu không hợp lệ']);
        }

        $credentials = $data->validated();

        $credentials['type'] = $request->type ?? 'five_dots_one';

        $title =  Title::updateOrCreate(['type' => $credentials['type']], $credentials);

        if ($request->hasFile('file')) {

            if($request->type == 'five_dots_one') {
                $width = 1333;
                $height = 750;
            }else {
                $width = 650;
                $height = 867;
            }

            $img = Image::create([
                'title_id' => $title->id,
                'image' => saveImages($request, 'file', 'file', $width, $height),
            ]);

            return response()->json([
                'message' => 'success',
                'image' =>  showImage($img->image),
                'size' =>  getSize($img->image),
                'id' => $img->id,
            ], 200);
        }

        return response()->json(['status' => true, 'message' => 'Cập nhật thành công']);
    }

    public function sessionSix()
    {
        $title = 'Cấu hình session 6';
        $titles  = Title::where('type', 'six')->with([
            'images'
            => function ($query) {
                $query->orderBy('id', 'desc');
            }
        ])->first();

        return view('backend.config.session-six', compact('title', 'titles'));
    }

    public function postSessionSix($request)
    {
        if ($request->has('id')) {
            $img = Image::find($request->id);
            deleteImage($img->image);
            $img->delete();

            return response()->json(['status' => true, 'message' => 'Xóa thành công']);
        }

        $data = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'title' => 'Tiêu đề',
                'file' => 'Hình ảnh',
            ]
        );

        if ($data->fails()) {
            return response()->json(['errors' => $data->errors(), 'status' => false, 'message' => 'Dữ liệu không hợp lệ']);
        }

        $credentials = $data->validated();

        $credentials['type'] = 'six';


        $title =  Title::updateOrCreate(['type' => 'six'], $credentials);

        if ($request->hasFile('file')) {
            $img = Image::create([
                'title_id' => $title->id,
                'image' => saveImages($request, 'file', 'file', 1155, 650),
            ]);

            return response()->json([
                'message' => 'success',
                'image' =>  showImage($img->image),
                'size' =>  getSize($img->image),
                'id' => $img->id,
            ], 200);
        }

        return response()->json(['status' => true, 'message' => 'Cập nhật thành công']);
    }

    public function sessionSeven()
    {
        $title = 'Cấu hình session 7';
        $session  = SessionSeven::find(1);

        return view('backend.config.session-seven', compact('title', 'session'));
    }

    public function postSessionSeven($request)
    {

        $data = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'links' => 'required',
                'links.*' => 'required',
            ],
            __('request.messages'),
            [
                'title' => 'Tiêu đề',
                'links' => 'Link video',
            ]
        );

        if ($data->fails()) {
            return response()->json(['errors' => $data->errors(), 'status' => false, 'message' => 'Dữ liệu không hợp lệ']);
        }

        $credentials = $data->validated();

        SessionSeven::updateOrCreate(['id' => 1], $credentials);

        return response()->json(['status' => true, 'message' => 'Cập nhật thành công']);
    }

    public function sessionEight()
    {
        $title = 'Cấu hình session 8';
        $session  = SessionEight::first();
        $titles  = Title::where('type', 'eight')->with([
            'images'
            => function ($query) {
                $query->orderBy('id', 'desc');
            }
        ])->first();

        return view('backend.config.session-eight', compact('title', 'session', 'titles'));
    }

    public function postSessionEight($request)
    {
        if ($request->has('id')) {
            $img = Image::find($request->id);
            deleteImage($img->image);
            $img->delete();

            return response()->json(['status' => true, 'message' => 'Xóa thành công']);
        }
        $data = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'images' => 'nullable',
                'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            __('request.messages'),
            [
                'title' => 'Tiêu đề',
                'images' => 'Hình ảnh',
            ]
        );

        if ($data->fails()) {
            return response()->json(['errors' => $data->errors(), 'status' => false, 'message' => 'Dữ liệu không hợp lệ']);
        }

        $credentials = $data->validated();

        $credentials['type'] = 'eight';

        $title =  Title::updateOrCreate(['type' => 'eight'], $credentials);

        if ($request->hasFile('file')) {
            $img = Image::create([
                'title_id' => $title->id,
                'image' => saveImages($request, 'file', 'file', 1150, 1150),
            ]);

            return response()->json([
                'message' => 'success',
                'image' =>  showImage($img->image),
                'size' =>  getSize($img->image),
                'id' => $img->id,
            ], 200);
        }

        // Kiểm tra xem bản ghi với id = 1 đã tồn tại chưa
        $session = SessionEight::find(1);

        // Nếu có ảnh mới, xử lý ảnh và cập nhật
        if ($request->hasFile('images')) {
            $credentials['images'] = $session ? $session->images : [];
            $images = saveImagesWithoutResize($request, 'images', 'brand', true);

            foreach ($images as $key => $image) {
                // Xóa ảnh cũ nếu có
                if ($session && isset($session->images[$key])) {
                    deleteImage($session->images[$key]);
                }
                $credentials['images'][$key] = $image;
            }
        }

        // Nếu bản ghi chưa tồn tại, tạo mới, nếu đã tồn tại, cập nhật
        if ($session) {
            // Cập nhật bản ghi
            $session->update($credentials);
        } else {
            // Thêm mới bản ghi
            SessionEight::create($credentials);
        }

        return response()->json(['status' => true, 'message' => 'Cập nhật thành công']);
    }

    public function sessionNine()
    {
        $title = 'Cấu hình session 9';
        $session  = SessionNine::find(1);

        return view('backend.config.session-nine', compact('title', 'session'));
    }

    public function postSessionNine($request)
    {
        $data = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'extra' => 'required',
                'content' => 'required',
            ],
            __('request.messages'),
            [
                'title' => 'Tiêu đề',
                'content' => 'Nội dung',
                'extra' => 'Nội dung ngắn',
            ]
        );

        if ($data->fails()) {
            return response()->json(['errors' => $data->errors(), 'status' => false, 'message' => 'Dữ liệu không hợp lệ']);
        }

        $credentials = $data->validated();

        SessionNine::updateOrCreate(['id' => 1], $credentials);

        return response()->json(['status' => true, 'message' => 'Cập nhật thành công']);
    }
}
