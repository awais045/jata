<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacebookLoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\ProductCatalogController;
use App\Http\Controllers\CommentReplyWebhookController;
use Iman\Streamer\VideoStreamer;

Route::get('/homee', function () {
    $path = public_path('vid.mp4');

    $ff= VideoStreamer::streamFile($path);
    dd($ff);
});

// FacebookLoginController redirect and callback urls
Route::get('/auth/facebook', [FacebookLoginController::class, 'redirectToFacebook'])->name('auth.facebook');
Route::get('/auth/facebook/callback', [FacebookLoginController::class, 'handleFacebookCallback']);

use App\Http\Controllers\Auth\CustomLoginController;
use App\Http\Controllers\Auth\CustomRegisterController;

Route::get('login', [CustomLoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [CustomLoginController::class, 'login']);
Route::get('register', [CustomRegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [CustomRegisterController::class, 'register']);

Route::post('/logout', [CustomLoginController::class, 'logout'])->name('logout');

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
Route::get('/', function () {
    return view('website.index');
});

Route::get('/index', function () {
    return view('website.index');
});

Route::get('/calender-dashboard', function () {
    return view('website.calender-dashboard');
});

Route::get('/about', function () {
    return view('website.about');
});

Route::get('/client-case', function () {
    return view('website.client-case');
});

Route::get('/comment-sales', function () {
    return view('website.comment-sales');
});

Route::get('/contact', function () {
    return view('website.contact');
});

Route::get('/faqs', function () {
    return view('website.faqs');
});


Route::get('/function', function () {
    return view('website.function');
});

Route::get('/Inspiration-Ideas', function () {
    return view('website.Inspiration-Ideas');
});

Route::get('/live-sales', function () {
    return view('website.live-sales');
});

// Route::get('/login', function () {
//     return view('website.login');
// });

Route::get('/pricing', function () {
    return view('website.pricing');
});

// Route::get('/register', function () {
//     return view('website.register');
// });

Route::get('/terms', function () {
    return view('website.terms');
});

/***************** en/website *****************/
Route::get('/en-index', function () {
    return view('en.website.index');
});

Route::get('/en-calender-dashboard', function () {
    return view('en.website.calender-dashboard');
});

Route::get('/en-about', function () {
    return view('en.website.about');
});

Route::get('/en-client-case', function () {
    return view('en.website.client-case');
});

Route::get('/en-comment-sales', function () {
    return view('en.website.comment-sales');
});

Route::get('/en-contact', function () {
    return view('en.website.contact');
});

Route::get('/en-faqs', function () {
    return view('en.website.faqs');
});


Route::get('/en-function', function () {
    return view('en.website.function');
});

Route::get('/en-Inspiration-Ideas', function () {
    return view('en.websit.Inspiration-Ideas');
});

Route::get('/en-live-sales', function () {
    return view('en.website.live-sales');
});

Route::get('/en-login', function () {
    return view('en.website.login');
});

Route::get('/en-pricing', function () {
    return view('en.website.pricing');
});

Route::get('/en-register', function () {
    return view('en.website.register');
});

/***************** user *****************/
Route::get('admin', function () {
    return view('users.index');
});

// Route::get('/calender', function () {
//     return view('users.calender');
// });

Route::get('/sidebar', function () {
    return view('users.sidebar');
});

// Route::get('/post-templates', function () {
//     return view('users.post-templates');
// });

// Route::get('/campaigns', function () {
//     return view('users.campaigns');
// });

// Route::get('/product-catalog', function () {
//     return view('users.product-catalog');
// });

Route::get('/order', function () {
    return view('users.order');
});

Route::get('/Reply-Templates', function () {
    return view('users.Reply-Templates');
});

Route::get('/page-setting', function () {
    return view('users.page-setting');
});

Route::get('/Account-Settings', function () {
    return view('users.Account-Settings');
});

Route::get('/Video-Guides', function () {
    return view('users.Video-Guides');
});

Route::get('/help-center', function () {
    return view('users.help-center');
});
Route::get('/Create-Campaign', function () {
    return view('users.Create-Campaign');
});


/***************** en/user *****************/
Route::get('/enuser', function () {
    return view('en.users.index');
});

Route::get('/enAccount-Settings', function () {
    return view('en.users.Account-Settings');
});

Route::get('/encalender', function () {
    return view('en.users.calender');
});

Route::get('/encampaigns', function () {
    return view('en.users.campaigns');
});

Route::get('/enCreate-Campaign', function () {
    return view('en.users.Create-Campaign');
});

Route::get('/enhelp-center', function () {
    return view('en.users.help-center');
});

Route::get('/enorder', function () {
    return view('en.users.order');
});

Route::get('/enpage-setting', function () {
    return view('en.users.page-setting');
});

Route::get('/enpost-details', function () {
    return view('en.users.post-details');
});

Route::get('/enpost-templates', function () {
    return view('en.users.post-templates');
});

Route::get('/enproduct-catalog', function () {
    return view('en.users.product-catalog');
});

Route::get('/enReply-Templates', function () {
    return view('en.users.Reply-Templates');
});

Route::get('/enVideo-Guides', function () {
    return view('en.users.Video-Guides');
});


Route::middleware('auth')->group(function () {
    // Protected routes here

});

Route::post('webhook_comment_reply', 'CommentReplyWebhookController@handleWebhook');


Route::middleware('auth.redirect')->group(function () {
    // Routes that require authentication

    Route::get('campaigns/post-live-video', ['App\Http\Controllers\CampaignController', 'liveVideoCreate'])->name('campaigns.liveVideoCreate');
    Route::post('campaigns/post-live-video-post', ['App\Http\Controllers\CampaignController', 'liveVideoStreamWithCataLog'])->name('campaigns.liveVideoStreamWithCataLog');

    Route::get('post-templates', ['App\Http\Controllers\CampaignController', 'postListing'])->name('campaigns.postListing');
    Route::get('campaigns/upload_media/{campaign_id}', ['App\Http\Controllers\CampaignController', 'uploadVideOrImage'])->name('assignment.uploadVideOrImage');
    Route::post('campaigns/upload_media/{campaign_id}', ['App\Http\Controllers\CampaignController', 'saveUploadVideOrImage'])->name('assignment.uploadVideOrImage');
    Route::resource('campaigns', 'App\Http\Controllers\CampaignController');

    Route::resource('product-catalog', 'App\Http\Controllers\ProductController');
    Route::resource('calender', 'App\Http\Controllers\CalendarController');

    Route::get('campaigns/assign/{campaign_id}', ['App\Http\Controllers\AssignmentController', 'showModal'])->name('assignment.showModal');
    Route::post('assign/{campaign_id}', ['App\Http\Controllers\AssignmentController', 'assign'])->name('assignment.assign');

    Route::get('run_cmd/{campaign_id}', ['App\Http\Controllers\AssignmentController', 'runArtisanCommand'])->name('assignment.runArtisanCommand');

    // Route::get('addCataLog', ['App\Http\Controllers\ProductCatalogController', 'index'])->name('catalog.index');
    // Route::get('getBatches', ['App\Http\Controllers\ProductCatalogController', 'getBatches'])->name('catalog.getBatches');
    // Route::get('getBatchesProducts', ['App\Http\Controllers\ProductCatalogController', 'getBatchesProducts'])->name('catalog.getBatchesProducts');
});

