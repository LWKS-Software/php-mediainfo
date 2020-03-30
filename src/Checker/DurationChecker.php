<?php

namespace Mhor\MediaInfo\Checker;

use Mhor\MediaInfo\Attribute\Duration;

class DurationChecker extends AbstractAttributeChecker
{
    /**
     * @param array $durations
     *
     * @return Duration
     */
    public function create($durations)
    {
        return new Duration($durations[0]);
    }

    /**
     * @return array
     */
    public function getMembersFields()
    {
        return [
            'duration',
            'delay_relative_to_video',
            'video0_delay',
            'delay',
        ];
    }
}
