<?php
$link_text = get_post_meta( $post->ID, 'mv_slider_link_text', true );
$link_url  = get_post_meta( $post->ID, 'mv_slider_link_url', true );
?>
<table class="form-table mv-slider-metabox">
    <tr>
        <th>
            <label for="mv_slider_link_text">Link Text</label>
        </th>
        <td>
            <input
                type="text"
                name="mv_slider_link_text"
                id="mv_slider_link_text"
                class="regular-text link-text"
                value="<?php echo ( isset( $link_text ) ) ? esc_attr( $link_text ) : ''; ?>"
                required
            >
        </td>
    </tr>
    <tr>
        <th>
            <label for="mv_slider_link_url">Link URL</label>
        </th>
        <td>
            <input
                type="text"
                name="mv_slider_link_url"
                id="mv_slider_link_url"
                class="regular-text link-text"
                value="<?php echo ( isset( $link_url ) ) ? esc_attr( $link_url ) : ''; ?>"
                required
            >
        </td>
    </tr>
</table>
