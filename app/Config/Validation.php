<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var list<string>
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------

    public $register = [
        'username' => 'required',
        'password' => 'required|min_length[6]|matches[password2]',
        'password2' => 'required|min_length[6]',
        'email'    => 'required|valid_email'
    ];

    public $register_errors = [
        'username' => [
            'required' => 'Username is required.'
        ],
        'password' => [
            'required'   => 'Password is required.',
            'min_length' => 'Your new password must contain at least 6 characters.',
            'matches'    => "Your passwords don't match."
        ],
        'password2' => [
            'required'   => 'Confirm Password is required.',
            'min_length' => 'Your confirm password must contain at least 6 characters.'
        ],
        'email' => [
            'required'    => 'Email is required.',
            'valid_email' => 'Email is not valid.'
        ]
    ];
}
