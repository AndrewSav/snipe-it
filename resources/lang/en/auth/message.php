<?php

return [

    'account_already_exists' => 'An account with the this email already exists.',
    'account_not_found'      => 'The username or password is incorrect.',
    'account_not_activated'  => 'This user account is not activated.',
    'throttle'               => 'Too many failed login attempts. Please try again in :minutes minutes.',

    'two_factor' => [
        'already_enrolled'      => 'Your device is already enrolled.',
        'success'               => 'You have successfully logged in.',
        'code_required'         => 'Two-factor code is required.',
        'invalid_code'          => 'Two-factor code is invalid.',
    ],

    'signin' => [
        'error'   => 'There was a problem while trying to log you in, please try again.',
        'success' => 'You have successfully logged in.',
    ],

    'logout' => [
        'error'   => 'There was a problem while trying to log you out, please try again.',
        'success' => 'You have successfully logged out.',
    ],


    'forgot-password' => [
        'error'   => 'There was a problem while trying to get a reset password code, please try again.',
        'success' => 'If that email address exists in our system, a password recovery email has been sent.',
    ],

    'forgot-password-confirm' => [
        'error'   => 'There was a problem while trying to reset your password, please try again.',
        'success' => 'Your password has been successfully reset.',
    ],

];
