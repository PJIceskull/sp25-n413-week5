<?php

function collinsblocks_init_blocks()
{
    register_block_type(__DIR__ . '/build/main-nav');
}
add_action('init', 'collinsblocks_init_blocks');
