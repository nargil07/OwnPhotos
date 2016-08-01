<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;
use Validator;

class InstallationController extends Controller
{
    /**
     * Show installation form
     */
    public function show()
    {
        return view('installation');
    }

    /**
     * validate installation form
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'adresse' => 'required',
            'mysqluser' => 'required',
            'mysqlpwd' => 'required',
            'user' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            redirect('installation')->withInput()->withErrors($validator);
        }
        $path = base_path('.env');
        copy(base_path('.env.example'), $path);
        $content = file_get_contents($path);
        $content = str_replace(
            'DB_HOST=127.0.0.1', 'DB_HOST=' . $request->input('adresse'), $content
        );
        $content = str_replace(
            'DB_DATABASE=homestead', 'DB_DATABASE=' . $request->input('name'), $content
        );
        $content = str_replace(
            'DB_USERNAME=homestead', 'DB_USERNAME=' . $request->input('mysqluser'), $content
        );

        $content = str_replace(
            'DB_PASSWORD=secret', 'DB_PASSWORD=' . $request->input('mysqlpwd'), $content
        );
        file_put_contents($path, $content);
        $url_to_go = url('login'); //Before cache is clear to get the good url
        Artisan::call('key:generate');
        Artisan::call('config:cache');
        $error = Artisan::call('migrate', [
            "--force" => true,
        ]);

        $user = new User();
        $user->name = $request->input('user');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect($url_to_go);
    }
}
