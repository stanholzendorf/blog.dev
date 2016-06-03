<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function rolldice($guess = 1)
	{
		$roll = mt_rand(1, 6);
		$data = array(
			'guess' => $guess,
			'roll' => $roll
			);
		if ($guess > 6 || $guess < 1) {
			return "Your guess was invalid!" ;
		} else {

			return View::make('roll-dice')->with($data);
		}

	}

	public function randomGuess()
	{
		$guess = mt_rand(1, 6);
		return Redirect::Action('HomeController@rolldice', $guess);
	}

	public function homePage()
	{
		return View::make('homepage');
	}


	public function getContact()
    {
        $subject = Input::get('subject');
        $from = Input::get('from');
        $email = Input::get('email');
        $phonenumber = Input::get('phonenumber');
        $budget = Input::get('budget');
        $address = Input::get('address');
        $body = Input::get('body');


        $data = [
            'subject'=>$subject,
            'from'=>$from,
            'email'=>$email,
            'phonenumber'=>$phonenumber,
            'budget'=>$budget,
            'address'=>$address,
            'body'=>$body
        ];

        Mail::send('emails.contact', $data, function($message) use ($data)
        {
            $message->from($data['email'], $data['from']);
            $message->to('sholzendorf@mail.com', 'Stan Holzendorf')->subject($data['subject']);
        });
        Session::flash('successMessage', 'Your information was sent!');
        return Redirect::action('HomeController@homePage');
    }
}		
