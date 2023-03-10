<?php

namespace Theme\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon_Fields\Block;
use Carbon_Fields\Field;
use Themosis\Support\Facades\Action;

class GalleryBlock extends ServiceProvider
{
    public function register()
    {

        //Action::add('carbon_fields_register_fields', [$this, 'registerBlock']);
        register_block_type( get_stylesheet_directory(). DS. 'views' . DS . 'blocks'. DS. 'gallery');
    }
    public static function render($block) {
        $data = get_fields() ?? [];
        $data['block'] = $block;
        echo  view(
            'blocks.gallery.gallery',
            $data
        )->render();
    }

    public function registerBlock() {
        Block::make( __( 'My Shiny Gutenberg Block' ) )
            ->add_fields( array(
                Field::make( 'text', 'heading', __( 'Block Heading' ) ),
                Field::make( 'image', 'image', __( 'Block Image' ) ),
                Field::make( 'rich_text', 'content', __( 'Block Content' ) ),
            ) )->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
                ?>

                <div class="block">
                    <div class="block__heading">
                        <h1><?php echo esc_html( $fields['heading'] ); ?></h1>
                    </div><!-- /.block__heading -->

                    <div class="block__image">
                        <?php echo wp_get_attachment_image( $fields['image'], 'full' ); ?>
                    </div><!-- /.block__image -->

                    <div class="block__content">
                        <?php echo apply_filters( 'the_content', $fields['content'] ); ?>
                    </div><!-- /.block__content -->
                </div><!-- /.block -->

                <?php
            } );
    }
}
