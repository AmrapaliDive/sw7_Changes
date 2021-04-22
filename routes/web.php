<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/product',[
    'uses' => 'ProductController@getIndex',
    'as' => 'product.product'
]);




//arti homepage
// Route::get('/',[
//     'uses' => 'ProductController@getAllVege',
//     'as' => 'product.homepage'
// ]);
Route::group(['prefix' => 'user'], function () {

    // Route::group(['middleware' => 'guest'], function () {
    //     //User registration routes
    //     Route::get('/signup',[
    //         'uses' => 'UserController@getSignUp',
    //         'as' => 'user.signup',
    //     ]);
    //     Route::post('/signup',[
    //         'uses' => 'UserController@postSignUp',
    //         'as' => 'user.signup'
    //     ]);
        

        Route::get('/signin',[
            'uses' => 'UserController@getSignIn',
            'as' => 'user.signin'
        ]);
        Route::post('/signin',[
            'uses' => 'UserController@login',
            'as' => 'user.signin'
        ]);
    // });

    Route::group(['middleware' => 'auth'], function (){
        // Route::get('/logout',[
        //     'uses' => 'UserController@getLogout',
        //     'as' => 'user.logout'
        // ]);
//User profile routes
        Route::get('/profile', [
            'uses' => 'UserController@getUserProfile',
            'as' => 'user.profile'
        ]);
        

        Route::get('/edituser',[
            'uses' => 'UserController@edituser',
            'as' => 'user.edituser'
        ]);
        Route::post('/updateuser',[
            'uses' => 'UserController@updateuser',
            'as' => 'user.updateuser'
        ]);
    });
});
Route::get('/ordersearch', 'UserController@ordersearch');

//adding products to cart
//arti
Route::get('/add-to-cart/{id}/{qty}/{amount}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addtocart'
]);

Route::get('/add-to-cart1/{id}/{qty}/{amount}', [
    'uses' => 'ProductController@getAddToCart1',
    'as' => 'product.addtocart1'
]);
// Route::get('/pulses-seeds/add-to-cart/{id}/{qty}/{gram}/{amount}', [
//     'uses' => 'PulsesSeedsController@getAddToCart',
//     'as' => 'product.addtocart'
// ]);

// Route::get('/vegetables/add-to-cart/{id}/{qty}/{gram}/{amount}', [
//     'uses' => 'PulsesSeedsController@getAddToCart',
//     'as' => 'product.addtocart'
// ]);
// Route::get('/fruits/add-to-cart/{id}/{qty}/{gram}/{amount}', [
//     'uses' => 'PulsesSeedsController@getAddToCart',
//     'as' => 'product.addtocart'
// ]);


Route::get('/deduct/{id}', [
    'uses' => 'ProductController@deductByOne',
    'as' => 'product.deductByOne'
]);

    Route::get('/delete/{id}', [
    'uses' => 'ProductController@removeItem',
    'as' => 'product.removeItem'
]);

Route::get('/shopping-cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingcart'
]);


// protected checkout page
//arti

Route::group(['middleware' => 'auth'], function () {
    Route::get('/checkout', [
        'uses' => 'ProductController@getCheckout',
        'as' => 'checkout'
    ]);

    Route::get('/onlinePayment', [
        'uses' => 'ProductController@onlinePayment',
        'as' => 'onlinePayment'
    ]);

    Route::get('/razorpay', [
        'uses' => 'ProductController@razorpay',
        'as' => 'razorpay'
    ]);

    Route::post('/checkout', [
        'uses' => 'ProductController@postCheckout',
        'as' => 'checkout'
    ]);

    Route::post('/savedetails', [
        'uses' => 'ProductController@savedetails',
        'as' => 'savedetails'
    ]);
    Route::get('/More_Course', function () {
        return view('More_Course');

    });
    // Route::get('/enrolForAdmission/{id}', [
    //     'uses' => 'Customer\CourseController@enrolForAdmission',
    //     'as' => 'enrolForAdmission'
    // ]);

    // Route::post('/enrolForAdmissionInsert', [
    //     'uses' => 'Customer\CourseController@enrolForAdmissionInsert',
    //     'as' => 'enrolForAdmissionInsert'
    // ]);

    // Route::post('/transactionSuccess', 'ProductController@transactionSuccess');
    // Route::post('/home/payment_error', function () {
    //     return view('shop.homepage');
    // });

    Route::post('/franchisee_transactionSuccess', 'Franchisee\FranchiseeController@franchisee_transactionSuccess');
    
    Route::get('/dealer_account', 'Dealer\DealerController@dealer_account');

    Route::get('/user_account', 'Customer\CustomerController@user_account');

    Route::get('/student_account', 'Student\StudentController@student_account');
    
    //hostel
    Route::get('/hostel', 'student\hostelController@index');

    Route::post('/storeForHostel', [
        'uses' => 'Student\hostelController@storeForHostel',
        'as' => 'storeForHostel'
    ]);

    Route::get('/getcourseAdmission/{id}', [
        'uses' => 'Student\StudentController@getcourseAdmission',
        'as' => 'getcourseAdmission'
    ]); 

    // Route::post('/buyCourse', [
    //     'uses' => 'Student\StudentController@buyCourse',
    //     'as' => 'buyCourse'
    // ]);
});

Route::post('/transactionSuccess', 'ProductController@transactionSuccess')->name('transactionSuccess');
    Route::post('/home/payment_error', function () {
        return view('shop.homepage');
    });

Route::post('/buyCourse', [
    'uses' => 'Student\StudentController@buyCourse',
    'as' => 'buyCourse'
]);

Route::post('/buyCourseOffline', [
    'uses' => 'Student\StudentController@buyCourseOffline',
    'as' => 'buyCourseOffline'
]);

Route::get('/about', function () {
    return view('shop.about');
});

Route::get('/faq', function () {
    return view('shop.faq');
});
Route::get('/contact', function () {
    return view('shop.contact');
});

Route::get('/productsearch', 'ProductController@getItem');
Route::get('/course_select/{name}', 'Customer\CourseController@course_select');
Route::get('/serachCourses', 'Customer\CourseController@serachCourses');
//course_select
Route::get('/productview/{id?}', 'Customer\CustomerController@showproduct');


Route::post('/contact/insert', 'ContactController@insert'); 



Route::get('password/email', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.email');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Auth::routes();


Route::group(['prefix' => 'user'], function () {

    Route::group(['middleware' => 'guest'], function () {
        //User registration routes
       
        Route::post('/signup',[
            'uses' => 'UserController@postSignUp',
            'as' => 'user.signup'
        ]);
        

        Route::post('/signin',[
            'uses' => 'UserController@postSignIn',
            'as' => 'user.signin'
        ]);
    });

    
});


//new routes
Route::get('/', 'SliderController@home_page_browse');
Route::get('/user/login', 'UserController@index');
Route::post('/user/login', 'UserController@login');
Route::get('/user/logout', 'UserController@getLogout');

//admin routes
Route::get('/admin', 'Admin\AdminController@index');


//Route::get('/dealerlist', 'Admin\DealerController@index');
// Route::get('/admin/dealer_product/{id}', 'Admin\DealerController@dealer_product');
// Route::post('/admin/updateproduct/{id}', 'Admin\ProductController@updateproduct');
// Route::get('/admin/viewproduct/{dealerid}/{id}', 'Admin\ProductController@viewproduct');
// Route::get('/admin/dealer_doc/{id}', 'Admin\DealerController@dealer_doc');
// Route::post('/admin/update_dealer_status/{id}', 'Admin\DealerController@updateDealerStatus');

Route::get('/franchiseelist', 'Admin\FranchiseeController@index');
Route::get('/admin/edit_franchisee/{id}', 'Admin\FranchiseeController@edit_franchisee');
Route::post('/admin/update_franchisee/', 'Admin\FranchiseeController@update_franchisee');
Route::get('/admin/delete_franchisee/{id}', 'Admin\FranchiseeController@delete_franchisee');
Route::get('/franchisee_addresses', 'Admin\FranchiseeController@franchisee_addresses');
Route::get('/franchisee_details', 'Admin\FranchiseeController@index2');
Route::get('/admin/franchisee_batches/{id}', 'Admin\FranchiseeController@franchisee_batches');
Route::post('/admin/updatebatch/{id}', 'Admin\FranchiseeController@updatebatch');
Route::get('/admin/viewbatch/{dealerid}/{id}', 'Admin\FranchiseeController@viewbatch');
Route::get('/admin/franchisee_doc/{id}', 'Admin\FranchiseeController@franchisee_doc');
Route::post('/admin/update_franchisee_status/{id}', 'Admin\FranchiseeController@update_franchisee_status');
Route::post('/admin/update_batch_status/{id}', 'Admin\FranchiseeController@update_batch_status');

Route::post('/dealer/recoreds', 'Admin\FranchiseeController@dealerRecords');

Route::get('/admin/batch/edit/{id}', 'Admin\FranchiseeController@batch_edit');
Route::post('/admin/batch/update/{id}', 'Admin\FranchiseeController@batch_update');
Route::get('/admin/batch/delete/{id}', 'Admin\FranchiseeController@batch_delete');

Route::get('/customerlist', 'Admin\CustomerController@index');
Route::get('/customerlist/delete/{id}', 'Admin\CustomerController@delete_customer');

Route::get('/admin/slider', 'Admin\SliderController@index');
Route::get('/admin/sliders/create/', 'Admin\SliderController@create');
Route::post('/admin/sliders/insert/', 'Admin\SliderController@insert');
Route::get('/admin/sliders/edit/{id}', 'Admin\SliderController@edit');
Route::post('/admin/sliders/update/{id}', 'Admin\SliderController@update');
Route::get('/admin/sliders/delete/{id}', 'Admin\SliderController@delete');

Route::get('/admin/orderlist', 'Admin\OrderlistController@index');
Route::get('/admin/orderlist2', 'Admin\OrderlistController@index2');
Route::post('/orders/records', 'Admin\OrderlistController@ordersRecords');
Route::get('/admin/enquirylist', 'Admin\EnquirylistController@index');
Route::get('/admin/delete_enquiry/{id}', 'Admin\EnquirylistController@delete_enquiry');
///orders/records

Route::get('/admin/map', 'Admin\MapController@index');
Route::get('/admin/map/create/', 'Admin\MapController@create');
Route::post('/admin/map/insert/', 'Admin\MapController@insert');
Route::get('/admin/map/edit/{id}', 'Admin\MapController@edit');
Route::post('/admin/map/update/{id}', 'Admin\MapController@update');


Route::get('/orderlist/delete/{id}', 'Admin\OrderlistController@orderdelete');
Route::post('/admin/updateorder/{id}','Admin\OrderlistController@updateorder');
Route::get('/admin/deleteorder/{id}','Admin\OrderlistController@deleteorder');
Route::get('/admin/cart/{id}',  'Admin\OrderlistController@admincart');

Route::get('/admin/product', 'Admin\ProductController@index');
Route::get('/admin/product/create/', 'Admin\ProductController@create');
Route::post('/admin/product/insert/', 'Admin\ProductController@insert');
Route::get('/admin/product/edit/{id}', 'Admin\ProductController@edit');
Route::post('/admin/product/update/{id}', 'Admin\ProductController@update');
Route::get('/admin/product/delete/{id}', 'Admin\ProductController@delete');

Route::get('/productlist', 'Admin\ProductController@productlist');
Route::get('/productlist/create/', 'Admin\ProductController@create');
Route::get('/productlist/edit/{id}', 'Admin\ProductController@edit');
Route::post('/productlist/update/{id}', 'Admin\ProductController@update');
Route::get('/productlist/delete/{id}', 'Admin\ProductController@delete');
Route::get('/productlist/stock/{id}', 'Admin\ProductController@stock');
Route::post('/admin/product/import', 'Admin\ProductController@import');
Route::get('/productlist/stock/available/{id}', 'Admin\ProductController@stockAvailable');
Route::get('/admin/editprices', 'Admin\ProductController@editprices');

Route::get('/enquirylist', 'Admin\ProductController@enquirylist');
Route::get('/admin/admissions/{id}', 'Admin\OrderlistController@getadmissions');

Route::get('/admin/userblogs', 'Admin\UserblogsController@index');
Route::get('/admin/userblogs/create/', 'Admin\UserblogsController@create');
Route::post('/admin/userblogs/insert/', 'Admin\UserblogsController@insert');
Route::get('/admin/userblogs/edit/{id}', 'Admin\UserblogsController@edit');
Route::post('/admin/userblogs/update/{id}', 'Admin\UserblogsController@update');
Route::get('/admin/userblogs/delete/{id}', 'Admin\UserblogsController@delete');

Route::get('/studentlist', 'Admin\StudentController@index');
Route::get('/admin/admissions', 'Admin\StudentController@getadmissions');
Route::get('/admin/admissions2', 'Admin\StudentController@getadmissions2');
Route::post('/admission/records', 'Admin\StudentController@getAdmissionsRecords');
Route::get('/delete_Admission/{id}', 'Admin\StudentController@delete_Admission');
Route::post('/admission/recordsByFranchisee', 'Admin\StudentController@getAdmissionsRecordsByFranchisee');
Route::get('/student_documents/{id}', 'Admin\StudentController@student_documents');
Route::get('/studentlist/delete/{id}', 'Admin\StudentController@delete_student');

//hostellist
Route::get('/hostellist', 'Admin\HostelListController@index');
//Route::get('/hostellist/delete/{id}', 'Admin\HostelListController@delete_hostel_record');
Route::get('/admin/delete_hostel/{id}', 'Admin\HostelListController@delete_hostel');


//delaer routes
// Route::get('/dealer', 'Dealer\DealerController@index');
// Route::post('/dealer/insert/', 'Dealer\DealerController@insert');
// Route::get('/dealer/edit/', 'Dealer\DealerController@edit');
// Route::post('/dealer/update/', 'Dealer\DealerController@update');

// Route::get('/verify/{email}', function () {
//     return view('dealer.verify');
// });

//Route::post('/processToVerify', 'Dealer\DealerController@processToVerify');

Route::get('/franchisee', 'Franchisee\FranchiseeController@index');
Route::post('/franchisee/insert/', 'Franchisee\FranchiseeController@insert');
Route::get('/franchisee/edit/', 'Franchisee\FranchiseeController@edit');
Route::post('/franchisee/update/', 'Franchisee\FranchiseeController@update');

Route::get('/verify/{email}', function () {
    return view('franchisee.verify');
});

Route::post('/processToVerify', 'Franchisee\FranchiseeController@processToVerify');

Route::get('/franchisee_account', 'Franchisee\FranchiseeController@franchisee_account');

//Route::get('/franchisee/admissions', 'Franchisee\FranchiseeController@getadmissions');

Route::get('/student_registration', [
        'uses' => 'Student\StudentController@index',
        'as' => 'student_registration'
    ]);

Route::post('/enrolForAdmissionInsert', [
        'uses' => 'Student\StudentController@enrolForAdmissionInsert',
        'as' => 'enrolForAdmissionInsert'
    ]);   


// Route::get('/document', 'Dealer\DocumentController@index');
// Route::get('/documentlist', 'Dealer\DocumentController@documentlist');
// Route::get('/documentlist/{id}', 'Dealer\DocumentController@checkdocumentlist');
// Route::get('/document/create/', 'Dealer\DocumentController@create');
// Route::post('/document/insert/', 'Dealer\DocumentController@insert');
// Route::get('/document/edit/{id}', 'Dealer\DocumentController@edit');
// Route::post('/document/update/{id}', 'Dealer\DocumentController@update');
// Route::get('/document/delete/{id}', 'Dealer\DocumentController@delete');


Route::get('/document', 'Franchisee\DocumentController@index');
Route::get('/documentlist', 'Franchisee\DocumentController@documentlist');
Route::get('/documentlist/{id}', 'Franchisee\DocumentController@checkdocumentlist');
Route::get('/document/create/', 'Franchisee\DocumentController@create');
Route::post('/document/insert/', 'Franchisee\DocumentController@insert');
Route::get('/document/edit/{id}', 'Franchisee\DocumentController@edit');
Route::post('/document/update/{id}', 'Franchisee\DocumentController@update');
Route::get('/document/delete/{id}', 'Franchisee\DocumentController@delete');

// Route::get('/account', 'Dealer\AccountController@index');
// Route::post('/account/insert/', 'Dealer\AccountController@insert');
// Route::get('/account_view', 'Dealer\AccountController@account_view');
// Route::post('/account_view/date/', 'Dealer\AccountController@av_date');
// Route::get('/account/edit', 'Dealer\AccountController@accountedit');
// Route::post('/account/update', 'Dealer\AccountController@accountupdate');

Route::get('/account', 'Franchisee\AccountController@index');
Route::post('/account/insert/', 'Franchisee\AccountController@insert');
Route::get('/account_view', 'Franchisee\AccountController@account_view');
Route::post('/account_view/date/', 'Franchisee\AccountController@av_date');
Route::get('/account/edit', 'Franchisee\AccountController@accountedit');
Route::post('/account/update/{id}', 'Franchisee\AccountController@update');

Route::get('/franchisee/agreement/{id}', 'Franchisee\FranchiseeController@download_bill');

Route::get('/franchisee_packages', 'Franchisee\FranchiseeController@franchisee_packages');
Route::get('/franchisee/payment', 'Franchisee\FranchiseeController@franchisee_payment');
Route::get('/franchisee_agreement', function () {
    return view('franchisee.franchisee_agreement');
});

Route::get('/franchisee/students', 'Franchisee\FranchiseeController@studentlist');
Route::get('/franchisee/student_documents/{id}', 'Franchisee\FranchiseeController@student_documents');

Route::get('/franchisee/admissions', 'Franchisee\AdmissionController@admissionlist');
Route::get('/franchisee/admissions2', 'Franchisee\AdmissionController@admissions2');
Route::post('/franchisee/admission/records', 'Franchisee\AdmissionController@getAdmissionsRecords');
// Route::get('/franchisee/admissions/create', 'Franchisee\AdmissionController@create');
// Route::get('/franchisee/admissions/insert', 'Franchisee\AdmissionController@insert');
// Route::get('/franchisee/admissions/edit', 'Franchisee\AdmissionController@edit');
// Route::post('/franchisee/admissions/update', 'Franchisee\AdmissionController@update');
// Route::post('/franchisee/admissions/delete', 'Franchisee\AdmissionController@delete');

Route::get('/franchisee/batches/', 'Franchisee\BatchController@batchlist');
Route::get('/franchisee/batches/create', 'Franchisee\BatchController@create');
Route::post('/franchisee/batches/insert', 'Franchisee\BatchController@insert');
Route::get('/franchisee/batches/edit/{id}', 'Franchisee\BatchController@edit');
Route::post('/franchisee/batches/update/{id}', 'Franchisee\BatchController@update');
Route::get('/franchisee/batches/delete/{id}', 'Franchisee\BatchController@delete');


// Route::get('/dealer/products', 'Dealer\ProductController@productlist');
// Route::get('/dealer/product/create', 'Dealer\ProductController@index');
// Route::post('/dealer/product/insert/', 'Dealer\ProductController@insert');
// Route::get('/dealer/product/edit/{id}', 'Dealer\ProductController@edit');
// Route::post('/dealer/product/update/{id}', 'Dealer\ProductController@update');
// Route::get('/dealer/product/delete/{id}', 'Dealer\ProductController@delete');

Route::get('/dealer/orders', 'Dealer\OrderController@index');
Route::get('/dealer_order_table', 'Dealer\OrderController@dealer_order_table');
Route::get('/dealercart/{id}',  'Dealer\OrderController@dealercart');
Route::post('/dealer/updateorder/{orderid}/{productid}',  'Dealer\OrderController@updateorder');

//customer
Route::get('/customer', 'Customer\CustomerController@index');
Route::post('/customer/insert', 'Customer\CustomerController@insert');
Route::get('/customer/edit', 'Customer\CustomerController@customerEditProfile');
Route::post('/customer/update', 'Customer\CustomerController@customerUpdateProfile');
Route::get('/customer/orders', 'Customer\CustomerController@orderlist');

Route::get('/student/edit', 'Student\StudentController@studentEditProfile');
Route::post('/student/update', 'Student\StudentController@studentUpdateProfile');
Route::get('/student/courses', 'Student\StudentController@myCourses');
Route::get('/student/course/{id}', 'Student\StudentController@download_bill');
//shop
Route::get('/electronics', function () {
    return view('shop.electronics');
});

Route::get('/health_beauty', function () {
    return view('shop.health_beauty');
});

Route::get('/sports', function () {
    return view('shop.sports');
});

Route::get('/fashion', function () {
    return view('shop.fashion');
});

Route::get('/home_garden', function () {
    return view('shop.home_and_garden');
});

Route::get('/furniture', function () {
    return view('shop.furniture');
});

Route::get('/motors', function () {
    return view('shop.motors');
});

Route::get('/books', function () {
    return view('shop.books');
});

Route::get('/collectibles', function () {
    return view('shop.collectibles');
});

Route::get('/machinery', function () {
    return view('shop.Machinery');
});
Route::get('/repairing_tools', 'Customer\LaptopController@repairing_tools');
Route::get('/smd_machine', 'Customer\LaptopController@smd_machine');
Route::get('/soldering_gun', 'Customer\LaptopController@soldering_gun');
Route::get('/disordering_pump', 'Customer\LaptopController@disordering_pump');
Route::get('/twisers', 'Customer\LaptopController@twisers');
Route::get('/cutter', 'Customer\LaptopController@cutter');
Route::get('/soldering_pest', 'Customer\LaptopController@soldering_pest');
Route::get('/desoldring_wire', 'Customer\LaptopController@desoldring_wire');
Route::get('/opener', 'Customer\LaptopController@opener');
Route::get('/magnify_lamp', 'Customer\LaptopController@magnify_lamp');
Route::get('/microscope', 'Customer\LaptopController@microscope');
Route::get('/bios_programmer', 'Customer\LaptopController@bios_programmer');
Route::get('/tool_kit', 'Customer\LaptopController@tool_kit');
Route::get('/smd_tester', 'Customer\LaptopController@smd_tester');
Route::get('/dc_power_supply', 'Customer\LaptopController@dc_power_supply');
Route::get('/booster', 'Customer\LaptopController@booster');
Route::get('/LED_Backlight_Tester', 'Customer\LaptopController@LED_Backlight_Tester');

Route::get('/ics', 'Customer\LaptopController@ics');
Route::get('/Components', 'Customer\LaptopController@Components');

//mobiles
Route::get('/Mobiles', 'Customer\MobileController@all_new_mobiles');
Route::get('/all_new_mobiles', 'Customer\LaptopController@all_new_mobiles');
Route::get('/oppo', 'Customer\MobileController@oppo');
Route::get('/samsung', 'Customer\MobileController@samsung');
Route::get('/iphone', 'Customer\MobileController@iphone');
Route::get('/redmi', 'Customer\MobileController@redmi');
Route::get('/itel', 'Customer\MobileController@itel');
Route::get('/vivo', 'Customer\MobileController@vivo');

//mobile accessories
Route::get('/mobile_accessories', 'Customer\MobileController@all_new_mobile_accessories');
Route::get('/headsets', 'Customer\MobileController@headsets');
Route::get('/gadgets', 'Customer\MobileController@gadgets');

Route::get('/all_new_laptop', 'Customer\LaptopController@all_new_laptop');
Route::get('/dell_new_laptop', 'Customer\LaptopController@dell_new_laptop');
Route::get('/hp_new_laptop', 'Customer\LaptopController@hp_new_laptop');
Route::get('/lenovo_new_laptop', 'Customer\LaptopController@lenovo_new_laptop');
Route::get('/toshiba_new_laptop', 'Customer\LaptopController@toshiba_new_laptop');
Route::get('/acer_new_laptop', 'Customer\LaptopController@acer_new_laptop');
Route::get('/asus_new_laptop', 'Customer\LaptopController@asus_new_laptop');
Route::get('/others_new_laptop', 'Customer\LaptopController@others_new_laptop');


Route::get('/all_refurbished_laptop', 'Customer\LaptopController@all_refurbished_laptop');
Route::get('/refurbished_dell_laptop', 'Customer\LaptopController@refurbished_dell_laptop');
Route::get('/refurbished_hp_laptop', 'Customer\LaptopController@refurbished_hp_laptop');
Route::get('/refurbished_lenovo_laptop', 'Customer\LaptopController@refurbished_lenovo_laptop');
Route::get('/refurbished_toshiba_laptop', 'Customer\LaptopController@refurbished_toshiba_laptop');
Route::get('/refurbished_acer_laptop', 'Customer\LaptopController@refurbished_acer_laptop');
Route::get('/refurbished_asus_laptop', 'Customer\LaptopController@refurbished_asus_laptop');
Route::get('/refurbished_others_laptop', 'Customer\LaptopController@refurbished_others_laptop');

Route::get('/laptop_screen', 'Customer\LaptopController@laptop_screen');
Route::get('/laptop_keyboard', 'Customer\LaptopController@laptop_keyboard');
Route::get('/laptop_hinges', 'Customer\LaptopController@laptop_hinges');
Route::get('/laptop_body', 'Customer\LaptopController@laptop_body');
Route::get('/laptop_wificard', 'Customer\LaptopController@laptop_wificard');
Route::get('/laptop_dvd_rw', 'Customer\LaptopController@laptop_dvd_rw');
Route::get('/laptop_charger', 'Customer\LaptopController@laptop_charger');
Route::get('/laptop_bios_battery', 'Customer\LaptopController@laptop_bios_battery');
Route::get('/laptop_cables', 'Customer\LaptopController@laptop_cables');
Route::get('/laptop_dc_jack', 'Customer\LaptopController@laptop_dc_jack');
Route::get('/laptop_hitsing', 'Customer\LaptopController@laptop_hitsing');
Route::get('/laptop_hitting_pest', 'Customer\LaptopController@laptop_hitting_pest');
Route::get('/laptop_touchpad', 'Customer\LaptopController@laptop_touchpad');
Route::get('/laptop_speaker', 'Customer\LaptopController@laptop_speaker');
Route::get('/laptop_battery', 'Customer\LaptopController@laptop_battery');
Route::get('/laptop_other_peripheral', 'Customer\LaptopController@laptop_other_peripheral');
Route::get('/all_laptop_peripheral_laptop', 'Customer\LaptopController@all_laptop_peripheral_laptop');

Route::get('/all_new_desktop', 'Customer\DesktopController@all_new_desktop');
Route::get('/dell_new_desktop', 'Customer\DesktopController@dell_new_desktop');
Route::get('/hp_new_desktop', 'Customer\DesktopController@hp_new_desktop');
Route::get('/lenovo_new_desktop', 'Customer\DesktopController@lenovo_new_desktop');
Route::get('/toshiba_new_desktop', 'Customer\DesktopController@toshiba_new_desktop');
Route::get('/acer_new_desktop', 'Customer\DesktopController@acer_new_desktop');
Route::get('/asus_new_desktop', 'Customer\DesktopController@asus_new_desktop');
Route::get('/others_new_desktop', 'Customer\DesktopController@others_new_desktop');

Route::get('/all_refurbished_desktop', 'Customer\DesktopController@all_refurbished_desktop');
Route::get('/dell_refurbished_desktop', 'Customer\DesktopController@dell_refurbished_desktop');
Route::get('/hp_refurbished_desktop', 'Customer\DesktopController@hp_refurbished_desktop');
Route::get('/lenovo_refurbished_desktop', 'Customer\DesktopController@lenovo_refurbished_desktop');
Route::get('/toshiba_refurbished_desktop', 'Customer\DesktopController@toshiba_refurbished_desktop');
Route::get('/acer_refurbished_desktop', 'Customer\DesktopController@acer_refurbished_desktop');
Route::get('/asus_refurbished_desktop', 'Customer\DesktopController@asus_refurbished_desktop');
Route::get('/others_refurbished_desktop', 'Customer\DesktopController@others_refurbished_desktop');

Route::get('/all_accessories', 'Customer\AccessoriesController@all_accessories');
Route::get('/gaming', 'Customer\AccessoriesController@gaming');
Route::get('/adapters', 'Customer\AccessoriesController@adapters');
Route::get('/batteries_accessories', 'Customer\AccessoriesController@batteries_accessories');
Route::get('/cooling_pads', 'Customer\AccessoriesController@cooling_pads');
Route::get('/headphones', 'Customer\AccessoriesController@headphones');
Route::get('/routers_modems', 'Customer\AccessoriesController@routers_modems');
Route::get('/cpu_processors', 'Customer\AccessoriesController@cpu_processors');
Route::get('/graphics_cards', 'Customer\AccessoriesController@graphics_cards');
Route::get('/webcam', 'Customer\AccessoriesController@webcam');
Route::get('/keyboards', 'Customer\AccessoriesController@keyboards');
Route::get('/mouse', 'Customer\AccessoriesController@mouse');
Route::get('/other_accessories', 'Customer\AccessoriesController@other_accessories');

Route::get('/memory_devices', 'Customer\MemoryController@memory_devices');
Route::get('/ram', 'Customer\MemoryController@ram');
Route::get('/ssd', 'Customer\MemoryController@ssd');
Route::get('/hd', 'Customer\MemoryController@hd');
Route::get('/portable_hd', 'Customer\MemoryController@portable_hd');
Route::get('/pen_drive', 'Customer\MemoryController@pen_drive');

Route::get('/softwares', 'Customer\SoftwareController@softwares');
Route::get('/windows_10', 'Customer\SoftwareController@windows_10');
Route::get('/npav', 'Customer\SoftwareController@npav');
Route::get('/quickheal', 'Customer\SoftwareController@quickheal');
Route::get('/other_software', 'Customer\SoftwareController@other_software');

Route::get('/all_printer', 'Customer\PrinterController@all_printer');
Route::get('/hp_printer', 'Customer\PrinterController@hp_printer');
Route::get('/canon_printer', 'Customer\PrinterController@canon_printer');
Route::get('/xerox_printer', 'Customer\PrinterController@xerox_printer');
Route::get('/reco_printer', 'Customer\PrinterController@reco_printer');
Route::get('/lenovo_printer', 'Customer\PrinterController@lenovo_printer');
Route::get('/epson_printer', 'Customer\PrinterController@epson_printer');
Route::get('/printer_peripheral', 'Customer\PrinterController@printer_peripheral');

//Route::get('/courses', 'Customer\CourseController@courses');
Route::get('/courses', 'Customer\CourseController@all_courses');
Route::get('/laptop_repair', 'Customer\CourseController@laptop_repair');
Route::get('/mobile_repair', 'Customer\CourseController@mobile_repair');
Route::get('/printer_repair', 'Customer\CourseController@printer_repair');
Route::get('/lcd_repair', 'Customer\CourseController@lcd_repair');
Route::get('/cctv_repair', 'Customer\CourseController@cctv_repair');
Route::get('/xerox_repair', 'Customer\CourseController@xerox_repair');
Route::get('/ac_repair', 'Customer\CourseController@ac_repair');
Route::get('/freeze_repair', 'Customer\CourseController@freeze_repair');
Route::get('/washing_machine_repair', 'Customer\CourseController@washing_machine_repair');
Route::get('/motor_winding_repair', 'Customer\CourseController@motor_winding_repair');
Route::get('/hdd_repair', 'Customer\CourseController@hdd_repair');
Route::get('/grinder_repair', 'Customer\CourseController@grinder_repair');
Route::get('/fan_repair', 'Customer\CourseController@fan_repair');
Route::get('/cooler_repair', 'Customer\CourseController@cooler_repair');
Route::get('/owen_repair', 'Customer\CourseController@owen_repair');
Route::get('/elevator_repair', 'Customer\CourseController@elevator_repair');
Route::get('/combo_course1', 'Customer\CourseController@combo_course1');
Route::get('/combo_course2', 'Customer\CourseController@combo_course2');
Route::get('/combo_course3', 'Customer\CourseController@combo_course3');
Route::get('/hardware_course', 'Customer\CourseController@hardware_course');
Route::get('/basic_electronic_course', 'Customer\CourseController@basic_electronic_course');
Route::get('/batchview/{id}', 'Customer\CourseController@batchview');

Route::group(['prefix' => 'user'], function () {

    Route::group(['middleware' => 'auth'], function (){
        // Route::get('/wishlist', [
        //     'uses' => 'Customer\CustomerController@getWishlist',
        //     'as' => 'user.wishlist'
        // ]);

        Route::get('/wishlist', 'Customer\CustomerController@getWishlist');
        Route::get('/add-to-wishlist/{id}', 'Customer\CustomerController@addToWishlist');
        Route::get('/remove-from-wishlist/{id}', 'Customer\CustomerController@RemoveFromWishlist');
        Route::get('/remove-from-wishlist1/{id}', 'Customer\CustomerController@RemoveFromWishlist1');
   });
});

Route::get('/dropdownsearch','ProductController@dropdownsearch');

Route::get('/createpdf', 'Franchisee\FranchiseeController@createpdf');
Route::get('/convert_agreement_to_html', 'Franchisee\FranchiseeController@convert_agreement_to_html');

Route::get('/userblogs/all', 'UserblogsController@browse');
Route::post('/userblogs/search', 'UserblogsController@search');
Route::get('/userblogs/show/{id?}', 'UserblogsController@showblog');
Route::get('/userblogs/gallery/get/{searchval?}', 'UserblogsController@getblogs');
Route::get('/userblogs', 'UserblogsController@browse');
Route::get('gmaps', 'UserblogsController@gmaps');

Route::post('/store','enquiryController@store');
Route::get('gallery', function () {
    return view('shop.gallery');
});