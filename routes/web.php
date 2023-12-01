<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\LabsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentCoursesController;
use App\Http\Controllers\TeacherController;
use Database\Factories\TeacherFactory;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PagesController::class, 'index']);

Route::get('/teacher/lab/grades', [PagesController::class, 'addGrades']);

Route::get('/teacher/login', [PagesController::class, 'login']);
Route::post('/teacher/login', [TeacherController::class, 'authlogin'])->name('teacherlogin');
Route::get('/teacher/register', [PagesController::class, 'register']);
Route::post('/teacher/register', [TeacherController::class, 'save']);


Route::get('/student/login', [PagesController::class, 'studentlogin']);
Route::get('/student/register', [PagesController::class, 'studentregister']);

Route::get('/teacher/student/performence', [PagesController::class, 'studentPerformence']);

Route::middleware(['auth:teacher'])->group(function () {
    Route::get('/teacher/dashboard', [TeacherController::class, 'index']);
    Route::get('/teacher/lab/{id}/alert', [TeacherController::class, 'sendAlert']);
    Route::post('/teacher/lab/{id}/alert', [TeacherController::class, 'saveAlert']);
    Route::get('/teacher/course/create', [TeacherController::class, 'createCourse']);
    Route::DELETE('/teacher/course/{id}/remove', [TeacherController::class, 'removeCourse']);
    Route::get('/teacher/{id}/students', [TeacherController::class, 'viewStudents']);
    Route::get('/teacher/{id}/students/group', [TeacherController::class, 'createStudentGroups']);
    Route::post('/idle', [TeacherController::class, 'idleStudents']);
    Route::get('/teacher/{id}/students/groups', [TeacherController::class, 'viewStudentGroups']);
    Route::DELETE('/teacher/group/{id}/remove', [TeacherController::class, 'removeStudentGroup']);
    Route::post('/create-group', [TeacherController::class, 'saveGroup']);
    Route::get('/teacher/grade/{id}/students', [TeacherController::class, 'gradeLab']);
    Route::get('/teacher/labs', [TeacherController::class, 'labsIndex']);
    Route::DELETE('/teacher/lab/{id}/remove', [TeacherController::class, 'removeLab']);
    
    Route::post('/create-course', [TeacherController::class, 'saveCourse']);
    Route::get('/teacher/courses/', [TeacherController::class, 'viewCourses']);
    Route::get('/teacher/lab/add', [TeacherController::class, 'createLabs']);
    Route::post('/create-labs', [TeacherController::class, 'saveLabs']);
    Route::get('/teacher/lab/{id}/', [TeacherController::class, 'viewLab']);
    
    Route::get('/teacher/{lab_id}/{user_id}/grade', [TeacherController::class, 'gradeStudent']);
    Route::post('/teacher/{lab_id}/{user_id}/grade', [TeacherController::class, 'savegradeStudent']);
    Route::post('/teacherchat', [ChatController::class, 'save']);
    Route::get('/teacher/student/{student_id}/{lab_id}/progress', [PagesController::class, 'studentProgress']);
    Route::get('/teacher/student/{student_id}/{lab_id}/feedback', [PagesController::class, 'studentFeedback']);
    Route::post('/teacher/student/{student_id}/{lab_id}/feedback', [PagesController::class, 'studentFeedbacksave']);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
  
    Route::get('/student/dashboard', [StudentCoursesController::class, 'studentindex']);
    Route::post('/student/submit', [StudentCoursesController::class, 'studentsubmit']);
    Route::get('/student/courses', [StudentCoursesController::class, 'viewCourses']);
    Route::get('/student/course/add', [StudentCoursesController::class, 'studentcourse']);
    Route::POST('/student/course/{id}/add', [StudentCoursesController::class, 'joinstudentcourse']);
    Route::POST('/student/course/key/', [StudentCoursesController::class, 'joinstudentcoursekey']);
    Route::get('/student/labs/', [LabsController::class, 'labsList']);
    Route::get('/student/labs/{id}', [LabsController::class, 'viewlabs']);
    Route::get('/student/lab/{id}/live', [LabsController::class, 'studentLabslive']);
    Route::post('/lab/{id}/compile', [LabsController::class, 'labsCompile']);
    Route::post('/chat', [ChatController::class, 'StudentChatsave']);
    Route::post('/groupchat', [ChatController::class, 'groupchat']);

    Route::get('/student/performence', [StudentCoursesController::class, 'studentperf']);
    Route::get('/student/attendence', [StudentCoursesController::class, 'studentatt']);
});


