<?php

namespace Config;

use CodeIgniter\CodeIgniter;

class Paths
{
    // Path to the system folder
    public string $systemDirectory = __DIR__ . '/../../vendor/codeigniter4/framework/system';

    // Path to the app folder
    public string $appDirectory = __DIR__ . '/..';

    // Path to the writable folder
    public string $writableDirectory = __DIR__ . '/../../writable';

    // Path to the tests folder (optional)
    public string $testsDirectory = __DIR__ . '/../../tests';

    // Path to the views folder (needed for your error)
    public string $viewDirectory = __DIR__ . '/../Views';
}
