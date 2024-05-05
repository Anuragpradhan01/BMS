<?php 

if (!function_exists('success')) {
function success($message = '', $redirectTo = null)
{
    $session = session();
    $session->setFlashdata('flash_message', $message);

    if ($redirectTo !== null) {
        return redirect()->to(base_url($redirectTo));
    }

    return redirect()->back();
}
}

if (!function_exists('error')) {
function error($message = '', $redirectTo = null)
{
    $session = session();
    $session->setFlashdata('error_message', $message);

    if ($redirectTo !== null) {
        return redirect()->to($redirectTo);
    }

    return redirect()->back();
}
}