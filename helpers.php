<?php

if (!function_exists('flasher')) {
    /**
     * @param string $message
     * @param string $type
     * @param string $title
     *
     * @return \Flasher\Prime\Flasher
     */
    function flasher($message = null, $type = 'success', $title = '', array $options = array(), array $stamps = array())
    {
        if (null === $message && 0 === func_num_args()) {
            return app('flasher.factory');
        }

        return app('flasher.factory')->render($type, $message, $title, $options, $stamps);
    }
}
