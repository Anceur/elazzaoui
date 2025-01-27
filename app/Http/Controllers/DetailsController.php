<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    //
    public function detail($id)
    {
        $courses = Course::findOrFail($id);
        return view('courses.details', compact('courses'));
    }


    public function play($id)
    {
        $courses = Course::findOrFail($id);
        return view('courses.playlist.playlist', compact('courses'));
    }
    // في دالة videoplay
    // DetailsController.php

    // DetailsController.php

    public function videoplay($id)
    {
        $course = Course::findOrFail($id);
        // Decode the playlist_videos column from JSON
        $playlistVideos = json_decode($course->playlist_videos, true);

        // If decoding fails, set an empty array as a fallback
        if ($playlistVideos === null || !is_array($playlistVideos)) {
            $playlistVideos = [];
        }

        // Set the default video source (if there is a video in the playlist)
        $videoSrc = isset($playlistVideos[0]) ? asset("storage/{$playlistVideos[0]}") : '';

        return view('courses.videoplayer.videopalyer', compact('course', 'videoSrc', 'playlistVideos'));
    }
 
    public function show($id, $video = null)
    {
        $course = Course::findOrFail($id);

        // Decode the playlist_videos column from JSON 
        
        $playlistVideos = json_decode($course->playlist_videos, true);

        // If decoding fails, set an empty array as a fallback
        if ($playlistVideos === null || !is_array($playlistVideos)) {
            $playlistVideos = [];
        }

        // Determine the video source
        $videoSrc = $video
            ? asset("storage/{$video}")
            : (isset($playlistVideos[0]) ? asset("storage/{$playlistVideos[0]}") : '');

        return view('courses.videoplayer.videopalyer', compact('course', 'videoSrc', 'playlistVideos'));
    }

}
