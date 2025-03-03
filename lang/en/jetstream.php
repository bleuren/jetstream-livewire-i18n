<?php

return [
    // Team related
    'team' => [
        'create' => 'Create Team',
        'create_description' => 'Create a new team to collaborate with others.',
        'delete' => 'Delete Team',
        'delete_confirm' => 'Are you sure you want to delete this team?',
        'delete_description' => 'All resources and data within this team will be permanently deleted.',
        'update' => 'Update Team Information',
        'name' => 'Team Name',
        'owner' => 'Team Owner',
        'members' => 'Team Members',
        'add_member' => 'Add Team Member',
        'remove_member' => 'Remove Team Member',
        'leave' => 'Leave Team',
        'leave_confirm' => 'Are you sure you want to leave this team?',
        'settings' => 'Team Settings',
        'update_description' => 'Update your team\'s name and information.',
    ],

    // Profile related
    'profile' => [
        'title' => 'Profile',
        'update' => 'Update Profile',
        'photo' => 'Profile Photo',
        'new_password' => 'New Password',
        'current_password' => 'Current Password',
        'confirm_password' => 'Confirm Password',
        'saved' => 'Saved.',
        'information' => 'Profile Information',
        'information_description' => 'Update your account\'s profile information and email address.',
        'photo_description' => 'Update your profile photo.',
        'verify_email' => 'Verify Email',
        'unverified_email' => 'Your email address is unverified.',
        'verification_sent' => 'A new verification link has been sent to your email address.',
        'resend' => 'Resend Verification Email',
        'ensure_password' => 'Ensure your account is using a long, random password to stay secure.',
        'save_password' => 'Save Password',
        'saved_password' => 'Password saved.',
        'name' => 'Name',
        'email' => 'Email',
        'password' => 'Password',
        'browser_sessions' => 'Browser Sessions',
        'delete_account' => 'Delete Account',
        'delete_account_description' => 'Permanently delete your account.',
        'delete_account_warning' => 'Once your account is deleted, all of its resources and data will be permanently deleted.',
    ],

    // Security related
    'security' => [
        'two_factor' => [
            'title' => 'Two Factor Authentication',
            'enabled' => 'Two factor authentication is enabled',
            'not_enabled' => 'Two factor authentication is not enabled',
            'finish_enabling' => 'Finish enabling two factor authentication',
            'disable' => 'Disable two factor authentication',
            'confirm' => 'Confirm',
            'description' => 'Add additional security to your account using two factor authentication.',
            'enabled_description' => 'You have enabled two factor authentication.',
            'not_enabled_description' => 'You have not enabled two factor authentication.',
            'finish_enabling_description' => 'Finish enabling two factor authentication.',
            'qr_code_description' => 'Scan the following QR code using your phone\'s authenticator application:',
            'setup_key' => 'Setup Key',
            'confirm_password' => 'For your security, please confirm your password.',
            'recovery_codes' => 'Recovery Codes',
            'recovery_codes_description' => 'Store these recovery codes in a secure password manager.',
            'regenerate_recovery_codes' => 'Regenerate Recovery Codes',
            'show_recovery_codes' => 'Show Recovery Codes',
        ],
        'browser_sessions' => [
            'title' => 'Browser Sessions',
            'description' => 'Manage and log out your active sessions on other browsers and devices.',
            'logout_others' => 'Log Out Other Browser Sessions',
            'browser_sessions_description' => 'Manage and log out your active sessions on other browsers and devices.',
            'browser_sessions_info' => 'If necessary, you may log out of all of your other browser sessions across all of your devices. Some of your recent sessions are listed below:',
            'browser_sessions_last_active' => 'Last active',
            'browser_sessions_this_device' => 'This device',
            'browser_sessions_confirm' => 'Please enter your password to confirm you would like to log out of your other browser sessions across all of your devices.',
            'browser_sessions_password' => 'Password',
        ],
    ],

    // API related
    'api' => [
        'tokens' => [
            'title' => 'API Tokens',
            'create' => 'Create API Token',
            'update' => 'Update API Token',
            'delete' => 'Delete API Token',
            'description' => 'API tokens allow third-party services to authenticate with our application on your behalf.',
            'name' => 'Token Name',
            'permissions' => 'Permissions',
            'manage' => 'Manage API Tokens',
            'manage_description' => 'You may delete any of your existing tokens if they are no longer needed.',
            'last_used' => 'Last used',
            'token' => 'API Token',
            'token_copy_warning' => 'Please copy your new API token. For your security, it won\'t be shown again.',
            'delete_warning' => 'Are you sure you would like to delete this API token?',
        ],
    ],

    // Common buttons
    'button' => [
        'save' => 'Save',
        'cancel' => 'Cancel',
        'delete' => 'Delete',
        'create' => 'Create',
        'close' => 'Close',
        'remove' => 'Remove',
        'confirm' => 'Confirm',
        'done' => 'Done',
        'select_new' => 'Select A New Photo',
        'saved' => 'Saved',
        'enable' => 'Enable',
        'regenerate' => 'Regenerate',
        'show' => 'Show',
        'please_confirm' => 'Please Confirm',
        'logout' => 'Log Out',
        'created' => 'Created',
    ],

    // Error messages
    'error' => [
        'title' => 'Error Occurred',
        'whoops' => 'Whoops!',
        'try_again' => 'Please try again later.',
    ],

    // Team invitation related
    'invitation' => [
        'pending' => 'Pending Team Invitations',
        'description' => 'These people have been invited to your team and have been sent an invitation email. They may join the team by accepting the email invitation.',
        'cancel' => 'Cancel Invitation',
        'email' => [
            'greeting' => 'You have been invited to join the :team team!',
            'register_description' => 'If you do not have an account, you may create one by clicking the button below. After creating an account, you may click the invitation acceptance button in this email to accept the team invitation:',
            'create_account' => 'Create Account',
            'existing_account' => 'If you already have an account, you may accept this invitation by clicking the button below:',
            'body' => 'You may accept this invitation by clicking the button below:',
            'accept' => 'Accept Invitation',
            'ignore' => 'If you did not expect to receive an invitation to this team, you may discard this email.',
        ],
    ],

    // Role related
    'role' => [
        'title' => 'Manage Role',
        'description' => 'Manage team member roles and permissions.',
        'email' => 'Email',
        'provide_email' => 'Please provide the email address of the person you would like to add to this team.',
        'admin' => 'Administrator',
        'admin_description' => 'Administrator users can perform any action.',
        'editor' => 'Editor',
        'editor_description' => 'Editor users have the ability to read, create, and update.',
    ],

    // Member related
    'member' => [
        'all' => 'All Team Members',
        'description' => 'All of the people that are part of this team.',
        'manage_role' => 'Manage Role',
    ],

    // Navigation related
    'nav' => [
        'dashboard' => 'Dashboard',
        'manage_team' => 'Manage Team',
        'switch_teams' => 'Switch Teams',
        'manage_account' => 'Manage Account',
    ],

    // Welcome related
    'welcome' => [
        'title' => 'Welcome to Laravel Jetstream',
        'description' => 'Laravel Jetstream provides a beautiful, robust starting point for your next Laravel application. Laravel is designed to help you build your application using a development environment that is simple, powerful, and enjoyable.',
        'documentation' => 'Documentation',
        'documentation_description' => 'Laravel has wonderful documentation covering every aspect of the framework. Whether you\'re new to the framework or have previous experience, we recommend reading all of the documentation from beginning to end.',
        'screencast' => 'Screencasts',
        'screencast_description' => 'Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.',
        'explore' => 'Explore the documentation',
        'start_watching' => 'Start watching',
        'tailwind' => 'Tailwind',
        'tailwind_description' => 'Laravel Jetstream is built with Tailwind, an amazing utility first CSS framework that doesn\'t get in your way. You\'ll be amazed how easily you can build and maintain fresh, modern designs with this wonderful framework at your fingertips.',
        'authentication' => 'Authentication',
        'authentication_description' => 'Authentication and registration views are included with Laravel Jetstream, as well as support for user email verification and resetting forgotten passwords. So, you\'re free to get started with what matters most: building your application.',
    ],

    // Authentication related
    'auth' => [
        'name' => 'Name',
        'email' => 'Email',
        'password' => 'Password',
        'confirm_password' => 'Confirm Password',
        'remember_me' => 'Remember me',
        'forgot_password' => 'Forgot your password?',
        'login' => 'Log in',
        'register' => 'Register',
        'already_registered' => 'Already registered?',
        'agree_terms_and_policy' => 'I agree to the :terms and :policy',
        'forgot_password_description' => 'Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.',
        'email_password_reset_link' => 'Email Password Reset Link',
        'reset_password' => 'Reset Password',
        'verify_email_description' => 'Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.',
        'verification_link_sent' => 'A new verification link has been sent to your email address.',
        'resend_verification_email' => 'Resend Verification Email',
        'edit_profile' => 'Edit Profile',
        '2fa_confirm_description' => 'Please confirm access to your account by entering the authentication code provided by your authenticator application.',
        '2fa_recovery_description' => 'Please confirm access to your account by entering one of your emergency recovery codes.',
        '2fa_code' => 'Code',
        '2fa_recovery_code' => 'Recovery Code',
        '2fa_use_recovery_code' => 'Use a recovery code',
        '2fa_use_authentication_code' => 'Use an authentication code',
        'confirm_password_description' => 'For your security, please confirm your password to continue.',
        'confirm' => 'Confirm',
        'terms' => 'Terms',
        'policy' => 'Policy',
    ],
]; 