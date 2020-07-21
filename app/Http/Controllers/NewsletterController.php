<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Newsletter;
//use Spatie\Newsletter\NewsletterFacade as Newsletter;

class NewsletterController extends Controller
{
    public function create()
    {
        return view('newsletter');
    }

    public function store(Request $request)
    {
        if ( ! Newsletter::isSubscribed($request->email) )
        {
            Newsletter::subscribe($request->email);
            return back()->with('success', 'Подписка оформлена. Теперь Вы сможете получать наши обновления, акции и полезную информацию!');
        }
        return back()->with('failure', 'Подписка ранее уже была оформлена.');
    }
}