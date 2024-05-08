<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        Menu::create([ "title" => "Dashboard"   , "menu_id" => null, "path" => "dashboard"  , "icon" => "dashboard.svg"    , "sort" => 1 ]); // id 1
        
        Menu::create([ "title" => "Registrar"   , "menu_id" => null, "path" => "#"          , "icon" => "summary.svg"      , "sort" => 1 ]); // id 2

        Menu::create([ "title" => "Option One"  , "menu_id" => 2   , "path" => "option-one"  , "icon" => "products.svg"    , "sort" => 1 ]); // id 3
        
        Menu::create([ "title" => "Option Two"  , "menu_id" => 2   , "path" => "option-two"  , "icon" => "movements.svg"   , "sort" => 2 ]); // id 4

        Menu::create([ "title" => "Option Three", "menu_id" => 2   , "path" => "option-three", "icon" => "mark.svg"        , "sort" => 3 ]); // id 5

        Menu::create([ "title" => "Admin"       , "menu_id" => null, "path" => "#"           , "icon" => "categories.svg"  , "sort" => 4 ]); // id 6

        Menu::create([ "title" => "Menus"       , "menu_id" => 6   , "path" => "menus"       , "icon" => "articles.svg"       , "sort" => 1 ]); // id 7 
     
        Menu::create([ "title" => "Roles"       , "menu_id" => 6   , "path" => "roles"       , "icon" => "users.svg"       , "sort" => 2 ]); // id 8
        
        Menu::create([ "title" => "Users"       , "menu_id" => 6   , "path" => "users"       , "icon" => "user.svg"        , "sort" => 3 ]); // id 9

    }
}

