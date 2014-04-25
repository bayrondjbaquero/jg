<?php namespace Autority\session;

use Cartalyst\Sentry\Sentry;

class SentrySession implements SessionInterface{

	protected $sentry;
	protected $throttleProvider;

	public function __construct(Sentry $sentry)
	{
		$this->sentry = $sentry;

		// Get the Throttle Provider
		$this->throttleProvider = $this->sentry->getThrottleProvider();

		// Enable the Throttling Feature
		$this->throttleProvider->enable();
	}

	public function store($data){
		$result = array();
		try
			{
			    // Check for 'rememberMe' in POST data
			    if (!array_key_exists('rememberMe', $data)) $data['rememberMe'] = 0;

			    //Check for suspension or banned status
				$user = $this->sentry->getUserProvider()->findByLogin(e($data['email']));
				$throttle = $this->throttleProvider->findByUserId($user->id);
			    $throttle->check();

			    // Set login credentials
			    $credentials = array(
			        'email'    => e($data['email']),
			        'password' => e($data['password'])
			    );

			    // Try to authenticate the user
			    $user = $this->sentry->authenticate($credentials, e($data['rememberMe']));

			    $result['success'] = true;
			    $result['sessionData']['user'] = $user;
			}
			catch (\Cartalyst\Sentry\Users\UserNotFoundException $e)
			{
			    // Sometimes a user is found, however hashed credentials do
			    // not match. Therefore a user technically doesn't exist
			    // by those credentials. Check the error message returned
			    // for more information.
			    $result['success'] = false;
			    $result['message'] = 'Usuario no encontrado';
			}
			catch (\Cartalyst\Sentry\Users\UserNotActivatedException $e)
			{
			    $result['success'] = false;
			    
			    $result['message'] = 'usuario no está activado';
			}

			// The following is only required if throttle is enabled
			catch (\Cartalyst\Sentry\Throttling\UserSuspendedException $e)
			{
			    $time = $throttle->getSuspensionTime();
			    $result['success'] = false;
			    $result['message'] = 'Usuario suspendido';
			}
			catch (\Cartalyst\Sentry\Throttling\UserBannedException $e)
			{
			    $result['success'] = false;
			    $result['message'] = 'Usuario baneado';
			}

			//Login was succesful.  
			return $result;
	}
}