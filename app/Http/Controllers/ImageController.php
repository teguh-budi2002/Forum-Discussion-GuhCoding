<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ImageValidationRequest;

class ImageController extends Controller
{
    public function indexImage(){
        return view('user.edit-image');
    }

    public function uploadImage(ImageValidationRequest $request, $id){
        $validation = $request->validated();

        $user = User::find($id);

        if ($request->hasFile('photo_profile')) {
            $file = $request->file('photo_profile');
            $filename = $file->getClientOriginalName();

            if ($file != $user->photo_profile) {
                $delExistsFile = File::delete(
                    'storage/' . $user->photo_profile
                );
            }

            $store = $file->storeAs('photo-profile', $filename);
            $user->update(['photo_profile' => $store]);
        }
        notify()->success('Photo Berhasil Di Upload', 'IMAGE UPLOADED');
        return redirect()->route('profile.index');
    }

    public function deleteImage($id) {
        $user = User::find($id);
        if ($user->social_id !== null) {
            if ($user->photo_profile_fb !== null) {
                File::delete($user->photo_profile_fb);
                $user->photo_profile_fb = null;
                $user->save();
            }
        }
        File::delete('storage/' . $user->photo_profile);
        $user->photo_profile = null;
        $user->save();
        notify()->success('Image Berhasil Di Hapus', 'IMAGE DELETED');
        return redirect()->back();
    }
}
