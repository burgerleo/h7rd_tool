<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arrLearn = [];

        $learnURL = '#';
        $learnImgURL = '/img/JavaScript1.jpg';
        $learnName = 'JavaScript 開發實戰：核心概念篇 (05/13)';
        $learnTeacher = 'Will 保哥';
        $learnTeacherURL = 'https://blog.miniasp.com/';
        $learnStudent = ['Leo', 'Allen'];
        $learnStudentShare = [
            [
                'url' => '#',
                'txt' => 'Leo_PDF簡報',
            ],
        ];
        $learnTeacherShare = [
            [
                'url' => 'http://blog.miniasp.com/post/2016/02/02/JavaScript-novice-advice-and-learning-resources.aspx',
                'txt' => '我要成為前端工程師！給 JavaScript 新手的建議與學習資源整理',
            ], [
                'url' => 'http://bonsaiden.github.io/JavaScript-Garden/zhtw/',
                'txt' => 'JavaScript Garden 繁體中文版',
            ], [
                'url' => 'https://developer.mozilla.org/zh-TW/docs/Web/JavaScript',
                'txt' => 'Mozilla 開發者網站擁有最棒的 JavaScript 相關教學文件 (中英文都有)',
            ], [
                'url' => 'http://www.cnblogs.com/xxcanghai/archive/2016/02/14/5189353.html',
                'txt' => '一道常被人轻视的前端JS面试题',
            ], [
                'url' => 'https://alf.nu/ReturnTrue',
                'txt' => '小遊戲 Return true to win',
            ], [
                'url' => 'https://alf.nu/alert1',
                'txt' => '小遊戲 Alert to win',
            ],

        ];
        $arrLearn[] = compact('learnURL', 'learnImgURL', 'learnName', 'learnTeacher', 'learnTeacherURL', 'learnStudent', 'learnStudentShare', 'learnTeacherShare');

        $learnURL = '#';
        $learnImgURL = '/img/git1.jpg';
        $learnName = 'Git 版本控管實戰：新手進階篇 (05/27)';
        $learnTeacher = 'Will 保哥';
        $learnTeacherURL = 'https://blog.miniasp.com/';
        $learnStudent = ['Leo'];
        $learnStudentShare = [
            [
                'url' => '#',
                'txt' => 'Leo_PDF簡報',
            ],
        ];
        $learnTeacherShare = [
            [
                'url' => 'https://www.youtube.com/watch?v=PZbSRy_ow0U',
                'txt' => '認識 Git 資料結構中的物件資料庫與物件之間的關係',
            ], [
                'url' => 'https://www.youtube.com/watch?v=5c_7v0cIFk4',
                'txt' => '認識 Git 資料結構中的索引與檔案狀態的變化關係',
            ], [
                'url' => 'https://www.youtube.com/watch?v=NTLAfy6lcdQ',
                'txt' => '如何在 GitHub 使用 Fork / Pull Request 功能 (以 VS2013 為例)',
            ], [
                'url' => 'https://www.youtube.com/watch?v=97BVjQyK8ag',
                'txt' => '透過 Visual Studio 2013 匯入方案到 Git 儲存庫的正確做法',
            ],
        ];

        $arrLearn[] = compact('learnURL', 'learnImgURL', 'learnName', 'learnTeacher', 'learnTeacherURL', 'learnStudent', 'learnStudentShare', 'learnTeacherShare');

        $data = compact('arrLearn');
        return view('learn.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
