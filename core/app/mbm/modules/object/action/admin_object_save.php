<?php

$form = new F\Form\ObjectForm();
if ($form->isValid('object')) {

    if (post_exists('use_photo') && post('use_photo') == 1) {
        //photo manage hiih.
        $file_path = DIR_WWW . DIR_MEDIA . 'photos' . DS;
        $new_filename = uniqid() . '.' . getFileExtension(files('photo', 'name'));

        //zuvshuursun image type mun bol
        if (in_array(exif_imagetype(files('photo', 'tmp_name')), array(
                    //http://www.php.net/exif_imagetype
                    'IMAGETYPE_GIF' => 1,
                    'IMAGETYPE_JPEG' => 2,
                    'IMAGETYPE_PNG' => 3
                ))) {

            //upload hiij bui zurag
            $photo = PHPImageWorkshop\ImageWorkshop::initFromPath(files('photo', 'tmp_name'));
            if ($photo->getWidth() > (int) CONTENT_PHOTO_MAX_WIDTH && (int) CONTENT_PHOTO_MAX_WIDTH > 0) {
                $new_with = (int) CONTENT_PHOTO_MAX_WIDTH;
            } else {
                $new_with = $photo->getWidth();
            }
            if ($photo->getHeight() > (int) CONTENT_PHOTO_MAX_HEIGHT && (int) CONTENT_PHOTO_MAX_HEIGHT > 0) {
                $new_height = (int) CONTENT_PHOTO_MAX_HEIGHT;
            } else {
                //urguniig tootsoolno.
                $new_height = (int) round(($photo->getHeight() * CONTENT_PHOTO_MAX_WIDTH) / ($photo->getWidth()));
            }

            $photo->resizeInPixel($new_with, $new_height, true);

            //stamp zurag
            $photo->save(DIR_WEB . $file_path, $new_filename, false, null, 95, false);
            if ((int) CONTENT_PHOTO_SAVE_ORIGINAL == 1) {
                $photo2 = PHPImageWorkshop\ImageWorkshop::initFromPath(files('photo', 'tmp_name'));
                $photo2->save(DIR_DATA . CONTENT_PHOTO_SAVE_ORIGINAL_PATH, $new_filename, false, null, 100, false);
            }
            $photo_path = '//' . DOMAIN . DS . $file_path . $new_filename;
        } else {
            set_flash(__('Invalid image type. Only JPG/GIF/PNG allowed.'), 'error');
        }
    } else {
        $photo_path = '';
    }


    //content nemeh
    //content left/right
    if (post('parent_id') == 0) {
        $lft = get_max_left('Content', post('parent_id')) + 2;
        $rgt = $lft + 1;
        $depth = 0;
        $parent_id = 0;
    } else {

        $parent_content = \Content::fetchById(post('parent_id'));
        $lft = ($parent_content->lft + 2);
        $rgt = ($parent_content->lft + 3);
        $depth = ($parent_content->depth + 1);
        $parent_id = $parent_content->id;
    }
    //$object_db = db_mapper($db, 'Content');
    $object_db = new \D\Mapper\ObjectMapper($db, new \D\Model\Collection\EntityCollection);
    $object = new D\Model\Object(
            array(
        'parent_id' => 0,
        'user_id' => get_logged_user_id(),
        'code' => post('code'),
        'photo' => $photo_path,
        'st' => post('st'),
        'is_featured' => post('is_featured'),
        'is_sale' => post('is_sale'),
        'name' => post('name'),
        'measure_value' => post('measure_value'),
        'measure_name' => post('measure_name'),
        'price_per_measure' => post('price_per_measure'),
        'price_sale' => post('price_sale'),
        'price_total' => post('price_total'),
        'currency_code' => post('currency_code'),
        'content_brief' => post('content_brief'),
        'content_body' => post('content_body'),
        'views' => 0,
        'hits' => 0,
        'date_created' => convert_date(date("Y-M-D H:i:s")),
        'date_publish' => post('date_publish')
            )
    );
    $last_insert_id = $object_db->save($object);

    //content category nemeh
    $c_category_db = db_unit($db, 'ObjectCategory');
    if (count(post('categories') > 0)) {
        foreach (post('categories') as $k => $v) {
            $c_category = new \D\Model\ObjectCategory(array(
                'content_id' => $last_insert_id,
                'category_id' => $v
            ));
            $c_category_db->registerNew($c_category);
            unset($c_category);
        }
    }
    $c_category_db->commit();

    set_flash(__('Object has been created'), 'success');
    $session->clearKey('content');

    header("Location: " . get_url('admin_object_list'));
} else {
    set_flash(__('Invalid form submition'), 'error');
}
header("Location: " . get_url('admin_object_new'));
