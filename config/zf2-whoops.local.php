<?php
return [
    'view_manager' => [
        'editor' => 'phpStorm',
        'local_path' => $_SERVER['DOCUMENT_ROOT'],
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'json_exceptions' => [
            'display' => true,
            'ajax_only' => true,
            'show_trace' => true
        ],
        'whoops_no_catch' => [
            'BjyAuthorize\Exception\UnAuthorizedException'
        ]
    ],
];