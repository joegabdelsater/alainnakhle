<?php

namespace App\Http\Traits;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\App;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

trait ImageUpload
{

    public function uploadImage($value, $attribute_name, $dir)
    {
        if (App::runningUnitTests()) {
            $this->attributes[$attribute_name] = $value;
            return;
        }

        $disk = 'public';
        // destination path relative to the disk above
        $destination_path = "uploads/{$this->getTable()}/{$dir}";

        // if the image was erased
        if ($value == null) {
            Storage::disk($disk)->delete($this->{$attribute_name});
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (Str::startsWith($value, 'data:image')) {
            $image = Image::make($value);
            $mime = $image->mime();

            if ($mime == "image/png") $extension    = 'png';
            else if ($mime == "image/gif") $extension = 'gif';
            else $extension                          = 'jpg';

            $image = $image->encode($extension, 90);
            $filename = md5($value . time()) . '.' . $extension;

            Storage::disk($disk)->put($destination_path . '/' . $filename, $image->stream());
            Storage::disk($disk)->delete($this->{$attribute_name});

            $public_destination_path = Str::replaceFirst('uploads/', 'storage/uploads/', $destination_path);

            $this->attributes[$attribute_name] = $public_destination_path . '/' . $filename;

            return $public_destination_path . '/' . $filename;
        }
    }
}
