<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Project extends Model
{
    use HasFactory;

    protected $table = "projects";
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'description', 'content', 'image_src', 'link'];
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

    //связь один ко многим с таблицей группы
    // public function group()
    // {
    //     return $this->belongsTo(Group::class, 'group_id', 'id');
    // }
}
