<?php

class RemindersController extends Controller {

	/**
	 * Display the password reminder view.
	 *
	 * @return Response
	 */
	public function getRemind()
	{
		return View::make('frontend.password.remind');
	}

	/**
	 * Handle a POST request to remind a user of their password.
	 *
	 * @return Response
	 */
	public function postRemind()
	{
		switch ($response = Password::remind(Input::only('email')))
		{
			case Password::INVALID_USER:
				return Redirect::back()->with('mensaje_error', 'El correo que escribiste para recuperar tu contraseña no se encuentra registrado en PulsoLaboral.com, por favor asegurate de escribirlo correctamente o registrate como nuevo usuario.');

			case Password::REMINDER_SENT:
				return Redirect::back()->with('mensaje_exito', 'Hemos enviado un mensaje a tu correo electronico, allí encontraras el link para obtener una nueva contraseña de acceso a tu cuenta personal');
		}
	}

	/**
	 * Display the password reset view for the given token.
	 *
	 * @param  string  $token
	 * @return Response
	 */
	public function getReset($token = null)
	{
		if (is_null($token)) App::abort(404);

		return View::make('frontend.password.reset')->with('token', $token);
	}

	/**
	 * Handle a POST request to reset a user's password.
	 *
	 * @return Response
	 */
	public function postReset()
	{
		$credentials = Input::only(
			'email', 'password', 'password_confirmation', 'token'
		);

		$response = Password::reset($credentials, function($user, $password)
		{
			$user->password = Hash::make($password);

			$user->save();
		});

		switch ($response)
		{
			case Password::INVALID_PASSWORD:
			return "pass invalido";
			case Password::INVALID_TOKEN:
			return "token invalido";
			case Password::INVALID_USER:
			return "user invalido";
				return Redirect::back()->with('error', Lang::get($response));

			case Password::PASSWORD_RESET:
				return "pass cambiado";
		}
	}

}
