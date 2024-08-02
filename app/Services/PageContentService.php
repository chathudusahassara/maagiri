<?php

namespace App\Services;

use App\Models\PageMedia;

class PageContentService
{
    public function getPageMedia($pageId, $type)
    {
        $media = PageMedia::where([
            ['pages_id', $pageId], 
            ['media_types', $type], 
            ['is_active', 1]
        ])->get();
        
        return $media;
    }
}