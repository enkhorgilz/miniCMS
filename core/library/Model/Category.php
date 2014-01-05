<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Description here
 *
 * @package    miniCMS
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id
 */
class Category extends D\Model\Category {

    public static function fetchAll($category_id = 0) {

        global $db;

        $mapper_db = db_unit($db, __CLASS__);

        $all_categories = $mapper_db->fetchAll(array(
            'category_id' => $category_id
                ), 'pos asc');

        return $all_categories;
    }

    public static function fetchToArray($category_id = 0) {

        $categories = self::fetchAll($category_id);

        $categories_json = serialize($categories);
        $categories_array = json_decode($categories_json);

        print_r($categories_array);
        return $categories_array;
    }

    /**
     * ID field eer songoh
     *
     * @param integer $id ID field iin utga
     *
     * @return object : Oldson object iig butsaana.
     */
    public static function getById($id = 0) {

        global $db;

        $mapper_db = db_unit($db, __CLASS__);

        $result = $mapper_db->fetchById($id);

        return $result;
    }

    /**
     * Ugugdsun field iin 1 utgiig butsaana.
     * @param string $field_name : Filter leh fieldiin ner
     * @param string $field_value : Filter hiih field iin utga
     * @param string $to_get_field : Butsaah field iin ner
     *
     * @return string $to_get_field iin utgiig butsaana
     */
    public static function getByField($field_name, $field_value, $to_get_field) {

    }

    /**
     * Sub category toi esehiig shalgana
     */
    public static function hasSubCategory($category_id = 0) {
        global $db;

        $mapper_db = db_unit($db, __CLASS__);

        if (count($mapper_db->fetchAll(array('category_id' => $category_id))) == 0) {

            return false;
        } else {

            return true;
        }
    }

}
