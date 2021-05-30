<?php

/**
 * Mount the controller onto a mountpoint.
 */
return [
    "routes" => [
        [
            "info" => "Question controller.",
            "mount" => "forum/question",
            "handler" => "\Forum\Question\QuestionController",
        ],
    ]
];
