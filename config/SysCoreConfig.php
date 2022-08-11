<?php
/*
 * This file is part of the Abc package.
 *
 * This source code is for educational purposes only. 
 * It is not recommended to use it in production as it is.
 */


const APP = [
    "app" => [
        "app_name" => "evo",
        "core_name" => "Abc",
        "app_version" => "1.0.0",
        "core_version" => "1.0.0",
        "app_email" => "simplygenius78@gmail.com",
        "app_author" => "John Andrew"
    ],
    "settings" => [
        "default_charset" => "UTF-8",
        "default_locale" => "en",
        "default_timezone" => "Africa/Dar_es_Salaam",
        "favicon" => "",
        "apple_icon" => "",
        "secret_key" => "",
        "googleAnalytics" => "UA-XXXXX-Y"
    ],
    "system" => [
        "use_session" => true,
        "logger" => [
            "use_logger" => true,
            "logger_handler" => "\\Abc\\Utility\\Log",
            "log_path" => "/storage/logs/"
        ],
    ],
    "debug_error" => [
        "mode" => "dev"
    ],
    "error_handler" => [
        "error" => "\\Abc\\ErrorHandler\\ErrorHandler::errorHandler",
        "exception" => "\\Abc\\ErrorHandler\\ErrorHandler::exceptionHandler",
    ]
];

const LOCALE = [
    "en" => [
        "framework_name" => "Abc",
        "last_login" => "Last Login",
        "failed_logins" => "Failed Logins",
        "data_unavailable" => "Data Unavailable",
        "not_enough_data" => "Not Enough Data",
        "history" => "History",
        "recent_activity" => "Recent Activity",
        "notes" => "Notes",
        "firstname" => "Firstname",
        "lastname" => "Lastname",
        "email" => "Email",
        "status" => "Constants",
        "created" => "Created",
        "account_still_pending" => "This account has been pending for more than 5 days",
        "resend_activation" => "Send reminder email!",
        "resend" => "Resend",
        "last_updated" => "Last Updated",
        "address_book" => "Address Book",
        "qualified_permission" => "Qualified Permissions",
        "permissions" => "Permissions",
        "permission_assigned" => "Permission Assigned",
        "assigned_to" => "Assigned To",
        "role" => "Role",
        "getting_started" => "Getting Started",
        "application" => "application",
        "whats_next" => "What's Next",
        "application_ready" => "Your application is now ready. You can start working on it.",
        "current_user" => "Current User",
        "server_information" => "Server Information",
        "login" => "Login",
        "sign_in" => "Sign In",
        "sign_out" => "Sign Out",
        "register" => "Register",
        "register_again" => "Register Again",
        "no_current_session" => "There are no current active session",
        "no_account" => "Don't have an account",
        "create_an_account" => "Create an Account",
        "already_register" => "Already register",
        "register_terms" => "By clicking Register, you accept our Terms of Use. Find out about our Privacy and Cookies Policy.",
        "forgotton_password" => "Forgotton your Password",
        "name" => "Name",
        "port" => "Port",
        "server_name" => "Server Name",
        "user_agent" => "User Agent",
        "server_software" => "Server Software",
        "script_name" => "Script Name",
        "php_version" => "PHP Version",
        "welcome" => "Welcome",
        "your_activated" => "You're Activated",
        "activation_failed" => "Activation Expired",
        "time_expired" => "Time Expired",
        "personal_details" => "Personal Details",
        "edit_name" => "Edit Name",
        "edit_email" => "Edit Email",
        "edit_password" => "Edit Password",
        "cancel" => "Cancel",
        "session_expired" => "Session Expired",
        "dashboard" => "Dashboard",
        "user_still_pending" => "users account still pending",
        "menu_items" => "Menu Items",
        "controller_name" => "Controller",
        "method_name" => "Method",
        "purge" => "Purge",
        "general" => "General",
        "backup" => "Backup",
        "update" => "Update",
        "tools" => "Tools",
        "active" => "Active",
        "account" => "Account",
        "member_since" => "Member Since",
        "delete_account" => "Delete this account",
        "hard_delete_excerpt" => "Please review account before deleting. As this action is not recoverable.",
        "gravatar" => "Gravatar",
        "password" => "Password",
        "activation_hash" => "Activation Hash",
        "last_5_users" => "Last 5 Users"
    ]
];