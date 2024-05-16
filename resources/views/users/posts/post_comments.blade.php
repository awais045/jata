<style>
    .post {
    margin-bottom: 20px;
}

.post-content {
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #fff;
}

.comments-section {
    margin-top: 20px;
}

.comments-list {
    margin-bottom: 20px;
}

.comment {
    margin-bottom: 20px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #f9f9f9;
}

.comment-info {
    margin-bottom: 5px;
}

.comment-author {
    font-weight: bold;
}

.comment-date {
    color: #888;
}

.comment-text {
    margin-top: 5px;
}

.comment-form textarea {
    width: calc(100% - 40px);
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    resize: vertical;
}

.comment-form button {
    width: 40px;
    padding: 10px;
    border: none;

</style>

<div class="col-md-12">
    <div class="tab-content pt-5" id="tab-content">
        <div class="tab-pane active" id="fill-tabpanel-1" role="tabpanel" aria-labelledby="fill-tab-1">
            <div class="row container">
                    <div class="mt-3 post" style="padding-left: 0px !important;">
                        <div class="card h-100"
                            style="border-radius: 23.99px;margin-bottom: 0px !important;">
                            <div class="card- body" style="padding:0px !important">
                                <div class="row p-3" style="border-top: 2px solid #E3E4ED;border-bottom: 2px solid #E3E4ED;margin-left: 0px;">
                                    @if (!empty($campaign->post->image))
                                    @php
                                        $fileExtension = \Str::afterLast($campaign->post->image, '.');
                                        $filePath = $campaign->post->image;
                                    @endphp
                                        @if($fileExtension === 'jpg' || $fileExtension === 'jpeg' || $fileExtension === 'png')
                                            <img src="{{ $filePath }}" alt="Image">
                                        @elseif($fileExtension === 'mp4' || $fileExtension === 'webm' || $fileExtension === 'ogg')
                                            <video controls style="height: 30% !important;">
                                                <source src="{{ $filePath }}" type="video/{{ $fileExtension }}">
                                                Your browser does not support the video tag.
                                            </video>
                                        @else
                                            <p>Unsupported file type</p>
                                        @endif
                                    @else
                                        @if (isset($campaign->post->live_image_url))
                                            <img src="{{ $campaign->post->live_image_url }}" style="max-width: 55% !important;" class="w-100 post-media">
                                        @else
                                        <img src="#" style="max-width: 55% !important;" class="w-100 post-media">
                                        @endif
                                    @endif



                                    <div class="post-media col-md-12"
                                    style="height: 100%;background-size: cover;background-position: center;background-repeat: no-repeat;width: 100%;">

                                    <div class="comments-section">
                                            <div class="comments-list">
                                                @if ($campaign->comments)
                                                    @foreach ($campaign->comments as $comment)

                                                        <div class="comment">
                                                            <div class="comment-info">
                                                                <span class="comment-author">{{$comment->from_name}}</span>
                                                                <span class="comment-date">Posted on {{ \Carbon\Carbon::parse($comment->comment_created_at)->diffForHumans() }}
</span>
                                                            </div>
                                                            <p class="comment-text"> {{$comment->comment_text}}</p>
                                                        </div>
                                                    @endforeach
                                                @endif
                                        </div>
                                    </div>
                                </div>

                                </div>




                            </div>

                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
