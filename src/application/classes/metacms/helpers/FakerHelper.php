<?php
class metacms_helpers_FakerHelper
{
    static public function populate($model, $fields)
    {
        $numFaker = __Config::get('dev.faker.count');
        $faker = Faker\Factory::create('it_IT');
        $contentProxy = org_glizy_objectFactory::createObject('org.glizycms.contents.models.proxy.ModuleContentProxy');
        $mediaProxy = org_glizy_objectFactory::createObject('org.glizycms.mediaArchive.models.proxy.MediaProxy');

        for($i=0; $i<$numFaker; $i++) {
            $data = new StdClass;
            $data->__model = $model;
            foreach ($fields as $k => $v) {
                switch ($v) {
                    case 'title':
                        $data->{$k} = $faker->sentence(4);
                        break;
                    case 'date':
                        $data->{$k} = $faker->date();
                        break;
                    case 'city':
                        $data->{$k} = $faker->city();
                        break;
                    case 'text':
                        $data->{$k} = $faker->realText(200);
                        break;
                    case 'longText':
                        $data->{$k} = '<p>'.nl2br($faker->realText(1000)).'</p>';
                        break;
                    case 'person':
                        $data->{$k} = $faker->name();
                        break;
                    case 'category-1':
                        $cat = explode(' ', $faker->bs);
                        $data->{$k} =$cat[0];
                        break;
                    case 'category-2':
                        $cat = explode(' ', $faker->bs);
                        $data->{$k} =$cat[1];
                        break;
                    case 'category-3':
                        $cat = explode(' ', $faker->bs);
                        $data->{$k} =$cat[2];
                        break;
                    case 'slug':
                        $data->{$k} = $faker->slug;
                        break;
                    case 'url':
                        $data->{$k} = $faker->url;
                        break;
                    case 'image':
                        $data->{$k} = self::addImage($mediaProxy, $faker->sentence(2), $faker->imageUrl($faker->numberBetween(200, 500),
                                                                                                        $faker->numberBetween(200, 500),
                                                                                                        'nature'));
                        break;
                    case 'images':
                        $data->{$k} = array('image_id' => self::addMediaArray($mediaProxy, $faker, 'nature'));
                        break;
                    case 'attach':
                        $data->{$k} = array('media_id' => self::addMediaArray($mediaProxy, $faker, 'sports'));
                        break;
                }

            }

            $contentProxy->saveContent($data);
        }
    }

    static private function addMediaArray($mediaProxy, $faker, $category)
    {
        $result = array();
        if ($faker->boolean(20)) {
            $numAttach = rand(1, 3);
            for($j=0; $j<$numAttach; $j++) {
                $result[] = self::addImage($mediaProxy, $faker->sentence(2), $faker->imageUrl(  $faker->numberBetween(200, 500),
                                                                                                $faker->numberBetween(200, 500),
                                                                                                $category));
            }
        }

        return $result;
    }

    static private function addImage($mediaProxy, $title, $src)
    {
        $dest = __Paths::get('CACHE').md5($src).'.jpg';
        copy($src, $dest);
        $media = new StdClass();
        $media->media_title = trim($title, '.');
        $media->__originalFileName = $title.'.jpg';
        $media->__filePath = $dest;
        $id = $mediaProxy->saveMedia($media, org_glizycms_mediaArchive_models_proxy_MediaProxy::COPY_TO_CMS);

        $jsonData = array(
                'id' => $id,
                'title' => $title,
                'src' => 'getImage.php?id='.$id.'&w=150&h=150&c=1&co=0&f=0&t=1',
            );

        return json_encode($jsonData);
   }
}

