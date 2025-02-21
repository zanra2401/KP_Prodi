<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;
use Illuminate\Support\Str;

use App\Models\Video;

class VideoController extends Controller
{

    public function index(Request $request) {
        if ($request->query('search')) {
            $search = $request->query('search');
        
            $videos = Video::when($search, function ($query, $search) {
                return $query->where('title_video', 'like', "%{$search}%");
            })->paginate(5)->appends(['search' => $search]);
        
            $nextPageUrl = $videos->nextPageUrl();
            $previousPageUrl = $videos->previousPageUrl();
        
            return view('admin.videos.index', [
                'videos' => $videos,
                'next' => $nextPageUrl,
                'previous' => $previousPageUrl
            ]);
            
        } else {
            $videos = Video::paginate(5);
        
            return view('admin.videos.index', [
                'videos' => $videos,
                'next' => $videos->nextPageUrl(),
                'previous' => $videos->previousPageUrl()
            ]);
        }        
    }

    public function store(Request $request)
    {
        $request->validate([
            'link_video' => 'required|url',
            'title_video' => 'required|string|max:255',
        ]);

        Video::create([
            "id_video" => (string) Str::uuid(),
            "link_video" => $request->link_video,
            "title_video" => $request->title_video
        ]);

        return redirect()->back()->with('success', 'Video berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $video = Video::find($id);
        if ($video) {
            $video->title_video = $request->title_video;
            $video->save();
        }
        return redirect()->back()->with('success', 'Judul video berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $video = Video::find($id);
        if ($video) {
            $video->delete();
        }
        return redirect()->back()->with('success', 'Video berhasil dihapus!');
    }
}
