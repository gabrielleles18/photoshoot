<?php


namespace PhotoShoot;

use WP_Query;


class Feedback {
    public static function getFeedback() {
        $query = new WP_Query(['post_type' => 'feedback']);

        $posts = [];
        foreach ($query->posts as $id => $value) {
            $query->the_post();

            $posts[] = [
                'nome' => get_the_title(),
                'depoimento' => get_field('depoimento'),
                'instagram' => get_field('instagram'),
                'foto' => get_the_post_thumbnail_url(),
            ];
        }

        return $posts;
    }
}
