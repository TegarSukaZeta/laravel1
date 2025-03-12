<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function index()
   {
   $profile = [
      'name' => 'imanuel tegar',
      'email' => 'imanueltegarn@gmail.com',
      'bio' => 'sayung to mekkah',
      'profile_picture' => 'Rusdi_Omaygot.png',
      'skills' => ['Mewing', 'Masak', 'Master C--', 'EXP laner']
   ];
    return view('profile', compact('profile'));
   }

   public function home()
   {
    return view('home');
   }

   public function about()
   {
    return view('about');
   }

   public function contact()
   {
    return view('contact');
   }
}
