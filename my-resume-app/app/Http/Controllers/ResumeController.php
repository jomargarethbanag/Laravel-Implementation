<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpQuery;

class ResumeController extends Controller
{
    public function showResume(Request $request)
    {
        // 1. Load the HTML file (using the correct path)
           $html = file_get_contents(base_path('public/resume.html'));

        // 2. Create a phpQuery document
        $document = phpQuery::newDocumentHTML($html);

        // 3. Extract Experience data
        $experiences = [];
        foreach ($document->find('.experience-list li') as $experience) {
            $experiences[] = [
                'title' => pq($experience)->find('h3')->text(),
                'company' => pq($experience)->find('p:first')->text(),
                'start_date' => pq($experience)->find('p:last')->text(),
            ];
        }

        // 4. Pass data to the view
        return view('resume.show', compact('experiences'));
    }
    if (file_exists(public_path('resume.html'))) {
        $html = file_get_contents(public_path('resume.html'));
        // ... rest of your code
    } else {
        // Handle the case where the file is not found
    }
}