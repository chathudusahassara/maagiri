<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\Models\PageMedia;

class PageMediaController extends Controller
{
    //
    public function getPageMedia($pageId, $type){

        $media = PageMedia::where([['pages_id',$pageId], ['media_types',$type], ['is_active',1]])->get();
        return $media;

    }//


    public function get_page_sub_banner($pageId, $type){

        $media = PageMedia::where([['pages_id',$pageId], ['media_types',$type], ['is_active',1]])
                ->first();

        return $media;
    }//


    //get all active media
    public function all_media(){

        $media = PageMedia::where('page_medias.is_active',1)
                ->join('pages', 'pages.id', '=', 'page_medias.pages_id')
                ->join('page_media_types', 'page_media_types.id', '=', 'page_medias.media_types')
                ->select('pages.name as pagename', 'page_medias.name as pagemedianame','page_media_types.name as pagemediatypename', 'page_medias.id as mediaId', 'page_medias.file as file' )
                ->orderby('pages.name')
                ->get();
        return $media;

    }//


    public function get_media_by_id($mediaId){

        $media = PageMedia::where('id', $mediaId)->first();
        return $media;
    }
    

    //stroe media
    public function store(){

        $msg = "success";
  
        $file = Input::file('file');
        $path = Storage::putFile('public/d', $file);
        $img = substr($path, 9);
  
        $media = new PageMedia;
        $media->name = Input::get('name');
        $media->details = Input::get('details');
        $media->file = $img;
        $media->pages_id = Input::get('pages_id');
        $media->media_types = Input::get('media_types');
        $media->is_active = 1;
        //$tag->created_at = date('Y/m/d H:i:s');
        $media->save();
  
        return redirect('easy/media/all');
  
      }

      
      //update
      public function update(){

        $msg = "success";
        
        
        $file = Input::file('file');

        if($file != null){
        $path = Storage::putFile('public/d', $file);
        $img = substr($path, 9);

        // if($file != null){
        //     $f = PageMedia::where('id', Input::get('mid'))->first
        // }

        PageMedia::where('id', Input::get('mid'))->update([
            'name' => Input::get('name'),
            'details' => Input::get('details'),
            'file' => $img
        ]);
        }else{

            PageMedia::where('id', Input::get('mid'))->update([
                'name' => Input::get('name'),
                'details' => Input::get('details')
            ]);

        }

        return redirect('easy/media/all');
      }


      //delete media
      public function delete($id){

        $media = PageMedia::where('id', $id);
        $media->delete();

        return redirect('easy/media/all');
      }




}
