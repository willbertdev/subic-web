<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AiapplicationController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\ComponentpageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('welcome');
})->name('home');
Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/logout', function (Request $request) {
    Auth::logout();

    // Invalidate and regenerate session
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/'); // Redirect to the home page
})->name('logout');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::prefix('theme')->group(function () {

    Route::controller(HomeController::class)->group(function () {
        Route::get('calendar','calendar')->name('calendar');
        Route::get('chatmessage','chatMessage')->name('chatMessage');
        Route::get('chatempty','chatEmpty')->name('chatEmpty');
        Route::get('email','email')->name('email');
        Route::get('error','error1')->name('error');
        Route::get('faq','faq')->name('faq');
        Route::get('gallery','gallery')->name('gallery');
        Route::get('kanban','kanban')->name('kanban');
        Route::get('pricing','pricing')->name('pricing');
        Route::get('termscondition','termsCondition')->name('termsCondition');
        Route::get('widgets','widgets')->name('widgets');
        Route::get('chatprofile','chatProfile')->name('chatProfile');
        Route::get('veiwdetails','veiwDetails')->name('veiwDetails');
        });

        // aiApplication
    Route::prefix('aiapplication')->group(function () {
        Route::controller(AiapplicationController::class)->group(function () {
            Route::get('/codegenerator', 'codeGenerator')->name('codeGenerator');
            Route::get('/codegeneratornew', 'codeGeneratorNew')->name('codeGeneratorNew');
            Route::get('/imagegenerator','imageGenerator')->name('imageGenerator');
            Route::get('/textgeneratornew','textGeneratorNew')->name('textGeneratorNew');
            Route::get('/textgenerator','textGenerator')->name('textGenerator');
            Route::get('/videogenerator','videoGenerator')->name('videoGenerator');
            Route::get('/voicegenerator','voiceGenerator')->name('voiceGenerator');
        });
    });

    // Authentication
    Route::prefix('authentication')->group(function () {
        Route::controller(AuthenticationController::class)->group(function () {
            Route::get('/forgotpassword', 'forgotPassword')->name('forgotPassword');
            Route::get('/signin', 'signIn')->name('signIn');
            Route::get('/signup', 'signUp')->name('signUp');
        });
    });

    // chart
    Route::prefix('chart')->group(function () {
        Route::controller(ChartController::class)->group(function () {
            Route::get('/columnchart', 'columnChart')->name('columnChart');
            Route::get('/linechart', 'lineChart')->name('lineChart');
            Route::get('/piechart', 'pieChart')->name('pieChart');
        });
    });

    // Componentpage
    Route::prefix('componentspage')->group(function () {
        Route::controller(ComponentpageController::class)->group(function () {
            Route::get('/alert', 'alert')->name('alert');
            Route::get('/avatar', 'avatar')->name('avatar');
            Route::get('/badges', 'badges')->name('badges');
            Route::get('/button', 'button')->name('button');
            Route::get('/calendar', 'calendar')->name('calendar');
            Route::get('/card', 'card')->name('card');
            Route::get('/carousel', 'carousel')->name('carousel');
            Route::get('/colors', 'colors')->name('colors');
            Route::get('/dropdown', 'dropdown')->name('dropdown');
            Route::get('/imageupload', 'imageUpload')->name('imageUpload');
            Route::get('/list', 'list')->name('list');
            Route::get('/pagination', 'pagination')->name('pagination');
            Route::get('/progress', 'progress')->name('progress');
            Route::get('/radio', 'radio')->name('radio');
            Route::get('/starrating', 'starRating')->name('starRating');
            Route::get('/switch', 'switch')->name('switch');
            Route::get('/tabs', 'tabs')->name('tabs');
            Route::get('/tags', 'tags')->name('tags');
            Route::get('/tooltip', 'tooltip')->name('tooltip');
            Route::get('/typography', 'typography')->name('typography');
            Route::get('/videos', 'videos')->name('videos');
        });
    });

    // Dashboard
    Route::prefix('dashboard')->group(function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/index', 'index')->name('index');
            Route::get('/index1', 'index1')->name('index1');
            Route::get('/index2', 'index2')->name('index2');
            Route::get('/index3', 'index3')->name('index3');
            Route::get('/index4', 'index4')->name('index4');
            Route::get('/index5','index5')->name('index5');
            Route::get('/wallet','wallet')->name('wallet');
        });
    });

    // Forms
    Route::prefix('forms')->group(function () {
        Route::controller(FormsController::class)->group(function () {
            Route::get('/form-layout', 'formLayout')->name('formLayout');
            Route::get('/form-validation', 'formValidation')->name('formValidation');
            Route::get('/form', 'form')->name('form');
            Route::get('/wizard', 'wizard')->name('wizard');
        });
    });

    // invoice/invoiceList
    Route::prefix('invoice')->group(function () {
        Route::controller(InvoiceController::class)->group(function () {
            Route::get('/invoice-add', 'invoiceAdd')->name('invoiceAdd');
            Route::get('/invoice-edit', 'invoiceEdit')->name('invoiceEdit');
            Route::get('/invoice-list', 'invoiceList')->name('invoiceList');
            Route::get('/invoice-preview', 'invoicePreview')->name('invoicePreview');
        });
    });

    // Settings
    Route::prefix('settings')->group(function () {
        Route::controller(SettingsController::class)->group(function () {
            Route::get('/company', 'company')->name('company');
            Route::get('/currencies', 'currencies')->name('currencies');
            Route::get('/language', 'language')->name('language');
            Route::get('/notification', 'notification')->name('notification');
            Route::get('/notification-alert', 'notificationAlert')->name('notificationAlert');
            Route::get('/payment-gateway', 'paymentGateway')->name('paymentGateway');
            Route::get('/theme', 'theme')->name('theme');
        });
    });

    // Table
    Route::prefix('table')->group(function () {
        Route::controller(TableController::class)->group(function () {
            Route::get('/tablebasic', 'tableBasic')->name('tableBasic');
            Route::get('/tabledata', 'tableData')->name('tableData');
        });
    });

    // Users
    Route::prefix('users')->group(function () {
        Route::controller(UsersController::class)->group(function () {
            Route::get('/add-user', 'addUser')->name('addUser');
            Route::get('/users-grid', 'usersGrid')->name('usersGrid');
            Route::get('/users-list', 'usersList')->name('usersList');
            Route::get('/view-profile', 'viewProfile')->name('viewProfile');
        });
    });
});


require __DIR__.'/auth.php';
