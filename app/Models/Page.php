<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Page extends Model
{
    use HasFactory;

    protected $table = "pages";
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'keywords', 'link', 'header_h1', 'description', 'images_src'];
    protected $guarded = [];

    public static function uploadImage(Request $request, $images_src = null)
    {
        if ($request->hasFile('images_src')) {

            if ($images_src) {
                Storage::delete($images_src);
            }
            $folder = date('Y-m-d');

            return $request->file('images_src')->store("images/{$folder}", "public");
        }

        return $images_src;
    }

    public function getImage()
    {
        if (!$this->images_src) {
            return asset("assets/admin/image/no_photo.png");
        }

        return asset('storage/' . $this->images_src);
    }

    //связь один ко многим с таблицей группы
    // public function group()
    // {
    //     return $this->belongsTo(Group::class, 'group_id', 'id');
    // }
}
