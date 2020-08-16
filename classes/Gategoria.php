<?php


namespace PhotoShoot;

use WP_Query;


class Gategoria {
    public static function getGategorias($filtro = []) {
        $args = [
            'post_type' => 'categoria',
            'orderby' => 'date',
            'order' => 'DESC',
        ];
        $args = array_merge($args, $filtro);
        $query = new WP_Query($args);

        $posts = [];
        foreach ($query->posts as $id => $value) {
            $query->the_post();

            $posts[] = [
                'id' => get_the_ID(),
                'title' => get_the_title(),
                'galeria' => get_field('galeria'),
                'dadta' => get_the_date(),
                'capa' => get_the_post_thumbnail_url(),
            ];
        }

        return $posts;
    }

    public static function getLastpublish() {
        $args = [
            'post_type' => 'categoria',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => 3
        ];
        $query = new WP_Query($args);

        $posts = [];
        foreach ($query->posts as $id => $value) {
            $query->the_post();

            $posts[] = [
                'id' => get_the_ID(),
                'galeria' => get_field('galeria'),
            ];
        }
        $imgs = [];
        foreach ($posts as $i => $v) {
            foreach ($v['galeria'] as $j => $vv) {
                if ($j == 2)
                    break;
                $imgs[] = $vv['url'];
            }
        }
        return $imgs;
    }
}
