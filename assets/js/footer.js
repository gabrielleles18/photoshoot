import $ from 'jquery';
import feed_instagram from './templates/feed-instagram';

export default function () {
    const feadInstagram = () => {
        $.instagramFeed({
            'username': 'instagram',
            'container': "footer #feed-instagram",
            'display_profile': false,
            'display_biography': false,
            'display_gallery': true,
            'callback': null,
            'styling': true,
            'items': 6,
            'items_per_row': 6,
            'margin': 0,
            'lazy_load': true,
            'on_error': console.error
        });
    };

    const linkDefault = () => {
        $('a').click(function (e) {
            if ($(this).attr('href').indexOf('#') >= 0) {
                e.preventDefault();
            }
        });
    };
    linkDefault();
    feadInstagram();
}
