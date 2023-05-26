<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class DashboardController extends Controller
{
    public function jumpToDashboard(): Response
    {
        return response(view('pages.dashboard'));
    }

    public function jumpToMessage(): Response
    {
        return response(view('pages.messages'));
    }

    public function jumpToFileManager(): Response
    {
        return response(view('pages.file_manager'));
    }

    public function jumpToSettings(): Response
    {
        return response(view('pages.settings'));
    }

    /**
     * View CV downloader page
     */
    public function cvdwldr(): Response
    {
        return response(view("layouts.cvdownloader"));
    }

    /**
     * View CV downloader page
     */
    public function jumpToDashboardAddItem(): Response
    {
        return response(view("layouts.add_dashboard_item_layout"));
    }
}