<?php


/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

/*
 * Authenticate the user's personal channel...
 */
Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('client-action.marketplex.aarombor', function ($user) {
    return $user;
    //(strtolower(config('app.vendor')) === $app_vendor) && (strtolower(config('app.name')) === $app_name);
});
