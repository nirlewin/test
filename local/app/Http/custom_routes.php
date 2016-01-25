<?php

/* custom routes generated by CRUD */Route::group(array('prefix' => 'admin'), function () {Route::resource('levels', 'LevelsController');
	Route::get('levels/{id}/delete', array('as' => 'admin.levels.delete', 'uses' => 'LevelsController@getDelete'));
	Route::get('levels/{id}/confirm-delete', array('as' => 'admin.levels.confirm-delete', 'uses' => 'LevelsController@getModalDelete'));
});Route::group(array('prefix' => 'admin'), function () {Route::resource('workouts', 'WorkoutsController');
	Route::get('workouts/{id}/delete', array('as' => 'admin.workouts.delete', 'uses' => 'WorkoutsController@getDelete'));
	Route::get('workouts/{id}/confirm-delete', array('as' => 'admin.workouts.confirm-delete', 'uses' => 'WorkoutsController@getModalDelete'));
});Route::group(array('prefix' => 'admin'), function () {Route::resource('exercises', 'ExercisesController');
	Route::get('exercises/{id}/delete', array('as' => 'admin.exercises.delete', 'uses' => 'ExercisesController@getDelete'));
	Route::get('exercises/{id}/confirm-delete', array('as' => 'admin.exercises.confirm-delete', 'uses' => 'ExercisesController@getModalDelete'));
});Route::group(array('prefix' => 'admin'), function () {Route::resource('apps', 'AppsController');
	Route::get('apps/{id}/delete', array('as' => 'admin.apps.delete', 'uses' => 'AppsController@getDelete'));
	Route::get('apps/{id}/confirm-delete', array('as' => 'admin.apps.confirm-delete', 'uses' => 'AppsController@getModalDelete'));
});Route::group(array('prefix' => 'admin'), function () {Route::resource('abouts', 'AboutsController');
	Route::get('abouts/{id}/delete', array('as' => 'admin.abouts.delete', 'uses' => 'AboutsController@getDelete'));
	Route::get('abouts/{id}/confirm-delete', array('as' => 'admin.abouts.confirm-delete', 'uses' => 'AboutsController@getModalDelete'));
});Route::group(array('prefix' => 'admin'), function () {Route::resource('aboutlocations', 'AboutlocationsController');
	Route::get('aboutlocations/{id}/delete', array('as' => 'admin.aboutlocations.delete', 'uses' => 'AboutlocationsController@getDelete'));
	Route::get('aboutlocations/{id}/confirm-delete', array('as' => 'admin.aboutlocations.confirm-delete', 'uses' => 'AboutlocationsController@getModalDelete'));
});Route::group(array('prefix' => 'admin'), function () {Route::resource('ads', 'AdsController');
	Route::get('ads/{id}/delete', array('as' => 'admin.ads.delete', 'uses' => 'AdsController@getDelete'));
	Route::get('ads/{id}/confirm-delete', array('as' => 'admin.ads.confirm-delete', 'uses' => 'AdsController@getModalDelete'));
});Route::group(array('prefix' => 'admin'), function () {Route::resource('contactsdepartments', 'ContactsdepartmentsController');
	Route::get('contactsdepartments/{id}/delete', array('as' => 'admin.contactsdepartments.delete', 'uses' => 'ContactsdepartmentsController@getDelete'));
	Route::get('contactsdepartments/{id}/confirm-delete', array('as' => 'admin.contactsdepartments.confirm-delete', 'uses' => 'ContactsdepartmentsController@getModalDelete'));
});Route::group(array('prefix' => 'admin'), function () {Route::resource('contacts', 'ContactsController');
	Route::get('contacts/{id}/delete', array('as' => 'admin.contacts.delete', 'uses' => 'ContactsController@getDelete'));
	Route::get('contacts/{id}/confirm-delete', array('as' => 'admin.contacts.confirm-delete', 'uses' => 'ContactsController@getModalDelete'));
});Route::group(array('prefix' => 'admin'), function () {Route::resource('usersnews', 'UsersnewsController');
	Route::get('usersnews/{id}/delete', array('as' => 'admin.usersnews.delete', 'uses' => 'UsersnewsController@getDelete'));
	Route::get('usersnews/{id}/confirm-delete', array('as' => 'admin.usersnews.confirm-delete', 'uses' => 'UsersnewsController@getModalDelete'));
});Route::group(array('prefix' => 'admin'), function () {Route::resource('countries', 'CountriesController');
	Route::get('countries/{id}/delete', array('as' => 'admin.countries.delete', 'uses' => 'CountriesController@getDelete'));
	Route::get('countries/{id}/confirm-delete', array('as' => 'admin.countries.confirm-delete', 'uses' => 'CountriesController@getModalDelete'));
});Route::group(array('prefix' => 'admin'), function () {Route::resource('carats', 'CaratsController');
	Route::get('carats/{id}/delete', array('as' => 'admin.carats.delete', 'uses' => 'CaratsController@getDelete'));
	Route::get('carats/{id}/confirm-delete', array('as' => 'admin.carats.confirm-delete', 'uses' => 'CaratsController@getModalDelete'));
});Route::group(array('prefix' => 'admin'), function () {Route::resource('claritys', 'ClaritysController');
	Route::get('claritys/{id}/delete', array('as' => 'admin.claritys.delete', 'uses' => 'ClaritysController@getDelete'));
	Route::get('claritys/{id}/confirm-delete', array('as' => 'admin.claritys.confirm-delete', 'uses' => 'ClaritysController@getModalDelete'));
});Route::group(array('prefix' => 'admin'), function () {Route::resource('colors', 'ColorsController');
	Route::get('colors/{id}/delete', array('as' => 'admin.colors.delete', 'uses' => 'ColorsController@getDelete'));
	Route::get('colors/{id}/confirm-delete', array('as' => 'admin.colors.confirm-delete', 'uses' => 'ColorsController@getModalDelete'));
});Route::group(array('prefix' => 'admin'), function () {Route::resource('cuts', 'CutsController');
	Route::get('cuts/{id}/delete', array('as' => 'admin.cuts.delete', 'uses' => 'CutsController@getDelete'));
	Route::get('cuts/{id}/confirm-delete', array('as' => 'admin.cuts.confirm-delete', 'uses' => 'CutsController@getModalDelete'));
});Route::group(array('prefix' => 'admin'), function () {Route::resource('fluorescences', 'FluorescencesController');
	Route::get('fluorescences/{id}/delete', array('as' => 'admin.fluorescences.delete', 'uses' => 'FluorescencesController@getDelete'));
	Route::get('fluorescences/{id}/confirm-delete', array('as' => 'admin.fluorescences.confirm-delete', 'uses' => 'FluorescencesController@getModalDelete'));
});Route::group(array('prefix' => 'admin'), function () {Route::resource('polishs', 'PolishsController');
	Route::get('polishs/{id}/delete', array('as' => 'admin.polishs.delete', 'uses' => 'PolishsController@getDelete'));
	Route::get('polishs/{id}/confirm-delete', array('as' => 'admin.polishs.confirm-delete', 'uses' => 'PolishsController@getModalDelete'));
});Route::group(array('prefix' => 'admin'), function () {Route::resource('reports', 'ReportsController');
	Route::get('reports/{id}/delete', array('as' => 'admin.reports.delete', 'uses' => 'ReportsController@getDelete'));
	Route::get('reports/{id}/confirm-delete', array('as' => 'admin.reports.confirm-delete', 'uses' => 'ReportsController@getModalDelete'));
});Route::group(array('prefix' => 'admin'), function () {Route::resource('shapes', 'ShapesController');
	Route::get('shapes/{id}/delete', array('as' => 'admin.shapes.delete', 'uses' => 'ShapesController@getDelete'));
	Route::get('shapes/{id}/confirm-delete', array('as' => 'admin.shapes.confirm-delete', 'uses' => 'ShapesController@getModalDelete'));
});Route::group(array('prefix' => 'admin'), function () {Route::resource('symmetrys', 'SymmetrysController');
	Route::get('symmetrys/{id}/delete', array('as' => 'admin.symmetrys.delete', 'uses' => 'SymmetrysController@getDelete'));
	Route::get('symmetrys/{id}/confirm-delete', array('as' => 'admin.symmetrys.confirm-delete', 'uses' => 'SymmetrysController@getModalDelete'));
});Route::group(array('prefix' => 'admin'), function () {Route::resource('diamonds', 'DiamondsController');
	Route::get('diamonds/{id}/delete', array('as' => 'admin.diamonds.delete', 'uses' => 'DiamondsController@getDelete'));
	Route::get('diamonds/{id}/confirm-delete', array('as' => 'admin.diamonds.confirm-delete', 'uses' => 'DiamondsController@getModalDelete'));
});Route::group(array('prefix' => 'admin'), function () {Route::resource('faqs', 'FaqsController');
	Route::get('faqs/{id}/delete', array('as' => 'admin.faqs.delete', 'uses' => 'FaqsController@getDelete'));
	Route::get('faqs/{id}/confirm-delete', array('as' => 'admin.faqs.confirm-delete', 'uses' => 'FaqsController@getModalDelete'));
});Route::group(array('prefix' => 'admin'), function () {Route::resource('offers', 'OffersController');
	Route::get('offers/{id}/delete', array('as' => 'admin.offers.delete', 'uses' => 'OffersController@getDelete'));
	Route::get('offers/{id}/confirm-delete', array('as' => 'admin.offers.confirm-delete', 'uses' => 'OffersController@getModalDelete'));
});Route::group(array('prefix' => 'admin'), function () {Route::resource('terms', 'TermsController');
	Route::get('terms/{id}/delete', array('as' => 'admin.terms.delete', 'uses' => 'TermsController@getDelete'));
	Route::get('terms/{id}/confirm-delete', array('as' => 'admin.terms.confirm-delete', 'uses' => 'TermsController@getModalDelete'));
});