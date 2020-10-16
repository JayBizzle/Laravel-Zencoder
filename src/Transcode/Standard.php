<?php

namespace Jaybizzle\Zencoder\Transcode;

class Standard
{
    public function settings($file, $meta = [])
    {
        return [
            'input' => null,
            'region' => 'australia-sydney',
            'pass_through' => [
                'job_type' => null,
                'job_id' => null,
            ],
            'notifications' => 'webhook/url',
            'outputs' => [
                [
                    'label' => 'web',
                    'quality' => 3,
                    'audio_quality' => 3,
                    'format' => 'mp4',
                    'size' => '1024x576',
                    'frame_rate' => 25,
                    'aspect_mode' => 'pad',
                    'url' => null,
                    'upscale' => true,
                    'thumbnails' => [
                        [
                            'label' => 'thumbs',
                            'times' => [2],
                            'base_url' => 'path/to/thubnails',
                            'size' => '1024x576',
                            'aspect_mode' => 'pad',
                            'prefix' => 'thumbnail',
                            'filename' => null,
                        ],
                    ],
                ],
            ],
        ];
    }
}
