<?php

namespace App;

trait SweetAlertToast
{
    public function dispatchSuccessToast($title, $timer = 3000, $position = 'top-end')
    {
        $this->dispatch('swal:toast', [
            'type' => 'success',
            'title' => $title,
            'timer' => $timer,
            'position' => $position,
        ]);
    }

    public function dispatchErrorToast($title, $timer = 3000, $position = 'top-end')
    {
        $this->dispatch('swal:toast', [
            'type' => 'error',
            'title' => $title,
            'timer' => $timer,
            'position' => $position,
        ]);
    }

    public function dispatchInfoToast($title, $timer = 3000, $position = 'top-end')
    {
        $this->dispatch('swal:toast', [
            'type' => 'info',
            'title' => $title,
            'timer' => $timer,
            'position' => $position,
        ]);
    }

    public function dispatchWarningToast($title, $timer = 3000, $position = 'top-end')
    {
        $this->dispatch('swal:toast', [
            'type' => 'warning',
            'title' => $title,
            'timer' => $timer,
            'position' => $position,
        ]);
    }
}
