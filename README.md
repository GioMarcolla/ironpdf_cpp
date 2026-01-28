# IronPDF for C++ webpage using CodeIgniter 4 

Built using:
- HTML 5
- Semantic Tags
- CSS 3
- Php 8.5
- CodeIgnitor 4

Tested using:
- Opera / Chrome / Safari / Firefox
- ResponsivelyApp

Tested for:
- Web Vitals
- SEO

## Installation & setup

Download and Install:
- Php 8.5 
- IDE (VSCode or PHP Storm recommended)
- Browser for testing (Min. Chrome and Firefox; Safari if available)
- ResposivelyApp for responsiveness testing (optional)
- Clone this repo

Open the cloned repo with your IDE.

Configure (Production): 
- .evn
`CI_ENVIRONMENT=production` and `app.baseURL=http://localhost:8080/`
- Constants `defined('CI_DEBUG') || define('CI_DEBUG', false);`

Configure (Development): 
- .evn
`CI_ENVIRONMENT=development` and `app.baseURL=http://localhost:8080/`
- Constants `defined('CI_DEBUG') || define('CI_DEBUG', true);`

Run using:
- Dev: `php spark serve`
- Prod: `php -S 0.0.0.0:8080 -t public`

# Project Structure

Every page has it's own controller matching in name to the page file inside `Views`:
- `Controllers/Home.php`
- `Views/home.php`

Single layout can be found at: `Views/Layout/mainLayout.php`

All components can be found at: `Views/components/`

Shared components go directly inside the components folder.

Page unique components and sub-components go inside folders name according to the page they belong to.

Each page and component may have it's own CSS file at: `public/css`

With component css going inside a componens folder and page css going inside a pages folder and so on. Every CSS file naming must match it's "target's" name:
- `app/Views/home.php`
- `public/css/pages/home.css`
- `app/Views/layouts/mainLayout.php`
- `public/css/layouts/mainLayout.php`

General or shared CSS live directly at the `css` folder.

The CSS of a page must contain all the component CSS.

The CSS of a layout must import it's theme and font CSS, or the general theme and font CSS.

The css of a page is passed to the Layout from the controller:
- `'pageCSS' => 'home.css'`

Other public assets are `images` and `fonts`

Mock data is stored at: `writable/mock/mock_db.json`

This data is loaded and passed to the page from the controller:
```php
    helper('filesystem');
    $json_path = WRITEPATH . 'mock/mock_db.json';

    if (file_exists($json_path)) {
        $json_string = file_get_contents($json_path);
        $jsonData = json_decode($json_string, true);
    } else {
        $jsonData = [];
    }

    return view('home', [
        'title' => 'Iron Software - Home',
        'description' => 'PDF library for C++ developers',
        'pageCSS' => 'home.css',
        'jsonData' => $jsonData
    ]);
```

No models were created since the loading of data is currently a mock JSON file.