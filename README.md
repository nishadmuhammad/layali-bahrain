<p align="center"><img src="http://www.layalibahrain.com/logo.png"></p>

## Welcome to Spadika Admin Panel

After coloning the repository please do the following

Copy contents of .env.example and create .env
migrate : php artisan:migrate
Make model with migration : php artisan make:model ModelName -m
Add fields in migration (add nullable to required)
Migrate php artisan migrate
Make resource controller  : php artisan make:controller NameController --resource
Add resource routes : Route::resource('post','PostController')->only(['index','create','store','destroy','edit','update']);

More at https://docs.google.com/spreadsheets/d/1j2kqDAm3qgjkx4PTpSLiY81YFVYX1yB3YCyak-QV42U/edit?usp=sharing

Laravel Version 6.*
