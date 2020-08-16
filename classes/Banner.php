<?php


namespace PhotoShoot;

use WP_Query;


class Banner {
    public static function getBanners() {
        $query = new WP_Query(['post_type' => 'banner']);

        $posts = [];
        foreach ($query->posts as $id => $value) {
            $query->the_post();

            $posts[] = [
                'title' => get_the_title(),
                'imagem' => get_field('imagem')
            ];
        }

        return $posts;
    }
}
