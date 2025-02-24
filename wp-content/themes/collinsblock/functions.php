<?php

function collinsblocks_init_blocks()
{
    register_block_type(__DIR__ . '/build/main-nav');
    register_block_type(__DIR__ . '/build/instructors-list');
    register_block_type(__DIR__ . '/build/lessons-list');
}
add_action('init', 'collinsblocks_init_blocks');
