<?php

namespace Sijot\Traits;

/**
 * Class FlashMessage
 * @package Sijot\Traits
 */
trait FlashMessage
{
    /**
     * Set a flash message.
     *
     * @param  string $message The flash session message.
     * @param  string $class   The flash session class.
     * @return void
     */
    public function flashMessage($message, $class)
    {
        session()->flash('message', $message);
        session()->flash('class', 'alert alert-' . $class);
    }
}