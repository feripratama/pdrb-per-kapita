<?php

Route::group(['prefix' => 'pdrb-per-kapita', 'middleware' => ['web']], function() {

    $controllers = (object) [
        'index'     => 'Bantenprov\PdrbPerKapita\Http\Controllers\PdrbPerKapitaController@index',
        'create'     => 'Bantenprov\PdrbPerKapita\Http\Controllers\PdrbPerKapitaController@create',
        'store'     => 'Bantenprov\PdrbPerKapita\Http\Controllers\PdrbPerKapitaController@store',
        'show'      => 'Bantenprov\PdrbPerKapita\Http\Controllers\PdrbPerKapitaController@show',
        'update'    => 'Bantenprov\PdrbPerKapita\Http\Controllers\PdrbPerKapitaController@update',
        'destroy'   => 'Bantenprov\PdrbPerKapita\Http\Controllers\PdrbPerKapitaController@destroy',
    ];

    Route::get('/',$controllers->index)->name('pdrb-per-kapita.index');
    Route::get('/create',$controllers->create)->name('pdrb-per-kapita.create');
    Route::post('/store',$controllers->store)->name('pdrb-per-kapita.store');
    Route::get('/{id}',$controllers->show)->name('pdrb-per-kapita.show');
    Route::put('/{id}/update',$controllers->update)->name('pdrb-per-kapita.update');
    Route::post('/{id}/delete',$controllers->destroy)->name('pdrb-per-kapita.destroy');

});

