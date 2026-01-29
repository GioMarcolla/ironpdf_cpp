<?php

namespace App\Controllers;

class Newsletter extends BaseController
{
    public function signup()
    {
        $email = $this->request->getPost('email');

        $path = WRITEPATH . 'mock/mock_db.json';

        $data = file_exists($path)
            ? json_decode(file_get_contents($path), true)
            : [];

        $data['beta_newsletter_emails'] ??= [];

        if (!in_array($email, $data['beta_newsletter_emails'])) {
            $data['beta_newsletter_emails'][] = $email;
        }

        file_put_contents(
            $path,
            json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
        );

        return redirect()->back();
    }
}
