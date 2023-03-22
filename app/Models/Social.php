<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Social extends Model
{
    use HasFactory;

    protected $table = "socials";
    protected $primaryKey = 'id';
    protected $fillable = ['title','link','image_src'];
    protected $guarded = [];

    public static function uploadImage(Request $request, $image_src = null)
    {
        if ($request->hasFile('image_src')) {

            if ($image_src) {
                Storage::delete($image_src);
            }
            $folder = date('Y-m-d');

            return $request->file('image_src')->store("images/{$folder}", "public");
        }

        return $image_src;
    }

    public function getImage()
    {
        if (!$this->image_src) {
            return asset("assets/admin/image/no_photo.png");
        }

        return asset('storage/' . $this->image_src);
    }
}
