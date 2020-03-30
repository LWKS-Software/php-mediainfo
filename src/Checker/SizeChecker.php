<?php

namespace Mhor\MediaInfo\Checker;

use Mhor\MediaInfo\Attribute\Size;

class SizeChecker extends AbstractAttributeChecker
{
    /**
     * @param array $sizes
     *
     * @return Size
     */
    public function create($sizes)
    {
        return new Size($sizes[0]);
    }

    /**
     * @return array
     */
    public function getMembersFields()
    {
        return [
            'file_size',
            'stream_size',
        ];
    }
}
