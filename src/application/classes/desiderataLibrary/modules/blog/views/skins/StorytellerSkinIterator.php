<?php
class desiderataLibrary_modules_blog_views_skins_StorytellerSkinIterator extends GlizyObject implements Iterator
{
    private $pos = 0;
    private $count = 0;
    private $content;
    private $pageId;
    private $pageUrl;

    function __construct( $content, $pageId, $pageUrl )
    {
        $this->content = $content;
        $this->pageId = $pageId;
        $this->pageUrl = $pageUrl;
        $this->count = count($this->content);
    }

    function current()
    {
        $value = $this->content[$this->pos];

        $this->prepareText($value);
        switch ($value->type) {
            case 'video':
                $this->prepareVideo($value);
                break;
            case 'video_ext':
                $this->prepareVideoExt($value);
                break;
            case 'image':
                $this->prepareImage($value);
                break;
            case 'photogallery':
                $this->preparePhotogallery($value);
                break;
        }

        return $value;
    }

    function key()
    {
        return $this->pos;
    }

    function next()
    {
        $this->pos++;
    }

    function rewind()
    {
        $this->pos = 0;
    }

    function valid()
    {
        return $this->pos < $this->count;
    }

    function count()
    {
        return $this->count;
    }

    private function prepareText($value)
    {
        $value->storyText = org_glizy_helpers_Link::parseInternalLinks($value->storyText);
    }

    private function prepareTextMedia($value)
    {
        $value->type = 'text';
        $this->prepareImage($value);
        $this->prepareAudio($value);
        $this->prepareVideo($value);
    }

    private function prepareVideo($value)
    {
        if ($value->storyVideo && is_string($value->storyVideo)) {
            $img = json_decode($value->storyVideo);
            $value->storyVideo = $img->id;
        }
    }

    private function prepareVideoExt($value)
    {
        preg_match_all('/http(s)?:\/\/(?:www.)?(vimeo|youtube|youtu)(\.\w{2,3})\/(?:watch\?v=)?(.*?)(?:\z|&)/', $value->storyUrl, $match);
        if (count($match[0])) {
            // $value->externalLink = $value->storyUrl;
            if ($match[2][0] == 'vimeo') {
                $value->type = 'vimeo';
                $value->storyUrl = 'http://player.vimeo.com/video/'.$match[4][0].'?title=0&amp;byline=0&amp;portrait=0';
            } else {
               $value->type = 'youtube';
               $value->storyUrl = 'http://www.youtube.com/embed/'.$match[4][0].'?rel=0';
            }
        } else {
            $value->type = '';
        }
    }

    private function prepareImage($value)
    {
        if ($value->storyImage && is_string($value->storyImage)) {
            $img = json_decode($value->storyImage);
            $value->storyImage = $img->id;
        }
    }

    private function preparePhotogallery($value)
    {
        $filter = $value->storyGallery;

        if (is_array($filter) && count($filter)) {
            $value->storyGallery = org_glizy_ObjectFactory::createModelIterator('org.glizycms.models.Media')
                        ->load('all')
                        ->where('media_type', 'IMAGE');

            foreach($filter as $v) {
                $value->storyGallery->where('media_category', '%"'.$v.'"%', 'LIKE');
            }

            $value->storyGalleryImagePosition = '50%';
            $value->storyGalleryImageCrop = 'false';
            $value->storyGalleryImagePan = 'false';
        } else {
            $value->storyGallery = array();
        }
    }


}

