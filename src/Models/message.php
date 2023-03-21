<?php
namespace Chat;

use Illuminate\Database\Eloquent\Model;
class Message extends Model
{
    protected $table = 'messages';
    protected $fillable = ['chat_id', 'author', 'text'];
}
?>