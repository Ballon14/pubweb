<?php

namespace App\Http\Controllers;

class VideosController extends Controller
{
    public function index() {
        $videos = [
            [
                'id_video' => 1,
                'id_author' => 'Cha_Eunwoo',
                'deskripsi' => 'K-pop Demon Hunters Soda Pop dance challenge clip going viral across platforms.',
                'upload_date' => '2022-09-02',
                'views' => '21.5M',
                'likes' => 'N/A'
            ],
            [
                'id_video' => 2,
                'id_author' => 'Cha_Eunwoo',
                'deskripsi' => 'Second top Soda Pop cover with Arden Cho.',
                'upload_date' => '2022-09-02',
                'views' => '16.6M',
                'likes' => 'N/A'
            ],
            [
                'id_video' => 3,
                'id_author' => 'Cha_Eunwoo',
                'deskripsi' => 'Third viral K-pop dance clip form Demon Hunters',
                'upload_date' => '2022-09-02',
                'views' => '10.8M',
                'likes' => 'N/A'
            ],
            [
                'id_video' => 4,
                'id_author' => 'Cha_Eunwoo',
                'deskripsi' => 'Fourth high-view clip in the series.',
                'upload_date' => '2022-09-02',
                'views' => '6.7M',
                'likes' => 'N/A'
            ],
            [
                'id_video' => 5,
                'id_author' => 'Cha_Eunwoo',
                'deskripsi' => 'Fifth viral dance video',
                'upload_date' => '2022-09-02',
                'views' => '5.5M',
                'likes' => 'N/A'
            ],
            [
                'id_video' => 6,
                'id_author' => 'BLACKPINK',
                'deskripsi' => 'KPOP music clone first 24h viral on',
                'upload_date' => '2022-09-01',
                'views' => '29.4M',
                'likes' => '3.4M'
            ],
        ];

        return view('videos', ['listvideo' => $videos]);
    }
}
