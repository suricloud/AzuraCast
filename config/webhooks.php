<?php
/**
 * Webhook Configuration
 *
 * Web hooks should also be registered in:
 * @see \App\Provider\WebhookProvider
 */

use App\Webhook\Connector;

return [
    'webhooks' => [
        'local' => [
            'class' => Connector\Local::class,
        ],
        'generic' => [
            'class' => Connector\Generic::class,
            'name' => __('Generic Web Hook'),
            'description' => __('Automatically send a message to any URL when your station data changes.'),
        ],
        'tunein' => [
            'class' => Connector\TuneIn::class,
            'name' => __('TuneIn AIR'),
            'description' => __('Send song metadata changes to TuneIn.'),
        ],
        'discord' => [
            'class' => Connector\Discord::class,
            'name' => __('Discord Webhook'),
            'description' => __('Automatically send a customized message to your Discord server.'),
        ],
        'telegram' => [
            'class' => Connector\Telegram::class,
            'name' => __('Telegram Chat Message'),
            'description' => __('Use the Telegram Bot API to send a message to a channel.'),
        ],
        'twitter' => [
            'class' => Connector\Twitter::class,
            'name' => __('Twitter Post'),
            'description' => __('Automatically send a tweet.'),
        ],
    ],

    // The triggers that can be selected for a web hook to trigger.
    'triggers' => [
        'song_changed' => __('Any time the currently playing song changes'),
        'listener_gained' => __('Any time the listener count increases'),
        'listener_lost' => __('Any time the listener count decreases'),
        'live_connect' => __('Any time a live streamer/DJ connects to the stream'),
        'live_disconnect' => __('Any time a live streamer/DJ disconnects from the stream'),
    ],
];
