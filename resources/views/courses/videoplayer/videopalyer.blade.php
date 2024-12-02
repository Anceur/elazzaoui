{{-- @extends('master.master') --}}

@section('content')
<div class="video-player-container">
    <!-- القسم الأيسر: مشغل الفيديو -->
    <div class="video-section">
        <div class="video-wrapper">
            <video id="courseVideo" controls autoplay>
                <source src="{{ $videoSrc }}" type="video/mp4">
                متصفحك لا يدعم تشغيل الفيديو.
            </video>
        </div>
        <h2 class="lesson-title">{{ $course->course_name }}</h2>
        <p class="lesson-description">{{ $course->course_desc }}</p>
    </div>

    <!-- القسم الأيمن: قائمة تشغيل الفيديو -->
    <div class="content-section">
        <h3>قائمة الفيديوهات</h3>
        <ul class="course-content-list">
            @if(is_array($course->playlist_videos))
                @foreach($course->playlist_videos as $index => $video)
                    <li class="lesson-item {{ $video == basename($videoSrc) ? 'active' : '' }}">
                        <a href="{{ route('videoplay', ['id' => $course->id, 'video' => $video]) }}" class="play-video">
                            <i class="fas fa-play-circle"></i> فيديو {{ $index + 1 }}
                        </a>
                    </li>
                @endforeach
            @else
                <p>لا توجد فيديوهات في قائمة التشغيل.</p>
            @endif
        </ul>
    </div>
</div>
{{-- @endsection --}}