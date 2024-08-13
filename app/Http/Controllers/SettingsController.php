<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function generalSettings()
    {
        // Logic for general settings
        return view('settings.general');
    }

    public function footerSettings()
    {
        // Logic for footer settings
        return view('settings.footer');
    }

    public function colorSettings()
    {
        // Logic for color settings
        return view('settings.color');
    }

    public function city()
    {
        // Logic for city settings
        return view('settings.city');
    }

    public function courier()
    {
        // Logic for courier settings
        return view('settings.courier');
    }

    public function comment()
    {
        // Logic for comment settings
        return view('settings.comment');
    }

    public function deliveryCharge()
    {
        // Logic for delivery charge settings
        return view('settings.delivery_charge');
    }

    public function emergencyNotice()
    {
        // Logic for emergency notice settings
        return view('settings.emergency_notice');
    }
}

