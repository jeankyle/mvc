<?php
/*
 * This file is part of the Abc package.
 *
 * This source code is for educational purposes only. 
 * It is not recommended using it in production as it is.
 */

declare(strict_types = 1);

namespace Abc\Base;

use Abc\ErrorHandler\ErrorHandler;
use Abc\Utility\Log;
use Exception;

class BaseController
{
    protected Object $templateEngine;
    protected ?object $model;

    public function __construct($model = null)
    {
        if ($model != null && $model != '') {
            $model_with_namespace = 'App\\Models\\' . ucfirst(strtolower($model)) . 'Model';
            $this->model = new $model_with_namespace;
        }

        $this->templateEngine = new BaseView();
    }

    public function view(string $template, array $context = [])
    {
        Log::write('Is the templating engine available?');
        $this->throwExceptionIfViewNull();
        Log::write('Yes it is. Adding template extension.');
        $template = $template . TEMPLATE_EXTENSION;

        Log::write('Rendering the template response');
        $this->templateEngine::render($template, $context);
    }

    public function template(string $template, array $context = [])
    {
        Log::write('Rendering a built-in template response');
        $this->templateEngine::template($template, $context);
    }

    private function throwExceptionIfViewNull(): void
    {
        if (null === $this->templateEngine) {
            ErrorHandler::exceptionHandler(new Exception('Nope. You can not use the render method if the built in template engine is not available'), CRITICAL_LOG);
        }
    }

    public function _permissionDenied($unauthorized_task = null)
    {
        if ($unauthorized_task != null && $unauthorized_task != '') {
            ErrorHandler::exceptionHandler(new Exception('No permission to access: ' . $unauthorized_task), EXCEPTION_LOG, 403);
        }
    }

    private function retrieveModuleName($module_class)
    {
        $temp_array = explode('\\', $module_class);
        //        print_r($temp_array);
        return $temp_array[1];
    }

    protected function paginate($total_records)
    {
        $records_per_page = 5;
        $total_pages = ceil($total_records / $records_per_page);

        $current_page = (isset($_GET) && !empty($_GET)) ? preg_replace("/[A-Za-z\/]/", '', array_keys($_GET)[0]) : 1;
        $current_page = (empty($current_page) || $current_page < 1) ? 1 : $current_page;
        $current_page = $current_page > $total_pages ? $total_pages : $current_page;

        $limit['from'] = ($current_page - 1) * $records_per_page;
        $limit['to'] = $records_per_page;

        $previous = ($current_page > 1) ? $current_page - 1 : 1;
        $next = ($current_page >= $total_pages) ? $total_pages : $current_page + 1;

        $previous_disabled = ($current_page == 1) ? ' disabled' : '';
        $next_disabled = ($current_page == $total_pages) ? ' disabled' : '';

        return [
            'current_page' => $current_page,
            'total_pages' => $total_pages,
            'previous' => $previous,
            'next' => $next,
            'previous_disabled' => $previous_disabled,
            'next_disabled' => $next_disabled,
            'limit' => $limit
        ];
    }
}
