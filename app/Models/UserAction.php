<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class UserAction extends Model
{
  protected $table = 'user_activations';

    protected function getToken()
    {
        return hash_hmac('sha256', Str::random(40), config('app.key'));
    }

    public function createActivation($user)
    {

        $activation = $this->getActivation($user);

        if (!$activation) {
            return $this->createToken($user);
        }
        return $this->regenerateToken($user);

    }

    private function regenerateToken($user)
    {

        $token = $this->getToken();
        UserAction::where('user_id', $user->id)->update([
            'activation_code' => $token,
            'created_at' => new Carbon()
        ]);
        return $token;
    }

    private function createToken($user)
    {
        $token = $this->getToken();
        UserAction::insert([
            'user_id' => $user->id,
            'activation_code' => $token,
            'created_at' => Carbon::now()
        ]);
        return $token;
    }

    public function getActivation($user)
    {
        return UserAction::where('user_id', $user->id)->first();
    }

    public function getActivationByToken($token)
    {
        return UserAction::where('token', $token)->first();
    }

    public function deleteActivation($token)
    {
        UserAction::where('token', $token)->delete();
    }
}
