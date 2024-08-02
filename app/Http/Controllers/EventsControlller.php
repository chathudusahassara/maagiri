<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PageContentService;

use Inertia\Inertia;

class EventsControlller extends Controller
{

    protected $pageContentService;

    public function __construct(PageContentService $pageContentService)
    {
        $this->pageContentService = $pageContentService;
    }

    public function weddings(){


        $type = 3; //Gallery

        $media  = $this->pageContentService->getPageMedia(16, $type);
        return Inertia::render('Events/Weddings', [
            'gallery' => $media
        ]);
    }

    public function events(){

        $type = 3; //Gallery

        $media  = $this->pageContentService->getPageMedia(17, $type);
        return Inertia::render('Events/EventsMeetings', [
            'gallery' => $media
        ]);
    }
}
